
<?php if (get_field('show_testimonials') == "yes") { ?>
<div id="testimonial_footer" class="flexslider">
    <div class="container">
        <div class="sixteen columns centered">
            <ul class="slides">
                <?php
                    echo get_field('testimonials_intro','option');
                    if( have_rows('testimonials','option') ) {
                        while ( have_rows('testimonials','option') ) : the_row();
                            $name = get_sub_field('name');
                            $from = get_sub_field('where_from');
                            $testimonial = get_sub_field('testimonial');
                            echo '<li>';
                                echo '<div class="speech_mark"><i class="fa fa-quote-right" aria-hidden="true"></i></div>';
                                echo '<div class="testimonial">' . $testimonial . '</div>';
                                echo '<div class="name">' . $name . ', ' . $from . '</div>';
                            echo '</li>';
                        endwhile;
                    }
                ?>
            </ul>
        </div>
    </div>
</div>
<?php } ?>


<div id="partner_footer">
    <div class="container">
        <div class="sixteen columns centered">
            <?php
                echo get_field('partner_intro','option');
                if( have_rows('partners','option') ) {
                    while ( have_rows('partners','option') ) : the_row();
                        $p_name = get_sub_field('partner_name');
                        $p_logo = get_sub_field('partner_logo');
                        $p_link = get_sub_field('partner_website_link');
                        if ($p_link) { echo '<a href="' . $p_link . '">'; }
                        echo '<img src="' . $p_logo . '" alt="' . $p_name . '" />';
                        if ($p_link) { echo '</a>'; }
                    endwhile;
                }
            ?>
        </div>
    </div>
</div>


<div id="fullWidthFooter" style="text-align: <?php echo get_theme_mod( 'copyright_alignment' ); ?>">
    <div class="container">
        <div class="sixteen columns">

            <?php if( get_theme_mod( 'hide_copyright' ) == '') { ?>
            <div id="secretLoginBox">
                <p><a href="<?php bloginfo('url'); ?>/login/">Click here</a> to Log in.</p>
            </div>
            <p>
                <!-- <a class="secretLogin" href="#secretLoginBox"> -->
                    <?php echo get_theme_mod( 'copyright_textbox' ); ?> |
                    <a href="<?php echo get_bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a> |
                    <a href="<?php echo get_bloginfo('url'); ?>/terms-and-conditions/">Terms &amp; Conditions</a>
                <!-- </a> -->
            </p>
            <?php } ?>

        </div>

        <div class="sixteen columns centered">
            <a class="sm_link" href="https://www.facebook.com/Tasmanian-Ebike-Adventures-260600061002787/" target="_blank">
                <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <span class="hashtag">#tasmanianebikeadventures</span>
        </div>


        <a href="#" class="backtotop"></a>
    </div>
</div>


<a href="#" class="backtotop"></a>


<?php wp_footer(); ?>





<nav id="sideNav">
	<div href="#" class="cross"></div>
    <!-- INSERT LOGO IMAGE BELOW ================= -->
    <div class="slideNavLogo"><img src="<?php bloginfo('template_directory'); ?>/img/logo_menu.png" /></div>
    <?php wp_nav_menu( array(
        'theme_location' => 'slide-menu',
        'sort_column' => 'menu_order',
        'menu_class'=>'slide-in-menu'
        ) ); ?>
</nav>











</div><!-- /complete page wrapper  -->

</body>
</html>