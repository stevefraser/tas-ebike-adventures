<?php get_header(); ?>



<section class="section-hero">

      <?php

          echo '<div class="fullwidth hero" style="background: url(' . get_bloginfo("template_directory") . '/img/backgrounds/bg_scenery_1.jpg); background-size: cover; background-position: center center; height: 55%; height: 55vh;">';
                ?>
                <div class="container">
                  <div class="row">
                    <div class="ten columns">
                        <div class="vcentered-parent">
                            <div class="slideBox vcentered-child">
                                <h1>Oops.... 404!</h1>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <?php
          echo '</div>';

      ?>

</section>



	<div class="container pageContent fourOH">
	        <div class="row"><div class="sixteen columns">&nbsp;</div></div>
	        <div class="row">
	                <div class="sixteen columns centered fourOhFour">
	                        <h4>The page your were looking for appears to have moved, been deleted or does not exist.</h4>
	                        <h6>You could <a href="javascript:history.back();">go back</a> to where you were or head straight to our <a href="<?php bloginfo('url'); ?>">home page</a>.</h6>
	                        <?php //get_search_form(); ?>
	                        <form method="get" id="fourSearch" action="<?php bloginfo('url'); ?>/">
                        <div><input style=" margin: 2rem auto; text-align: center; width: 90%; max-width: 300px; display: block;" class="search-field" type="text" size="put_a_size_here" name="s" id="s" value="Search and hit Enter" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"/>
                        <input style="display: none;" type="submit" id="searchsubmit" value="Search" class="btn" />
                        </div>
                    </form>
	                </div>
	        </div>
	</div>




<?php get_footer(); ?>