<?php
include './functions.php';
loadHeader();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<body>

  <div class="register">
    <h2>Register Now!</h2> <br>
    <form method="post" action="register.php">
      <input type="text" name="name" placeholder="Name" required /><br><br>
      <input type="text" name="email" placeholder="Email" required /> <br><br>
      <input type="password" name="password" placeholder="Password" required /> <br><br>

      <input type="submit" value="Register" />
      <input type="reset" value="Clear" />
      <input type="hidden" name="submitted" value="true" />
    </form>
    <br>
    <p> Already a user? <a href="login.php" class="btn btn-outline-dark">Log in</a> </p>
  </div>
</body>

</html>

<?php
loadFooter();
?>