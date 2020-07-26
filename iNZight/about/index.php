<?php
$rel = "../";
$crumbs = array("About" => "active");
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

$subdirs = $navitems['About'];
unset($subdirs["default"]);

?>

<div class="container">
  <h3>About iNZight</h3>

  <p>
    iNZight was initially designed for New Zealand high schools, allowing students to quickly
    and easily explore data and understand some statistical ideas (using the companion program VIT).
  </p>

  <p>
    However, iNZight now extends to multivariable graphics, time series, and
    generalised linear modelling (including modelling of data from complex surveys).
  </p>

  <p>
    Finally, iNZight is <b>FREE</b>!!
    That means you can download and use it however you want, for whatever you want.
    There are absolutely no restrictions. You can download for yourself or redistribute it.
    You can even modify it if you are so inclined!
    However, it is important to note that iNZight comes with absolutely no warranty.
    See <a href="http://www.gnu.org/licenses/gpl-2.0.html" target="_blank">GNU General Public Licence 2.0</a>
    for more information.
  </p>

  <div class="contents_list">
    <div class="label">Find out about:</div>

    <ol>
      <?php
        foreach ($subdirs as $title => $url) {
          echo "<li>";
          echo "<a href='$url'>$title</a>";
          if (file_exists($url . "description.txt")) {
            echo "<p class='desc'>";
            include($url . "description.txt");
            echo "</p>";
          }
          echo "</li>";
        }
      ?>
    </ol>
  </div>

</div>



<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
