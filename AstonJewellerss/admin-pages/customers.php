<?php
$conn = getDb();

error_reporting(E_ALL ^ E_WARNING); 

// Get values for editing products table
$stat = $conn->prepare("SELECT id, username, admin, email, fname, lname FROM users");
$stat->execute();
$result = $stat->fetchAll(PDO::FETCH_ASSOC);

if (!isset($_GET['edit'])) {
    if (isset($_POST['submit-user-form'])) {

        $is_admin = (isset($_POST['admin-chk']) ? 1 : 0);
        $phash = password_hash($_POST['pass'], PASSWORD_DEFAULT);

        $stat = $conn->prepare("INSERT INTO users(username, admin, email, password, join_date, fname, lname)
        VALUES(:username, :admin, :email, :password, :join_date, :fname, :lname)");

        $stat->execute([
            ':username' => $_POST['username'],
            ':admin' => $is_admin,
            ':email' => $_POST['email'],
            ':password' => $phash,
            ':join_date' => date('Y-m-d'),
            ':fname' => $_POST['fname'],
            ':lname' => $_POST['lname'],
        ]);
    }
} elseif (isset($_GET['edit'])) {
    if (isset($_POST['submit-user-form'])) {

        $is_admin = (isset($_POST['admin-chk']) ? 1 : 0);
        $stat = $conn->prepare("UPDATE users SET username=:username, fname=:fname, lname=:lname, email=:email, admin=:admin WHERE id=:id");

        $stat->execute([
            ':username' => $_POST['username'],
            ':admin' => $is_admin,
            ':email' => $_POST['email'],
            ':fname' => $_POST['fname'],
            ':lname' => $_POST['lname'],
            ':id' => $_GET['edit'],
        ]);

    }

    elseif (isset($_POST['edit-user-form'])) {
        $address = $conn->prepare("UPDATE user_address SET address_line1=:add1, address_line2=:add2, city=:city, postcode=:postcode, mobile=:mobile WHERE user_id=:id");

        $address->execute([
            ':add1' => $_POST['add1'],
            ':add2' => $_POST['add2'],
            ':city' => $_POST['city'],
            ':postcode' => $_POST['postcode'],
            ':mobile' => $_POST['mobile'],
            ':id' => $_GET['edit']
        ]);
    }
} 

echo '
<h1>Customers</h1>
<p>View and manage customers</p>';

if (isset($_GET['view'])) { 
    $add = $conn->prepare("SELECT * FROM user_address WHERE user_id=:id");
    $add->execute(['id' => $_GET['view']]);
    $addresult = $add->fetch(PDO::FETCH_ASSOC);

    echo "Address: ";
    echo $addresult['address_line1'] . ", ";
    echo $addresult['address_line2'] . ", ";
    echo $addresult['city'] . ", ";
    echo $addresult['postcode'] . ", ";
    echo $addresult['mobile'];
} 

if (!isset($_GET['edit'])) {
echo '
<div class="add-customer">
    <ul class="flex cards">
        <li>
            <h2>Add user</h2>
            <form class="add-product-form" action="admin.php?page=customers" method="post" enctype="multipart/form-data">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
                <label for="fname">First name:</label>
                <input type="text" name="fname" id="fname" required>
                <label for="lname">Last name:</label>
                <input type="text" name="lname" id="lname" required>
                <label for="email" id="email">Email:</label>
                <input type="email" name="email" id="email" required>
                <label for="pass" id="pass">Password:</label>
                <input type="password" name="pass" id="pass" required>

                <label for="admin" id="admin">Make admin?</label>
                <input type="checkbox" id="admin-chk" name="admin-chk" value="admin">

                <button id="submit-user-form" name="submit-user-form">Add user</button>
            </form>
        </li>
    </ul>
</div>
<div class="customer-table">
    <ul class="flex cards">
    <li>
        <h2>Users</h2>
        <div id="table-wrapper">
            <div id="table-scroll">
                <table id="existing-products" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Admin?</th>
                        <th>Shipping info</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody> '?>
                    <?php foreach ($result as $row) { ?>
                    <tr id="<?php echo $row["id"]; ?>">
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["fname"]; ?></td>
                    <td><?php echo $row["lname"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["admin"]; ?></td>
                    <td><button id="view" onclick="location.href='admin.php?page=customers&view=<?php echo $row["id"];?>'" type="button">View</button></td>
                    <td><button id="edit" onclick="location.href='admin.php?page=customers&edit=<?php echo $row["id"];?>'" type="button">Edit</button></td>
                    </tr>
                    <?php } echo '
                </tbody>
            </table>
        </div>
    </div>
    </li>
    </ul>
</div>
'; } elseif (isset($_GET['edit'])) { 

    $user = $conn->prepare("SELECT id, username, admin, email, fname, lname FROM users WHERE id=:id");
    $user->execute(['id' => $_GET['edit']]);
    $userresult = $user->fetch(PDO::FETCH_ASSOC);

    $add = $conn->prepare("SELECT * FROM user_address WHERE user_id=:id");
    $add->execute(['id' => $_GET['edit']]);
    $addresult = $add->fetch(PDO::FETCH_ASSOC);

    echo 
    '
    <ul class="flex cards">
    <li>
        <h2>Edit user</h2>
        <form class="edit-product-form" action="#" method="post" enctype="multipart/form-data">';
            echo "
             <label for=\"username\">Username:</label>
             <input type=\"text\" value=\"" . $userresult["username"] ."\" name=\"username\" id=\"username\" required>
             <label for=\"fname\">First name:</label>
             <input type=\"text\" value=\"" . $userresult["fname"] ."\" name=\"fname\" id=\"fname\" required>
             <label for=\"lname\">Last name:</label>
             <input type=\"text\" value=\"" . $userresult["lname"] ."\" name=\"lname\" id=\"lname\" required>
             <label for=\"email\" id=\"email\">Email:</label>
             <input type=\"text\" value=\"" . $userresult["email"] ."\" name=\"email\" id=\"email\" required>

             <label for=\"admin\" id=\"admin\" style=\"grid-row: 3\">Make admin?</label>
             <input type=\"checkbox\" id=\"admin-chk\" name=\"admin-chk\" value=\"admin\" style=\"grid-row: 3\">
 
             <button id=\"submit-user-form\" name=\"submit-user-form\" style=\"grid-row: 4\">Edit user</button>
       </form>
     </li>
     </ul>
     <ul class=\"flex cards\">
     <li>
     <h2>Edit address</h2>
     <form class=\"edit-product-form\" action=\"#\" method=\"post\" enctype=\"multipart/form-data\">
          <label for=\"add1\">Address line 1:</label>
          <input type=\"text\" value=\"" . $addresult["address_line1"] ."\" name=\"add1\" id=\"add1\" required>
          <label for=\"fname\">Address line 2:</label>
          <input type=\"text\" value=\"" . $addresult["address_line2"] ."\" name=\"add2\" id=\"add2\" required>
          <label for=\"city\">City:</label>
          <input type=\"text\" value=\"" . $addresult["city"] ."\" name=\"city\" id=\"city\" required>
          <label for=\"postcode\" id=\"postcode\">Postcode:</label>
          <input type=\"text\" value=\"" . $addresult["postcode"] ."\" name=\"postcode\" id=\"postcode\" required>
          <label for=\"mobile\" id=\"mobile\">Mobile:</label>
          <input type=\"text\" value=\"" . $addresult["mobile"] ."\" name=\"mobile\" id=\"mobile\" required>

          <button id=\"edit-user-form\" name=\"edit-user-form\" style=\"grid-row: 5; width: 100px;\">Edit address</button>
    </form>
    </li>
    </ul>
"; } ?>

