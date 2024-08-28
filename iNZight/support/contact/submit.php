<?php
require __DIR__ . '/../../../vendor/autoload.php';

// if running locally
if (file_exists(__DIR__ . '/../../../.env')) {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../');
  $dotenv->load();
}

use MailerSend\MailerSend;
use MailerSend\Helpers\Builder\Variable;
use MailerSend\Helpers\Builder\Personalization;
use MailerSend\Helpers\Builder\Attachment;
use MailerSend\Helpers\Builder\Recipient;
use MailerSend\Helpers\Builder\EmailParams;
use MailerSend\Exceptions\MailerSendValidationException;

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

# die if MAILERSEND_API_TOKEN is not set
$key = $_ENV['MAILERSEND_API_TOKEN'];
if (empty($key)) {
    die('MailerSend API key not set');
}
$mailersend = new MailerSend(['api_key' => $key]);

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

// THE EMAIL ADDRESS TO SEND BUG REPORTS TO:
if ($p["inzight_version"] == "lite") {
  $sendto = "inzightlite_support@stat.auckland.ac.nz";
} else {
  $sendto = "inzight_support@stat.auckland.ac.nz";
}

$name = clean_str($p["user_name"]);
$email = clean_str($p["user_email"]);
$class_info = clean_str($p["class_info"]);

$message = nl2br($p["message_content"]);

$recipients = [
  new Recipient($email, $name),
];

$variables = [
  new Variable(
    $email,
    ['userName' => $name, 'userMessage' => $message]
  )
];

// add attachements
$attachments = [];
if ($p['screenshot']['error'] === 0) {
  $attachments[] = new Attachment(
    file_get_contents($p['screenshot']['tmp_name']),
    $p['screenshot']['name']
  );
}
if ($p['dataset']['error'] === 0) {
  $attachments[] = new Attachment(
    file_get_contents($p['dataset']['tmp_name']),
    $p['dataset']['name']
  );
}

$details = [];
$details[] = [
  "label" => "Name",
  "value" => strlen($name) > 0 ? $name : "Anonymous"
];
$details[] = [
  "label" => "Email",
  "value" => strlen($email) > 0 ? $email : "Not provided"
];

if ($inz == "lite") {
  $details[] = [
    "label" => "Lite Version",
    "value" => $ver
  ];
  $details[] = [
    "label" => "Browser",
    "value" => $inzdet
  ];
} else {
  $details[] = [
    "label" => "iNZight Version",
    "value" => $ver
  ];
  $details[] = [
    "label" => "Operating System",
    "value" => $os
  ];
}

if (strlen($class_info) > 0) {
  $details[] = [
    "label" => "Class Info",
    "value" => $class_info
  ];
}


$ticketDetails = [
  new Personalization($sendto, ["details" => $details])
];

// get datetime in Pacific/Auckland timezone
$tz = 'Pacific/Auckland';
$timestamp = time();
$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
$dt->setTimestamp($timestamp); //adjust the object to correct timestamp

// create and send ticket
$ticket = file_get_contents(__DIR__ . '/ticket.template');
$ticketText = file_get_contents(__DIR__ . '/ticket_text.template');
$ticketVars = [
  new Variable(
    $sendto,
    [
      'name' => $name,
      'message' => $message,
      'date' => $dt->format("l jS \of F Y, h:i:s A")
    ]
  )
];

$ticketSendTo = [
  new Recipient($sendto, "iNZight Support")
];

$ticketParams = (new EmailParams())
  ->setFrom('noreply@inzight.nz')
  ->setFromName('iNZight Support')
  ->setReplyTo($email)
  ->setRecipients($ticketSendTo)
  ->setSubject($subject)
  ->setText($ticketText)
  ->setHtml($ticket)
  ->setAttachments($attachments)
  ->setVariables($ticketVars)
  ->setPersonalization($ticketDetails);

// zoho desk
$zohoTo = [
  new Recipient("support@inzight.zohodesk.com.au", "iNZight Support Desk"),
];
$zohoVars = [
  new Variable(
    "support@inzight.zohodesk.com.au",
    [
      'name' => $name,
      'message' => $message,
      'date' => $dt->format("l jS \of F Y, h:i:s A")
    ]
  )
];

$zohoParams = (new EmailParams())
  ->setFrom(strlen($email) > 0 ? $email : "Not provided")
  ->setFromName(strlen($name) > 0 ? $name : "Anonymous")
  ->setReplyTo($email)
  ->setRecipients($zohoTo)
  ->setSubject($subject)
  ->setText($ticketText)
  ->setHtml($ticket)
  ->setAttachments($attachments)
  ->setVariables($zohoVars)
  ->setPersonalization($ticketDetails);

// read reply.template file
$reply = file_get_contents(__DIR__ . '/reply.template');
$replyTxt = file_get_contents(__DIR__ . '/reply_text.template');

$emailParams = (new EmailParams())
    ->setFrom('noreply@inzight.nz')
    ->setFromName('iNZight Support')
    ->setReplyTo($sendto)
    ->setRecipients($recipients)
    ->setSubject("iNZight Support message recieved (ref #" . $ref_no . ")")
    ->setHtml($reply)
    ->setText($replyTxt)
    ->setVariables($variables);

$sendError = false;
try {
  $mailersend->email->send($ticketParams);
  $mailersend->email->send($zohoParams);
  $mailersend->email->send($emailParams);
} catch (MailerSendValidationException $e) {
  // print error if GET parameter DEBUG is set
  // if (isset($_GET['DEBUG'])) {
    echo "\n---------------- DEBUG ----------------\n";
    echo $e->getMessage();
    echo "\n---------------------------------------\n";
    die();
  // }
  // $sendError = true;
}

if (!$sendError) {
  header("Location: success.php");
  die("Message sent. Thank you.");
}

$msg  = "There was an issue sending the message.\n\nPlease manually send this email:\n\n";
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
