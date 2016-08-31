<?php
$navc = (array)$contents;
unset($navc['index']);

$keys = array_keys($navc);
$which = array_search($topic, $keys);

?>

<hr>
<div class="navpanel row">
  <div class="col-sm-4 previous text-left">
    <?php if ($which > 0) {
      $url = $keys[$which - 1];
      $inf = pathinfo($url);
      if (array_key_exists("extension", $inf)) {
        $href = $url;
      } else {
        $href="./?topic=$url";
      }
      ?>
      <a href="<?php echo $href; ?>">
        <span class="glyphicon glyphicon-chevron-left"></span> Previous:
        <?php
          if (array_key_exists("short", $navc[$keys[$which - 1]])) {
            echo $navc[$keys[$which - 1]]->short;
          } else {
            echo $navc[$keys[$which - 1]]->title;
          }
        ?>
      </a>
    <?php } ?>
  </div>
  <div class="col-sm-4 text-center">
    <a href="./">
      <span class="glyphicon glyphicon-home"></span>
      <?php echo $contents->index->title; ?>
    </a>
  </div>
  <div class="next col-sm-4 text-right">
    <?php if ($which < (count($keys) - 1)) {
      $url = $keys[$which + 1];
      $inf = pathinfo($url);
      if (array_key_exists("extension", $inf)) {
        $href = $url;
      } else {
        $href="./?topic=$url";
      }
      ?>
      <a href="<?php echo $href; ?>">
        Next:
        <?php
          if (array_key_exists("short", $navc[$keys[$which + 1]])) {
            echo $navc[$keys[$which + 1]]->short;
          } else {
            echo $navc[$keys[$which + 1]]->title;
          }
        ?>
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    <?php } ?>
  </div>
</div>
