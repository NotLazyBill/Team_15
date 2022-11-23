<?php
include './functions.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php loadHeader(); ?>
<body>
    <div class="login">
        <h2>Log In!</h2> <br>
        <form action="login.php" method="post">

            <input type="text" name="email" placeholder="Email" /> <br><br>

            <input type="password" name="password" placeholder="Password" /> <br><br>

            <input type="submit" value="Login" />
            <input type="reset" value="Clear" />
            <input type="hidden" name="submitted" value="TRUE" />

        </form>
        <br>
        <p>
            Not registered yet? <a href="register.php" class="btn btn-outline-dark">Register</a>
        </p>
    </div>
</body>
<?php loadFooter(); ?>

</html>