<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Aston Jewellers</title>
    <link rel="icon" href="images/favicon.ico?v=2" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
    />
    <script
      src="https://kit.fontawesome.com/c54d8b2ca0.js"
      crossorigin="anonymous"
    ></script>
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
      <div class="small-container basket">
        <table>
          <tr>
            <th>Image</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th></th>
          </tr>
          <tr>
            <td><img src="images/rings.jpg" alt="Image"></td>
            <td>Golden Ring</td>
            <td><input type="number" value="1"></td>
            <td>£59</td>
            <td><button type="submit" class="btn btn-danger my-3">Remove</button></td>
          </tr>
          <tr>
            <td><img src="images/rings2.jpg" alt="Image"></td>
            <td>Golden Ring</td>
            <td><input type="number" value="1"></td>
            <td>£59</td>
            <td><button type="submit" class="btn btn-danger my-3">Remove</button></td>
          </tr>
        </table>
        <div class="total-price">
          <table>
            <tr>
              <td>Total</td>
              <td>Price</td>
            </tr>
          </table>
        </div>
        <div class="order-btn">
          <button type="submit" class="btn btn-success my-3" name="add">Place Order</button>
        </div>
      </div>
    
    </main>
  </body>
</html>

<?php
include('footer.php');
?>