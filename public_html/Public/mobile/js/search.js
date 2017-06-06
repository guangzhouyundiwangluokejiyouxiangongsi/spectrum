$().ready(function(){
    //placeholder
      function init(index,item){
          value = $(item).val();
          return (function(item,value){
              $(item).blur(function(){
                  if($(this).val()!="") return;
                  $(this).val(value);
              })
              $(item).focus(function(){
                  if($(this).val()!=value) return;
                  $(this).val("");
              })
          })(item,value);
      }
      $('.search').map(init)

      //当内容没有可是区域高时y_bottom位置的调整

    var winHeight =window.innerHeight;
    var headerHei=$('.header').height();
    var footerHei=$('.y_footer').height();
    var sortHei=$('.sort_list').height();

    var bottom_padT= parseInt($('.y_bottom').css('paddingTop') );
        var bottom_padB= parseInt($('.y_bottom').css('paddingBottom') );

    var bottomHei=$('.y_bottom').height();
      var contentHei=$('.y_content').height();
      winHeight=winHeight-headerHei-footerHei;

      if(contentHei<winHeight){
        sortHei=winHeight-bottomHei-bottom_padT-bottom_padB;
      $('.sort_list').height(sortHei);
      }

      $(window).resize(function () { 
        var winHeight =window.innerHeight;
      var headerHei=$('.header').height();
      var footerHei=$('.y_footer').height();
      var sortHei=$('.sort_list').height();

      var bottom_padT= parseInt($('.y_bottom').css('paddingTop') );
          var bottom_padB= parseInt($('.y_bottom').css('paddingBottom') );

      var bottomHei=$('.y_bottom').height();
        var contentHei=$('.y_content').height();
        winHeight=winHeight-headerHei-footerHei;

        if(contentHei<winHeight){
          sortHei=winHeight-bottomHei-bottom_padT-bottom_padB;
        $('.sort_list').height(sortHei);
        }
      })
});
