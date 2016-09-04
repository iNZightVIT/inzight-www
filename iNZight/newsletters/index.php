<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

?>

<div class="container">


<h3>iNZight Newsletters</h3>

<p>
  The iNZight Newsletter is sent out to subscribers of our mailing list. A list of newsletters can be found below:
</p>

<div class="contents_list">
  <?php
  $dirFiles = scandir("./");
  foreach ($dirFiles as $file) {
    if ('.' === $file) continue;
    if ('..' === $file) continue;
    if ($file === "template.html") continue;
    if ($file === "index.php") continue;

    if (filetype($file) === "link") continue;

    if (preg_match("/.php/", $file)) {
      $date = explode("-", $file);
      $title = str_replace("_", " ", $date[3]);
      $title = str_replace(".php", "", $title);
      echo "$date[2]/$date[1]/$date[0] - <a href='$file'>$title</a>";
      echo "<br>";
    }
  }
  ?>
</div>

</div>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
