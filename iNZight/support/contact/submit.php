<?php
require __DIR__ . '/../../../vendor/autoload.php';

// if running locally
if (file_exists(__DIR__ . '/../../../.env')) {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../');
  $dotenv->load();
}

var_dump($_ENV);

use MailerSend\MailerSend;
use MailerSend\Helpers\Builder\Variable;
use MailerSend\Helpers\Builder\Recipient;
use MailerSend\Helpers\Builder\EmailParams;

# die if MAILERSEND_API_TOKEN is not set
$key = $_ENV['MAILERSEND_API_TOKEN'];
if (empty($key)) {
    die('MailerSend API key not set');
}
$mailersend = new MailerSend(['api_key' => $key]);

// send a test message
$recipients = [
  new Recipient('tomelliottnz@gmail.com', "Tom Elliott"),
];

$variables = [
  new Variable('tomelliottnz@gmail.com',
    ['userName' => 'Tom', 'userMessage' => 'This is your message.'])
];

// read reply.template file
$reply = file_get_contents(__DIR__ . '/reply.template');


// THE EMAIL ADDRESS TO SEND BUG REPORTS TO:
if ($p["inzight_version"] == "lite") {
  $sendto = "inzightlite_support@stat.auckland.ac.nz";
} else {
  $sendto = "inzight_support@stat.auckland.ac.nz";
}

$emailParams = (new EmailParams())
    ->setFrom('noreply@inzight.nz')
    ->setFromName('iNZight Support')
    ->setReplyTo($sendto)
    ->setRecipients($recipients)
    ->setSubject('Test message')
    ->setHtml($reply)
    ->setText('This is the text content')
    ->setVariables($variables);

$mailersend->email->send($emailParams);


die('OK');

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
    $os = " Windows Desktop";
    $subject .= $os;
    break;
  case "mac":
    $os = " Mac OS X 10." . $inzdet;
    $subject .= $os;
    break;
  case "lite":
    $subject .= " Lite";
    break;
  case "ruser":
    $os = $inzdet;
    $subject .= " Manual R Installation";
    break;
}

$ver = clean_str($p["inzight_version_number"]);
if (!preg_match("/^v/", $ver) & $inz != "lite") {
  $ver = "v" . $ver;
}
if ($inz != "lite") {
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
$class_info = clean_str($p["class_info"]);

$boundary = "==Multipart_Boundary_x" . md5(date('r', time())) . "x";

$attachment = '';

if ($p['screenshot']['error'] === 0) {
  $f_data = chunk_split(base64_encode(file_get_contents($p['screenshot']['tmp_name'])));
  $f_name = $p['screenshot']['name'];
  $attachment .= "--{$boundary}\n" .
    "Content-Type: application/octet-stream; name=\"$f_name\"\n" .
    "Content-Disposition: attachment;\n" .
    "Content-Transfer-Encoding: base64\n\n" . $f_data . "\n\n";
}

if ($p['dataset']['error'] === 0) {
  $f_data = chunk_split(base64_encode(file_get_contents($p['dataset']['tmp_name'])));
  $f_name = $p['dataset']['name'];
  $attachment .= "--{$boundary}\n" .
    "Content-Type: application/octet-stream; name=\"$f_name\"\n" .
    "Content-Disposition: attachment;\n" .
    "Content-Transfer-Encoding: base64\n\n" . $f_data . "\n\n";
}

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .=
  (isset($attachment) ? "Content-type:multipart/mixed;\n boundary=\"$boundary\";" : "Content-type:text/html;") .
  "\r\n";
if (strlen($email) > 0) {
  $headers_conf =
    "From: $sendto \r\n".
    "MIME-Version: 1.0" . "\r\n" .
    "Content-type: text/html; charset=UTF-8" . "\r\n";


  "MIME-Version: 1.0" . "\r\n" .
      "Content-type:text/html;\r\n" .
      "From: " . $sendto . "\r\n";

  $rts = "";
  if (strlen($name) > 0) {
    $rts .= $name . " <" . $email . ">";
  } else {
    $rts .= $email;
  }
  if ($p["inzight_version"] == "lite") {
    $rts .= ", iNZight Lite Support <" . $sendto . ">";
  } else {
    $rts .= ", iNZight Support <" . $sendto . ">";
  }
  $headers .= "Reply-to: " . $rts . "\r\n";
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

if ($inz == "lite") {
  $message .= "iNZight Lite accessed from <b>" . $ver . "</b> using <b>" . $inzdet . "</b><br>";
} else {
  $message .= "Installation Info: " . $os . ", iNZight " . $ver . "<br>";
}

if (strlen($class_info) > 0) {
  $message .= "Class information: <em>" . $class_info . "</em><br/>";
}

$s = $_SERVER;

// $message .= "<br><b>Debugging Info</b><br>";
// $message .= "User Agent: " . $s["HTTP_USER_AGENT"] . "<br>";
// $message .= "HTTP Language: " . $s["HTTP_ACCEPT_LANGUAGE"] . "<br>";


// Additional log file info
// if (isset($p['log_file']['content'])) {
//   $message .= "<br><b>iNZight Log File</b></br>";
//   $message .= $p['log_file']['content'];
// }


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
  $multimessage .= "--$boundary\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n" .
    $attachment . "\n" .
    "--$boundary}--";

  $message = $multimessage;
}

// $res = mail($email, $subject, $message_conf, $headers_conf);
// if ($res) {
//   echo "success - ";
// } else {
//   echo "fail - ";
// }

if (mail($sendto, $subject, $message, $headers)) {
  if (strlen($email) > 0) {
    mail($email, $subject, $message_conf, $headers_conf);
    // echo "Email: ";
    // print_r($email);
    // echo "<br>Subject: ";
    // print_r($subject);
    // echo "<br>Message: <br><br>";
    // print_r($message_conf);
    // echo "<br><br>Headers: <br><pre>";
    // print_r($headers_conf);
    // echo "</pre>";

    // die($res);
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
