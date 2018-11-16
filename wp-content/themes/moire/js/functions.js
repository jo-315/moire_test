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
