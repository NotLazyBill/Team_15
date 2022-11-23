<?php
include './functions.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php loadHeader(); ?>

<body>
  <header id="main-header">
    <div class="topnav" id="nav">
      <a href="#"><i class="fa fa-search"></i> Search</a>
      <a href="#"><i class="fas fa-shipping-fast"></i> Shipping & Delivery info</a>
      <div class="topnav-right">
        <a href="#"><i class="fas fa-user-circle"></i> Log In</a>
      </div>
      <br /><br /><br />
      <h1>Aston Jewellers</h1>
      <p>Selling high-qality affordable jewellery</p>

      <nav>
        <div class="topnav-right">
          <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
          <a href="basket.html"><i class="fa fa-shopping-cart"></i></a>
        </div>
        <div id="topnav-centered">
          <ul>
            <li><a href="index.html">New In</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="#">Men's</a></li>
            <li><a href="#">Bestsellers</a></li>
            <li><a href="sales.html">Sale</a></li>
            <li><a href="about-us.html">About Us</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <main>
        <div class = "box">
            <div class = "pic">
                <img src="images/salebraclet4.jpg" alt="patterned-gold-bracelet" />
            </div>
            <br>
            <h6>Chunky Gold Bracelet, now £18</h6>
            <div class = "info">
                This is another chunky gold bracelet. It is bigger than our regular bracelets, but
                still just as glamorous and sparkly. It is gold and has a unique pattern around the outside
                of the bracelet, making it a one-of-a-kind bracelet. This has no clasp around the outside, but it is
                suitable for all people. This bracelet was £25, but now it is on sale for £18, so get one now to help uplift
                your style.
            </div>
                <br><br>
            <div class="card-body">
                <div class="buttons">
                    <button type="submit" class="btn btn-warning my-3" name="add">Add to Basket</button>
                    <button type="submit" class="btn btn-danger my-3" name="add">Go Back</button>
            </div>
    </main>
</body>
</html>