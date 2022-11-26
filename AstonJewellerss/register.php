<?php
include './functions.php';
$conn = getDb();



if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["Uname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["cpassword"])) {
  require_once('secrets.php');
  
  // First see if all the fields got filled out

  $success = true;
  if (strlen($_POST["fname"]) == 0) {
    $success = false;
  }
  if (strlen($_POST["lname"]) == 0) {
    $success = false;
  }
  if (strlen($_POST["Uname"]) == 0) {
    $success = false;
  }
  if (strlen($_POST["email"]) == 0) {
    $success = false;
  }
  if (strlen($_POST["password"]) == 0) {
    $success = false;
  }
  if (!strlen($_POST["cpassword"])) {
    $success = false;
  }


  if (!$success) {
    echo "<div class='alert alert-danger'><h1>Error</h1><p>All fields must be filled out</p></h1></div>";
    die();
  }

  // Now see if passwords match
  if ($_POST["password"] != $_POST["cpassword"]) {
    echo "Passwords must match!";
  } 
  else{


    // $email = isset($_POST['email']) ? $_POST['email'] : false;
    // $password = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : false;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['Uname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = (date('Y-m-d'));

    // Inserts the Registered User information to the database
    try {
      $stat = $conn->prepare("INSERT INTO users(fname, lname, username, email, password, join_date)
    VALUES(:fname, :lname, :Uname, :email, :password, :date)");
      $stat->bindParam(':fname', $fname, PDO::PARAM_STR, 20);
      $stat->bindParam(':lname', $lname, PDO::PARAM_STR, 20);
      $stat->bindParam(':Uname', $username, PDO::PARAM_STR, 20);
      $stat->bindParam(':email', $email, PDO::PARAM_STR, 64);
      // Hashes Password before joining the database
      $phash = password_hash($password, PASSWORD_DEFAULT);
      $stat->bindParam(':password', $phash, PDO::PARAM_STR);
      $stat->bindParam(':date', $date, PDO::PARAM_STR);
      $stat->execute();

      echo "Congratulations! You are now registered.";
    } catch (PDOexception $ex) {
      echo "Sorry, a database error occurred! <br>";
      echo "Error details: <em>" . $ex->getMessage() . "</em>";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<?php loadHeader(); ?>

<body>
  <div class="register">
    <h2>Register Now!</h2> <br>
    <form method="post" action="register.php">
      <input type="text" name="fname" placeholder="First Name" required /><br><br>
      <input type="text" name="lname" placeholder="Last Name" required /><br><br>
      <input type="text" name="Uname" placeholder="Username" required /><br><br>
      <input type="text" name="email" placeholder="Email" required /> <br><br>
      <input type="password" name="password" placeholder="Password" required /> <br><br>
      <input type="password" name="cpassword" placeholder="Check Password" required /> <br><br>

      <input type="submit" value="Register" />
      <input type="reset" value="Clear" />
      <!-- <input type="hidden" name="submitted" value="true" /> -->
    </form>
    <br>
    <p> Already a user? <a href="login.php" class="btn btn-outline-dark">Log in</a> </p>
  </div>
</body>
<?php loadFooter(); ?>

</html>