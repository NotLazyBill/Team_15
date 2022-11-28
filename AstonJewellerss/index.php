<?php
include './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
<?php loadHeader();?>

<main>
  <div class="left">
    <section id="style">
      <h2>Shop By Style</h2>
      <div class="style">
        <img src="images/gold.jpg" alt="style-gold" />
        <a href="#">GOLD</a>
      </div>
      <div class="style">
        <img src="images/pearl.jpg" alt="style-pearl" />
        <a href="#">PEARL</a>
      </div>
      <div class="">
        <img src="images/silver.jpg" alt="style-silver" />
        <a href="#">SILVER</a>
      </div>
    </section>

  </div>

  <section id="sale">
    <h5>Up to</h5>
    <h2>50% Off</h2>
    <div class="sale">
      <img src="images/rings2.jpg" alt="wintercollection1" />
      <div class="centered">RINGS</div>
      <div class="bottom-right"><a href="shop-now.php"><button class="btn">Shop Now</button></a></div>
    </div>
    <div class="sale">
      <img src="images/bracelet.jpg" alt="wintercollection1" />
      <div class="centered">BRACELETS</div>
      <div class="bottom-right"><a href="shop-now.php"><button class="btn">Shop Now</button></a></div>
    </div>
  </section>


  <section id="wcollection">
    <h2>WINTER COLLECTION</h2>
    <h5>Reflect your style this winter</h5>
    <br><br>
    <img src="images/wintercollection1.jpg" alt="wintercollection1" />
    <button class="btn"><a href="shop-now.php">Explore Now</a></button>

    <img src="images/wintercollection2.jpg" alt="wintercollection1" />

  </section>

  <section id="message">
    <h2>High-quality, Everyday Jewellery Made From Sustainable, Recycled Materials </h2>
  </section>
</main>
<?php loadFooter(); ?>
</body>

</html>