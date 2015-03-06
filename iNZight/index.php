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
        <div class="topnav">
          <div class="logo">
            <img src="img/inzight_transp.png">
          </div>

          <?php
            writeList($navitems);
          ?>
        </div>
      </div>
      <div class="vspace"></div>


      <div class="blurb">
        <?php echo $inzight_text; ?> is a simple data analysis system which was initially designed for high school students to help explore data fast and easy without having to learn complex statistical software. By popular demand, it has been extended to handle multi-variable graphics, time series analysis and generalised linear models.
      </div>



      <div class="push"></div>
    </div>

    <div class="footer">
      <div class="footer-content">
        Footer goes here ...
      </div>
    </div>
  </body>
</html>
