<?php

$rel = "../";
$url = "./";

require_once($rel . 'assets/includes/1-top_matter.php');
require_once($rel . 'assets/includes/2-header.php');

$info = json_decode(file_get_contents($url . "newMailerInfo.json"));
?>

<div class="emailinfo">
  <label>Inbox Preview:</label>
  <input type="text" id="previewTextbox" value="<?php echo $info->preview_text; ?>">

  <small>This will appear in the Email preview, but not in the message itself.</small>
</div>

<div class="emailinfo">
  <label>Email Subject:</label>
  <input type="text" id="subjectTextbox" value="<?php echo $info->subject; ?>">

  <small>This will be the message's subject.</small>
</div>

<div class="mailer-cont cont-left">

  <textarea class="newmailer-text"><?php
  echo file_get_contents($url . "newmailer.Md");
  ?></textarea>

</div>

<div class="mailer-cont cont-right">

<iframe id="previewFrame" src="preview.php"></iframe>

</div>

<div class="testing"></div>


<script language="javascript">
var $previewBox = $("#previewTextbox"),
    $subjectBox = $("#subjectTextbox"),
    $textarea = $(".newmailer-text"),
    delayTimer,
    delayInterval = 1000;


$previewBox.change(function() {
  updatePreview()
});
$subjectBox.change(function() {
  updatePreview()
});

$textarea.on("keyup", function() {
  clearTimeout(delayTimer);
  delayTimer = setTimeout(updatePreview, delayInterval);
})
$textarea.on("keydown", function() {
  clearTimeout(delayTimer);
});

function updatePreview () {
  // pass to PHP script ...
  var $prev = $previewBox.val(),
      $subj = $subjectBox.val(),
      $text = $textarea.val(),
      $frame = $("#previewFrame");

  $.ajax({
    type: "POST",
    url: "updatePreview.php",
    data: {
      preview: $prev,
      subject: $subj,
      body: $text
    },
    success: function(ret) {
      $frame.attr('src', $frame.attr('src'));
    }
  });
}
</script>


<?php
require_once($rel . 'assets/includes/3-bottom_matter.php');
?>
