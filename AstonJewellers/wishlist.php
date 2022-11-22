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
    <div class="container mt-3 mx-auto">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card shadow">
            <div class="card-horizontal">
              <div class="image">
                <img src="images/goldring.jpg" alt="">
              </div>
              <div class="card-body">
                <h3 class="card-title">Product name</h3>
                <p class="card-text">Product details</p>
                <span class="price">Product price</span> <br>
                <div class="buttons">
                  <button type="submit" class="btn btn-warning my-3" name="add">Add to Basket</button>
                  <button type="submit" class="btn btn-danger my-3" name="add">Remove</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>

<?php
include('footer.php');
?>