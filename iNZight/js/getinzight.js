$(document).ready(function() {
  $("#osSelect .os-icon").on("click", function(e) {
    e.preventDefault();
    var os = $(this).data("os"),
        url = $(this).data("filename");

    // Set the URL
    window.history.pushState("", "", "?os=" + os);

    // make the links disappear!
    $("#osSelect .os-icon").addClass("animate-up");
    $("#osSelect h3").fadeOut();
    $(".legacy").fadeOut();
    setTimeout(function() {
      $("#osSelect .os-icon").addClass("hidden");
      // make the new content appear!
      $("#osDesc_" + os).addClass("visible");
      setTimeout(function() {
        $("#osDesc_" + os).addClass("animate-up");
      }, 50);
    }, 600);

    // start the download?
    if (os == "windows") {
      setTimeout(function() {
        window.location.href =
          ($("#onCampus").is(":checked") ? 'download.php?file=' :
            'https://futurelearn.s3.amazonaws.com/') + url;
      }, 600);
    }

    // hide checkbox
    if (os == "windows" || os == "linux") {
      $("#campusBox").slideUp();
    }
  });

  $("#onCampus").on('change', function() {
    if ($(this).is(":checked")) {
      $(".backuplink a.original").show();
      $(".backuplink a.alt").hide();
    } else {
      $(".backuplink a.alt").show();
      $(".backuplink a.original").hide();
    }
  });

  $("#osDesc_mac .os-icon").on("click", function(e) {
    e.preventDefault();
    var file = $(this).data("file"),
        url = $(this).data("filename");

    // Set the URL
    window.history.pushState("", "", "?os=mac&v=" + file);

    $("#campusBox").slideUp();
    $("#osDesc_mac .os-icon").addClass("animate-away");
    $("#osDesc_mac>h4, #osDesc_mac>.depreciation-notice").fadeOut();

    setTimeout(function() {
      $("#osDesc_mac .os-icon").addClass("hidden");
      $("#macInstall_" + file).addClass("visible");
      setTimeout(function() {
        $("#macInstall_" + file).addClass("animate-up");
      }, 50);
    }, 400);

    setTimeout(function() {
      window.location.href =
        ($("#onCampus").is(":checked") || file == "self" ? 'download.php?file=' :
          'https://futurelearn.s3.amazonaws.com/') + url;
    }, 600);

  });
});
