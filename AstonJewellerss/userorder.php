<?php
include './functions.php';

$conn = getDb();

// Check if user is logged in, else redirect to login
if (!isset($_SESSION['id'])) {
  header("Location: login.php");
}
$id = (int)$_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">

<body>
  <?php loadHeader(); ?>
  <main>
    <div class="basket-container">
      <div class="basket">
        <table class="table">
          <tr>
            <th scope="col">Order Number</th>
            <th scope="col">Image</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
          </tr>
          <?php
            $stat = $conn->prepare("SELECT * FROM order_details WHERE user_id=:id ORDER BY id desc");
            $stat->execute(['id' => $id]);
            $result = $stat->fetchAll(PDO::FETCH_ASSOC);

            foreach ($result as $product) {
              $stat = $conn->prepare("SELECT * FROM product WHERE id=:id");
              $stat->execute(['id' => $product['product_id']]);
              $resultx = $stat->fetchAll(PDO::FETCH_ASSOC);

              foreach ($resultx as $row) {
                echo "<tr>";
                echo "<td>" . $product["id"] ."</td>";
                echo "<td><img src=\"" . $row["image"] . "\" alt=\"" . $row["alt_text"] . "\"></td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>£" . $row["price"] . "</td>";
                echo "</tr>";
              }
            }
          ?>
        </table>
      </div>
    </div>
  </main>
  <?php loadFooter(); ?>
</body>

</html>