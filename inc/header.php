<?php

  $request_uri = $_SERVER['REQUEST_URI'];

?>

<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="scss/styles.css">
  <!-- Place favicon.ico in the root directory -->
</head>
<body>

<header class="navigation" role="banner">
  <div class="address-bar">
    <div class="wrap">
      <p>Rainmaker Irrigation Inc., 9928 Express Drive, Highland, IN 46322 (p) 219.934.0000 (f) 219.934.0090</p>
    </div>
  </div>
  <div class="navigation-wrapper wrap">
    <a href="/" class="logo">
      <img src="images/logo.png" alt="Rainmaker Logo">
    </a>
    <a href="javascript:void(0)" class="navigation-menu-button"
       id="js-mobile-menu">MENU</a>
    <nav role="navigation">
      <ul id="js-navigation-menu" class="navigation-menu show">
        <li class="nav-link <?php echo ($request_uri == '/index.php' || $request_uri == '/' ?  ' active' : ''); ?>"><a href="/">Home</a></li>
        <li class="nav-link <?php echo ($request_uri == '/about.php' ?  ' active' : ''); ?>"><a href="/about.php">About</a></li>
        <li class="nav-link <?php echo ($request_uri == '/services.php' ?  ' active' : ''); ?>"><a href="/services.php">Services & Products</a></li>
        <li class="nav-link <?php echo ($request_uri == '/customers.php' ?  ' active' : ''); ?>"><a href="/customers.php">Existing Customers</a></li>
        <li class="nav-link <?php echo ($request_uri == '/estimates.php' ?  ' active' : ''); ?>"><a href="/estimates.php">Estimates</a></li>
        <li class="nav-link <?php echo ($request_uri == '/contact.php' ?  ' active' : ''); ?>"><a href="/contact.php">Contact</a></li>
      </ul>
    </nav>
  </div>
</header>