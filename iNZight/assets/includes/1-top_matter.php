<?php

session_save_path("/tmp");

if (!session_start()) {
  echo "Unable to start session..<br>";
}
$isIE = strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') || strpos($_SERVER['HTTP_USER_AGENT'], 'Trident');

// var_dump($_SESSION);
if (isset($_GET["ver"])) {
  $_SESSION["VLITE"] = ($_GET["ver"] == "lite");
  // --- this is just complex and silly ...
  // $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  // $url = strtok($url, "?");
  // unset($_GET["ver"]);
  // if (count($_GET)) {
  //   $url .= "?" . http_build_query($_GET);
  // }
  // header("Location: $url");
}
if (!isset($_SESSION["VLITE"])) $_SESSION["VLITE"] = false;
$VLITE = $_SESSION["VLITE"];
?>

<!DOCTYPE html>

<!--
  This website is currently being maintained by Tom Elliott
  Originally designed by Tom Elliott @ University of Auckland

  Copyright (c) University of Auckland, 2015
-->

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#094b85">

    <?php
      // Allow us to define extra meta tags:
      if (isset($metatags)) {
        echo $metatags;
      }

      /**
        * Google Analytics
      **/
      if (preg_match('/inzight.nz/', $_SERVER['HTTP_HOST']) === 1) {
        include_once($rel . 'assets/includes/analyticstracking.php');
      } else {
        echo "<!-- development environment -->";
      }
    ?>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" type="text/css" href="<?php echo $rel; ?>css/main.css">

    <!--[if !IE]><!-->
      <script src="<?php echo $rel;?>js/jquery-2.1.3.min.js"></script>
    <!--<![endif]-->

    <!--[if lte IE 8]>
      <script src="<?php echo $rel;?>js/jquery-1.9.1.min.js"></script>
    <![endif]-->

    <!--[if gt IE 8]>
      <script src="<?php echo $rel;?>js/jquery-2.1.3.min.js"></script>
    <![endif]-->

    <script src="<?php echo $rel;?>js/bootstrap.min.js"></script>

    <title>iNZight for Data Analysis</title>
  </head>

  <body>
    <?php
      if (!isset($_SESSION["hide"])) {
        $_SESSION["hide"] = false;
      }
      $hideMessage = true; $_SESSION["hide"];
      ?>

    <!--[if lte IE 9]>
      <div style="background: 'black'; color: 'white'; font-size: 14px;">
        Unfortunately, this website isn't compatible with your browser. We suggest something like Google Chrome, Safari, or Firefox.
      </div>
    <![endif]-->


    <div class="wrapper">
