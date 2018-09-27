<?php
/*
Template Name: FAQs Page
*/
?>

<?php get_header(); ?>

<?php
    global $post;
    $permalink = get_permalink($post->ID);
?>




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





<!-- <div class="container">
    <div class="row">
        <div class="sixteen columns">

            <ul class="faq-list">
                <?php

                // $faqs = get_field('faqs');
                // foreach ($faqs as $key => $faq) {
                //     $markup  = '';
                //     if ($faq['question']) {
                //         $markup .= '<li>';
                //         $markup .= '<div class="question">' . $faq['question'] . '</div>';
                //         $markup .= '<div class="answer">' . $faq['answer'] . '</div>';
                //         $markup .= '</li>';
                //     }

                // echo $markup;
                // }

                ?>

            </ul>

            <?php //the_post(); ?>
            <?php //the_content(); ?>

        </div>
    </div>
</div> -->



<div class="container">
    <div class="row">
        <div class="sixteen columns">

            <?php
              if (have_rows('faqs')) {
                  while (have_rows('faqs')) : the_row();

                      echo '<div class="question">';
                          echo get_sub_field('question');
                      echo '</div>';

                      echo '<div class="answer">';
                          echo get_sub_field('answer');
                      echo '</div>';     

                  endwhile; 
              } 
            ?>

        </div>
    </div>
</div>




<?php get_footer(); ?>