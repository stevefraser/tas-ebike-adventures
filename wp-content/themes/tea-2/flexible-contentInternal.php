


    <?php

    // check if the flexible content field has rows of data
    if( have_rows('flexible_content') ):

        // loop through the rows of data
        while ( have_rows('flexible_content') ) : the_row();

                if ( get_row_layout() == 'full_width_content' ) {
                        //echo '<div class="container pageContent">';
                            //echo '<div class="row">';
                                echo '<div class="sixteen columns">';
                                    the_sub_field('wysiwyg_full');
                                echo '</div>';
                            //echo '</div>';
                        //echo '</div>';
                }





                elseif ( get_row_layout() == 'two_halves_content' ) {
                    //echo '<div class="container pageContent">';
                        //echo '<div class="row">';
                            echo '<div class="eight columns">';
                                the_sub_field('left_half_content');
                            echo '</div>';
                            echo '<div class="eight columns">';
                                the_sub_field('right_half_content');
                            echo '</div>';
                        //echo '</div>';
                    //echo '</div>';
                }





                elseif ( get_row_layout() == 'two_thirds_one_third_content' ) {
                    //echo '<div class="container pageContent">';
                        //echo '<div class="row">';
                            $orientation = get_sub_field('orientation');
                            if ($orientation == "left") {
                                echo '<div class="two-thirds column">';
                                    the_sub_field('two_thirds_content');
                                echo '</div>';
                                echo '<div class="one-third column">';
                                    the_sub_field('one_third_content');
                                echo '</div>';
                            } else {
                                echo '<div class="one-third column">';
                                    the_sub_field('one_third_content');
                                echo '</div>';
                                echo '<div class="two-thirds column">';
                                    the_sub_field('two_thirds_content');
                                echo '</div>';
                            }
                        //echo '</div>';
                    //echo '</div>';
                }







                elseif ( get_row_layout() == 'image_gallery' ) {
                    //echo '<div class="container pageContent">';
                        //echo '<div class="row">';
                            echo '<div class="sixteen columns">';

                                echo '<div class="gallery_wrapper">';

                                    if( have_rows('photo_gallery') ) {
                                          while ( have_rows('photo_gallery') ) : the_row();
                                              $image = get_sub_field('image');
                                              $caption = get_sub_field('caption');
                                              echo '<a style="background-color: #d3d3d3; background-image: url(' . $image . '); background-size: cover; background-repeat: no-repeat; background-position: center center;" class="image_gallery" rel="image_gal" title="' . $caption . '" href="' . $image . '">';
                                              echo '</a>';
                                          endwhile;
                                      }

                                echo '</div>';

                            echo '</div>';
                        //echo '</div>';
                    //echo '</div>';
                }










        endwhile;

    else :

    // no layouts found

    endif;

    ?>
