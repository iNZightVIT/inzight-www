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
      $("#dl_links").html("Click here.");
      break;
    }
});
