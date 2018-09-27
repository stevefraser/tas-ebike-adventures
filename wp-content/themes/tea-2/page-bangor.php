<?php
/*
Template Name: Tour Page
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
                <div class="ten columns right_border">

                      <?php the_content(); ?>

                </div>
                <div class="six columns">

                  <?php get_template_part('booking','widget'); ?>



                </div>
        </div>
</div>



<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>