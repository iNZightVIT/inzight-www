<?php
  define('__ROOT__', dirname(dirname(__FILE__)));
  require_once('assets/objects/setup.php');
  require_once('assets/functions/filesize.php');

  $href  = "getinzight.php?";
  $href .= "os=" . $_POST["os"];
  if (isset($_POST["v"])) {
    $href .= "&v=" . (int)$_POST["v"];
  }

  $os = $_POST["os"];
  switch ($os) {
    case "Windows":
      $file = $download_links["Windows"];
      break;
    case "Mac":
      $os_version = (int)$_POST["v"];
      $mac_version = ($os_version > 8) ? "osx" : (($os_version > 6) ? "osx-ml" : "osx-sl");
      $file = $download_links[$mac_version];
      break;
  }

  if (isset($file)) {
    $size = getFileSize("./" . $download_dir . $file);

    $fileSize = ($size == 0) ? "" : " (" . $size . ")";

    $file_info = $file . $fileSize;
  }

?>


  <div class="label">Download iNZightVIT:</div>

  <div class="options">
    <a href="<?php echo $href; ?>" class="large-button">
      <span class="main-text">iNZightVIT for <?php echo $os; ?></span>
      <span class="sub-text"><?php echo $file_info; ?></span>
    </a>
  </div>

  <div class="space-above">
    Already downloaded iNZight and just need the installation instructions?
    <a href="<?php echo $href . '&inst'; ?>">Find them here!</a>
  </div>
