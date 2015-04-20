<?php
  if (isset($_GET["platform"])) {
    $platform = $_GET["platform"];

    // http://perishablepress.com/press/2010/11/17/http-headers-file-downloads/

    // set example variables
    $filename = "iNZightVIT_zipfile.zip";
    $filepath = "/var/www/iNZight/downloads/";

    // http headers for zip downloads
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"".$filename."\"");
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: ".filesize($filepath.$filename));
    ob_end_flush();
    @readfile($filepath.$filename);
  }


  require_once('assets/includes/1-top_matter.php');
  require_once('assets/includes/2-header.php');

?>


<p class="content blurb">
  Thank you for downloading <?php echo $inzight_text; ?>!
  The download should begin automatically.
</p>
<p class="content">
  If not, <a href="<?php echo $filepath . $filename; ?>">click here</a>.
</p>



<?php
require_once('assets/includes/3-bottom_matter.php');
?>
