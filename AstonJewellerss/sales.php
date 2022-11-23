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

<?php loadHeader(); ?>
<body>
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
                echo "<img src=\"" . $row["image"] . "\" alt=\"" . $row["alt_text"] . "\">";
                echo "</div>";
                echo "<h3>" . $row["name"] . "</h3>";
                echo "<p>" . $row["desc"] . "</p>";
                echo "<h6>£" . $row["price"] . "</h6>";
                echo "<button class=\"buy-1\">Add to Basket</button>";
                echo "</div>";
            }
        ?>
        <div class="content">
          <div class="zoom">
            <img src="images/diamondearrings.jpg" alt="round-cut-stud-earrings-silver" />
          </div>
          <h3>Earrings</h3>
          <p>Round Cut Stud Earrings 6mm-Silver</p>
          <h6>£12.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <div class="zoom">
            <img src="images/pearlearrings.jpg" alt="gold-huggie-pearl-drop-earrings" />
          </div>
          <h3>Earrings</h3>
          <p> Gold Huggie Pearl Drop Earrings</p>
          <h6>£18.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <div class="zoom">
            <img src="images/pearlearrings2.jpg" alt="ines-pearl-and-Cz-drop-earrings-rose-gold">
          </div>
          <h3>Earrings</h3>
          <p> Ines Pearl And Cz Drop Earrings-Rose Gold</p>
          <h6>£14.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <div class="zoom">
            <img src="images/starearrings.jpg" alt="starbusrt-small-hoop-earrings" />
          </div>
          <h3>Earrings</h3>
          <p>Starburst Small Hoop Earrings-Rose Gold</p>
          <h6>£11.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/silverchain.jpg" alt="gold-chunky-pendant-necklace" />
          <h3>Necklace</h3>
          <p>Gold Chuncky Pendant Necklace</p>
          <h6>£11.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/heartchain.jpg" alt="gold-dimante-necklace" />
          <h3>Necklace</h3>
          <p>Gold Dimante Necklace</p>
          <h6>£12.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/pearlchain.jpg" alt="little-sea-shell-necklace" />
          <h3>Necklace</h3>
          <p>Little Sea Shell Necklace</p>
          <h6>£9.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/salechain.jpg" alt="rose-gold-necklace" />
          <h3>Necklace</h3>
          <p>Rose Gold Necklace</p>
          <h6>£10.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/diamondring.jpg" alt="diamond-ring" />
          <h3>Ring</h3>
          <p>Single Diamond Ring</p>
          <h6>£12.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/goldring.jpg" alt="gold-ring" />
          <h3>Ring</h3>
          <p>Gold Princess Ring</p>
          <h6>£15.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/goldring2.jpg" alt="detailed-gold-ring" />
          <h3>Ring</h3>
          <p>Detailed Gold Ring</p>
          <h6>£10.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/silverrings.jpg" alt="silver-ring" />
          <h3>Ring</h3>
          <p>Silver Diamond Ring</p>
          <h6>£11.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/salebraclet2.jpg" alt="worded-bracelet" />
          <h3>Bracelet</h3>
          <p>Worded Gold Bracelet</p>
          <h6>£15.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/salebraclet3.jpg" alt="silver-bracelet" />
          <h3>Bracelet</h3>
          <p>Silver Bracelet</p>
          <h6>£9.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/salebraclet4.jpg" alt="gold-chunky-bracelet" />
          <h3>Bracelet</h3>
          <p>Gold Chunky Bracelet</p>
          <h6>£20.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

        <div class="content">
          <img src="images/salebraclet5.jpg" alt="patterned-gold-bracelet" />
          <h3>Bracelet</h3>
          <p>Patterned Gold Bracelet</p>
          <h6>£18.00</h6>
          <button class="buy-1">Add to Basket</button>
        </div>

  </main>
  <?php loadFooter(); ?>
</body>