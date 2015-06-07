<?php session_start();

//echo $_SERVER['HTTP_USER_AGENT'];
$isIE = strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') || strpos($_SERVER['HTTP_USER_AGENT'], 'Trident');
?>
<!DOCTYPE html>

<!--
  This website is currently being maintained by Tom Elliott
  Originally designed by Tom Elliott <tell029@aucklanduni.ac.nz>

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
    <script src="<?php echo $rel;?>js/jquery-2.1.3.min.js"></script>

    <title>iNZight for Data Analysis</title>
  </head>

  <body>
    <?php
      if (!isset($_SESSION["hide"])) {
        $_SESSION["hide"] = false;
      }
      $hideMessage = $_SESSION["hide"];
      ?>

    <div class="top_message<?php if (!$hideMessage) { echo " showme"; } ?>">
      <div>
        This website is currently being developed.
        If you notice any problems (such as broken links, etc.),
        <a href="mailto:tell029@aucklanduni.ac.nz?subject=New Website">please report them</a>.
      </div>

      <div id="hideMessage" class="close">
        <?php include $rel.'assets/icons/close.php'; ?>
      </div>
    </div>

    <?php
      if ($isIE) {
        if (!isset($_SESSION["hideSupport"])) {
          $_SESSION["hideSupport"] = false;
        }
        $hideSupport = $_SESSION["hideSupport"];
    ?>
      <div class="support_message<?php if (!$hideSupport) { echo " showme"; } ?>">
          <div>
            It looks like you are using Internet Explorer. Apologies, but this website may not look so great for you.<br>
            If you have Chrome, Safari, or Firefox, we suggest using that to view the site instead.
          </div>
          <div id="hideSupportmessage" class="close">
            <?php include $rel.'assets/icons/close.php'; ?>
          </div>
      </div>
    <?php } ?>

    <div class="wrapper">
