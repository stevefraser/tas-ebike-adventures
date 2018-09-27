<?php if (get_field('display_news_and_events') == "yes") { ?>
<div class="container">
        <div class="row">
          <div class="sixteen columns homepage content">
            <h3>Latest news &amp; events</h3>
          </div>
        </div>
        <div class="row">
              <?php
                if( have_rows('show_news_and_events') ) {
                    while ( have_rows('show_news_and_events') ) : the_row();
                        $news = get_sub_field('item');
                        setup_postdata($news);
                        $imgSrc = wp_get_attachment_url( get_post_thumbnail_id($news->ID) );
                        echo '<div class="one-third column">';
                          echo '<div class="homepage event">';
                            echo '<a href="' . get_permalink($news->ID) . '">';
                            echo '<div class="type_tab">' . get_post_type($news->ID) . '</div>';
                            echo '<img src="' . $imgSrc . '" />';
                            echo '<h5>' . get_the_title($news->ID) . '</h5>';
                            echo '<div class="date">' . get_field('date_published',$news->ID) . '</div>';
                            echo '<p>' . get_the_excerpt($news->ID) . '</p>';
                            echo '<div class="button_green">discover more</div>';
                            echo '</a>';
                          echo '</div>';
                        echo '</div>';
                    endwhile;
                }
                wp_reset_postdata();
              ?>
        </div>
</div>
<?php } ?>