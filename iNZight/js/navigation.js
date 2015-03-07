$(".navstack").click(function() {
  $(this).toggleClass('active');
  $(".topnav").toggleClass('hideme');
});

$(".topnav>ul>li").click(function(){
  $(this).children('ul').addClass('current');
  $(".topnav ul>li>ul").not('.current').hide();
  $(this).children('ul').toggle();
  $("ul.current").removeClass("current");
});
