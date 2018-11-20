jQuery(function($) {
  add_circle = function() {
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
    resolve(add_circle())
  }).then(() => {
    return $(".moire-title").fadeIn(7000)
  }).then(() => {
    return $(".moire-sub-title").fadeIn(9000)
  })
});
