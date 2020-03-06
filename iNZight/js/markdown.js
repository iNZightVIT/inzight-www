$(".extraInfo .label").click(function() {
  console.log($(this).next());
  $(this).next().slideToggle();
});


$("#togglePlottypes").on('click', function(e) {
  e.preventDefault();
  $("#plottypes").slideToggle(); //toggleClass('visible');
});

// $("#togglePalettes").on('click', function(e) {
//   e.preventDefault();
//   $("#palettes").slideToggle(); //toggleClass('visible');
// });
