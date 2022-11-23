<?php
include './functions.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php loadHeader(); ?>

<body>
  <main>
    <div class="small-container basket">
      <table class="table">
        <tr>
          <th scope="col">Image</th>
          <th scope="col">Product</th>
          <th scope="col">Quantity</th>
          <th scope="col">Price</th>
          <th scope="col"></th>
        </tr>
        <tr>
          <td><img src="images/rings.jpg" alt="Image"></td>
          <td>Golden Ring</td>
          <td><input type="number" value="1"></td>
          <td>£59</td>
          <td><button type="submit" class="btn btn-danger my-3">Remove</button></td>
        </tr>
        <tr>
          <td><img src="images/rings2.jpg" alt="Image"></td>
          <td>Golden Ring</td>
          <td><input type="number" value="1"></td>
          <td>£59</td>
          <td><button type="submit" class="btn btn-danger my-3">Remove</button></td>
        </tr>
      </table>
      <div class="total-price">
        <table>
          <tr>
            <td>Total</td>
            <td>Price</td>
          </tr>
        </table>
      </div>
      <div class="order-btn">
        <button type="submit" class="btn btn-success my-3" name="add">Place Order</button>
      </div>
    </div>

  </main>
  <?php loadFooter(); ?>
</body>

</html>