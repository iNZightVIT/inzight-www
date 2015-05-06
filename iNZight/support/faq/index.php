<?php
$rel = "../../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');
require_once($rel . 'assets/libraries/md.php');

$Pd = new ParsedownExtra();

$faq = json_decode(file_get_contents("faq.json"));

$faq = file_get_contents("faq.Md");

?>

<h3>iNZight FAQ (Frequently Asked Questions)</h3>

<div class="markdown faq">
  <?php
    //$first = $faq->download->Windows->Question;
    //echo $Pd->text($first);
    echo $Pd->text($faq);
  ?>
</div>








<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
