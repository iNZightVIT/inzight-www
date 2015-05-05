$("#os_select").change(function(e) {
  $os = $(e.target).val();
  if ($os == "mac") {
    $("#mac_select").addClass("show");
    $v = $("#mac_select").val();

    $.post("gs.php", { os: $os, v: $v })
      .done(function(result) {
        $("#startup_instructions").html(result);
      });
  } else {
    $("#mac_select").removeClass("show");

    $.post("gs.php", { os: $os })
      .done(function(result) {
        $("#startup_instructions").html(result);
      });
  }
});
$("#mac_select").change(function(e) {
  $os = $("#os_select").val();
  $v = $(e.target).val();

  $.post("gs.php", { os: $os, v: $v })
    .done(function(result) {
      $("#startup_instructions").html(result);
    });
});

if ($("#os_select").val() != "") {
  $os = $("#os_select").val();
  if ($os == "mac") {
    if ($("#mac_select").val() != "") {
      $v = $("#mac_select").val();
      $.post("gs.php", { os: $os, v: $v })
        .done(function(result) {
          $("#startup_instructions").html(result);
        });
    }
  } else {
    $.post("gs.php", { os: $os })
      .done(function(result) {
        $("#startup_instructions").html(result);
      });
  }
}
