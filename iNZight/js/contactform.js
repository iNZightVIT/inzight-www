$("#messageReason").change(function() {
  switch ($(this).val()) {
    case "General":
      $("#message label").html("Enter your query below.");
      $("#checkGuides").slideDown();

      if ($("#checkGuidesBox").is(":checked")) {
        $("#checkFAQ").slideDown();
        if ($("#checkFAQBox").is(":checked")) {
          $("#inzightVersion").slideDown();
        } else {
          $("#inzightVersion").hide();
        }
      } else {
        $("#inzightVersion").hide();
      }

      break;
    case "Technical":
      $("#message label").html("Enter your issue below.<br>Copy and paste any error messages from the R Console at the end.");
      if (!$("#checkFAQBox").is(":checked")) {
        $("#inzightVersion").hide();
      }
      $("#checkGuides").hide();
      $("#checkFAQ").slideDown();
      break;
    case "Feedback":
      $("#message label").html("Enter your feedback below.");
      $("#checkGuides").hide();
      $("#checkFAQ").hide();
      $("#inzightVersion").slideDown();
      break;
  }
});

$("#checkGuidesBox").change(function() {
  if ($(this).is(':checked')) {
    $("#checkFAQ").slideDown();
    if ($("#checkFAQBox").is(":checked")) {
      $("#inzightVersion").slideDown();
    }
  } else {
    $("#inzightVersion").hide();
  }
});

$("#checkFAQBox").change(function() {
  if ($(this).is(':checked') && ($("#messageReason").val() == "Technical" || $("#checkGuidesBox").is(":checked"))) {
    $("#inzightVersion").slideDown();
  } else {
    $("#inzightVersion").hide();
  }
});

$("#inzightVersionVal").change(function() {
  if ($(this).val() != "") {
    $.post("version_detail.php", {v: $(this).val()}, function(result) {
      $("#inzightVersionDetail").html(result);
    });
    $("#inzightVersionDetail").show();
    $("#inzightVersionNumber").show();
    if ($("#messageReason").val() == "Technical") {

    }
    $("#message").show();
    $("#userName").show();
    $("#userEmail").show();
    $("#areYouHuman").show();
    $("#sendButton").show();
  }
});

// $("#captchaValue").keyup(function() {
//   $userVal = $(this).val();
//   $trueVal = $("#trueCaptchaValue").val();
//
//   if ($userVal == $trueVal) {
//     $("#sendButton").slideDown();
//   } else {
//     $("#sendButton").hide();
//   }
// });
