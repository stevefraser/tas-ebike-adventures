<?php
/*
Template Name: Custom Tour Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>



<section class="section-hero">

      <?php

          $bgImage = get_field('background_image');
          $bgAlign = get_field('vertical_align');
          $bgSize = get_field('height');
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

                  <h3>tell us what you want</h3>

                  <?php echo do_shortcode('[gravityform id="6" ajax="true" title="false"]'); ?>

                  


                </div>
        </div>
</div>


<?php get_template_part('flexible','content'); ?>


<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>