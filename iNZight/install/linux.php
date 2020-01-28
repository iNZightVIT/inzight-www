<?php
$rel = "../";
require_once($rel . 'assets/objects/setup.php');
require_once($rel . 'assets/functions/filesize.php');
?>

<hr>

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
    <a href="https://www.r-project.org/">R (>= 3.3)</a>
    &mdash; the bash installer assumes R is installed and can be run using <code>R</code>
  </li>
  <li>
    Some other libraries that may be required (dependending on your system):<br>
    <code>libxml2-dev</code>,
    <code>r-cran-rodbc</code>,
    <code>r-cran-rgtk2</code>
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

<pre>install.packages(c('iNZight', 'vit'), dependencies = TRUE,
           repos = c('<?php echo $inzight_repository_link;?>', 'https://cran.rstudio.com'),
           Ncpus = 1) # if you have cores to spare, increase this to speed up install time</pre>

            <p>
              The <code>dependencies = TRUE</code> argument is recommended, as it will ensure you get the full set of iNZight packages (<code>Depends</code>, <code>Imports</code>, <em>and</em> <code>Suggests</code>), some of which include colour palettes and add-on modules.
            </p>
            <p>
              You may also switch <code>https://cran.rstudio.com</code> with your preferred CRAN mirror.
            </p>

            <p><strong>To run iNZight:</strong></p>
<pre>library(iNZight)
iNZight()</pre>

            <p><strong>To run VIT:</strong></p>
<pre>library(vit)
iNZightVIT()</pre>
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


