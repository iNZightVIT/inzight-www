<?php

$data = $_REQUEST;

// write info to file
$info = array(
  "preview_text" => $data['preview'],
  "subject"      => $data['subject']
);
file_put_contents("newMailerInfo.json", json_encode($info));

// write body to file
$f = fopen("newmailer.Md", "w");
fwrite($f, $data['body']);
fclose($f);

?>
