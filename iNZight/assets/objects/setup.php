<?php
  $baseURL = "https://www.stat.auckland.ac.nz/~wild/iNZight/";   // This should be the main host ...
  $download_dir = "downloads/";
  $cloud_URL = "";
  $include_secondary_links = false;
  $cloud_as_main = false;  // if TRUE, the *main* links will point to the cloud files

  $download_links = array(
    "Windows" => "iNZightVIT-installer.exe",
    "osx"     => "iNZightVIT-latest-osx.dmg",
    "osx-ml"  => "iNZightVIT-latest-osx-ml.pkg",
    "osx-sl"  => "iNZightVIT-latest-osx-sl.zip",
    "osx-man" => "iNZightVIT-latest-osx.zip",
    "osx-ml-man" => "iNZightVIT-latest-osx-sl.zip",

    // cloud links --- if not available, don't use!
    "Windows_cloud" => false,
    "osx_cloud" => false,
    "osx-ml_cloud" => false,
    "osx-sl_cloud" => false,
    "osx-man_cloud" => false, // not implemented ...
    "osx_ml-man_cloud" => false, // not implemented ...

    "xquartz" => "http://xquartz.macosforge.org/downloads/SL/XQuartz-2.7.7.dmg",
    "gtk-2.18" => "http://r.research.att.com/libs/GTK_2.18.5-X11.pkg",
    "gtk-2.24" => "http://r.research.att.com/libs/GTK_2.24.17-X11.pkg"
  );

  $inzight_version = "3.0";
  $release_date    = "10 February 2015";

  $inzight_online_link = "http://docker.stat.auckland.ac.nz/";
  $inzight_repository_link = "http://r.docker.stat.auckland.ac.nz/R";
?>
