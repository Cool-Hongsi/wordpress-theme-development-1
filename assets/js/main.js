$(function() {

    // Cache the window object
    var $window = $(window);

    // Parallax background effect
    $('section[data-type="background"]').each(function(){
        var $bgobj = $(this); // Assigning the object

        $(window).scroll(function(){

            // Scroll the background at var speed
            // the yPos is a negative value because we're scrolling

            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

            // Put together our final background position
            var coords = '50% ' + yPos + 'px';

            // Move the background
            $bgobj.css( {backgroundPosition: coords} );

        });
    });

});