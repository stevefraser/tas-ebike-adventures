<?php
/*
Template Name: Booking Confirmation
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
                      $primaryNAME = htmlspecialchars($_GET["primary_name"]);
                      $primaryEMAIL = htmlspecialchars($_GET["primary_email"]);
                      $tourNAME = htmlspecialchars($_GET["tour_name"]);
                      $tourDATE = htmlspecialchars($_GET["tour_date"]);
                      $newdate = new DateTime($tourDATE);
                      $realDate = $newdate->format('j F, Y');

                      echo '<h2>Thanks for your booking!</h2><br>';
                      echo '<h3>TOUR DETAILS:</h3>';
                      echo '<p>Contact Name: ' . $primaryNAME . '<br>';
                      echo 'Email address: ' . $primaryEMAIL . '<br>';
                      echo 'Tour Name: ' . $tourNAME . '<br>';
                      echo 'Tour Date: ' . $realDate . '</p>';

                      the_content();
                  ?>


                </div>
        </div>
</div>


<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>