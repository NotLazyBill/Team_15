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
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="#">Men's</a></li>
                        <li><a href="#">Sale</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

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
include('footer.php');
?>