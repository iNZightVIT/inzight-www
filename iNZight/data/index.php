<?php
$rel = "../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');
require_once($rel . 'assets/functions/filesize.php');

?>
<div class="container">
  <h3>iNZight Data Sets</h3>

  <p>
    If you want access to more that the accessible data sets in the "Example Datasets" menu of iNZight, you can download more here.
    The pre-2016 data folder can be downloaded below, or alternatively you can browse for individual datasets.
    There are also some additional data sets for you to use.
  </p>



  <ul>
    <li>
      <a href="<? echo $rel; ?>downloads/iNZight_data.zip">Download the entire data folder</a> (<?php echo getFileSize($rel . 'downloads/iNZight_data.zip'); ?>)
    </li>

    <li>
      <a href="http://www.stat.auckland.ac.nz/~wild/data/">Browse for individual data sets</a>
    </li>
  </ul>
</div>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
