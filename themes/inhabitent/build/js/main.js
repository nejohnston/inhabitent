
/* Function to expand search field in nav bar */

(function( $ ) {
   $('.fa-search').on('click', function() {
   $('.search-field').animate( { width: 'toggle' }, 500 );

   });

   $('.search-field').on('blur', function() {
       $('.search-field').animate( { width: 'toggle' }, 500 );
   });

})( jQuery );

/*Function to create a remove transparent header on About and Front-Page */

(function($){
    $(window).scroll(function() {
        event.preventDefault();
 var scroll = $(window).scrollTop();
 if (scroll <= 870)
  $(".site-header").addClass("reverse-header");
else
 $(".site-header").removeClass("reverse-header");
})
})
(jQuery);