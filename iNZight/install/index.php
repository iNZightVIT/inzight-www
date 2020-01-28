<?php
$rel = "../";
require_once($rel . 'assets/objects/setup.php');
require_once($rel . 'assets/functions/filesize.php');

$operating_systems = array(
  "windows" => "Windows", "mac" => "Mac", "linux" => "Linux"
);

require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

?>

<div class="container">
  <div class="col-md-12 col-lg-10 col-lg-push-1" id="osSelect">
    
    <h4>Choose your operating system</h4>
    <div class="row">
      <?php
        foreach ($operating_systems as $os => $osname) {
          ?>
            <div class="col-md-4 text-center">
                <a href="" class="thumbnail os-icon os-icon-<?php echo $os; ?>" data-os="<?php echo $os; ?>">
                  <img src="<?php echo $rel; ?>img/<?php echo $os; ?>-icon.png" alt="<?php echo $osname; ?>">
                  <div class="caption">
                    <h4><?php echo $osname; ?></h4>
                  </div>
                </a>
            </div>
          <?php
        }
      ?>
    </div>

  </div><!--#osSelect-->
  <div class="col-md-12 col-lg-10 col-lg-push-1" id="osView">
    <!-- place OS instructions in here -->
  </div><!--#osView-->
</div><!--#container-->

<script src="<?php echo $rel; ?>js/install.js"></script>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>