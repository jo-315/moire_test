/*
#### Header
*/

// headerメニューバーのアニメーション
jQuery(function($) {
  // 初期位置へ移動
  $('.header-main-navigation-items-wrap span').css({
    width: $('.nav_default_underline').outerWidth(),
    left: $('.nav_default_underline').position().left
  });

  $('.header-main-navigation-items-wrap li').mouseover(function(){
    $('.header-main-navigation-items-wrap span').stop().animate({
      width: $(this).outerWidth(),
      left: $(this).position().left
    },'fast');
  });
});

// toggle button
jQuery(function($) {
  $('.header-menu-toggle').click(() => {
    const toggleMenue = $('.header-main-navigation')
    if(toggleMenue.hasClass('active')){
      toggleMenue.removeClass('active');
      $('.header-main-navigation').slideUp();
    } else {
      toggleMenue.addClass('active');
      $('.header-main-navigation').slideDown();
    }  });
});

jQuery(function($) {
  add_circle = function() {
    const options = {
    	widthRatio: Math.random(),
    	heightRatio: Math.random(),
      delay: 10,
      gap: 10,
    	effect: "drops-css",
    	effectOptions: {
    		radius: 200,
        width: Math.random() * 10,
    		duration: 1e3 + Math.random() * 1e3,
    		color: '#f6f6f6',
        opacity: 0.3
    	}
    }
  	$("#content-effect").twinkle(options);
  }

  setInterval(add_circle, 1000);
});

/*
Content
 */
jQuery(function($) {
  $(window).scroll(function (){
    $('.fadein').each(function(){
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > targetElement - windowHeight + 200){
            $(this).css('opacity','1');
            $(this).css('transform','translateY(0)');
        }
    });
  });
});


/*
### Footer
 */
// scroll to top
jQuery(function($) {
  $('.site-info').click(() => {
    $('html, body').animate({ scrollTop: 0 });
  })
})
