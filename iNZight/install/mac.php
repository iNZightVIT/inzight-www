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
        <!--<li role="presentation"><a href="#macos-lite-local" role="tab" data-toggle="tab">Install Lite locally</a></li>-->
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

        <div role="tabpanel" class="tab-pane" id="macos-lite-local">
          <p>
            It is possible to install and run iNZight Lite locally. This requires that you install R along with some necessary pacakges, and download the Lite application files.
          </p>

          <h4>1. Install R version 4.2</h4>
          <p>
            R for macOS can be downloaded and install from CRAN:
            <a href="https://cran.r-project.org/">https://cran.r-project.org/</a>.
          </p>
          <p>
            <strong>Important:</strong> You must install version 4.2 and <em>not</em> the latest version (currently 4.3). The direct link is:
            <a href="https://cran.r-project.org/bin/macosx/base/R-4.2.3.pkg">https://cran.r-project.org/bin/macosx/base/R-4.2.3.pkg</a>.
          </p>
          <p>
              If you prefer to navigate to the file yourself, head to the website above and click <strong>Download R for macOS</strong>. On the <strong>R for macOS</strong> page, scroll to the bottom and click the link to <strong>base</strong>. This will take you to a page of links: click the link for <strong>R-4.2.3.pkg</strong>.
          </p>
          <p>
            After downloading, run the R package installer and follow the step-by-step instructions. Once finished, you'll have R installed on your machine.
          </p>

          <h4>2. Install R dependencies</h4>
          <p>
            Start R from <strong>Applications > R</strong>.
          </p>
          <p>
            You should be presented with an R Console, or a mostly blank window with a place to type into (after the &gt;).
          </p>
          <p>
            Copy and paste the following commands into R and press Enter to run them. This will install the named packages.
          </p>
          <p><pre>options(install.packages.compile.from.source = "never")
install.packages("remotes", repos = "https://cran.rstudio.com")
remotes::install_version("MatrixModels", "0.5-1")
install.packages(
  c(
    "iNZightPlots", "iNZightRegression",  "iNZightTS", "iNZightMR", "iNZightTools", "iNZightMaps",
    "GGally","RJSONIO", "sas7bdat", "shiny", "shinydashboard", "shinyjs", "shinyWidgets",
    "shinyalert", "shinycssloaders", "DT"
  ),
  repos = c("https://r.docker.stat.auckland.ac.nz", "https://cran.rstudio.com"),
  dependencies = TRUE
)</pre></p>

          <h4>3. Install the Lite application</h4>
          <p>
            Download and unzip the latest Lite application ZIP archive:
            <a href="https://github.com/iNZightVIT/Lite/archive/refs/heads/master.zip">https://github.com/iNZightVIT/Lite/archive/refs/heads/master.zip</a>. Extract the files and move the <strong>Lite-master</strong> folder to your Documents folder. <em>If you save them somewhere else, you'll need to adjust the path in the following step!!</em>.
          </p>

          <h4>4. Run iNZight Lite</h4>
          <p>
            Open R (launch it if you closed it earlier). Copy and paste the following:
          </p>
          <p><pre>shiny::runApp('~/Documents/Lite-master')</pre></p>
          <p>
            The app should open automatically in your browser. If not, you'll see the URL printed in the R Console, something like: <pre>Listening on http://127.0.0.1:7184</pre>.
          </p>

          <h4>4. Close once you're finished</h4>
          <p>
            When you've finished, simply close the R session (Command+C to stop the server, and Command+Q to quit R).
          </p>

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
