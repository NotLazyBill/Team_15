<?php
include './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
  <?php loadHeader(); ?>
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
  <?php loadFooter(); ?>
</body>

</html>