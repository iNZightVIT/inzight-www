<?php

function hashValue($input) {
  $output = sha1($input);
  return($output);
}
