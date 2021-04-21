<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

include_once($rel . 'assets/libraries/md.php');
?>

<div class="container">

  <?php
    $Pd = new ParsedownExtra();
    $text = file_get_contents("info.Md");
    echo $Pd->text($text);
  ?>

</div>



<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
