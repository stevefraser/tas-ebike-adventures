<?php

// METHOD TO CHECK AVAILABILITY AND ADD PARAMETERS TO BOOKING BUTTON
add_action( 'wp_ajax_update_booking_widget', 'update_booking_widget_function' );
add_action( 'wp_ajax_nopriv_update_booking_widget', 'update_booking_widget_function' );

function update_booking_widget_function() {

  $sentID    = $_POST['tourID'];
  $sentDATE    = $_POST['tourDATE'];
  $sentPLACES    = $_POST['tourPLACES'];
  //$riders    = $_POST['riders'];

  $newdate = new DateTime($sentDATE);

  echo '<h4>' . $newdate->format('j F, Y') . '</h4>';

  if ($sentPLACES == 0) {
    echo '<p>Sorry, this day is booked out. Please try another date.</p>';
  } else {
    echo '<p>This tour is available for ' . $sentPLACES . ' riders.</p>';
  }


}





// METHOD TO CHECK AVAILABILITY AND ADD PARAMETERS TO BOOKING BUTTON
add_action( 'wp_ajax_update_booking_button', 'update_booking_button_function' );
add_action( 'wp_ajax_nopriv_update_booking_button', 'update_booking_button_function' );

function update_booking_button_function() {

  $sentNAME      = $_POST['tourNAME'];
  $sentID        = $_POST['tourID'];
  $sentDATE      = $_POST['tourDATE'];
  $sentPLACES    = $_POST['tourPLACES'];
  $sentRIDERS    = $_POST['tourRIDERS'];

  if($sentPLACES < $sentRIDERS) {
    echo '<div>Sorry, there are only ' . $sentPLACES . ' places available.</div>';
  } else {
    echo '<a class="booknow-button" href="' . get_bloginfo('url') . '/booking-form?tour_name=' . $sentNAME . '&tour_id=' . $sentID . '&tour_date=' . $sentDATE . '&tour_places=' . $sentPLACES . '&tour_riders=' . $sentRIDERS . '">Book now!</a>';
  }

}





?>