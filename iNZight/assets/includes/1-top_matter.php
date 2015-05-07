<!DOCTYPE html>

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
    <div class="wrapper">
