/* --------------------------------------------
 READY FUNCTION
-------------------------------------------- */
jQuery(document).ready(function() {
	/* --------------------------------------------
	 SCROLL NAVIGATION
	-------------------------------------------- */	
	jQuery(function() {
		"use strict";
		jQuery('.scroll').bind('click', function(event) {
			var anchor = jQuery(this);
			var headerH = jQuery('#navigation').outerHeight();
				jQuery('html, body').stop().animate({					
					scrollTop : jQuery(anchor.attr('href')).offset().top - 60 + "px"
				}, 1200, 'easeInOutExpo');
			event.preventDefault();
		});
	});
		
	/* --------------------------------------------
	 ACTIVE NAVIGATION
	-------------------------------------------- */
	jQuery(function() {
		"use strict";
		jQuery('body').scrollspy({ 
			target: '#top',
			offset: 95
		});
	});
		
	/* --------------------------------------------
	 CLOSE COLLAPSE MENU ON MOBILE VIEW
	-------------------------------------------- */
	jQuery(function() {
		"use strict";
		jQuery('.nav li a').click(function () {
			 jQuery('.navbar-collapse').removeClass('in');
		});
	});
		
	/* --------------------------------------------
	 ANIMATED PAGE ON REVEALED
	-------------------------------------------- */
	jQuery(function(jQuery) {
		"use strict";
		jQuery('.animated').appear(function() {
			var elem = jQuery(this);
			var animation = elem.data('animation');
			if ( !elem.hasClass('visible') ) {
				var animationDelay = elem.data('animation-delay');
				if ( animationDelay ) {
				
					setTimeout(function(){
					 elem.addClass( animation + " visible" );
					}, animationDelay);
					
				} else {
					elem.addClass( animation + " visible" );
				}
			}
		});
	});
		
	/* --------------------------------------------
	 LOAD MORE 
	-------------------------------------------- */
	jQuery(function() {
		"use strict";
		var loadtext = jQuery('.load-more');
		jQuery(".load-posts").click(function() {
			if(jQuery(this).hasClass('disable')) return false;				
			jQuery(this).html('<i class="fa fa-spin fa-spinner"></i> Loading');					
			var hidden = loadtext.filter(':hidden:first').delay(600);  			
			if (!hidden.next('.load-more').length) {
				hidden.fadeIn(500);
				jQuery(this).addClass('disable');
				jQuery(this).fadeTo("slow", 0.23).queue(function(n) {
				 	jQuery(this).html('All Posts Loaded');
				 	n();
				}).fadeTo("slow", 1);					
			} else {
				hidden.fadeIn(500);
				jQuery(this).fadeTo("slow", 0.23).queue(function(g) {
					jQuery(this).html('Load More Post <i class="flaticon-arrow209">');
					g();
				}).fadeTo("slow", 1);			
			}
		});
	});
		
	/* -------------------------------------------- 
	 BLOG FLEX SLIDER
	-------------------------------------------- */
	jQuery(function() {
		"use strict";
		jQuery(".flexslider1").each(function() {
			jQuery('.flexslider1').flexslider({
				animation: 'fade',
				slideshow: false,
				animationLoop: false,
				controlNav: false
			});
		});
	});
	
	/* --------------------------------------------
	 ANIMATED SKILL BARS
	-------------------------------------------- */
	jQuery(function() {		
		jQuery('.progress-bar').appear(function(){
			datavl = jQuery(this).attr('data-percentage'),
			jQuery(this).animate({ "width" : datavl + "%"}, '200');
		});
	});
	
	/* --------------------------------------------
	 COUNT FACTORS
	-------------------------------------------- */  
	jQuery(function() {
		jQuery(".fact-number").appear(function(){
			jQuery(this).each(function(){
			dataperc = jQuery(this).attr('data-perc'),
				jQuery(this).find('.factor').delay(6000).countTo({
					from: 10,
					to: dataperc,
					speed: 3000,
					refreshInterval: 50,	
				});  
			});
		});
	});
		
	/* --------------------------------------------
	 VIDEO SCRIPT
	-------------------------------------------- */
	jQuery(function() {
		"use strict";
		if ( jQuery( ".player" ).length ) {
			jQuery(".player").mb_YTPlayer();
		}
	});		
});
/* --------------------------------------------
 READY FUNCTION ENDS
-------------------------------------------- */

/* --------------------------------------------
 LOAD FUNCTION
-------------------------------------------- */
jQuery(window).load(function() {

	/* --------------------------------------------
	 PAGE LOADER
	-------------------------------------------- */	
	jQuery(function() {
		"use strict";
		jQuery(".loader-item").delay(700).fadeOut();
		jQuery("#pageloader").delay(800).fadeOut("slow");
	});
	
	/* --------------------------------------------
	 ISOTOPE ANIMATION
	-------------------------------------------- */
	/*jQuery(function(){
		"use strict";
		if ( jQuery( ".portfolio-container" ).length ) {
			var container = jQuery('.portfolio-container');
			container.isotope({
				filter: '*',
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
		}		
		jQuery('.portfolio-filter a').click(function(){
			jQuery('.portfolio-filter .current').removeClass('current');
			jQuery(this).addClass('current');
	
			var selector = jQuery(this).attr('data-filter');
			container.isotope({
				filter: selector,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
		   return false;
		});
	});*/
	
	/* --------------------------------------------
	 CLIENT 
	-------------------------------------------- */
	jQuery(function() {
		"use strict";
		if ( jQuery( "#flexiselDemo" ).length ) {
			jQuery("#flexiselDemo").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
					changePoint:480,
					visibleItems: 2
					},
					landscape: {
					changePoint:640,
					visibleItems: 2
					},
					tablet: {
					changePoint:768,
					visibleItems: 3
					}
				}
			});
		}
	});
		
	/* --------------------------------------------
 	 CONTACT FORM
	-------------------------------------------- */
	var messageDelay = 2000;
	jQuery(init);
	
	function init() {
	  jQuery('#contactForm').show().submit( submitForm ).addClass( 'positioned' );  
	}
	
	// Submit the form via Ajax
	function submitForm() {
	  var contactForm = jQuery(this);
	
	  // Are all the fields filled in?
	
	  if ( !jQuery('#senderName').val() || !jQuery('#senderEmail').val() || !jQuery('#message').val() ) {
	
		// No; display a warning message and return to the form
		jQuery('#incompleteMessage').fadeIn().delay(messageDelay).fadeOut();
		contactForm.fadeOut().delay(messageDelay).fadeIn();
	
	  } else {
	
		// Yes; submit the form to the PHP script via Ajax
	
		jQuery('#sendingMessage').fadeIn();
		contactForm.show();
	
		jQuery.ajax( {
		  url: contactForm.attr( 'action' ) + "?ajax=true",
		  type: contactForm.attr( 'method' ),
		  data: contactForm.serialize(),
		  success: submitFinished
		} );
	  }
	
	  // Prevent the default form submission occurring
	  return false;
	}
	
	
	// Handle the Ajax response
	function submitFinished( response ) {
	  response = jQuery.trim( response );
	  jQuery('#sendingMessage').fadeOut();
	
	  if ( response == "success" ) {
	
		// Form submitted successfully:
		// 1. Display the success message
		// 2. Clear the form fields
		// 3. Fade the content back in
	
		jQuery('#successMessage').fadeIn().delay(messageDelay).fadeOut();
		jQuery('#senderName').val( "" );
		jQuery('#senderEmail').val( "" );
		jQuery('#message').val( "" );
	
		jQuery('#content').delay(messageDelay+500).fadeTo( 'slow', 1 );
	
	  } else {
	
		// Form submission failed: Display the failure message,
		// then redisplay the form
		jQuery('#failureMessage').fadeIn().delay(messageDelay).fadeOut();
		jQuery('#contactForm').delay(messageDelay+500).fadeIn();
	  }
	}

});
/* --------------------------------------------
 LOAD FUNCTION ENDS
-------------------------------------------- */
(function () {
	"use strict";
	jQuery.fn.countTo = function (options) {
		options = options || {};

		return jQuery(this).each(function () {
			// set options for current element
			var settings = jQuery.extend({}, jQuery.fn.countTo.defaults, {
				from:            jQuery(this).data('from'),
				to:              jQuery(this).data('to'),
				speed:           jQuery(this).data('speed'),
				refreshInterval: jQuery(this).data('refresh-interval'),
				decimals:        jQuery(this).data('decimals')
			}, options);

			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;

			// references & variables that will change with each update
			var self = this,
				jQueryself = jQuery(this),
				loopCount = 0,
				value = settings.from,
				data = jQueryself.data('countTo') || {};

			jQueryself.data('countTo', data);

			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);

			// initialize the element with the starting value
			render(value);

			function updateTimer() {
				value += increment;
				loopCount++;

				render(value);

				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}

				if (loopCount >= loops) {
					// remove the interval
					jQueryself.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;

					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}

			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				jQueryself.text(formattedValue);
			}
		});
	};

	jQuery.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};

	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));