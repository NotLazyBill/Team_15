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

        <div class="chains-men">
          <a href="mens.php?product=chains">
            <h3>Chains</h3>
          </a>
        </div>

        <div class="bracelets-men">
          <a href="mens.php?product=bracelets">
            <h3>Bracelets</h3>
          </a>
        </div>

        <div class="earrings-men">
          <a href="mens.php?product=earrings">
            <h3>Earrings</h3>
          </a>
        </div>

        <div class="rings-men">
          <a href="mens.php?product=rings">
            <h3>Rings</h3>
          </a>
        </div>

        <div class="watches-men">
          <a href="mens.php?product=watches">
            <h3>Watches</h3>
          </a>
        </div>

      </div>
    </div>
  <?php } ?>
  <!-- End of store categories (default) -->

  <!-- Back to other products button -->
  <?php if (isset($_GET['product'])) { ?>
    <div class="back"><a href="mens.php" class="previous">&laquo; Browse other products</a></div>
  <?php } ?>

  <!-- Display bracelets -->
  <?php if ($product == "bracelets") { 
    $result = getProductRows($conn, "men-bracelet");

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

  <!-- Display chains -->
  <?php if ($product == "chains") { 
    $result = getProductRows($conn, "men-chain");

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
  <!-- End of chains -->

  <!-- Display earrings -->
  <?php if ($product == "earrings") {
    $result = getProductRows($conn, "men-earrings");

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
    $result = getProductRows($conn, "men-ring");

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
      $result = getProductRows($conn, "men-watch");

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
