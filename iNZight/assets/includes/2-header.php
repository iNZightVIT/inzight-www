

<div class="header">
  <div class="topnav hideme">
    <div class="nav-stack-wrap">
      <div class="logo">
        <a href="<?php echo $rel; ?>index.php"><img src="<?php echo $rel; ?>img/inzight_transp.png"></a>
      </div>

      <div class="navstack">
        <span class="navstack-bar"></span>
        <span class="navstack-bar"></span>
        <span class="navstack-bar"></span>
      </div>
    </div>

    <?php
    require($rel . 'assets/objects/navitems.php');
    writeList($navitems, $rel);
    ?>
  </div>
</div>
<div class="vspace"></div>
