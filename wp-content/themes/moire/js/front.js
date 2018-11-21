jQuery(function($) {
  add_first_circle = function() {
    const options = {
    	widthRatio: 0.5,
    	heightRatio: 0.5,
      delay: 0,
      gap: 0,
    	effect: "drops-css",
    	effectOptions: {
    		duration: 3e3,
    		color: '#f6f6f6',
        opacity: 0.3
    	}
    }
  	$(".front-page-wrapper").twinkle(options);
  }

  return new Promise((resolve, reject) => {
    resolve(add_first_circle())
  }).then(() => {
    return $(".moire-title").fadeIn(7000)
  }).then(() => {
    return $(".moire-sub-title").fadeIn(8000)
  })
});

jQuery(function($) {
  add_random_circle = function() {
    const options = {
      widthRatio: Math.random(),
      heightRatio: Math.random(),
      delay: 0,
      gap: 0,
      effect: "drops-css",
      effectOptions: {
        radius: 200,
        width: Math.random() * 10,
        duration: 1e3 + Math.random() * 1e3,
        color: '#f6f6f6',
        opacity: 0.3
      }
    }
    $(".content-effect").twinkle(options);
  }

  let topAnimated = false

  $(window).scroll(() => {
    if (!topAnimated) {
      topAnimated = true

      setInterval(add_random_circle, 1000);

      $('.main-content').css({
        'width': '50%',
        'float': 'left'
      })
      $('.moire-sub-title').css('font-size', '25pt')
      $('.right-top-column')
        .css('display', 'block')
        .animate({'width':'50%'})
    }
  })
})
