<?php

// THE EMAIL ADDRESS TO SEND BUG REPORTS TO:
if ($p["inzight_version"] == "online") {
  $sendto = "inzightlite_support@stat.auckland.ac.nz";
} else {
  $sendto = "inzight_support@stat.auckland.ac.nz";
}
$sendto = "tom.elliott@auckland.ac.nz";

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

// Random code for reference number:
$ref_no = date ('yz-His');
$subject .= " (ref #" . $ref_no . ")";

if ($sendto == "tom.elliott@auckland.ac.nz") {
  $subject .= " - TEST";
}


$name = clean_str($p["user_name"]);
$email = clean_str($p["user_email"]);

$boundary = md5(date('r', time()));

$attachment = '';

if ($p['screenshot']['error'] === 0) {
  $f_data = chunk_split(base64_encode(file_get_contents($p['screenshot']['tmp_name'])));
  $f_name = $p['screenshot']['name'];
  $attachment .= "--_1_$boundary
Content-Type: application/octet-stream; name=\"$f_name\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment
$f_data
";
}

if ($p['dataset']['error'] === 0) {
  $f_data = chunk_split(base64_encode(file_get_contents($p['dataset']['tmp_name'])));
  $f_name = $p['dataset']['name'];
  $attachment .= "--_1_$boundary
Content-Type: application/octet-stream; name=\"$f_name\"
Content-Transfer-Encoding: base64
Content-Disposition: attachment
$f_data
";
}

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .=
  (isset($attachment) ? "Content-type:multipart/mixed; boundary=\"_1_$boundary\";" : "Content-type:text/html;") .
  "\r\n";
if (strlen($email) > 0) {
  $headers_conf = $headers . "From: iNZight Support <" . $sendto . ">" . "\r\n";
  if (strlen($name) > 0) {
    $headers .= "Reply-to: "  . $name . " <" . $email . ">" . "\r\n";
  } else {
    $headers .= "Reply-to: " . $email . "\r\n";
  }
}
$headers .= "From: " . $sendto . "\r\n";

$message = "";
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

// $message .= "<br><b>Debugging Info</b><br>";
// $message .= "User Agent: " . $s["HTTP_USER_AGENT"] . "<br>";
// $message .= "HTTP Language: " . $s["HTTP_ACCEPT_LANGUAGE"] . "<br>";


// Additional log file info
if (isset($p['log_file']['content'])) {
  $message .= "<br><b>iNZight Log File</b></br>";
  $message .= $p['log_file']['content'];
}


$message .= "</div>";
$message_conf = $message;
$message = "<div style='font-family: sans-serif; width: 100%; font-size: 14px'>" .
  $message . "</div>";

if (strlen($email) > 0) {
  $hello = "Kia ora";
  if (strlen($name) > 0) $hello .= " " . $name;
  $message_conf = "<div style='font-family: sans-serif; width: 100%; font-size: 14px'>" .
    $hello . ",<br><br>" .
    "We have recieved your message and will be in touch as soon as possible. " .
    "Please reply to this email if you have any follow-up queries or additional information." .
    "<br><br>Thanks,<br>The iNZight Team." .
    "<br><hr>" .
    $message_conf . "</div>";
}

$multimessage = '';
if (isset($attachment)) {
  $multimessage .= "This is a multi-part message in MIME format.
--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/html; charset=\"UTF-8\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
$attachment
--_1_$boundary--";

  $message = $multimessage;
}

if (mail($sendto, $subject, $message, $headers)) {
  if (strlen($email) > 0) {
    mail($email, $subject, $message_conf, $headers_conf);
  }
  header("Location: success.php");
  die("Message sent. Thank you.");
}

$msg  = "There was an issue sending the message.\n\nPlease manually sent this email:\n\n";
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
