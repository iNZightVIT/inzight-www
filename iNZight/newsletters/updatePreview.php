<?php

$url = "http://docker.stat.auckland.ac.nz/R/templates/newsletters/";
$data = $_REQUEST;

// write info to file
$info = array(
  "preview_text" => $data['preview'],
  "subject"      => $data['subject']
);
file_put_contents($url . "newMailerInfo.json", json_encode($info));

// write body to file
$f = fopen($url . "newmailer.Md", "w");
fwrite($f, $data['body']);
fclose($f);

?>
