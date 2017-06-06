
  $(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
      $('.backtop').show(200);
    }
    else
    {
      $('.backtop').hide(200);
    }
  });
  $(function(){
    $('.y_nav_icon').click(function(){
      $('.slide_menu').fadeToggle('400');
    })

    $('.slide_menu').click(function(){
      $('.slide_menu').fadeOut('slow');
    })
    $(".backtop").click(function(){
      $('body,html').animate({scrollTop:0},300);
      return false;
    });


  })
