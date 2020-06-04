<?php

$rel = "../../";
$baseCrumb = "User Guides";

$contents = json_decode(file_get_contents("contents.js"));
$topic = "data_options";

require_once($rel . 'assets/includes/magic_index.php');
