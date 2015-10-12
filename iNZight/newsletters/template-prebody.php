<?php
date_default_timezone_set('Pacific/Auckland');
$info = json_decode(file_get_contents("newMailerInfo.json"));
?>

<div class="preview-text">
  <?php echo $info->preview_text; ?>
</div>

<div class="readonline">
  Having trouble viewing this email? <a href="https://www.stat.auckland.ac.nz/~wild/iNZight/newsletters/2015-10-12-release2.4.html">View it online</a>.
</div>

<a href="https://www.stat.auckland.ac.nz/~wild/iNZight/">
  <img class="header-image" height="80px" src="https://www.stat.auckland.ac.nz/~wild/iNZight/img/inzight_transp.png">
</a>
<div class="header">
  <h1>Newsletter</h1>
  <h2><?php
    echo date("j F, Y")
  ?></h2>
</div>

<div class="content">
