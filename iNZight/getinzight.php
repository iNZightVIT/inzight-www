<?php
$rel = "./";
require_once($rel . 'assets/objects/setup.php');
require_once($rel . 'assets/functions/filesize.php');

// Try to detect platform
$auto = false;
$os_version = 0;  // default to 0
$cloud_dl = false;

$operating_systems = array(
  "windows" => "Windows", "mac" => "Mac", "linux" => "Linux"
);

$install_only = isset($_GET["inst"]);
$link_base = "./" . $download_dir;
$linkBase = $baseURL . $download_dir;

$selectedOS = "";
$selectedVersion = "";
if (isset($_GET["os"])) {
  $selectedOS = $_GET["os"];
  if ($selectedOS == "mac" && isset($_GET["v"])) {
    $selectedVersion = $_GET["v"];
  }
}

// Do some automation


// The main page starts here:
require_once('assets/includes/1-top_matter.php');
require_once('assets/includes/2-header.php');

if ($auto) {
  echo "Auto download";
} else {
?>

<div class="container">


  <div class="col-md-12 col-lg-10 col-lg-push-1" id="osSelect">

    <?php if ($selectedOS == "" ||
              ($selectedOS == "mac" && $selectedVersion == "")) { ?>
    <div class="checkbox" id="campusBox">
      <label>
        <input type="checkbox" id="onCampus">
        Check this box if downloading from <strong>University of Auckland campus</strong>.
      </label>
      <div style="margin-bottom: 2em"></div>
    </div>
    <?php } ?>

    <?php if ($selectedOS == "") { ?>
    <div class="row">
      <?php
        foreach ($operating_systems as $os => $osname) {
          ?>
            <div class="col-md-4 text-center">
                <a href="?os=<?php echo $os; ?>" class="thumbnail os-icon os-icon-<?php echo $os; ?>" data-os="<?php echo $os; ?>"
                   data-filename="<?php echo $download_links["Windows"]; ?>">
                  <img src="img/<?php echo $os; ?>-icon.png" alt="Windows">
                  <div class="caption">
                    <h4><?php echo $osname; ?></h4>

                    <small class="os-details">
                      <?php
                        switch ($os) {
                          case "windows":
                            echo "<span class='glyphicon glyphicon-circle-arrow-down'></span> Download Installer (" .
                              getFileSize($link_base . $download_links["Windows"]) . ")";
                            break;
                          case "mac":
                            echo "Select Installation Type";
                            break;
                          case "linux":
                            echo "Installation Instructions";
                        }
                      ?>
                    </small>
                  </div>
                </a>
            </div>
          <?php
        }
      ?>
    </div>


    <div class="legacy">
      <p>
        Check the <a href="user_guides/basics/getting_started.php">getting started</a> page for a video
        showing the installation process on Mac.
      </p>
      <hr>
      <h5>Prefer to go Legacy?</h5>

      <p><strong>Last stable release: 2.5.1 (released 16 November, 2015)</strong></p>
      <ul>
        <li>
          <a href="downloads/iNZightVIT-2.5.1-zipfile.zip">iNZightVIT Windows Zipfile</a>
          (<?php echo getFileSize($link_base . "iNZightVIT-2.5.1-zipfile.zip"); ?>)
        </li>
        <li>
          <a href="downloads/iNZightVIT-2.5.1-osx.dmg">iNZightVIT Mac Installer (OS X 10.9 or later)</a>
          (<?php echo getFileSize($link_base . "iNZightVIT-2.5.1-osx.dmg"); ?>)
        </li>
        <li>
          <a href="downloads/iNZightVIT-2.5.1-osx-ml.pkg">iNZightVIT Mac Installer (OS X 10.6&ndash;10.8)</a>
          (<?php echo getFileSize($link_base . "iNZightVIT-2.5.1-osx-ml.pkg"); ?>)
        </li>
      </ul>
    </div>
    <?php } ?>
  </div>


  <div id="osDesc">
    <!-- ###################################################################### WINDOWS -->
    <div class="col-md-12 col-lg-10 col-lg-push-1 os-desc<?php echo ($selectedOS == "windows" ? " visible animate-up" : ""); ?>"
        id="osDesc_windows">
      <?php if ($selectedOS == "windows") { ?>
        <h4>Download iNZightVIT for Windows</h4>

        <a class="original" href="<?php echo $link_base . $download_links["Windows"]; ?>"><?php echo $linkBase . $download_links["Windows"]; ?></a>
      <?php } else { ?>
      <h4>Great! Your download should start automatically.</h4>

      <small class="backuplink">
        If not, use this link:
        <a class="original" href="<?php echo $link_base . $download_links["Windows"]; ?>"><?php echo $linkBase . $download_links["Windows"]; ?></a>
        <a class="alt" href="<?php echo $amazon . $download_links["Windows"]; ?>"><?php echo $amazon . $download_links["Windows"]; ?></a>
      </small>
      <?php } ?>

      <hr>
      <?php include('instructions/install_windows.php'); ?>
    </div>

    <!-- ###################################################################### MAC -->
    <div class="col-md-12 col-lg-10 col-lg-push-1 os-desc<?php echo ($selectedOS == "mac" ? " visible animate-up" : ""); ?>" id="osDesc_mac">

      <?php if ($selectedVersion == "") { ?>
      <div class="row space-above">
        <a href="?os=mac&v=full" data-file="full" data-filename="<?php echo $download_links["osx"]; ?>"
           class="col-md-8 col-md-offset-2 thumbnail text-center os-icon os-icon-macfull alert alert-info">
          <div class="caption">
            <h4>iNZightVIT Full Installer</h4>
            <p>
              iNZightVIT Application Folder + dependencies
            </p>
            <p>
              Choose this if you are <strong>new to iNZight</strong>.
            </p>
            <small class="os-details">
              <span class="glyphicon glyphicon-circle-arrow-down"></span>
              Download Installer
              (<?php echo getFileSize($link_base . $download_links["osx"]); ?>)
            </small>
          </div>
        </a>

        <a href="?os=mac&v=self" data-file="self" data-filename="<?php echo $download_links["osx-self"]; ?>"
           class="col-md-8 col-md-offset-2 thumbnail text-center os-icon os-icon-macself alert alert-warning">
          <div class="caption">
            <h4>iNZightVIT Application Folder</h4>
            <p>
              <strong>No dependencies</strong> &mdash; you'll need to install them yourself<br>
              (details and links provided in README file).
            </p>
            <p>
              Choose this if you are <strong>upgrading an existing installation</strong> of iNZight,<br>
              or if you are an <strong>R user</strong>.
            </p>
            <small class="os-details">
              <span class="glyphicon glyphicon-circle-arrow-down"></span>
              Download Installer
              (<?php echo getFileSize($link_base . $download_links["osx-self"]); ?>)
            </small>
          </div>
        </a>
      </div>

      <div class="depreciation-notice">
        <hr>
        <h4 class="panel-title">OS X 10.8 and earlier</h4>
        <p>
          Unfortunately, we no longer support iNZight on OS X 10.8 and earlier.
        </p>
        <p>
          If you are still running one of these versions of OS X, you'll need to install iNZight version 2.5:
        </p>
        <p>
          <a href="downloads/iNZightVIT-2.5.1-osx-ml.pkg">iNZightVIT 2.5 Installer for OS X 10.6&ndash;10.8</a>
          (<?php echo getFileSize($link_base . "iNZightVIT-2.5.1-osx-ml.pkg"); ?>)
        </p>

      </div>
      <?php } ?>

      <div id="macInstall_full"<?php echo ($selectedVersion == "full") ? " class='visible animate-up'" : "" ?>>
        <?php if ($selectedVersion == "full") { ?>
          <h4>Download iNZightVIT All-in-one</h4>
          <a class="original" href="<?php echo $link_base . $download_links["osx"]; ?>"><?php echo $linkBase . $download_links["osx"]; ?></a>
        <?php } else { ?>
        <h4>Awesome! iNZight is on its way to your Downloads folder.</h4>

        <p class="backuplink">
          If it doesn't happen automatically, use this link:<br>
          <a class="original" href="<?php echo $link_base . $download_links["osx"]; ?>"><?php echo $linkBase . $download_links["osx"]; ?></a>
          <a class="alt" href="<?php echo $amazon . $download_links["osx"]; ?>"><?php echo $amazon . $download_links["osx"]; ?></a>
        </p>
        <?php } ?>

        <hr>
        <?php include('instructions/install_mac.php'); ?>
      </div>


      <div id="macInstall_self"<?php echo ($selectedVersion == "self") ? " class='visible animate-up'" : "" ?>>
        <?php if ($selectedVersion == "self") { ?>
          <h4>Download iNZightVIT Application Folder</h4>
          <a class="original" href="<?php echo $link_base . $download_links["osx"]; ?>"><?php echo $linkBase . $download_links["osx"]; ?></a>
        <?php } else { ?>
        <h4>Awesome! The download should be done by now.</h4>

        <small>
          If it didn't start automatically, use this link:
          <a href="<?php echo $link_base . $download_links["osx-self"]; ?>"><?php echo $linkBase . $download_links["osx-self"]; ?></a>
        </small>
        <?php } ?>

        <hr>

        <p>
          Once the download completes,
          <ol>
            <li>If it hasn't done so automatically, extract the file by double-clicking <code><?php echo $download_links["osx-self"]; ?></code></li>
            <li>Drag the iNZightVIT folder to Applications.</li>
            <li>Ensure you have the necessary dependencies, listed below.</li>
            <li>In <strong>Applications</strong> &gt; <strong>iNZightVIT</strong>,
            start iNZight by double-clicking the icon.
            The necessary R packages will automatically be installed the first time you run iNZight.
            </li>
          </ol>
        </p>

        <div class = "alert alert-warning">
          <p><strong>iNZight not yet supported with R 3.4.0 on macOS El Captian or later</strong></p>
          <p>
            Due to significant changes in the latest release of R (3.4.0),
            the <a href="https://cran.r-project.org/package=RGtk2">dependency RGtk2</a>
            is not yet available to users running macOS El&nbsp;Capitan or later (10.11+).
            If you have R 3.4, you can install an older version (we recommend 3.3.3),
            and then download the
            <a href="https://r.research.att.com/#other">RSwitch App</a>
            to change versions of R <strong>before</strong> running iNZight.
          </p>
          <p>
            Of course, if you have installed the necessary command line tools to compile R packages with R 3.4.0,
            you should be OK installing iNZight and it's dependencies.
          </p>
        </div>

        <hr>
        <h4>
          Dependencies
          <p class="pull-right">
            <!-- <small>On Twitter or Github?</small> -->
            <a href="https://gitter.im/iNZightVIT/Lobby">
              <img src="https://badges.gitter.im/iNZightVIT/lobby.png" alt="Get help on Gitter" />
            </a>
          </p>
        </h4>

        <p>
          To run iNZight, you'll need the following dependencies.
          If you've had iNZight running on your machine before,
          you'll already have GTK and XQuartz.
        </p>

        <ul>
          <li><a href="<?php echo $download_links["gtk-2.24"]; ?>">GTK2+</a> (direct download link)</li>
          <li><a href="<?php echo $download_links["xquartz"]; ?>">XQuartz</a></li>
          <li><a href="https://www.r-project.org/">R (>= 3.0)</a> NOTE: R 3.4.0 not yet supported (see note above)</li>
        </ul>
      </div>
    </div>

    <!-- ###################################################################### LINUX -->
    <div class="col-md-12 col-lg-10 col-lg-push-1 os-desc<?php echo ($selectedOS == "linux" ? " visible animate-up" : ""); ?>" id="osDesc_linux">

      <h3>
        Installing iNZight on Linux
        <p class="pull-right">
          <!-- <small>On Twitter or Github?</small> -->
          <a href="https://gitter.im/iNZightVIT/Lobby">
            <img src="https://badges.gitter.im/iNZightVIT/lobby.png" alt="Get help on Gitter" />
          </a>
        </p>
      </h3>

      <p>
          iNZight runs on most common Linux systems, including all Debian-based distributions
          (Ubuntu, Linux Mint) and any others <strong>on which you can install R</strong>.
          The installer shown below only works on Ubuntu and perhaps some other debian-based systems;
          if you have another distribution, you'll need to install R yourself and install iNZight
          as an R package.
      </p>

      <hr>
      <h4>Dependencies</h4>

      <p>
        You'll first need to make sure you have the necessary dependencies.
        Exactly what these are depends on your specific version of linux.
      </p>

      <ul>
        <li>
          <strong>GTK2+</strong>
          &mdash; use your package manager (Google should be able to help)
          <p>
            Ubuntu 14.04 or later, Linux Mint: <code>apt-get install libgtk2.0-dev</code>
          </p>
        </li>
        <li>
          <strong>XOrg Windowing System</strong>
          &mdash; package manager (and/or Google) again (Note: this may be installed already)
          <p>
            Ubuntu 14.04 or later, Linux Mint: <code>apt-get install xorg-dev</code>
          </p>
        </li>
        <li>
          <a href="https://www.r-project.org/">R (>= 3.2)</a>
          &mdash; the bash installer assumes R is installed and can be run using <code>R</code>
        </li>
        <li>
          Some other libraries that may be required (dependending on your system):<br>
          <code>libxml2-dev</code>
        </li>
      </ul>

      <hr>
      <h4>Install</h4>

      <p>
          You can choose between <em>cloning a repository and building iNZight automatically</em> (Ubuntu, Debian only),
          <em>install iNZight manually as an R package</em>, or <em>install under WINE</em>.
      </p>

      <div>
          <ul class="nav nav-tabs" role="tablist" id="linuxTabs">
              <li role="presentation" class="active"><a href="#install-git" role="tab" data-toggle="tab">Installer</a></li>
              <li role="presentation"><a href="#install-manual" role="tab" data-toggle="tab">Manual</a></li>
              <li role="presentation"><a href="#install-wine" role="tab" data-toggle="tab">WINE</a></li>
          </ul>

          <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="install-git">
                  <p>
                      The iNZightVIT Installer for Linux will create a directory on your machine
                      and install the required packages there, as well as provide executables
                      that will allow you to start iNZight or VIT easily.
                  </p>

                  <ol>
                      <li><strong>Clone the repository</strong>
                          <ul>
                              <li><strong>If you have <code>git</code> installed</strong>, just run
<p><pre>git clone https://github.com/iNZightVIT/linux.git iNZightVIT</pre></p>
                                  This will create an <code>iNZightVIT</code> directory.
                              </li>

                              <li><strong>If you don't have <code>git</code></strong>, you'll need to download
                              the zipped archive. For example, using <code>curl</code>
<p><pre>curl -fsSL https://github.com/iNZightVIT/linux/archive/master.zip -o iNZightVIT.zip</pre></p>
                                  Then unzip it (setting the name to iNZightVIT) and delete the ZIP file:
<p><pre>unzip iNZightVIT.zip && rm iNZightVIT.zip && mv linux-master iNZightVIT</pre></p>
                              </li>
                          </ul>
                      </li>

                      <li><strong>Enter the iNZightVIT directory and run <code>make</code></strong>
<p><pre>cd iNZightVIT
make</pre></p>
                        Now, to run iNZight or VIT, simply navigate to the directory and start it:
<p><pre>cd iNZightVIT
./inzight  # to start iNZight
./vit      # to start VIT
./update   # to update iNZightVIT</pre></p>
                      </li>

                      <li><strong>(Optional) Install iNZight to <code>/usr/local/bin</code></strong>
<p><pre>sudo make install

# to undo this, run
sudo make uninstall</pre></p>

                          This allows you to run iNZight from anywhere on your computer, simply by running
                          <code>inzight</code> or <code>vit</code> from the command line,
                          without having to navigate to the iNZightVIT folder.
                      </li>

                      <li class="space-above"><strong>To uninstall iNZightVIT</strong>
                          just delete the iNZightVIT folder (if you ran <code>make install</code>, be sure to <code>make uninstall</code> first).
                      </li>
                  </ol>

                  <hr>
                  <div class="panel panel-danger">
                    <div class="panel-heading">
                      <h5 class="panel-title">Disclaimer: Still in testing</h5>
                    </div>
                    <div class="panel-body">
                      <p>
                        The install script has been tested on <strong>Ubuntu 16.04</strong>.
                        I don't think there's anything harmful in it, but feel free to check the source first.
                      </p>
                      <p>
                        If you have any issues, do let me know at <a href="mailto:inzight_support@stat.auckland.ac.nz">inzight_support@stat.auckland.ac.nz</a>.
                        If you are clever and can make the script better, feel free to submit a pull request.
                      </p>
                    </div>
                  </div>
                  <div class="panel panel-warning">
                    <div class="panel-heading">
                      <h5 class="panel-title">Getting error messages?</h5>
                    </div>
                    <div class="panel-body">
                      <p>
                        <strong>Missing certificates:</strong>
                        <code>curl: (77) error setting certificate verify locations</code><br>
                        You need to install <code>ca-certificates</code> (using <code>apt-get install</code> on debian-based OS).<br>
                        On some distros (such as Elementary OS) you may need to tell curl where to find them.
                        Run this in a terminal:
                        <pre>export CURL_CA_BUNDLE=/etc/ssl/certs/ca-certificates.crt</pre>
                      </p>
                    </div>
                  </div>

              </div>

              <div role="tabpanel" class="tab-pane" id="install-manual">
                  <p>
                    If you use R yourself, you may prefer to install iNZight yourself.
                  </p>

<pre>install.packages('iNZight', dependencies = TRUE,
                 repos = c('http://r.docker.stat.auckland.ac.nz/R', 'https://cran.rstudio.com'))</pre>

                  <p>
                    The <code>dependencies = TRUE</code> argument is recommended, as it will ensure you get the full set of iNZight packages (<code>Depends</code>, <code>Imports</code>, <em>and</em> <code>Suggests</code>), some of which include colour palettes and add-on modules.
                  </p>
                  <p>
                    You may also switch <code>https://cran.rstudio.com</code> with your preferred CRAN mirror.
                  </p>
              </div>

              <div role="tabpanel" class="tab-pane" id="install-wine">
                  <p>
                      You can install and run iNZight for Windows via <a href="https://www.winehq.org/">WINE</a>,
                      without needed any additional dependencies (except for WINE, of course).
                      If you don't have WINE installed already, follow the instructions on their website.
                  </p>

                  <p>
                      Once you have WINE installed,
                      download the <a href="getinzight.php?os=windows">iNZightVIT Windows Installer</a>
                      and run it with WINE, and follow the Windows installation instructions.
                  </p>
              </div>
          </div>
      </div>
<!--
      <hr>
      <h4>Run iNZight</h4>

      <p>
        To start iNZight, go to the iNZightVIT directory (<code>~/iNZightVIT</code> by default)
        and run <code>./start_inzight</code>.
      </p>

      <p>
        If you would like to create a global <code>inzight</code> command, just run
        the following command from the iNZightVIT directory
        (<code>~/iNZightVIT</code> by default):
        <pre>make install</pre>
      </p>

      <hr>
      <h4>Update</h4>



      <hr>
      <h4>Uninstall</h4>

      <p>
        If you no longer want iNZight, just run
        <pre>cd ~/iNZightVIT &amp;&amp; make uninstall</pre>
        (You might need to add <code>sudo</code> before <code>make uninstall</code>).<br>
        This will delete the <code>inzight</code> command (if you made one)
        and delete the <code>~/iNZightVIT</code> directory.
      </p> -->

    </div>

  </div>

</div>

<?php
}
?>

<script src="js/getinzight.js"></script>


<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
