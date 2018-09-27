<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>



<section id="section-home">

  <div id="homeSlider" class="flexslider">

        <?php
          $countSlides = count(get_field('slider'));
          $display = ($countSlides > 1 ? "block" : "none");
        ?>
        <a style="display: <?php echo $display; ?>;" class="previous disabled" href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/previous.png" alt="previous"  /></a>
        <a style="display: <?php echo $display; ?>;" class="next" href="#"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/next.png" alt="next"  /></a>
        <ul class="slides">


          <?php
              while (have_rows('slider')) : the_row();

                  $linkType = get_sub_field('link_type');
                  $urlLink = get_sub_field('url_link');
                  $youtubeLink = get_sub_field('youtube_link');
                  if ($linkType == "url" || $linkType == "youtube") {
                    $hasLink = "yes";
                  } else {
                    $hasLink = "no";
                  }
                  echo '<li>';
                      echo '<div class="fullwidth hero" style="background: url('. get_sub_field('slide_image') . '); background-size: cover; background-position: center center; ">';
                            ?>
                            <div class="container">
                              <div class="row">
                                <div class="twelve columns offset-by-two centered">


                                    <?php if ($hasLink == "yes") {

                                        if ($linkType == "url") {
                                          echo '<a href="' . $urlLink . '">';
                                        } elseif ($linkType == "youtube") {
                                          echo '<a class="lightboxme fancybox.iframe" href="http://www.youtube.com/embed/' . $youtubeLink . '?autoplay=1&fs=1&iv_load_policy=3&showinfo=0&rel=0">';
                                        }

                                    } ?>

                                    <div class="vcentered-parent">
                                        <div class="slideBox vcentered-child">
                                            <?php
                                            echo '<h1>' . get_sub_field('hero_text') . '</h1>';
                                            echo '<p>' . get_sub_field('intro_copy') . '</p>';
                                            if ($hasLink == "yes") {
                                              echo '<div class="slide_button">' . get_sub_field('button_text') . '</div>';
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <?php if ($hasLink == "yes") { echo '</a>'; } ?>

                                </div>
                              </div>
                            </div>
                            <?php
                      echo '</div>';
                  echo '</li>';

              endwhile;

          ?>

          <div class="scroll_more">
            <div>scroll for more</div>
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
          </div>

      </ul>
  </div>

</section>





<?php get_template_part('flexible','content'); ?>


<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>