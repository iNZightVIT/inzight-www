<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');
require_once($rel . 'assets/functions/filesize.php');

?>
<div class="container">
  <h3>
    <img src="<?php echo $rel; ?>img/inzight-lite.svg" alt="iNZight Lite" style="height: 3em; margin: 0;">
  </h3>

  <p>
    iNZight Lite is an online, browser-based version of the Desktop application intended for Mac and Tablet users. It is powered by Shiny and uses most of the same underlying R packages as the Desktop version.
  </p>

  <p>
    Access iNZight Lite here:
    <a href="https://lite.docker.stat.auckland.ac.nz">https://lite.docker.stat.auckland.ac.nz</a>.
  </p>

  <hr />

  <?php
    // read ticker.json
    $json = file_get_contents('ticker.json');
    $ticker = json_decode($json, true);

    // loop over ticker items, filter where today is between validFrom and validTo
    foreach ($ticker as $item) {
      if (strtotime($item['validFrom']) <= time() && strtotime($item['validTo']) >= time()) {
        ?>
        <div class="panel panel-<?php echo $item['type']; ?>">
          <div class="panel-heading">
            <strong><?php echo $item['title']; ?></strong>
          </div>
          <div class="panel-body">
            <?php echo $item['message']; ?>
          </div>
        </div>
        <?php
      }
    }
  ?>
</div>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
