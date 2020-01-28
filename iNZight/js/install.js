$(document).ready(function() {
  $("#osSelect .os-icon").on("click", function(e) {
    e.preventDefault();
    var os = $(this).data("os");
    $("#osSelect .os-icon.active").removeClass('active');
    $(this).addClass('active');

    $("#osView").load(os + ".php");
  });
});
