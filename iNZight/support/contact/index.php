<?php

if (isset($_POST["submit"])) {

}

$rel = "../../";
require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

$n1 = rand(1, 5);
$n2 = rand(1, 5);
$n3 = rand(1, 5);
$captcha = $n1 . ', ' . $n2 . ', ' . $n3;
$captchaAns = $n1 + $n2 + $n3;
$captchaEnc = $captchaAns;

?>

<h3>Contact iNZight Support</h3>

<p>
  Thank you for using iNZight! We value your feedback, whether it be reporting a problem, suggesting features,
  or just saying thanks.
</p>

<div class="form">
  <form id="contactform" method="post" action="./">

    <!-- THE REASON FOR CONTACTING -->
    <div class="question" id="reason">
      <label>What is the purpose of your message today?</label>

      <select name="message_reason" id="messageReason">
        <option value="">Choose ...</option>
        <option value="General">General query</option>
        <option value="Technical">Technical difficulties</option>
        <option value="Feedback">Feedback</option>
      </select>
    </div>

    <!-- HAVE YOU CHECKED THE USER GUIDES? -->
    <div class="question hide" id="checkGuides">
      <label>Have you checked the relevant sections of <a href="../../user_guides/">the User Guides</a>?</label>

      <input type="checkbox" name="userguides" id="checkGuidesBox"> Yes, I have
    </div>

    <!-- HAVE YOU READ THE FAQ? -->
    <div class="question hide" id="checkFAQ">
      <label>Have you had a look to see if your question is answered in <a href="../faq/">the FAQ</a>?</label>

      <input type="checkbox" name="userguides" id="checkFAQBox"> Yes, I have
    </div>

    <!-- VERSION TYPE OF INZIGHT -->
    <div class="question biggap hide" id="inzightVersion">
      <label>How are you using iNZight?</label>

      <select name="inzight_version" id="inzightVersionVal">
        <option value="">Choose ...</option>
        <option value="windows">Windows (desktop)</option>
        <option value="mac">Mac (desktop)</option>
        <option value="online">iNZight Lite (online)</option>
        <option value="ruser">Manual R Install (incl. Linux)</option>
      </select>
    </div>

    <div class="question hide" id="inzightVersionDetail"></div>


    <!-- VERSION NUMBER OF INZIGH -->
    <div class="question biggap hide" id="inzightVersionNumber">
      <label>What version of iNZight are you running?</label>

      <input type="text" name="inzight_version_number" id="inzightVersionNumberVal" maxlength=10>
      <span class="details">e.g., '2.1' (displayed at the top of the iNZight window)</span>

      <p class="error"></p>
    </div>


    <!-- MESSAGE -->
    <div class="textfield hide" id="message">
      <label>Enter your message below:</label>
      <textarea name="message_content" id="messageContent"></textarea>
    </div>

    <!-- USER INFO -->
    <div class="question biggap hide" id="userName">
      <p>If you would like a reply to your message, please provide the following information.</p>
      <label>Name:</label>
      <input type="text" name="user_name" id="userNameVal" maxlength="30">
    </div>

    <div class="question hide" id="userEmail">
      <label>Email Address:</label>
      <input type="text" name="user_email" id="userEmailVal" maxlength="50">
      <p class="error"></p>
    </div>


    <!-- HUMAN CHECK -->
    <div class="question biggap hide" id="areYouHuman">
      <p>To stop robots spamming us, we have to ask that you prove you are a human.</p>
      <label>
      Type the <b>sum</b> of these numbers in the box: <span class="numbers"><?php echo $captcha; ?></span>
      </label>
      <input type="text" maxlength="2" name="captcha" id="captchaValue">
      <input type="hidden" name="trueCaptcha" id="trueCaptchaValue" value="<?php echo $captchaEnc; ?>">
      <p class="error"></p>
    </div>


    <!-- SEND -->
    <div class="submit biggap hide" id="sendButton">
      <label></label>
      <input type="submit" name="submit" value="Send Message" id="submitMessage">
    </div>

  </form>
</div>


<script src="../../js/contactform.js"></script>

<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
