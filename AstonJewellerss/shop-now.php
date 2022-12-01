<?php
include './functions.php';
?>

<body>
<?php
loadHeader();
?>
    <main>
    <div class="container">
      <div class="shop-now">
        <div id="img">
            <div class="text">
                <a href="shop.php"><h3>Shop</h3></a>
            </div>
            <a href="shop.php"><img class="product-img" src="images/shop_now/woman.jpg"alt=""></a>
        </div>
        <div id="img">
            <div class="text1">
                <a href="mens.php"><h3>Men's</h3></a>
            </div>
            <a href="mens.php"><img src="images/shop_now/man.jpg" alt=""></a>
        </div>
      </div>
    </div>
    </main>
</body>

<?php
loadFooter();
?>