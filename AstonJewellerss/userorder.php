<?php
include './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<body>
  <?php loadHeader(); ?>
  <main>
    <div class="basket-container">
    <div class="basket">
      <table class="table">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">User ID</th>
          <th scope="col">Image</th>
          <th scope="col">Product Name</th>
          <th scope="col">Price</th>
        </tr>
        <tr>
          <td>order ID</td>
          <td>User ID</td>
          <td><img src="images/rings.jpg" alt="Image"></td>
          <td>Golden Ring</td>
          <td>£59</td>
        </tr>

      </table>
    </div>
    </div>
  </main>
  <?php loadFooter(); ?>
</body>

</html>