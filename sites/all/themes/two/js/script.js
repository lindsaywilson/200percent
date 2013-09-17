
(function ($, Drupal, window, document, undefined) {


Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    
	// Open external links in a new window
	$('a[rel*=external]').click(function(){
		window.open($(this).attr('href'));
		return false; 
	});
	
	// Setup image slideshow on front page
	if($('body').hasClass('front')){
		$('.front .flexslider').flexslider({
			directionNav: false
		});
	}
	
	// window popups for video share
	
	$('.view-video-gallery ul#share a').click( function(){
		window.open($(this).attr('href'), "", "height=300, width=500");
		return false;
	});

	// Forms
	$('label').click( function(){
		$(this).fadeOut(200);
		$(this).parents('.form-item').find('input').focus();
	})
	$('input, textarea').each( function(){
		if($(this).val() != ''){
			$(this).parents('.form-item').find('label').fadeOut(1);
		}
		$(this).focus( function(){
			$(this).parents('.form-item').find('label').fadeOut(200);
		});
		$(this).blur( function(){
			if($(this).val() == ''){
				$(this).parents('.form-item').find('label').fadeIn(200);
			}
		});
	})
	
	timerResize = function(){
        // Define if mobile
        this.checkMobile();
        // Display navigation if not mobile
        if(!window.isMobile){
            showNav();
        }
	}
	
	checkMobile = function (){
        // Define if on mobile (based on CCS media Queries : Device < 800px wide)
        if ( $("#page").css("position") === 'relative') {
			if( window.isMobile ){
                window.deviceHasChanged = false;
            }else{
               window.deviceHasChanged = true; 
               window.isMobile = true;
			   hideNav();
            }  
        }else{
            if( !window.isMobile ){
                window.deviceHasChanged = false;
            }else{
                window.deviceHasChanged = true;
                window.isMobile = false;
				showNav();
            }
        }
    }
	
	showNav = function (button, nav){
		$('#main-menu').show();
		$('#menu-toggle').hide();
		$('#menu-toggle a').attr('class', 'close');
    };
    hideNav = function (button, nav){
		$('#main-menu').hide();
		$('#menu-toggle').show();
		$('#menu-toggle a').attr('class', 'open');
    };
	
	// Define Global Mobile
	window.isMobile = false;
	window.deviceHasChanged = false;
	checkMobile;
	
	// Define if on mobile (based on CCS media Queries : Device < 800px wide)
	var resizeTimer;
	timerResize();
	$(window).resize(function() {
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(function() { timerResize(); }, 100);
	});
    
	// Setup mobile menu toggle
	$('#menu-toggle a').click( function(){
		c = $(this).attr('class');
		if( c == 'open'){
			c = 'close';
		}else{
			c = 'open';
		}
		$('#main-menu').slideToggle();
		$(this).attr('class',c);
		return false;
	});
	
	
	
	

  }
};


})(jQuery, Drupal, this, this.document);


jQuery(window).load(function() {
	
	// Remove Shadowbox on mobile
	if(window.isMobile){
		jQuery('.view-photo-gallery a, .sb-image, .sb-gallery, .sb-gallery-field_images').attr('href','').click( function(){
			return false;
		});
	}
	
})
