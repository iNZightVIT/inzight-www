<?php
echo "here";


// THE EMAIL ADDRESS TO SEND BUG REPORTS TO:
if ($p["inzight_version"] == "online") {
  $sendto = "inzightlite_support@stat.auckland.ac.nz";
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

$reason = clean_str($p["message_reason"]);
switch($reason) {
  case "General":
    $subject = "[iNZight General Enquiry]";
    break;
  case "Technical":
    $subject = "[iNZight Technical Enquiry]";
    break;
  case "Feedback":
    $subject = "[iNZight User Feedback]";
    break;
  default:
    $subject = "[iNZight]";
}

$inz = $p["inzight_version"];
$inzdet = clean_str($p["inzight_version_detail_val"]);
switch($inz) {
  case "windows":
    $os = " Windows " . $inzdet;
    $subject .= $os;
    break;
  case "mac":
    $os = " Mac OS X 10." . $inzdet;
    $subject .= $os;
    break;
  case "online":
    $subject .= " Lite";
    break;
  case "ruser":
    $os = $inzdet;
    $subject .= " Manual R Installation";
    break;
}

$ver = clean_str($p["inzight_version_number"]);
if (!preg_match("/^v/", $ver) & $inz != "online") {
  $ver = "v" . $ver;
}
if ($inz != "online") {
  $subject .= " - iNZight " . $ver;
}


$name = clean_str($p["user_name"]);
$email = clean_str($p["user_email"]);

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ' . $sendto . "\r\n";
if (strlen($email) > 0) {
  if (strlen($name) > 0) {
    $headers .= "Reply-To: " . $name . " <" . $email . ">" . "\r\n";
  } else {
    $headers .= 'Reply-To: ' . $email . "\r\n";
  }
}


$message  = "<div style='font-family: sans-serif; width: 100%; font-size: 14px'>";

$message .= "<div style ='padding: 1em 0.5em'>";
$message .= nl2br($p["message_content"]);
$message .= "</div>";

$message .= "<div style='font-size: 0.8em; background: #ccc; padding: 0.5em; line-height: 2em'>";
$message .= "<b>Technical Information</b><br>";
$message .= "Sent on " . date("l jS \of F Y, h:i:s A") . "<br>";
if (strlen($name) > 0) {
  $message .= "Name: " . $name . "<br>";
}
if (strlen($email) > 0) {
  $message .= "Reply to: " . $email . "<br>";
} else {
  $message .= "No reply email supplied.<br>";
}

if ($inz == "online") {
  $message .= "iNZight Lite accessed from <b>" . $ver . "</b> using <b>" . $inzdet . "</b><br>";
} else {
  $message .= "Installation Info: " . $os . ", iNZight " . $ver . "<br>";
}

$s = $_SERVER;

$message .= "<br><b>Debugging Info</b><br>";
$message .= "User Agent: " . $s["HTTP_USER_AGENT"] . "<br>";
$message .= "HTTP Language: " . $s["HTTP_ACCEPT_LANGUAGE"] . "<br>";

$message .= "</div>";
$message .= "</div>";


if (mail($sendto, $subject, $message, $headers)) {
  header("Location: success.php");
  die("Message sent. Thank you.");
}

$msg  = "There was an issue sending the bug report.\n\nPlease manually sent this email:\n\n";
$msg .= "To: " . $sendto . "\n";
$msg .= "Subject: " . $subject . "\n\n";
$msg .= "Email body (copy and paste):\n\n" . $message;


?>

<form method="post" action="fail.php" id="form">
  <textarea name="msg"><?php echo $msg; ?></textarea>
  <input type="submit" value="post" />
</form>
<script language="javascript">
  document.getElementById("form").submit();
</script>
