<?php
$navc = (array)$contents;
unset($navc['index']);

$keys = array_keys($navc);
$which = array_search($topic, $keys);

?>

<div class="navpanel">
  <?php if ($which > 0) {
    $url = $keys[$which - 1];
    $inf = pathinfo($url);
    if (array_key_exists("extension", $inf)) {
      $href = $url;
    } else {
      $href="./?topic=$url";
    }
    ?>
    <a href="<?php echo $href; ?>" class="prev">
      Previous:
      <?php
        if (array_key_exists("short", $navc[$keys[$which - 1]])) {
          echo $navc[$keys[$which - 1]]->short;
        } else {
          echo $navc[$keys[$which - 1]]->title;
        }
      ?>
    </a>
  <?php } else { ?>
    <span class="prev"></span>
  <?php } ?>
  <a href="./" class="section_toc">
    <?php echo $contents->index->title; ?>
  </a>
  <?php if ($which < (count($keys) - 1)) {
    $url = $keys[$which + 1];
    $inf = pathinfo($url);
    if (array_key_exists("extension", $inf)) {
      $href = $url;
    } else {
      $href="./?topic=$url";
    }
    ?>
    <a href="<?php echo $href; ?>" class="next">
      Next:
      <?php
        if (array_key_exists("short", $navc[$keys[$which + 1]])) {
          echo $navc[$keys[$which + 1]]->short;
        } else {
          echo $navc[$keys[$which + 1]]->title;
        }
      ?>
    </a>
    <?php } else { ?>
      <span class="next"></span>
    <?php } ?>
</div>
