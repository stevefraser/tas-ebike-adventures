jQuery(function( $ ) {
  //var starting_position = $('.site-header').outerHeight( true ) + $('.nav-primary').outerHeight( true );
  var starting_position = 200;

  $(window).scroll(function() {
    var yPos = ( $(window).scrollTop() );
    if( yPos > starting_position ) { // show sticky menu after these many (starting_position) pixels have been scrolled down from the top and only when viewport width is greater than 500px.
      //$(".floatingNav").fadeIn();
      $("#floatingNav").slideDown(200);
    } else {
      //$(".floatingNav").fadeOut();
      $("#floatingNav").slideUp(200);
    }
  });
});