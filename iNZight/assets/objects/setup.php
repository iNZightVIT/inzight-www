<?php
  $baseURL = "https://www.stat.auckland.ac.nz/~wild/iNZight/";   // This should be the main host ...
  $download_dir = "downloads/";
  $cloud_URL = "https://d3df31qg0t49uu.cloudfront.net/";
  $include_secondary_links = true;
  $cloud_as_main = true;  // if TRUE, the *main* links will point to the cloud files

  $download_links = array(
    "Windows" => "iNZightVIT-latest-zipfile.zip",
    "osx"     => "iNZightVIT-latest-osx.dmg",
    "osx-ml"  => "iNZightVIT-latest-osx-ml.pkg",
    "osx-sl"  => "iNZightVIT-latest-osx-sl.zip",
    "osx-man" => "iNZightVIT-latest-osx.zip",
    "osx-ml-man" => "iNZightVIT-latest-osx-sl.zip",

    // cloud links --- if not available, don't use!
    "Windows_cloud" => true,
    "osx_cloud" => true,
    "osx-ml_cloud" => true,
    "osx-sl_cloud" => true,
    "osx-man_cloud" => false, // not implemented ...
    "osx_ml-man_cloud" => false, // not implemented ...

    "xquartz" => "http://xquartz.macosforge.org/downloads/SL/XQuartz-2.7.7.dmg",
    "gtk-2.18" => "http://r.research.att.com/libs/GTK_2.18.5-X11.pkg",
    "gtk-2.24" => "http://r.research.att.com/libs/GTK_2.24.17-X11.pkg"
  );

  $inzight_version = "2.4";
  $release_date    = "12 October 2015";

  $inzight_online_link = "http://docker.stat.auckland.ac.nz/spawn/?application=lite";
?>
