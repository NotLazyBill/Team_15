<?php
include './functions.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php loadHeader(); ?>

<body>
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
  <?php loadFooter(); ?>
</body>

</html>