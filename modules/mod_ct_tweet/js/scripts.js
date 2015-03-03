jQuery(function($) {
    $(document).ready(function() {
         $(".tweets_feed").owlCarousel({
                pagination: false,
                navigation: false,
                autoPlay: true,
                singleItem: true
            });
    });
});