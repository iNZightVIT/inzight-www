<script>
var loc = window.location;
url = "https://inzight.nz";
url += loc.pathname.replace("~wild/iNZight/", "");
if (loc.search != undefined) {
  url += loc.search;
}
if (loc.hash != undefined) {
  url += loc.hash;
}

if (loc.pathname.match("/support/contact") == null &
    loc.origin.match("localhost") == null) {
  // window.location.replace(url);
}
</script>

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

    <meta http-equiv='Content-type' content='text/html; charset=ISO-8859-1'>
    <meta name='keywords' content='free, software, statistics, data analysis, inzight'>
    <meta name='description' content='iNZight - a free, easy to use software for statistical data analysis'>
    <meta http-equiv='Content-Language' content='en'>

    <meta property="og:title" content="iNZight for Data Analysis">
    <meta property="og:description" content="A free, easy to use software for statistical data analysis">
    <meta property="og:image" content="https://inzight.nz/android-chrome-512x512.png">
    <meta property="og:url" content="https://inzight.nz">
    <meta name="twitter:card" content="summary">

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
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="100566192069494"
        theme_color="#18afe3"
        logged_in_greeting="Kia ora, how can we help? We'll try to respond between 9AM-3PM Mon-Fri NZST."
        logged_out_greeting="Kia ora, how can we help? We'll try to respond between 9AM-3PM Mon-Fri NZST.">
      </div>

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
