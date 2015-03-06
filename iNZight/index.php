<?php
  require('assets/objects/navitems.php');
?>

<!DOCTYPE html>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/main.css">

    <title>iNZight for Data Analysis</title>
  </head>

  <body>
    <div class="wrapper">
      <div class="header">
        <div class="topnav show">
          <div class="logo">
            <img src="img/inzight_transp.png">
          </div>

          <div class="navstack">
            <span class="navstack-bar"></span>
            <span class="navstack-bar"></span>
            <span class="navstack-bar"></span>
          </div>

          <?php
            writeList($navitems);
          ?>
        </div>
      </div>
      <div class="vspace"></div>


      <p class="content">
        <?php echo $inzight_text; ?> is a simple data analysis system which was initially designed for high school students to help explore data fast and easy without having to learn complex statistical software. By popular demand, it has been extended to handle multi-variable graphics, time series analysis and generalised linear models.
      </p>


      <div class="feature">
        <div class="placeholder"></div>

        <div class="download">
          Download Now!
        </div>
      </div>


      <p class="content">
        Initially designed for New Zealand high schools, iNZight now extends to multivariable graphics, time series and generalised linear models (including complex survey designs).
      </p>


      <p class="content">
        This project is led by Chris Wild. Major contributers include:<br>
        Tom Elliott - Junjie Zheng - Marco Kupper - Simon Potter - David Banks - Dineika Chandrananda
      </p>



      <div class="push"></div>
    </div>

    <div class="footer">
      <div class="footer-content">
        Footer goes here ...
      </div>
    </div>
  </body>
</html>
