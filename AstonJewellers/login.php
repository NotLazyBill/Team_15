<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Aston Jewellers</title>
    <link rel="icon" href="images/favicon.ico?v=2" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
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
                    <a href="#"><i class="fa fa-heart-o"></i></a>
                    <a href="basket.html"><i class="fa fa-shopping-cart"></i></a>
                </div>
                <div id="topnav-centered">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="#">Men's</a></li>
                        <li><a href="#">Sale</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

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

</html>

<?php
include('footer.php');
?>