<?php
include './functions.php';
session_start();

// Gets all Products
$conn = getDb();
$stmt = $conn->prepare("SELECT id, name, price, image, `desc`, alt_text FROM product WHERE stock > 0");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$result = $stmt->fetchAll();
?>

<?php loadHeader(); ?>
<body>
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
                echo "<img src=\"" . $row["image"] . "\" alt=\"" . $row["alt_text"] . "\">";
                echo "</div>";
                echo "<h3>" . $row["name"] . "</h3>";
                echo "<p>" . $row["desc"] . "</p>";
                echo "<h6>£" . $row["price"] . "</h6>";
                echo "<button class=\"buy-1\">Add to Basket</button>";
                echo "</div>";
            }
        ?>

  </main>
  <?php loadFooter(); ?>
</body>