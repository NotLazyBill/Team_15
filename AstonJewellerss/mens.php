<?php
include './functions.php';

$product = "";
if (isset($_GET['product'])) {
  $product = $_GET['product'];
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
  <?php loadHeader(); ?>
  <!-- Show store categories when no product is selected (default) -->
  <?php if (!isset($_GET['product'])) { ?>
    <div class="wrapper">
      <div class="image-panel">

        <div class="chains-men">
          <a href="mens.php?product=chains">
            <h3>Chains</h3>
          </a>
        </div>

        <div class="bracelets-men">
          <a href="mens.php?product=bracelets">
            <h3>Bracelets</h3>
          </a>
        </div>

        <div class="earrings-men">
          <a href="mens.php?product=earrings">
            <h3>Earrings</h3>
          </a>
        </div>

        <div class="rings-men">
          <a href="mens.php?product=rings">
            <h3>Rings</h3>
          </a>
        </div>

        <div class="watches-men">
          <a href="mens.php?product=watches">
            <h3>Watches</h3>
          </a>
        </div>

      </div>
    </div>
  <?php } ?>
  <!-- End of store categories (default) -->

  <!-- Back to other products button -->
  <?php if (isset($_GET['product'])) { ?>
    <div class="back"><a href="mens.php" class="previous">&laquo; Browse other products</a></div>
  <?php } ?>

  <!-- Display bracelets -->
  <?php if ($product == "bracelets") { ?>
    <div class="gallery">

      <div class="content">
        <div class="zoom">
          <img src="images/shop/bracelets/guardian-angel-bracelet.jpg" alt="guardian-angel-bracelet" />
        </div>
        <h3>Bracelet</h3>
        <p>not mens</p>
        <h6>£17.00</h6>
        <button class="btn my-3" >Add to Basket <i class="fa fa-shopping-cart"></i></button>
      </div>

    </div>
  <?php } ?>
  <!-- End of bracelets -->

  <!-- Display chains -->
  <?php if ($product == "chains") { ?>
    <div class="gallery">

      <div class="content">
        <div class="zoom">
          <img src="images/shop/necklaces/gold-heart-necklace.jpg" alt="gold-heart-necklace" />
        </div>
        <h3>Chain</h3>
        <p>not a chain</p>
        <h6>£18.00</h6>
        <button class="btn my-3">Add to Basket <i class="fa fa-shopping-cart"></i></button>
      </div>

    </div>
  <?php } ?>
  <!-- End of chains -->

  <!-- Display earrings -->
  <?php if ($product == "earrings") { ?>
    <div class="gallery">

      <div class="content">
        <div class="zoom">
          <img src="images/shop/earrings/emerald-gold-hoop-earrings.jpg" alt="emerald-gold-hoop-earrings" />
        </div>
        <h3>Earrings</h3>
        <p>not mens</p>
        <h6>£24.00</h6>
        <button class="btn my-3">Add to Basket <i class="fa fa-shopping-cart"></i></button>
      </div>

    </div>
  <?php } ?>
  <!-- End of earrings -->

    <!-- Display rings -->
  <?php if ($product == "rings") { ?>
    <div class="gallery">

      <div class="content">
        <div class="zoom">
          <img src="images/shop/bracelets/guardian-angel-bracelet.jpg" alt="guardian-angel-bracelet" />
        </div>
        <h3>Ring</h3>
        <p>not a ring</p>
        <h6>£17.00</h6>
        <button class="btn my-3" >Add to Basket <i class="fa fa-shopping-cart"></i></button>
      </div>

    </div>
  <?php } ?>
    <!-- End of rings -->

    <!-- Display watches -->
    <?php if ($product == "watches") { ?>
    <div class="gallery">

      <div class="content">
        <div class="zoom">
          <img src="images/shop/bracelets/guardian-angel-bracelet.jpg" alt="guardian-angel-bracelet" />
        </div>
        <h3>Watch</h3>
        <p>not a watch</p>
        <h6>£17.00</h6>
        <button class="btn my-3" >Add to Basket <i class="fa fa-shopping-cart"></i></button>
      </div>

    </div>
  <?php } ?>
  <!-- End of watches -->

</body>

</html>

<?php
loadFooter();
?>