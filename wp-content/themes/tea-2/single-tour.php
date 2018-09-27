<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>



<section class="section-hero">

      <?php

          $bgImage = get_field('background_image');
          $bgAlign = get_field('vertical_align');
          $bgSize = get_field('height');
          // echo '<div class="fullwidth hero" style="background: url('. $bgImage . '); background-size: cover; background-position: center ' . $bgAlign . '; height: ' . $bgSize . '%; height: ' . $bgSize . 'vh;">';
          echo '<div class="fullwidth hero" style="background: url('. $bgImage . '); background-size: cover; background-position: center ' . $bgAlign . '; height: ' . $bgSize . '%; height: ' . $bgSize . 'vh;">';
                ?>
                <div class="container">
                  <div class="row">
                    <div class="ten columns">
                        <div class="vcentered-parent">
                            <div class="slideBox vcentered-child">
                                <h1><?php echo get_the_title(); ?></h1>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <?php
          echo '</div>';

      ?>

</section>



<div class="container">
        <div class="row">
                <div class="ten columns right_border">

                      <?php the_content(); ?>


                </div>
                <div class="six columns">

                  <?php //get_template_part('booking','widget'); ?>

                  <!-- ====================== -->

                  <div class="booking-widget-wrapper centered">

                        <a name="booking_widget"></a>

                        <hr><h3>Tailored Adventures by Appointment</h3><hr>
                        <p>We can cater for Private Group Bookings, Corporate Adventures or Special Events.</p>
                        <p><em>Prices start from $550 per person, per day (minimum 2 people).</em></p> 

                        <a href="<?php echo get_bloginfo('url'); ?>/contact-us/" class="general_button">Enquire Now</a>

                          <!-- <h3>make a booking</h3>

                          <div class="step_wrapper one">

                              <div class="step_heading one">Step 1 - Choose a date</div>

                              <div class="step_content one">

                                  <div class="view_tab_wrapper">
                                    <div data-show="calendar" class="view_tab cal active">Calendar</div>
                                    <div data-show="list" class="view_tab list">list dates</div>
                                  </div>

                                  <div class="view list">
                                      <?php
                                          $the_id = get_the_ID();
                                          if (have_rows('tour_dates')) :
                                              while(have_rows('tour_dates')) : the_row();
                                                  $date = get_sub_field('datum');
                                                  $places = get_sub_field('places');
                                                  $newdate = new DateTime($date);
                                                  $title = the_title('','',false);

                                                  date_default_timezone_set("Australia/Hobart");
                                                  $now = date('Ymd');

                                                  if ($now < $date) {

                                                      echo '<div class="bookingTab">';
                                                        echo '<div class="tourNAME hiddenData">' . $title . '</div>';
                                                        echo '<div class="tourID hiddenData">' . $the_id . '</div>';
                                                        echo '<div class="tourDATE hiddenData">' . $date . '</div>';
                                                        echo '<div class="tourPLACES hiddenData">' . $places . '</div>';
                                                        echo '<span class="date">' . $newdate->format('j F, Y') . '</span>';
                                                        if ($places < 1) {
                                                          echo ' <span class="soldout">(Sold out!)</span>';
                                                        } else if ($places > 0 && $places < 4) {
                                                          echo ' <span class="nearlygone">(Only ' . $places . ' places left!)</span>';
                                                        }
                                                      echo '</div>';

                                                      $sendDate = "d" . $date;
                                                      $sendPlaces = "p" . $places;
                                                      create_list_tour_1($sendDate,$sendPlaces);

                                                  }

                                              endwhile;
                                          endif;
                                      ?>
                                  </div>

                                  <div class="view calendar">
                                      <?php
                                        //build_calendar_tour_1('December','2016','THU',$the_id);
                                        build_calendar_tour_1($the_id,$title);
                                        //global $date_array;
                                        // echo '<pre>';
                                        // print_r($date_list_tour_1);
                                        // echo '</pre>';
                                      ?>
                                  </div>

                                  
                                  <div class="clear"></div>

                              </div>

                              <div id="ajax-response"></div>

                              <?php
                              // date_default_timezone_set("Australia/Hobart");
                              // $now = date('Ymd');

                              // echo 'TODAY: ' . $now;
                              // $old = "20161207";
                              // //$newdate = new DateTime($old);
                              // echo '<br>TEST DATE: ' . $old;


                              // if ($now > $old) {
                              //   echo '<br>Test Date has Past';
                              // } else {
                              //   echo '<br>Test Date is Coming';
                              // }
                              ?>


                          </div>

                          <div class="step_wrapper two">

                              <div class="step_heading two">Step 2 - No of guests</div>

                              <div class="step_content two">
                                    <div class="styled-select">
                                        <select id="choosePlaces">
                                          <option value="0" selected>Select</option>
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                          <option value="6">6</option>
                                          <option value="7">7</option>
                                          <option value="8">8</option>
                                        </select>
                                    </div>
                                    <div class="ridersText">Select the number of riders in your group.</div>
                                    <div class="clear"></div>
                                    <div class="hiddenData" id="bb_tourNAME">NAME</div>
                                    <div class="hiddenData" id="bb_tourID">ID</div>
                                    <div class="hiddenData" id="bb_tourDATE">DATE</div>
                                    <div class="hiddenData" id="bb_tourPLACES">PLACES</div>

                                    <div id="ajax-button"></div>

                                    <p><br><i class="fa fa-2x fa-info-circle" aria-hidden="true"></i>&nbsp;TIP: Click Step 1 to change dates.</p>


                              </div>

                          </div> -->





                  </div>

                  <!-- ====================== -->


                </div>
        </div>
</div>


<?php get_template_part('flexible','content'); ?>


<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>