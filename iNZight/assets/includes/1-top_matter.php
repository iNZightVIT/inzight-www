<?php session_start();
//echo $_SERVER['HTTP_USER_AGENT'];
$isIE = strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') || strpos($_SERVER['HTTP_USER_AGENT'], 'Trident');
?>
<!DOCTYPE html>

<!--
  This website is currently being maintained by Tom Elliott
  Originally designed by Tom Elliott @ University of Auckland

  Copyright (c) University of Auckland, 2015
-->

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
      // Allow us to define extra meta tags:
      if (isset($metatags)) {
        echo $metatags;
      }
    ?>

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
