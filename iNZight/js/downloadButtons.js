$("#os_select>.options>a").click(function(e) {
  $whichID = e.currentTarget.id;

  // stop link from working
  e.preventDefault();

  // disable whatever is selected:
  $("#os_select .options .selected").removeClass("selected");
  $(".horizontal.show").removeClass("show");
  // and enable the clicked one:
  $("#" + $whichID).addClass("selected");

  $("#dl_links").html("");

  switch ($whichID) {
    case "os_mac":
      $("#mac_ver_select").addClass("show");
      break;
    case "os_linux":
      $("#linux_dist_select").addClass("show");
      break;
    case "os_windows":
      $.post("download_links.php", { os: "Windows" })
        .done(function(result) {
          $("#dl_links").html(result);
        });
      break;
    }
});


$("#mac_ver_select>.options>a").click(function(e) {
  $whichID = e.currentTarget.id;

  // stop link from working
  e.preventDefault();

  // show what's selected, and what's not:
  $("#mac_ver_select .options .selected").removeClass("selected");
  $("#" + $whichID).addClass("selected");

  $mac_version = $whichID.split("_v");
  $v = $mac_version[1]

  if ($v == 0) {
    $("#dl_links").load("instructions/mac_version.php");
  } else {
    $.post("download_links.php", { os: "Mac", v: $v})
      .done(function(result) {
        $("#dl_links").html(result);
      });
  }
});



$("#linux_dist_select>.options>a").click(function(e) {
  $whichID = e.currentTarget.id;

  // stop link from working
  e.preventDefault();

  // show what's selected, and what's not:
  $("#linux_dist_select .options .selected").removeClass("selected");
  $("#" + $whichID).addClass("selected");

  $linux_dist = $whichID.split("_");

  $.post("instructions/install_linux.php", { os: "Linux", dist: $linux_dist[1]})
    .done(function(result) {
      $("#dl_links").html(result);
    });
});
