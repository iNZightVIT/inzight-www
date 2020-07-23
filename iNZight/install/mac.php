<?php
$rel = "../";
require_once($rel . 'assets/objects/setup.php');
require_once($rel . 'assets/functions/filesize.php');
?>

<hr>


<h3>Running iNZight on macOS</h3>

<p>
  Due to breaking changes in recent versions of macOS, and the lack of further development
  of Gtk2+ (one of our major dependencies), we are no longer able to provide an installer
  for iNZight on macOS. The following alternatives are currently available:
</p>


<div>
    <ul class="nav nav-tabs" role="tablist" id="linuxTabs">
        <li role="presentation" class="active"><a href="#macos-lite" role="tab" data-toggle="tab">iNZight Lite</a></li>
        <!--<li role="presentation"><a href="#macos-wine" role="tab" data-toggle="tab">Wine</a></li>-->
        <!--<li role="presentation"><a href="#macos-r" role="tab" data-toggle="tab">Homebrew + R</a></li>-->
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="macos-lite">
          <p>
            Our online version is being actively maintained and, as much as possible,
            kept as similar to the desktop version as possible.
          </p>

          <p><a href="https://lite.docker.stat.auckland.ac.nz">Try iNZight Lite</a></p>
        </div>

        <div role="tabpanel" class="tab-pane" id="macos-wine">
          <p>
            It is possible to run iNZight for Windows on your mac by first installing
            <a href="https://www.winehq.org/">Wine</a>,
            a free program for running Windows software on macOS.
          </p>

          <h4>1. Download and install XQuartz and Wine</h4>

          <p>
            Head to the following pages to download XQuartz and Wine for macOS.
          </p>

          <ul>
            <li><a href="https://xquartz.org">XQuartz</a></li>
            <li><a href="https://wiki.winehq.org/MacOS">Wine</a>
              (you want the installer for "Wine Stable")</li>
          </ul>

          <p>Run the installers for each of the programs before continuing.</p>

          <hr>
          <h4>2. Download the Windows iNZight Installer</h4>

          <p>
            Download the installer below.
            Be sure to save it somewhere you can easily find. On most browsers,
            this will be in your Downloads folder.
          </p>

          <ul>
            <li><a href="<?php echo $download_dir . $download_links["Windows"]; ?>">
              <?php echo $download_links["Windows"]; ?></a></li>
          </ul>

          <hr>
          <h4>3. Install iNZight through Wine</h4>

          <p>
            Open up the Terminal on mac (use spotlight search, <kbd><kbd>&#8984;</kbd> + <kbd>SPACE</kbd></kbd>)
            and paste the following:
          </p>
          <p><pre>mkdir ~/Documents/iNZightVIT
cd ~/Documents/iNZightVIT
wine64 ~/Downloads/iNZightVIT-WIN.exe</pre></p>

          <p>
            Wait while Wine initialises and then follow the prompts to install iNZight.
          </p>

          <hr>
          <h4>Start iNZight</h4>
          <p>To start iNZight, open a Terminal (see step 3 above) and enter the following:</p>
          <p><pre>cd ~/Documents/iNZightVIT
wine64 start iNZight.lnk</pre></p>

        </div>

        <div role="tabpanel" class="tab-pane" id="macos-r">

          <p>
            It is possible to run iNZight using R installed via Homebrew.
            The basic steps are given below, but this is only recommend
            for users who are comfortable with using the command line.
            This makes use of Yihui Xie's <a href="https://macos.rbind.io/">R package repository</a>.
          </p>

          <ul>
            <li>Download and install Homebrew from <a href="https://brew.sh/">https://brew.sh/</a></li>

            <li>Use Homebrew to install R and gtk
              <p><pre>brew cask install r
brew install gtk+
</pre></p>
            </li>

            <li>Start R from Terminal:
              <p><pre>r</pre></p>
            </li>

            <li>Install iNZight by running the following in R:
              <p><pre>options(repos = c(
  inzight = 'https://r.docker.stat.auckland.ac.nz',
  CRANextra = 'https://macos.rbind.io',
  CRAN = 'https://cran.rstudio.com'
))

install.packages(c('iNZight', 'vit'), dependencies = TRUE)
</pre></p>
            </li>

            <li>Run iNZight:
              <p><pre>library(iNZight)
iNZight()</pre></p>
            </li>

          </ul>

        </div>
    </div>
</div>
