<?php
$navc = (array)$contents;
unset($navc['index']);

$keys = array_keys($navc);
$which = array_search($topic, $keys);

?>

<ul class="pager navpanel">
  <?php if ($which > 0) {
    $url = $keys[$which - 1];
    $inf = pathinfo($url);
    if (array_key_exists("extension", $inf)) {
      $href = $url;
    } else {
      $href="./?topic=$url";
    }
    ?>
    <li class="previous">
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
    </li>
  <?php } ?>
  <li><a href="./">
    <span class="glyphicon glyphicon-home"></span>
    <?php echo $contents->index->title; ?>
  </a></li>
  <?php if ($which < (count($keys) - 1)) {
    $url = $keys[$which + 1];
    $inf = pathinfo($url);
    if (array_key_exists("extension", $inf)) {
      $href = $url;
    } else {
      $href="./?topic=$url";
    }
    ?>
    <li class="next">
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
    </li>
    <?php } ?>
</ul>
