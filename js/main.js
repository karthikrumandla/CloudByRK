jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
  
});

$(".sidebar-submenu li > a").click(function() {
    $(".sidebar-dropdown li a").removeClass("active");
    $(this).addClass("active");
});   

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
  $("#MyFooter").show();
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
  if (win.width() <= 700){$("#MyFooter").hide();}
});

$("a").addClass("pointer");

    var win = $(this); //this = window
    if (win.width() <= 700) { if($("#close-sidebar")){$("#close-sidebar").click();} }
    else{if($("#show-sidebar")){$("#show-sidebar").click();}}

    $(".my-special-table").click(function(){
        $("img").attr("width","500");
      });

   
});

$(window).on('resize', function(){
    var win = $(this); //this = window
    if (win.width() <= 700) { 
        if($("#close-sidebar")){$("#close-sidebar").click();} 
    }
    else{
        if($("#show-sidebar")){$("#show-sidebar").click();}
    }
});