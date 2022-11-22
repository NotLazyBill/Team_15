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

    <section id="vision">
      <h3> Our Vision</h3>
      <li>Our company started a couple of years back when we realised how expensive the jewellery market and how much it
        can affect peoples choice when buying jewellery, especially students.
        Nowadays, jewellery has become more popular and fashionable, however, it can be very expensive which is off-putting. 
        We do not want people to have to choose lower quality jewellery because it is cheaper and we do not want to compromise or limit their taste.
        So we came up with Aston Jewellers. Our vision is to sell high-quality jewellery to students and other people who want to look good but do 
        not want to spend a lot of money.</li>
      <li>We understand the importance of wanting to look and feel good, and we want other people to have the same experiences. Therefore, Aston Jewellers is here to 
        sell high-quality, fashionable and reasonably priced jewellery to students as we want them to go out and feel good about what they are wearing without worrying about the costs of things.</li>
    </section>
    <br>

    <section id="delivery">
      <h3>Shipping and Returns Information</h3>
      <h4>Standard Delivery</h4>
      <p>
        <li>We offer standard delivery for all products ordered.
          We aim to get all of the products delivered within 5-7 business days.</li>
        <li>Please be mindful that larger orders will take longer to be delivered.</li>
          <br><br>
          <h4>Returns</h4>
          <p>
        <li>We offer returns on selected items only. We do not accept returns on earrings due to hygeine issues.</li>
        <li>For more information regarding returns, please do contact us via social media or the form or look at the
          email delivery confirmation for more information.</li>
    </section>
    <br>

    <section id="links">
      <h4>Links to our social media</h4>
      <p>
        <li>These are the links to our social media, where you can get updates on our new jewellery and any sales!</li>
      </p>
      <a href="https://www.instagram.com/">Visit our Instagram page!</a>
      <br>
      <a href="https://www.tiktok.com/">Visit our Tiktok page!</a>
    </section>
  </main>

  <form id="contact">
    <h4>
      If you have any queries regarding any products, delivery/shipping or just want to get in touch, you can contact us
      via this form.
    </h4>

    <input type="first-name" placeholder="First Name" required />
    <br><br>

    <input type="last-name" placeholder="Last Name" required />
    <br><br>

    <input type="phone-number" placeholder="Phone Number" required />
    <br><br>

    <p>Please type in your question or comment here:</p>
    <textarea name="comments" placeholder="Comments or Questions" rows="4" cols="30">
    </textarea>
    <br><br>

    <input type="email" placeholder="Email" required />
    <br><br>

    <input type="email" placeholder="Confirm Email" required />
    <br> <br>

    <input type="submit" value="Submit!" />
  </form>

</body>
</html>

<?php
include('footer.php');
?>