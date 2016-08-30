<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
              data-target="#navbar_content">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo $rel; ?>">
        <img alt="iNZight" src="<?php echo $rel; ?>img/inzight_transp.png">
      </a>
    </div>

    <div class="collapse navbar-collapse navbar-right" id="navbar_content">
      <?php
      require($rel . 'assets/objects/navitems.php');
      writeList($navitems, $rel);
      ?>
    </div>
  </div>
</nav>


<!-- <div class="header">
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


  </div>
</div>
<div class="vspace"></div> -->
