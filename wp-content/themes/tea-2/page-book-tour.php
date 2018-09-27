<?php
/*
Template Name: Booking Page
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
                <div class="six columns">

                  <?php get_template_part('booking','widget'); ?>

                </div>
                <div class="ten columns">
                      <h3>How many people in your group?</h3>
                      <br>
                      <div class="styled-select">
                          <select id="choosePlaces">
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

                      <div class="placesChosen"></div>
                      <hr>


                      <div id="ajax-response">
                          <h4>Choose a tour on the left..</h4>
                          <p>&nbsp;</p>
                      </div>
                </div>
        </div>
</div>



<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>