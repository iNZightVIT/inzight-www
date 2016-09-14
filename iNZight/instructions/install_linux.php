<?php
  $rel = "../";
  require_once($rel . 'assets/objects/setup.php');

  $dist = $_POST["dist"];
  if ($dist == "Other") { ?>

    <div class="label">iNZightVIT is not supported on other Linux distributions</div>

    <p>
      To run iNZight on Linux, you first need to install R, which is only officially
      supported on Ubuntu, Debian, Suse and RedHat.
    </p>

    <p>
      However, depending on your distribtion, you may be able to install R and the necessary
      dependencies, in which case it may be possible to get iNZight up and running.
      You will need to follow the instructions for the closest distribution listed above.
    </p>

    <p>
      If you're unable to install iNZight, there are several alternatives.
      The first is to install iNZight on a virtual machine (using something like VirtualBox),
      and running iNZight from there (we suggest Xubuntu 14.04, as iNZight looks best on this
      and installation is fairly straightforward.
      The second alternative is to use our online application,
      <a href="http://docker.stat.auckland.ac.nz/">iNZight Lite</a>.
      This runs in the browser, so no installation is necessary.
    </p>



  <?php } else { ?>

  <div class="label">Install iNZight on Linux <?php echo $dist; ?>:</div>

  <p>
    To install iNZight on Linux, you will need the following:
    <ul>
      <li>
        <a href="https://www.r-project.org/">R (> 3.0)</a>
        <?php
          switch($dist) {
            case "Ubuntu":
            case "Debian":
              echo ' - this is available via <code>apt-get install r-base r-base-dev</code>, or alternatively from the R website';
              break;
            default:
              echo ' - this is available from the R website';
          }
        ?>
      </li>

      <li>
          An XOrg Windowing System and GTK+ 2.0
          <?php
            switch($dist) {
              case "Ubuntu":
              case "Debian":
                echo ' - use your package manager (<code>apt-get</code>) to install these. They will be something like <code>xorg-dev</code> and <code>libgtk2.0-dev</code> - search your package list or try Google to find the necessary libraries';
                break;
              default:
                echo ' - use your package manager to find the necessary libraries, or try Google';
            }
          ?>
      </li>
      <?php if ($dist == "Ubuntu" || $dist == "Debian") { ?>
        <li>
          With R installed, you need to install several packages from CRAN:
          If you used <code>apt-get</code>, use the following:
          <span class='code'>$ apt-get install r-cran-rgtk2 r-cran-rodbc r-cran-rgl</span>
          Otherwise use <code>install.packages(c('RGtk2', 'RODBC', 'rgl'))</code> from R.
          </li>
      <?php } ?>
    </ul>
  </p>

  <p>
    Once you have the dependencies installed, go ahead and install iNZight from R:
  </p>
  <pre class='code'>
install.packages(c('iNZight', 'iNZightTools', 'iNZightPlots', 'iNZightMR',
                   'iNZightModules', 'iNZightTS', 'iNZightRegression'),
                 repos = c('http://r.docker.stat.auckland.ac.nz/R', 'https://cran.rstudio.com'))</pre>
  <p>
    You may need to trial-and-error the installation, as some of the dependencies may require libraries that are present on some distributions/versions, but not others. R will warn you that these weren't found, and you can install them with your package manager.
  </p>

  <div class="label space-above">Updating iNZight</div>
  <p>
    iNZight is maintained as an R package, so you can just use the usual <code>update.packages()</code> to update. Remember to specify the repository when you do:
  </p>
  <pre class='code'>update.packages(repos = 'http://r.docker.stat.auckland.ac.nz/R')</pre>

  <div class="label space-above">Installing VIT</div>
  <p>
    VIT is also available as an R package on the same repositoy. However, the way the animation works does not suit the graphics devices provided on Linux, so we suggest you use Windows for exploring the VIT module.
  </p>

  <p>If you do want to install it under Linux, however, just use the following:</p>
    <pre class='code'>
install.packages('vit' repos = c('http://r.docker.stat.auckland.ac.nz/R', 'https://cran.rstudio.com'))</pre>

  <?php } ?>
