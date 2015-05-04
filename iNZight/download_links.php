<?php

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
      $file = $download_links[((int)$_POST["v"] > 8) ? "osx" : "osx-sl"];
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
