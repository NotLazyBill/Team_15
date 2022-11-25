<?php
include './functions.php';

$conn = getDb();

if (isset($_SESSION['id'])) {
    session_destroy();
    header("Refresh:0");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->query("SELECT * FROM users WHERE username='$username'");
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($user) {
        foreach ($user as $customer) {
            if (password_verify($password, $customer['password'])) {
                $_SESSION['fname'] = $customer['fname'];
                $_SESSION['id'] = $customer['id'];
                header("Location: index.php");
            }
            else {
                echo "<script>alert('Email or password is incorrect')</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php loadHeader(); ?>
    <div class="login">
        <h2>Log In!</h2> <br>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" /> <br><br>
            <input type="password" name="password" placeholder="Password" /> <br><br>
            <input type="submit" name="submit" value="Login" />
            <input type="reset" value="Clear" />
        </form>
        <br>
        <p>
            Not registered yet? <a href="register.php" class="btn btn-outline-dark">Register</a>
        </p>
    </div>
</body>
<?php loadFooter(); ?>

</html>