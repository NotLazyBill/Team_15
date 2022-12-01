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
    <div class="small-container basket">

      <table class="table">
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Product</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
          <th scope="col"></th>
        </tr>

        <?php
        $stat = $conn->prepare("SELECT * FROM basket WHERE user_id=:id");
        $stat->execute(['id' => $id]);
        $result = $stat->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $product){
          $stat = $conn->prepare("SELECT * FROM product WHERE id=:id");
          $stat->execute(['id' => $product['product_id']]);
          $resultx = $stat->fetchAll(PDO::FETCH_ASSOC);
          
          foreach ($resultx as $row){
            echo "<tr>";
            echo "<td><img src=\"" . $row["image"] . "\" alt=\"" . $row["alt_text"] . "\"></td>";
            echo "<td>\"" . $row["name"] . "\"</td>";
            echo "<td><input type=\"number\" value=\"" . $product["quantity"] ."\"></td>";
            echo "<td>\"" . $row["price"] . "\"</td>";
            echo "<td><form action=\"basket.php?remove=" . $row["id"] . "\" method=\"post\"><button type=\"submit\" class=\"btn btn-danger my-3\">Remove</button></form></td>";
            echo "</tr>";
          }
        }

        if (isset($_POST["add"])){

          foreach ($result as $product) {
            
            $stat = $conn->prepare("SELECT price FROM product WHERE id=:id");
            $stat->execute(['id' => $product['product_id']]);
            $prod = $stat->fetch(PDO::FETCH_ASSOC);

            $stat = $conn->prepare("INSERT INTO order_details(user_id, product_id, total)
            VALUES(:user_id, :product_id, :total)");

            $stat->execute([
              ':user_id' => $id,
              ':product_id' => $product["product_id"],
              ':total' => $prod["price"],
            ]);
          }
          $delete = $conn->prepare("DELETE FROM basket WHERE user_id=:id");
          $delete->execute(['id' => $id]);
          header("Location: index.php");

        }

        if (isset($_GET["remove"])) {
          echo $_GET["remove"];
          $delete = $conn->prepare("DELETE FROM basket WHERE product_id=:id");
          $delete->execute(['id' => $_GET["remove"]]);
          header("Location: basket.php");
        }

        ?>


      </table>

      <div class="total-price">

        <table>
          <tr>
            <td>Total</td>
            <td>Price</td>
          </tr>
        </table>

      </div>
      <div class="order-btn">
        <form action="basket.php" method="post">
          <button type="submit" class="btn btn-success my-3" name="add">Place Order</button>
        </form>
      </div>
    </div>

  </main>
  <?php loadFooter(); ?>
</body>

</html>