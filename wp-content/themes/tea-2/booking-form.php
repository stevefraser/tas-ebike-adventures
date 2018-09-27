<?php
/*
Template Name: Booking Form
*/
?>

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
                                <h1><?php the_title(); ?></h1>
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
                <div class="sixteen columns">

                  <?php
                      $tourNAME = htmlspecialchars($_GET["tour_name"]);
                      $tourID = htmlspecialchars($_GET["tour_id"]);
                      $tourDATE = htmlspecialchars($_GET["tour_date"]);
                      $tourPLACES = htmlspecialchars($_GET["tour_places"]);
                      $tourRIDERS = htmlspecialchars($_GET["tour_riders"]);
                      $newdate = new DateTime($tourDATE);
                      $realDate = $newdate->format('j F, Y');

                      echo '<h3>BOOKING DETAILS:</h3><br>';
                      echo '<p>Tour Name: ' . $tourNAME . '<br>';
                      echo 'Tour Date: ' . $realDate . '<br>';
                      echo 'Available places: ' . $tourPLACES . '<br>';
                      echo 'Number of riders: ' . $tourRIDERS . '</p>';
                      //echo '<p>Tour ID: ' . $tourID . '</p>';

                      switch ($tourID) {
                        case '14':
                          # Bangor Epic (Full Day) Post ID
                          $gformID = 3;
                          break;

                        case '286':
                          # Cape Frederick Hendrick Morning Adventure Post ID
                          $gformID = 4;
                          break;

                        case '293':
                          # Monument Bay Afternoon Adventure Post ID
                          $gformID = 5;
                          break;

                        case '365':
                          # Bangor Adventure (Half Day) Post ID
                          $gformID = 7;
                          break;

                        default:
                          # code...
                          break;
                      }

                      echo do_shortcode('[gravityform id=' . $gformID . ' title="false" ajax="true" field_values="
                          tour_id=' . $tourID .
                          '&tour_date=' . $realDate .
                          '&tour_places=' . $tourPLACES .
                          '&tour_riders=' . $tourRIDERS .
                        '"]');
                  ?>


                </div>
        </div>
</div>


<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>