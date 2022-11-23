<?php
include './functions.php';
loadHeader();
session_start();

$product = "";
if (isset($_GET['product'])) {
  $product = $_GET['product'];
}
?>

<body>

  <!-- Show store categories when no product is selected (default) -->
  <?php if (!isset($_GET['product'])) { ?>
    <div class="wrapper">
      <div class="image-panel">

        <div class="bracelets">
          <a href="shop.php?product=bracelets">
            <h3>Bracelets</h3>
          </a>
        </div>

        <div class="necklaces">
          <a href="shop.php?product=necklaces">
            <h3>Necklaces</h3>
          </a>
        </div>

        <div class="earrings">
          <a href="shop.php?product=earrings">
            <h3>Earrings</h3>
          </a>
        </div>

        <div class="rings">
          <a href="shop.php?product=rings">
            <h3>Rings</h3>
          </a>
        </div>

        <div class="watches">
          <a href="shop.php?product=watches">
            <h3>Watches</h3>
          </a>
        </div>

      </div>
    </div>
  <?php } ?>
  <!-- End of store categories (default) -->

  <!-- Back to other products button -->
  <?php if (isset($_GET['product'])) { ?>
    <div class="back"><a href="shop.php" class="previous">&laquo; Browse other products</a></div>
  <?php } ?>

  <!-- Display bracelets -->
  <?php if ($product == "bracelets") { ?>
    <div class="gallery">

      <div class="content">
        <div class="zoom">
          <img src="images/shop/bracelets/guardian-angel-bracelet.jpg" alt="guardian-angel-bracelet" />
        </div>
        <h3>Bracelet</h3>
        <p>Silver Guardian Angel Bracelet</p>
        <h6>£17.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/bracelets/plain-silver-bracelet.jpg" alt="plain-silver-bracelet" />
        </div>
        <h3>Bracelet</h3>
        <p>Plain Silver Bracelet</p>
        <h6>£13.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/bracelets/teardrop-bracelet.jpg" alt="teardrop-bracelet" />
        </div>
        <h3>Bracelet</h3>
        <p>Teardrop Shaped Gemstone Silver Bracelet</p>
        <h6>£25.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/bracelets/plain-silver-bangle-bracelet.jpg" alt="plain-silver-bangle-bracelet" />
        </div>
        <h3>Bracelet</h3>
        <p>Plain Silver Bangle</p>
        <h6>£15.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/bracelets/silver-butterfly-bracelet.jpg" alt="silver-butterfly-bracelet" />
        </div>
        <h3>Bracelet</h3>
        <p>Silver Butterfly Bracelet</p>
        <h6>£18.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/bracelets/oval-cut-gemstone-bracelet.jpg" alt="oval-cut-gemstone-bracelet" />
        </div>
        <h3>Bracelet</h3>
        <p>Oval Cut Gemstone Bracelet</p>
        <h6>£25.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/bracelets/green-amber-square-gemstone-bracelet.jpg" alt="green-amber-square-gemstone-bracelet" />
        </div>
        <h3>Bracelet</h3>
        <p>Green Amber Square Gemstone Bracelet</p>
        <h6>£27.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

    </div>
  <?php } ?>
  <!-- End of bracelets -->

  <!-- Display necklaces -->
  <?php if ($product == "necklaces") { ?>
    <div class="gallery">

      <div class="content">
        <div class="zoom">
          <img src="images/shop/necklaces/gold-heart-necklace.jpg" alt="gold-heart-necklace" />
        </div>
        <h3>Necklace</h3>
        <p>Gold Heart Necklace</p>
        <h6>£18.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/necklaces/gold-four-leaf-clover-necklace.jpg" alt="gold-four-leaf-clover-necklace" />
        </div>
        <h3>Necklace</h3>
        <p>Gold Four Leaf Clover Necklace</p>
        <h6>£18.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/necklaces/3-heart-necklace.jpg" alt="3-heart-necklace" />
        </div>
        <h3>Necklace</h3>
        <p>3 Heart Necklace</p>
        <h6>£22.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/necklaces/flower-pearl-necklace.jpg" alt="flower-pearl-necklace" />
        </div>
        <h3>Necklace</h3>
        <p>Flower with Pearl Necklace</p>
        <h6>£20.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/necklaces/mermaid-necklace.jpg" alt="mermaid-necklace" />
        </div>
        <h3>Necklace</h3>
        <p>Mermaid Necklace</p>
        <h6>£20.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/necklaces/hollow-heart-necklace.jpg" alt="hollow-heart-necklace" />
        </div>
        <h3>Necklace</h3>
        <p>Hollow Heart Necklace</p>
        <h6>£16.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/necklaces/poppies-necklace.jpg" alt="poppies-necklace" />
        </div>
        <h3>Necklace</h3>
        <p>Poppies Necklace</p>
        <h6>£27.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

    </div>
  <?php } ?>
  <!-- End of necklaces -->

  <!-- Display earrings -->
  <?php if ($product == "earrings") { ?>
    <div class="gallery">

      <div class="content">
        <div class="zoom">
          <img src="images/shop/earrings/emerald-gold-hoop-earrings.jpg" alt="emerald-gold-hoop-earrings" />
        </div>
        <h3>Earrings</h3>
        <p>Emerald Gold Hoop Earrings</p>
        <h6>£24.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/earrings/double-hoop-diamond-earrings.jpg" alt="double-hoop-diamond-earrings" />
        </div>
        <h3>Earrings</h3>
        <p>Double Hoop Diamond Earrings</p>
        <h6>£25.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/earrings/pearl-earrings.jpg" alt="pearl-earrings" />
        </div>
        <h3>Earrings</h3>
        <p>Pearl Earrings</p>
        <h6>£20.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/earrings/diamond-star-earrings.jpg" alt="diamond-star-earrings" />
        </div>
        <h3>Earrings</h3>
        <p>Diamond Star Earrings</p>
        <h6>£27.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/earrings/pastel-heart-earrings.jpg" alt="pastel-heart-earrings" />
        </div>
        <h3>Earrings</h3>
        <p>Pastel Heart Earrings</p>
        <h6>£20.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/earrings/diamond-gold-round-earrings.jpg" alt="diamond-gold-round-earrings" />
        </div>
        <h3>Earrings</h3>
        <p>Diamond & Gold Round Earrings</p>
        <h6>£30.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/earrings/flower-earrings.jpg" alt="flower-earrings" />
        </div>
        <h3>Earrings</h3>
        <p>Flower Earrings</p>
        <h6>£25.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

    </div>
  <?php } ?>
  <!-- End of earrings -->

  <!-- Display rings -->
  <?php if ($product == "rings") { ?>
    <div class="gallery">

      <div class="content">
        <div class="zoom">
          <img src="images/shop/rings/purple-gemstone-ring.jpg" alt="purple-gemstone-ring" />
        </div>
        <h3>Ring</h3>
        <p>Purple Gemstone Ring</p>
        <h6>£25.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/rings/black-diamond-ring.jpg" alt="black-diamond-ring" />
        </div>
        <h3>Ring</h3>
        <p>Black Diamond Ring</p>
        <h6>£25.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/rings/gold-black-heart-ring.jpg" alt="gold-black-heart-ring" />
        </div>
        <h3>Ring</h3>
        <p>Gold & Black Heart Ring</p>
        <h6>£20.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/rings/infinite-hearts-ring.jpg" alt="infinite-hearts-ring" />
        </div>
        <h3>Ring</h3>
        <p>Infinite Hearts Ring</p>
        <h6>£25.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/rings/silver-love-ring.jpg" alt="silver-love-ring" />
        </div>
        <h3>Ring</h3>
        <p>Silver Love Ring</p>
        <h6>£25.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/rings/joined-hearts-ring.jpg" alt="joined-hearts-ring" />
        </div>
        <h3>Ring</h3>
        <p>Joined Hearts Ring</p>
        <h6>£27.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

    </div>
  <?php } ?>
  <!-- End of rings -->

  <!-- Display watches -->
  <?php if ($product == "watches") { ?>
    <div class="gallery">

      <div class="content">
        <div class="zoom">
          <img src="images/shop/watches/pink-gold-bracelet-watch.jpg" alt="pink-gold-bracelet-watch" />
        </div>
        <h3>Watch</h3>
        <p>Pink & Gold Bracelet Watch</p>
        <h6>£40.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/watches/minimalistic-gold-white-watch.jpg" alt="minimalistic-gold-white-watch" />
        </div>
        <h3>Watch</h3>
        <p>Minimalistic Gold & White Watch</p>
        <h6>£45.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/watches/silver-grey-watch.jpg" alt="silver-grey-watch" />
        </div>
        <h3>Watch</h3>
        <p>Silver & Grey Watch</p>
        <h6>£38.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/watches/casual-timeless-watch.jpg" alt="casual-timeless-watch" />
        </div>
        <h3>Watch</h3>
        <p>Casual Timeless Watch</p>
        <h6>£35.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/watches/rose-gold-stars-watch.jpg" alt="rose-gold-stars-watch" />
        </div>
        <h3>Watch</h3>
        <p>Rose Gold Stars Watch</p>
        <h6>£45.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

      <div class="content">
        <div class="zoom">
          <img src="images/shop/watches/wooden-strap-watch.jpg" alt="wooden-strap-watch" />
        </div>
        <h3>Watch</h3>
        <p>Wooden Strap Watch</p>
        <h6>£38.00</h6>
        <button class="buy-1">Add to Basket</button>
      </div>

    </div>
  <?php } ?>
  <!-- End of watches -->

</body>
</html>

<?php
loadFooter();
?>