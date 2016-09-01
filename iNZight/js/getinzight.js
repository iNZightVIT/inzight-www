$(document).ready(function() {
  $("#osSelect .os-icon").on("click", function(e) {
    e.preventDefault();
    var os = $(this).data("os"),
        url = $(this).data("filename");

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
        window.location.href = 'download.php?file=' + url;
      }, 600);
    }

  });

  $("#osDesc_mac .os-icon").on("click", function(e) {
    e.preventDefault();
    var file = $(this).data("file"),
        url = $(this).data("filename");

    $("#osDesc_mac .os-icon").addClass("animate-away");
    $("#osDesc_mac>h4").fadeOut();

    setTimeout(function() {
      $("#osDesc_mac .os-icon").addClass("hidden");
      $("#macInstall_" + file).addClass("visible");
      setTimeout(function() {
        $("#macInstall_" + file).addClass("animate-up");
      }, 50);
    }, 400);

    setTimeout(function() {
      window.location.href = 'download.php?file=' + url;
    }, 600);

  });
});
