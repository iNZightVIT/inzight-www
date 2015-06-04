$(".extraInfo label").click(function() {
  console.log($(this));
  $(this).next().slideToggle();
});
