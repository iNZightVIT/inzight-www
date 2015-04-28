$(".navstack").click(function() {
  $(this).toggleClass('active');
  $(".topnav").toggleClass('hideme');
});

$(".topnav>ul>li").click(function(){
  if ($(".navstack").is(":visible")) {
    $(this).children('ul').addClass('current');
    $(".topnav ul>li>ul").not('.current').hide();
    $(this).children('ul').toggle();
    $("ul.current").removeClass("current");
  }
});

/*********************************************************************
A problem when increasing screen size (perhaps rotating a tablet)
is that any clicked links become active and drop-downs don't work.
The below listener resets the display when the screen is made bigger.
 *********************************************************************/
$(window).resize(function() {
  if ($(".navstack").not(":visible")) {
    $(".topnav>ul").children("li").children('ul').css("display", "");
  }
});
