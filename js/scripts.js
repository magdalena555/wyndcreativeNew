
(function($){
    console.log("function");

    // all jquery code goes in here
    $(document).ready(function(){
 		

 		// mobile navigation menu
 		$('.mobileNavIcon').on('click', function(){
 		  $('.mobile').slideToggle(500);
 		}); // end mobile nav




 		// smoothScroll

 		 $('a[href*=#]:not([href=#])').click(function() {
 		           if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
 		             var target = $(this.hash);
 		             target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
 		             if (target.length) {
 		               $('html,body').animate({
 		                 scrollTop: target.offset().top
 		               }, 1000);
 		               return false;
 		             }
 		           }
 		       });

 		$('.slideshow').flickity({
 		  autoPlay: true,
 		  freeScroll: true,
 		  pageDots: false,
 		  wrapAround: true
 		});

 		// wow.js
 		// new WOW().init();
    });
})(jQuery);


