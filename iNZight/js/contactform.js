$("#alternate").hide();
$("#reason").show();

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
    if ($(this).val() == "online") {
      //$("#inzightVersionNumberVal").val("online");
      $("#inzightVersionNumber .details").html("Copy and paste the URL of your iNZightLite session");
    } else {
      $("#inzightVersionNumber .details").html("e.g., '2.1' (displayed at the top of the iNZight window)");
    }
    if ($("#messageReason").val() == "Technical" && $(this).val() == "ruser") {
      $("#message label").append("<br>If you are experiencing issues with a particular R package, specify which one and the version you are running.")
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




$("#sendButton").click(function(e) {

  proceed = true;

  /// check fields:
  // iNZight Version Number - must be specified.
  var inzver = $("#inzightVersionNumberVal").val();
  if ($.trim(inzver).length < 1) {
    $("#inzightVersionNumber .error").html("Please specify which version of iNZight you are using.");
    proceed = false;
  } else {
    $("#inzightVersionNumber .error").html("");
  }

  // Message - must be something there ...
  var msg = $("#messageContent").val();
  if ($.trim(msg).length < 20) {
    $("#message .error").html("Please enter a message.");
    proceed = false;
  } else {
    $("#message .error").html("");
  }

  // email address
  var email = $("#userEmailVal").val();
  email = $.trim(email);
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,6})?$/;
  var check = false;
  if (emailReg.test(email) && email.length > 0) {
    $("#userEmail .error").html("");
  } else if (email.length == 0) {
    var check = true;
  } else {
    $("#userEmail .error").html("Enter a valid email address.");
    proceed = false;
  }

  // captcha
  var cap = $("#captchaValue").val();
  if (cap.length == 0) {
    $("#captchaValue").focus();
    $("#areYouHuman .error").html("We really do need you to confirm your humanity.")
    proceed = false;
  }


  // if email is blank:
  if (proceed & check) {
    var chkEmail = confirm("If you don't specify an email address, we cannot reply to you.\n\nAre you sure you wish to proceed?");
    if (!chkEmail) {
      $("#userEmailVal").focus();
      proceed = false;
    }
  }

  if (!proceed) {
    // submit the form
    //e.preventDefault();
  }
});

// Remove error messages live:
$("#inzightVersionNumberVal").keyup(function() {
  var inzver = $(this).val();
  if ($.trim(inzver).length < 1) {
    $("#inzightVersionNumber .error").html("Please specify which version of iNZight you are using.");
  } else {
    $("#inzightVersionNumber .error").html("");
  }
});

$("#messageContent").keyup(function() {
  var msg = $(this).val();
  if ($.trim(msg).length >= 20) {
    $("#message .error").html("");
  }
});
