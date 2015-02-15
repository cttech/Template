
 /* ==============================================
Home Super Slider (images)
=============================================== */
 jQuery('#slides').superslides({
      animation: 'fade'
    });
	
/* ==============================================
Flex Slider Home Main
=============================================== */	
	
 jQuery(window).load(function(){
 
	  'use strict';
		
      jQuery('.flexslider').flexslider({
        animation: "slide",
		selector: ".home-slides > li",
		controlNav: true,
		directionNav: false ,
		direction: "vertical",
        start: function(slider){
          jQuery('body').removeClass('loading'); 
        }
      });
 });
	

/* ==============================================
Flex Slider Blog
=============================================== */	
	
 jQuery(window).load(function(){
 
	  'use strict';
		
      jQuery('.post-slide').flexslider({
        animation: "fade",
		selector: ".post-slides > .item",
		controlNav: false,
		directionNav: true ,
		direction: "vertical",
        start: function(slider){
          jQuery('body').removeClass('loading'); 
        }
      });
 });


/* ==============================================
Drop Down Menu Fade Effect
=============================================== */	

jQuery('.nav-toggle').hover(function() {
    jQuery(this).find('.dropdown-menu').first().stop(true, true).fadeIn(400);
    }, function() {
    jQuery(this).find('.dropdown-menu').first().stop(true, true).fadeOut(400)
    });

/* ==============================================
Drop Down Menu For Mobile
=============================================== */	

jQuery('.mobile-toggle').hover(function() {
    jQuery(this).find('.dr-mobile').first().stop(true, true).slideToggle(400);
    }, function() {
    jQuery(this).find('.dr-mobile').first().stop(true, true).slideToggle(400)
    });

 /* ==============================================
Flex Slider Testimonials
=============================================== */	
	
 jQuery(window).load(function(){
 
	  'use strict';
		
      jQuery('.testimonial').flexslider({
        animation: "fade",
		selector: ".testimonials .monial",
		controlNav: false,
		directionNav: true ,
		slideshowSpeed: 7000,  
		direction: "horizontal",
        start: function(slider){
          jQuery('body').removeClass('loading'); 
        }
      });
 });
	
/* ==============================================
Pretty Photo
=============================================== */	
	
	jQuery(document).ready(function(){
    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
        theme: "light_square",
    });
  });

/* ==============================================
Scroll Navigation
=============================================== */	

jQuery(function() {
		jQuery('.scroll').bind('click', function(event) {
			var jQueryanchor = jQuery(this);
			var headerH = jQuery('#navigation').outerHeight();
			jQuery('html, body').stop().animate({
				scrollTop : jQuery(jQueryanchor.attr('href')).offset().top - headerH + "px"
			}, 1200, 'easeInOutExpo');

			event.preventDefault();
		});
	});

/* ==============================================
Our Works / isotope Scripts
===============================================	*/

    jQuery(window).load(function(){
      
      var jQuerycontainer = jQuery('.items');

      jQuerycontainer.isotope({
        itemSelector : '.work'
      });
      
      
      var jQueryoptionSets = jQuery('#options .option-set'),
          jQueryoptionLinks = jQueryoptionSets.find('a');

      jQueryoptionLinks.click(function(){
        var jQuerythis = jQuery(this);
        // don't proceed if already selected
        if ( jQuerythis.hasClass('selected') ) {
          return false;
        }
        var jQueryoptionSet = jQuerythis.parents('.option-set');
        jQueryoptionSet.find('.selected').removeClass('selected');
        jQuerythis.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = jQueryoptionSet.attr('data-option-key'),
            value = jQuerythis.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( jQuerythis, options )
        } else {
          // otherwise, apply new options
          jQuerycontainer.isotope( options );
        }
        
        return false;
      });

      
    });
	
	    jQuery(window).resize(function(){
     
      var jQuerycontainer = jQuery('.items');

      jQuerycontainer.isotope({
        itemSelector : '.work'
      });
      
      
      var jQueryoptionSets = jQuery('#options .option-set'),
          jQueryoptionLinks = jQueryoptionSets.find('a');

      jQueryoptionLinks.click(function(){
        var jQuerythis = jQuery(this);
        // don't proceed if already selected
        if ( jQuerythis.hasClass('selected') ) {
          return false;
        }
        var jQueryoptionSet = jQuerythis.parents('.option-set');
        jQueryoptionSet.find('.selected').removeClass('selected');
        jQuerythis.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = jQueryoptionSet.attr('data-option-key'),
            value = jQuerythis.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( jQuerythis, options )
        } else {
          // otherwise, apply new options
          jQuerycontainer.isotope( options );
        }
        
        return false;
      });

      
    });
 /* ==============================================
Page Loader
=============================================== */

'use strict';

jQuery(window).load(function() {
	jQuery(".loader-item").delay(700).fadeOut();
	jQuery("#pageloader").delay(1200).fadeOut("slow");
});

/* ==============================================
Parallax Calling
=============================================== */


( function ( jQuery ) {
'use strict';
jQuery(document).ready(function(){
jQuery(window).bind('load', function () {
		parallaxInit();						  
	});
	function parallaxInit() {
		testMobile = isMobile.any();
		if (testMobile == null)
		{
			jQuery('.image1').parallax("50%", 0.5);
			jQuery('.image2').parallax("50%", 0.5);
			jQuery('.image3').parallax("50%", 0.5);
			jQuery('.image4').parallax("50%", 0.5);
			jQuery('.parallax').parallax("50%", 0.5);
			jQuery('.parallax1').parallax("50%", 0.5);
			jQuery('.parallax2').parallax("50%", 0.5);
			jQuery('.parallax3').parallax("50%", 0.5);
			jQuery('.parallax4').parallax("50%", 0.5);
		}
	}	
	parallaxInit();	 
});	
//Mobile Detect
var testMobile;
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
}( jQuery ));
	
	
/* ==============================================
Carousel Slider
=============================================== */		

    


/* ==============================================
Navigation Menu, Sticky
=============================================== */

	jQuery(window).load(function(){
		'use strict';
		jQuery("#navigation").sticky({ topSpacing: 0 });
    });
	
/* ==============================================
Load Project
=============================================== */
	jQuery('.carousel').on('slide.bs.carousel', function () {
		'use strict';
		jQuery('.carousel').carousel({
		  interval: 3000
		})
	})


		
 /* ==============================================
Google Map Styles
=============================================== */		
window.onload = function () {

			'use strict';

			var latlng = new google.maps.LatLng(18.411378,-66.102344);

			var styles = [ 

						 {
							"featureType": "road",
							"stylers": [
							  { "color": "#000000" }
							]
						  },{
							"featureType": "landscape",
							"stylers": [
							  { "color": "#141414" }
							]
						  },{
							"elementType": "labels.text.fill",
							"stylers": [
							  { "color": "#808080" }
							]
						  },{
							"featureType": "poi",
							"stylers": [
							  { "color": "#161616" }
							]
						  },{
							"elementType": "labels.text",
							"stylers": [
							  { "saturation": 1 },
							  { "weight": 0.1 },
							  { "color": "#7f8080" }
							]
						  },{
						  }
						  
						  ];


			var myOptions = {
				zoom: 16,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				disableDefaultUI: true,
				scrollwheel: false,
				styles: styles
			};
			
			 var contentString = '<div id="content">'+
			  '<div id="siteNotice">'+
			  '</div>'+
			  '<h4>We Are Here</h4>'+
			  '<p>Description' +
			  '</p>'+
			  '</div>';

		  var infowindow = new google.maps.InfoWindow({
			  content: contentString
		  });
			
			var map = new google.maps.Map(document.getElementById('map'), myOptions);
			
			var myLatlng = new google.maps.LatLng(18.411378,-66.102344);
			
			var image = 'images/marker.png';
			var marker = new google.maps.Marker({
				  position: myLatlng,
				  map: map,
				  title: 'Hello World!',
				  icon: image
			  });
			  
			 google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			  });
		
		}
	
	


 /* ==============================================
Animated Items
=============================================== */	
	jQuery(document).ready(function(jQuery) {
	
	'use strict';

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



 /* ==============================================
Fit Videos
=============================================== */
jQuery(window).load(function(){
        jQuery(".fit-vids").fitVids();
    });

 /* ==============================================
Back To Top Button
=============================================== */
	
jQuery(document).ready(function(){

	// hide #back-top first
	jQuery("#back-top").hide();
	});
	// fade in #back-top
	jQuery(document).ready(function(){
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('#back-top').fadeIn();
			} else {
				jQuery('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		jQuery('#back-top a').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

	



 /* ==============================================
Count Factors
 =============================================== */	
  

		jQuery(function() {
				jQuery(".facts").appear(function(){
				jQuery('.facts').each(function(){
	        	dataperc = jQuery(this).attr('data-perc'),
				jQuery(this).find('.factor').delay(6000).countTo({
	            from: 5,
	            to: dataperc,
	            speed: 3000,
	            refreshInterval: 50,
	            
        	});  
		});
					});
});
 
(function(jQuery) {
    jQuery.fn.countTo = function(options) {
        // merge the default plugin settings with the custom options
        options = jQuery.extend({}, jQuery.fn.countTo.defaults, options || {});

        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(options.speed / options.refreshInterval),
            increment = (options.to - options.from) / loops;

        return jQuery(this).each(function() {
            var _this = this,
                loopCount = 0,
                value = options.from,
                interval = setInterval(updateTimer, options.refreshInterval);

            function updateTimer() {
                value += increment;
                loopCount++;
                jQuery(_this).html(value.toFixed(options.decimals));

                if (typeof(options.onUpdate) == 'function') {
                    options.onUpdate.call(_this, value);
                }

                if (loopCount >= loops) {
                    clearInterval(interval);
                    value = options.to;

                    if (typeof(options.onComplete) == 'function') {
                        options.onComplete.call(_this, value);
                    }
                }
            }
        });
    };

    jQuery.fn.countTo.defaults = {
        from: 0,  // the number the element should start at
        to: 100,  // the number the element should end at
        speed: 1000,  // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,  // the number of decimal places to show
        onUpdate: null,  // callback method for every time the element is updated,
        onComplete: null,  // callback method for when the element finishes updating
    };
})(jQuery);

