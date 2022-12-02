<?php
include './secrets.php';

session_start();

function getDb()
{
  // This connects to the Database using the hidden credentials
  global $db_host, $db_db, $db_user, $db_pass;
  $conn = new PDO("mysql:host=$db_host;dbname=$db_db", $db_user, $db_pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $conn;
}

function getProductRows($conn, $type)
{
  $stat = $conn->prepare("SELECT id, name, price, image, `desc`, alt_text, `type` FROM product WHERE stock > 0 AND type=:type");
  $stat->execute(['type' => $type]);
  return $stat->fetchAll(PDO::FETCH_ASSOC);
}

function loadFooter()
{
  // Loads the Footer 
  echo  "<footer>";
  echo  "<div class=\"footer\">";
  echo  "&copy <?= date(\"Y\") ?> Aston Jewellers LtD ";
  echo  "United Kingdom | GBP (£)";
  echo  "</div>";
  echo  "</footer>";
}

function loadHeader()
{
  // Loads the Header
?>

  <head>
    <meta charset="utf-8" />
    <title>Aston Jewellers</title>
    <link rel="icon" href="images/favicon.ico?v=2" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/shop.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/c54d8b2ca0.js" crossorigin="anonymous"></script>
    <script defer src="js/main.js"></script>
  </head>

  <header id="main-header">
    <div class="topnav" id="nav">
      <div class="container-fluid">
        <div>
          <a href="search.php"><i class="fa fa-search"></i> Search</a>
          <?php if (isset($_SESSION['admin'])) { ?>
            <a href="admin.php"><i class="fa-solid fa-user"></i> Admin</a>
          <?php } ?>
        </div>
         <div>
          <div class="image img">
          <img src="images/favicon.ico" alt="Site logo">
          </div>
          <h1>Aston Jewellers </h1>
          <p>Selling high-quality affordable jewellery</p>
        </div>
        <div class="topnav-right">
          <?php if (isset($_SESSION['id'])) { ?>
            <a href="login.php"><i class="fas fa-user-circle"></i><?php echo " " . $_SESSION['fname'] . " (Logout)" ?></a>
          <?php } else { ?>
            <a href="login.php"><i class="fas fa-user-circle"></i> Log In</a>
          <?php } ?>
        </div>
      </div>
      <nav>
        <div class="topnav-right">
          <a href="userorder.php"><i class="fa fa-history"></i></a>
          <a href="wishlist.php"><i class="fa fa-heart-o"></i></a>
          <a href="basket.php"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div id="topnav-centered">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="mens.php">Men's</a></li>
            <li><a href="sales.php">Sale</a></li>
            <li><a href="about-us.php">About Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
<?php
}
// BRRRRR
?>
