<?php session_start(); ?>
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
        If you notice any problems or dead links,
        <a href="mailto:tell029@aucklanduni.ac.nz?subject=New Website">please report them</a>.
      </div>

      <div id="hideMessage" class="close">Close</div>
    </div>

    <div class="wrapper">
