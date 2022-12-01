<?php
include './functions.php';

$conn = getDb();

$product = "";
if (isset($_GET['product'])) {
  $product = $_GET['product'];
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
  <?php loadHeader(); ?>
  <div class="c">
    <main>
  <!-- Show store categories when no product is selected (default) -->
  <?php if (!isset($_GET['product'])) { ?>
    <div class="wrapper">
      <div class="image-panel">

        <div class="bracelets">
          <a href="shop.php?product=bracelets">
            <h3>Bracelets</h3>
          </a>
        </div>

        <div class="necklaces">
          <a href="shop.php?product=necklaces">
            <h3>Necklaces</h3>
          </a>
        </div>

        <div class="earrings">
          <a href="shop.php?product=earrings">
            <h3>Earrings</h3>
          </a>
        </div>

        <div class="rings">
          <a href="shop.php?product=rings">
            <h3>Rings</h3>
          </a>
        </div>

        <div class="watches">
          <a href="shop.php?product=watches">
            <h3>Watches</h3>
          </a>
        </div>

      </div>
    </div>
  <?php } ?>
  <!-- End of store categories (default) -->

  <!-- Back to other products button -->
  <?php if (isset($_GET['product'])) { ?>
    <div class="back"><a href="shop.php" class="previous">&laquo; Browse other products</a></div>
  <?php } ?>

  <!-- Display bracelets -->
  <?php if ($product == "bracelets") {
    $result = getProductRows($conn, "women-bracelet");

    echo "<div class=\"gallery\">";

    foreach($result as $row) {
      echo "<div class=\"content\">";
      echo "<div class=\"zoom\">";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><img src=\"" . $row["image"] . "\" alt=\"" . $row["alt_text"] . "\"></a>";
      echo "</div>";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><h5>" . $row["name"] . "</h5></a>";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
      echo "<h6>£" . $row["price"] . "</h6>";
      echo "</div>";
    }
    echo "</div>";
  } ?>
  <!-- End of bracelets -->

  <!-- Display necklaces -->
  <?php if ($product == "necklaces") {
    $result = getProductRows($conn, "women-necklace");

    echo "<div class=\"gallery\">";

    foreach($result as $row) {
      echo "<div class=\"content\">";
      echo "<div class=\"zoom\">";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><img src=\"" . $row["image"] . "\" alt=\"" . $row["alt_text"] . "\"></a>";
      echo "</div>";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><h5>" . $row["name"] . "</h5></a>";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
      echo "<h6>£" . $row["price"] . "</h6>";
      echo "</div>";
    }
    echo "</div>";
  } ?>
  <!-- End of necklaces -->

  <!-- Display earrings -->
  <?php if ($product == "earrings") {
    $result = getProductRows($conn, "women-earrings");

    echo "<div class=\"gallery\">";

    foreach($result as $row) {
      echo "<div class=\"content\">";
      echo "<div class=\"zoom\">";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><img src=\"" . $row["image"] . "\" alt=\"" . $row["alt_text"] . "\"></a>";
      echo "</div>";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><h5>" . $row["name"] . "</h5></a>";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
      echo "<h6>£" . $row["price"] . "</h6>";
      echo "</div>";
    }
    echo "</div>";
  } ?>
  <!-- End of earrings -->

  <!-- Display rings -->
  <?php if ($product == "rings") {
    $result = getProductRows($conn, "women-ring");

    echo "<div class=\"gallery\">";

    foreach($result as $row) {
      echo "<div class=\"content\">";
      echo "<div class=\"zoom\">";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><img src=\"" . $row["image"] . "\" alt=\"" . $row["alt_text"] . "\"></a>";
      echo "</div>";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><h5>" . $row["name"] . "</h5></a>";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
      echo "<h6>£" . $row["price"] . "</h6>";
      echo "</div>";
    }
    echo "</div>";
  } ?>
  <!-- End of rings -->

  <!-- Display watches -->
  <?php if ($product == "watches") {
    $result = getProductRows($conn, "women-watch");

    echo "<div class=\"gallery\">";

    foreach($result as $row) {
      echo "<div class=\"content\">";
      echo "<div class=\"zoom\">";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><img src=\"" . $row["image"] . "\" alt=\"" . $row["alt_text"] . "\"></a>";
      echo "</div>";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><h5>" . $row["name"] . "</h5></a>";
      echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
      echo "<h6>£" . $row["price"] . "</h6>";
      echo "</div>";
    } 
    echo "</div>";
  } ?>
  <!-- End of watches -->
</main>
    <?php loadFooter(); ?>
</body>
</html>
