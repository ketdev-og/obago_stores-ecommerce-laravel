$(function() {

  'use strict';

  $('.js-menu-toggle').click(function(e) {

  	var $this = $(this);

  	

  	if ( $('.media_title_bar').hasClass('show-sidebar') ) {
  		$('.media_title_bar').removeClass('show-sidebar');
  		$this.removeClass('active');
  	} else {
  		$('.media_title_bar').addClass('show-sidebar');	
  		$this.addClass('active');
  	}

  	e.preventDefault();

  });

  // click outisde offcanvas
	$(document).mouseup(function(e) {
    var container = $(".sidebar");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ( $('.media_title_bar').hasClass('show-sidebar') ) {
				$('.media_title_bar').removeClass('show-sidebar');
				$('.media_title_bar').find('.js-menu-toggle').removeClass('active');
			}
    }
	}); 

    

});