<?php
  $baseURL = "https://inzight.nz/";   // This should be the main host ...
  $download_dir = "https://r.docker.stat.auckland.ac.nz/downloads/";
  $amazon = "https://futurelearn.s3.amazonaws.com/";
  $include_secondary_links = false;
  $cloud_as_main = false;  // if TRUE, the *main* links will point to the cloud files

  $download_links = array(
    "Windows" => "iNZightVIT-installer.exe",
    "osx"     => "iNZightVIT-mac.dmg",
    // "osx-self"=> "iNZightVIT-selfinstall.tar.bz2",

    // // cloud links --- if not available, don't use!
    // "Windows_cloud" => false,
    // "osx_cloud" => false,
    // "osx-ml_cloud" => false,
    // "osx-sl_cloud" => false,
    // "osx-man_cloud" => false, // not implemented ...
    // "osx_ml-man_cloud" => false, // not implemented ...

    "xquartz" => "http://xquartz.macosforge.org/",
    "gtk-2.18" => "http://mac.r-project.org/libs/GTK_2.18.5-X11.pkg",
    "gtk-2.24" => "http://mac.r-project.org/libs/GTK_2.24.17-X11.pkg",
    "r3.3" => "http://cran.stat.auckland.ac.nz/bin/macosx/R-3.3.3.pkg",
    "linux" => "https://raw.githubusercontent.com/iNZightVIT/dev/master/scripts/install_inzight.sh"
  );

  $inzight_version = "4.2.0";
  $release_date    = " 8 February 2022";

  $nightly_version = "4.2.0.20220717";
  $nightly_date    = "17 July 2022";

  $inzight_online_link = "http://lite.docker.stat.auckland.ac.nz/";
  $inzight_repository_link = "http://r.docker.stat.auckland.ac.nz";
?>
