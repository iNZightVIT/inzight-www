$(document).ready(function() {
  $("#osSelect .os-icon").on("click", function(e) {
    e.preventDefault();
    var os = $(this).data("os");

    // make the links disappear!
    $("#osSelect .os-icon").addClass("animate-up");
    $("#osSelect h3").fadeOut();
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
        window.location.href = 'download.php?file=iNZightVIT-installer_latest.exe';
      }, 600);
    }

  });

  $("#osDesc_mac .os-icon").on("click", function(e) {
    e.preventDefault();
    var file = $(this).data("file");

    $("#osDesc_mac .os-icon").addClass("animate-away");
    $("#osDesc_mac>h4").fadeOut();

    setTimeout(function() {
      $("#osDesc_mac .os-icon").addClass("hidden");
      $("#macInstall_" + file).addClass("visible");
      setTimeout(function() {
        $("#macInstall_" + file).addClass("animate-up");
      }, 50);
    }, 400);

    if (file == "full") {
      setTimeout(function() {
        window.location.href = 'download.php?file=iNZightVIT-mac-installer.dmg';
      }, 600);
    }
    if (file == "self") {
      setTimeout(function() {
        window.location.href = 'download.php?file=iNZightVIT-selfinstall.tar.bz';
      }, 600);
    }
  });
});
