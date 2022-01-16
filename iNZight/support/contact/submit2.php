<?php
echo "here";


// THE EMAIL ADDRESS TO SEND BUG REPORTS TO:
if ($p["inzight_version"] == "lite") {
  $sendto = "inzight_support@stat.auckland.ac.nz"
} else {
  $sendto = "inzight_support@stat.auckland.ac.nz";
}

// some filters
function clean_num($a)
{
  return filter_var($a, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}
function clean_str($a)
{
  return filter_var($a, FILTER_SANITIZE_SPECIAL_CHARS);
}
function clean_email($a)
{
  return filter_var($a, FILTER_SANITIZE_EMAIL);
}
