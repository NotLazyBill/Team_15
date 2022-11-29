<?php

include_once './functions.php';

// Check if user is logged in, else redirect to login
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}

// Check if user is admin, else redirect to homepage
if (!$_SESSION['admin']) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Aston Jewellers</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
  <link rel="stylesheet" href="./css/admin.css">
  <script defer src="./js/main.js"></script>
</head>
<body>
<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header><a>Admin</a></header>
    <ul class="nav">
      <li><a href="index.php"><i class="zmdi zmdi-home"></i>Home</a></li>
      <li><a href="admin.php"><i class="zmdi zmdi-view-dashboard"></i>Dashboard</a></li>
      <li><a href="admin.php?page=products"><i class="zmdi zmdi-collection-plus"></i>Products</a></li>
      <li><a href="admin.php?page=orders"><i class="zmdi zmdi-shopping-basket"></i>Orders</a></li>
      <li><a href="admin.php?page=customers"><i class="zmdi zmdi-accounts-alt"></i>Customers</a></li>
    </ul>
  </div>

  <div id="content">
    <!-- Top right navbar -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"><i class="zmdi zmdi-account-circle">&nbsp</i><?php echo $_SESSION['fname'];?> (Logout)</a></li>
        </ul>
      </div>
    </nav>

    <!-- Content -->
    <div class="container-fluid">
      <!-- Load pages -->
      <?php
      // Load dashboard 
      if (!isset($_GET['page'])) { include './admin-pages/dashboard.php'; }
      else {
        $page = $_GET['page'];

        // Load products
        if ($page == "products") { include './admin-pages/products.php'; }
        // Load orders
        elseif ($page == "orders") { include './admin-pages/orders.php'; }
        // Load customers
        elseif ($page == "customers") { include './admin-pages/customers.php'; }
      }
      ?>
    </div>
  </div>
</div>

</body>
</html>