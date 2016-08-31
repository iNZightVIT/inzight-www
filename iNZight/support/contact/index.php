<?php

$submit = false;

$rel = "../../";
$crumbs = ["Support" => "../", "Contact" => "active"];
require_once($rel . 'assets/functions/hash.php');

$inzightVersionNumberError = "";
$messageContentError = "";
$userEmailError = "";
$captchaError = "";
$errors = false;

if (isset($_POST["submit"])) {
  $submit = true;
  $_POST;

  $p = array(
    "message_reason" => $_POST["message_reason"],
    "userguides" => isset($_POST["userguides"]),
    "faqs" => isset($_POST["faqs"]),
    "inzight_version" => $_POST["inzight_version"],
    "inzight_version_detail_val" => trim(htmlspecialchars($_POST["inzight_version_detail_val"])),
    "inzight_version_number" => trim(htmlspecialchars($_POST["inzight_version_number"])),
    "message_content" => htmlspecialchars($_POST["message_content"]),
    "user_name" => trim(htmlspecialchars($_POST["user_name"])),
    "user_email" => trim(htmlspecialchars($_POST["user_email"]))
  );

  // Now validate using PHP (incase they get past jQuery)
  if (strlen($p["inzight_version_number"]) < 1) {
    $inzightVersionNumberError = "Please specify which version of iNZight you are using.";
    $errors = true;
  }

  if (strlen($p["message_content"]) < 20) {
    $messageContentError = "Please enter a message.";
    $errors = true;
  }

  $emailReg = "/^([\w-\.]+@([\w-]+\.)+[\w-]{2,6})?$/";
  if (!preg_match($emailReg, $p["user_email"])) {
    $userEmailError = "Enter a valid email address.";
    $errors = true;
  }

  if (!$errors) {
    // we will submit the form if the captcha is ok
	$cap = $_POST["captcha"];
    $usrVal = hashValue($cap);
    $trueVal = $_POST["trueCaptcha"];
    if ($usrVal == $trueVal) {
      // submit form
      require("submit.php");
      die("Message sent.");
    } else {
      $captchaError = "Oops, that wasn't the correct number! Make sure you sum (add) them correctly.";
    }
  }
} else {
  $p = array(
    "message_reason" => "",
    "userguides" => "",
    "faqs" => "",
    "inzight_version" => "",
    "inzight_version_detail_val" => "",
    "inzight_version_number" => "",
    "message_content" => "",
    "user_name" => "",
    "user_email" => ""
  );
}



require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');



$n1 = rand(1, 5);
$n2 = rand(1, 5);
$n3 = rand(1, 5);
$captcha = $n1 . ', ' . $n2 . ', ' . $n3;
$captchaAns = $n1 + $n2 + $n3;
$captchaEnc = hashValue($captchaAns);

?>

<div class="container">


  <h3>Contact iNZight Support</h3>

  <p>
    Thank you for using iNZight! We value your feedback, whether it be reporting a problem, suggesting features,
    or just saying thanks.
  </p>

  <div class="form row">
    <form id="contactform" method="post" action="./">
      <div class="col-md-6">
        <!-- THE REASON FOR CONTACTING -->
        <div class="hideme form-group" id="reason">
          <label>What is the purpose of your message today?</label>

          <select name="message_reason" class="form-control" id="messageReason">
            <option value="">Choose ...</option>
            <option value="General" <?php if ($p["message_reason"] == "General") { echo "selected"; }?>>General query</option>
            <option value="Technical" <?php if ($p["message_reason"] == "Technical") { echo "selected"; }?>>Technical difficulties</option>
            <option value="Feedback" <?php if ($p["message_reason"] == "Feedback") { echo "selected"; }?>>Feedback</option>
          </select>
        </div>

        <!-- HAVE YOU CHECKED THE USER GUIDES? -->
        <div class="question checkbox <?php if (!$submit | $p["message_reason"] != "General") {echo "hideme";} ?>" id="checkGuides">
          <label>
            <input type="checkbox" name="userguides" id="checkGuidesBox"
                   <?php if ($p["userguides"] == "on") { echo "checked"; }?>>
            I've checked the relevant sections of <a href="../../user_guides/">the User Guides</a>
          </label>
        </div>

        <!-- HAVE YOU READ THE FAQ? -->
        <div class="question checkbox <?php if (!$submit | ($p["message_reason"] != "General" & $p["message_reason"] != "Technical")) {echo "hideme";} ?>" id="checkFAQ">
          <label>
            <input type="checkbox" name="faqs" id="checkFAQBox"
            <?php if ($p["faqs"] == "on") { echo "checked"; }?>>
            I've looked to see if my question is answered in the <a href="../faq/">the FAQ</a>
          </label>
        </div>

      </div>
      <div class="col-md-6">
        <!-- VERSION TYPE OF INZIGHT -->
        <div class="question form-group <?php if (!$submit) {echo "hideme";} ?>" id="inzightVersion">
          <label>Which platform are you using?</label>

          <select name="inzight_version" class="form-control" id="inzightVersionVal">
            <option value="">Choose ...</option>
            <option value="windows" <?php if ($p["inzight_version"] == "windows") { echo "selected"; }?>>Windows (desktop)</option>
            <option value="mac" <?php if ($p["inzight_version"] == "mac") { echo "selected"; }?>>Mac (desktop)</option>
            <option value="online" <?php if ($p["inzight_version"] == "online") { echo "selected"; }?>>iNZight Lite (online)</option>
            <option value="ruser" <?php if ($p["inzight_version"] == "ruser") { echo "selected"; }?>>Manual R Install (incl. Linux)</option>
          </select>
        </div>


        <div class="question form-group <?php if (!$submit) {echo "hideme";} ?>" id="inzightVersionDetail">
          <?php
            if ($submit) {
              include_once("version_detail.php");
            }
          ?>
        </div>

        <!-- VERSION NUMBER OF INZIGHT -->
        <div class="question form-group has-feedback <?php if (!$submit) {echo "hideme";} ?>" id="inzightVersionNumber">
          <label>What version of iNZight are you running?</label>

          <input type="text" class="form-control" name="inzight_version_number" id="inzightVersionNumberVal"
                 value="<?php echo $p["inzight_version_number"]; ?>">
          <span class="text-danger glyphicon glyphicon-asterisk form-control-feedback"></span>
          <span class="help-block">e.g., '3.0' (displayed at the top of the iNZight window)</span>

          <p class="error"><?php echo $inzightVersionNumberError; ?></p>
        </div>
      </div>

      <div class="container">
        <!-- MESSAGE -->
        <div class="textfield form-group <?php if (!$submit) {echo "hideme";} ?>" id="message">
          <label>Enter your message below</label>
          <textarea rows="10" name="message_content" class="form-control" id="messageContent"><?php echo $p["message_content"]; ?></textarea>
          <p class="error"><?php echo $messageContentError; ?></p>
        </div>
      </div>

      <div class="col-md-6 col-md-offset-6">
        <!-- USER INFO -->
        <div class="question form-group <?php if (!$submit) {echo "hideme";} ?>" id="userName">
          <p>If you would like a reply to your message, please provide the following information.</p>
          <label>Name</label>
          <input type="text" class="form-control" name="user_name" id="userNameVal" maxlength="30"
                 value="<?php echo $p["user_name"]; ?>">
        </div>

        <div class="question form-group <?php if (!$submit) {echo "hideme";} ?>" id="userEmail">
          <label>Email Address</label>
          <input type="text" class="form-control" name="user_email" id="userEmailVal" maxlength="50"
                 value="<?php echo $p["user_email"]; ?>">
          <p class="error"><?php echo $userEmailError; ?></p>
        </div>

        <!-- HUMAN CHECK -->
        <div class="question form-group has-feedback <?php if (!$submit) {echo "hideme";} ?>" id="areYouHuman">
          <!-- <p>To stop robots spamming us, we have to ask that you prove you are a human.</p> -->
          <label>
          Type the <b>sum</b> of these numbers in the box: <span class="numbers"><?php echo $captcha; ?></span>
          </label>
          <input type="text" class="form-control"  maxlength="2" name="captcha" id="captchaValue">
          <span class="text-danger glyphicon glyphicon-asterisk form-control-feedback"></span>
          <p class="error"><?php echo $captchaError; ?></p>
        </div>
        <input type="hidden"name="trueCaptcha" id="trueCaptchaValue" value="<?php echo $captchaEnc; ?>">


        <!-- SEND -->
        <div class="submit form-group <?php if (!$submit) {echo "hideme";} ?>" id="sendButton">
          <label></label>
          <input class="btn btn-block btn-primary" type="submit" name="submit" value="Send Message" id="submitMessage">
        </div>
      </div>
    </form>

    <p id="alternate">This form uses javascript. If your browser blocks javascript,
      <a href="mailto:inzight_support@stat.auckland.ac.nz">contact us here</a>.
      Please include as much information as possible (including operating system, version numbers, error messages, etc)
      to help us help you faster.
    </p>
  </div>


  <script src="<?php echo $rel; ?>js/contactform.js"></script>
</div>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
