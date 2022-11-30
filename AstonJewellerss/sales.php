<?php
include './functions.php';

// Gets all Products
$conn = getDb();

$stat = $conn->prepare("SELECT id, name, price, image, `desc`, alt_text, `type` FROM product WHERE stock > 0 AND sale=1");
$stat->execute();
$result = $stat->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
<?php loadHeader(); ?>
  <main>
    <h2>Check out our sale today!</h2>

    <body>
      <div class="gallery">
        <?php
            // Displays all products
            // NOTE: ADD PRODUCTS TO THE DB FIRST
            foreach($result as $row) {
                echo "<div class=\"content\">";
                echo "<div class=\"zoom\">";
                echo "<a href= view_product.php><img src=\"" . $row["image"] . "\" alt=\"" . $row["alt_text"] . "\"></a>";
                echo "</div>";
                echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><h5>" . $row["name"] . "</h5></a>";
                echo "<a href= \"view_product.php?id=" . $row["id"] . "\"><p>" . $row["type"] . "</p></a>";
                echo "<h6>£" . $row["price"] . ".00</h6>";
                echo "<button class=\"btn my-3\">Add to Basket <i class=\"fa fa-shopping-cart\"></i></button>";
                echo "</div>";
            }
        ?>

  </main>
  <?php loadFooter(); ?>
</body>