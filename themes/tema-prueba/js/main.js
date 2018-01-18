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

function hideSearch(){
  $("#menu").removeClass('search--open');
}

$(".btn_search").click(function() {
  $("#menu").addClass('search--open');
  $(".header-search form input[type='text']").val('');
});

$(".header-menu .btn_close").click(function() {
  if ($("#menu").hasClass('search--open')) {
    hideSearch();
  }
});

$(window).on("scroll", function() {
  if($(window).scrollTop() > 56) {
      $(".main-header").addClass("header--scroll");
  } else {
      //remove the background property so it comes transparent again (defined in your css)
     $(".main-header").removeClass("header--scroll");
  }
  if($(window).scrollTop() > 400) {
    $(".nav-footer").addClass("footer--show");
    $("#wtr-progress").addClass("progress--show");
  } else {
    //remove the background property so it comes transparent again (defined in your css)
   $(".nav-footer").removeClass("footer--show");
   $("#wtr-progress").removeClass("progress--show");
  }
});

$('#commentform').on("click", function() {
$(".comment-form").addClass("form--focus");
});
$(document).mouseup(function(e) {
  var container = $('#commentform');
  // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
      $(".comment-form").removeClass("form--focus");
    }
});