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
  <div class="c">
    <main>

      <?php
      $stat = $conn->prepare("SELECT * FROM wishlist WHERE user_id=:id");
      $stat->execute(['id' => $id]);
      $result = $stat->fetchAll(PDO::FETCH_ASSOC);

      foreach ($result as $product) {
        $stat = $conn->prepare("SELECT * FROM product WHERE id=:id");
        $stat->execute(['id' => $product['product_id']]);
        $resultx = $stat->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultx as $row) {
          echo "<div class=\"container mt-3 mx-auto\">";
          echo "<div class=\"row justify-content-center\">";
          echo "<div class=\"col-md-10\">";
          echo "<div class=\"card shadow\">";
          echo "<div class=\"card-horizontal\">";
          echo "<div class=\"image\">";
          echo "<img src=" . $row["image"] ." alt=" . $row["alt_text"] .">";
          echo "</div>";
          echo "<div class=\"card-body\">";
          echo "<h3 class=\"card-title\">" . $row["name"] . "</h3>";
          echo "<p class=\"card-text\">" . $row["desc"] ."</p>";
          echo "<span class=\"price\">£" . $row["price"] . "</span> <br>";
          echo "<div class=\"buttons\">";
          echo "<form method=\"post\" action=\"wishlist.php?add=" . $row["id"] . "\"> <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Basket <i class=\"fa fa-shopping-cart\"></i></button></form>";
          echo "<form method=\"post\" action=\"wishlist.php?remove=" . $product["id"] . "\"> <button type=\"submit\" class=\"btn btn-danger my-3\" name=\"remove\"><i class=\"fa fa-heart-o\"></i></button></form>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
        }
      }

      if (isset($_GET["add"])) {
        $stat = $conn->prepare("INSERT INTO basket(user_id, product_id, quantity)
              VALUES(:user_id, :product_id, :total)");

        $stat->execute([
          ':user_id' => $_SESSION["id"],
          ':product_id' => $_GET["add"],
          ':total' => 1,
        ]);

        try {
          header('Location: wishlist.php');
          } catch (PDOexception $ex) {
          }
      }

      if (isset($_GET["remove"])) {
        $delete = $conn->prepare("DELETE FROM wishlist WHERE id=:id");
        $delete->execute([
          'id' => $_GET["remove"]
        ]);

        try {
          header('Location: wishlist.php');
        } catch (PDOexception $ex) {
        }
      }

      ?>
    </main>
    <?php loadFooter(); ?>
</body>
</html>