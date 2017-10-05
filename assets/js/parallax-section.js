var parallaxElements = jQuery('.parallax'),
    parallaxQuantity = parallaxElements.length;

jQuery(window).on('scroll', function () {
  window.requestAnimationFrame(function () {
    for (var i = 0; i < parallaxQuantity; i++) {
      var currentElement =  parallaxElements.eq(i);
      var scrolled = jQuery(window).scrollTop();      
        currentElement.css({
          'transform': 'translate3d(0,' + scrolled / 3 + 'px, 0)'
        });
    }
  });
});