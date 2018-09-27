<?php
/*
Template Name: Search Page
*/
?>


<?php get_header(); ?>




  <div class="container pageContent">
          <div class="row"><div class="sixteen columns">&nbsp;</div></div>
          <div class="row">
                  <div class="sixteen columns searchPage">
                        <?php if ( have_posts() ) : ?>

                        <h2 class="page-title">
                          <?php
                              global $wp_query;
                              $total_results = $wp_query->found_posts;
                              echo $total_results . ' ';
                              ($total_results == 1 ? _e('result found for: ') : _e('results found for: ') );
                              echo '<span>' . the_search_query() . '</span>';
                              wp_reset_query();
                          ?>
                        </h2>
                        <hr>
                  </div>
          </div>


          <div class="row">
                  <div class="sixteen columns searchPage">

                        <?php while ( have_posts() ) : the_post() ?>

                              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                      <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'hbd-theme'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?>
                                        </a>
                                      </h2>

                                      <div class="entry-summary">
                                        <?php
                                          the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'hbd-theme' )  );
                                        ?>
                                        <a class="custom_button" href="<?php the_permalink(); ?>">Read more</a>
                                      </div>
                                      <hr>

                              </div><!-- #post-<?php the_ID(); ?> -->

                          <?php endwhile; ?>

                          <?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                              <div id="nav-below" class="navigation">
                                  <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'hbd-theme' )) ?></div>
                                  <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'hbd-theme' )) ?></div>
                              </div>
                          <?php } ?>

                          <?php else : ?>

                                <div id="post-0" class="post no-results not-found">
                                    <h2 class="entry-title"><?php _e( 'Nothing Found', 'hbd-theme' ) ?></h2>
                                    <div class="entry-content">
                                        <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'hbd-theme' ); ?></p>

                                    </div>
                                </div>

                          <?php endif; ?>

                          <form method="get" id="fourSearch" action="<?php bloginfo('url'); ?>/">
                              <div><input class="search-field" type="text" size="put_a_size_here" name="s" id="s" value="Search Again" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                              <input style="display: none;" type="submit" id="searchsubmit" value="Search" class="btn" />
                              </div>
                          </form>





                  </div>
          </div>
  </div>







<?php get_footer(); ?>