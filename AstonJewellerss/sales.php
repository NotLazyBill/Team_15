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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Aston Jewellers</title>
  <link rel="icon" href="images/favicon.ico?v=2" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
  <script src="https://kit.fontawesome.com/c54d8b2ca0.js" crossorigin="anonymous"></script>
  <script defer src="js/main.js"></script>
</head>

<body>
  <header id="main-header">
    <div class="topnav" id="nav">
      <div class="container-fluid">
        <div>
          <a href="#"><i class="fa fa-search"></i> Search</a>
        </div>
        <div>
          <h1>Aston Jewellers</h1>
          <p>Selling high-quality affordable jewellery</p>
        </div>
        <div class="topnav-right">
          <a href="login.php"><i class="fas fa-user-circle"></i> Log In</a>

        </div>
      </div>
      <nav>
        <div class="topnav-right">
          <a href="wishlist.php"><i class="fa fa-heart-o"></i></a>
          <a href="basket.php"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div id="topnav-centered">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="#">Men's</a></li>
            <li><a href="sales.php">Sale</a></li>
            <li><a href="about-us.php">About Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

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
                echo "<a href= view_product.php><h3>" . $row["name"] . "</h3></a>";
                echo "<a href= view_product.php><p>" . $row["desc"] . "</p></a>";
                echo "<h6>£" . $row["price"] . ".00</h6>";
                echo "<button class=\"buy-1\">Add to Basket</button>";
                echo "</div>";
            }
        ?>
  </main>
</body>

</html>

<?php
include('footer.php');
?>