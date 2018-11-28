/*
#### Header
*/

// headerメニューバーのアニメーション
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
  	$(".between_content_effect").twinkle(options);
  }

  setInterval(add_circle, 1000);
});

/*
Content
 */
jQuery(function($) {
  $(window).scroll(function (){
    $('.scrollFadein').each(function(){
        var targetElement = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (window.matchMedia( "(min-width: 480px)" ).matches) {
          if (scroll > targetElement - windowHeight + 200){
              $(this).css('opacity','1');
              $(this).css('transform','translateY(0)');
          }
        } else {
          if (scroll > targetElement - windowHeight - 200){
              $(this).css('opacity','1');
              $(this).css('transform','translateY(0)');
          }
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
