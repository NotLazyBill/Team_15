<?php

$conn = getDb();

$stat = $conn->prepare("SELECT * FROM order_details");
$stat->execute();
$result = $stat->fetchAll(PDO::FETCH_ASSOC);
$total_orders = $stat->rowCount();

$total_cost = $conn->prepare("SELECT SUM(total) AS value_sum FROM order_details");
$total_cost->execute();
$row = $total_cost->fetch(PDO::FETCH_ASSOC);

$username_stmt = $conn->prepare("SELECT username FROM users WHERE id=:id");
$product_stmt = $conn->prepare("SELECT name FROM product WHERE id=:id");

echo '

<h1>Orders</h1>
<p>View orders</p>

<div class="total-stats">
    <ul class="flex cards">
    <li>
        <h2>Total orders</h2>
        <h3 class="stats">';?> <?php echo $total_orders; echo '</h3>
    </li>
    <li>
        <h2>Total sales</h2>
        <h3 class="stats">';?> <?php echo "£". $row['value_sum']; echo '</h3>
    </li>
    </ul>
</div>

<div class="order-table">
    <ul class="flex cards">
    <li>
        <h2>Current orders</h2>
        <div id="table-wrapper">
            <div id="table-scroll">
                <table id="existing-products" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Product ID</th>
                        <th>Product name</th>
                        <th>Total (£)</th>
                    </tr>
                </thead>
                <tbody> '?>
                    <?php foreach ($result as $row) { 
                        $username_stmt->execute(["id" => $row["user_id"]]);
                        $username = $username_stmt->fetch(PDO::FETCH_ASSOC);

                        $product_stmt->execute(["id" => $row["product_id"]]);
                        $product_name = $product_stmt->fetch(PDO::FETCH_ASSOC);
                        ?>
                    <tr id="<?php echo $row["id"]; ?>">
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["user_id"]; ?></td>
                    <td><?php echo $username["username"] ?></td>
                    <td><?php echo $row["product_id"]; ?></td>
                    <td><?php echo $product_name["name"] ?></td>
                    <td><?php echo $row["total"]; ?></td>
                    </tr>
                    <?php } echo '
                </tbody>
            </table>
        </div>
    </div>
    </li>
    </ul>
</div>
'?>