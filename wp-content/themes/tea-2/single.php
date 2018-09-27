<?php get_header(); ?>


<div class="container">
    <div class="row">
        <div class="sixteen columns">

            <?php the_title(); ?>

            <?php the_post(); ?>
            <?php the_content(); ?>

        </div>
    </div>
</div>


<?php get_footer(); ?>