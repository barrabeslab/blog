//efecto menu movil=====================================
$(".btn_menu").click(function () {
  if ($("body").hasClass('nav-sidebar--open')) {
    hideMenu();
  } else {
    $("body").addClass('nav-sidebar--open');
    //scrollY();
  }
});

$(".mask").click(function () {
  if ($("body").hasClass('nav-sidebar--open')) {
    hideMenu();
  }
});

function hideMenu(){
  $("body").removeClass('nav-sidebar--open');
}




$(window).on("scroll", function() {
  if($(window).scrollTop() > 56) {
      $(".main-header").addClass("header--scroll");
  } else {
      //remove the background property so it comes transparent again (defined in your css)
     $(".main-header").removeClass("header--scroll");
  }
  if($(window).scrollTop() > 400) {
    $(".nav-footer").addClass("footer--show");
  } else {
    //remove the background property so it comes transparent again (defined in your css)
   $(".nav-footer").removeClass("footer--show");
  }
});
