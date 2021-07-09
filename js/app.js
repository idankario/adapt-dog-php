$(()=> {
  if ($(".navbar-toggler").is(":visible"))
    $('.dropdown-menu').addClass('dropdown-menu-end')
  $(window).resize(function(){
    if ($(".navbar-toggler").is(":visible"))
      $('.dropdown-menu').addClass('dropdown-menu-end')
    else
      $('.dropdown-menu').removeClass('dropdown-menu-end')
    });
});
