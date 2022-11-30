<?php

include './functions.php';
// session_start();

// Checking the ID
if (!isset($_GET["id"])) {
  header("Location: ./index.php");
}

$conn = getDb();
$stat = $conn->prepare("SELECT id, name, price, image, `desc`, alt_text FROM product WHERE id=?");
$stat->bindParam(1, $_GET["id"], PDO::PARAM_INT);
$stat->execute();
$result = $stat->setFetchMode(PDO::FETCH_ASSOC);
$result = $stat->fetchAll();

// Checking if ID exists
if (count($result) == 0) {
  header("Location: ./index.php");
}
$the_product = $result[0];

?>

<!DOCTYPE html>
<html lang="en">

<body>
  <?php loadHeader(); ?>
  <main>
    <div class="container">
      <div class="item">
        <div id="container">
          <?php echo "<img class=\"product-img\" src=\"" . $the_product["image"] . "\" alt=\"" . $the_product["alt_text"] . "\">"; ?>
        </div>
        <div class="product">
          <?php echo "<h2>" . $the_product["name"] . "</h2>"; 
                echo "<p>" . $the_product["desc"] . "</p>"; 
                echo "<span>£" . $the_product["price"] . ".00</span>"; ?>
          <div class="product-buttons">
            <button type="submit" class="btn btn-warning my-3" name="add">Add to Basket <i class="fa fa-shopping-cart"></i></button>
            <button type="submit" class="btn btn-danger my-3" name="add"><i class="fa fa-heart-o"></i></button>
          </div>
          <form class="back-btn">
            <button type="button" class="btn btn-success my-3" onclick="history.back()">Back</button>
          </form>
        </div>
      </div>
    </div>
    <script src="js/main.js"></script>
  </main>
  <?php loadFooter(); ?>
</body>

</html>