$(".extraInfo .label").click(function() {
  console.log($(this).next());
  $(this).next().slideToggle();
});
