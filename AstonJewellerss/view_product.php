<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Aston Jewellers</title>
  <link rel="icon" href="images/favicon.ico?v=2" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
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
    <div class = "container">
      <div class="item">
      <div class="product-img">
        <img class="product-img" src="images/diamondearrings.jpg" alt="">
      </div>
      <div class="product">
        <h2>Product name</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <span>£70</span>
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
  </main>
  </body>
</html>