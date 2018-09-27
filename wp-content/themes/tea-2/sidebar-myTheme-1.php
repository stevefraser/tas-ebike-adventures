<?php
      if ( ! is_user_logged_in() ) { // Display WordPress login form:
          ?> <a href="<?php bloginfo('url') ?>/login-page/" title="Login">Login</a> <?php
      } else { // If logged in:
          ?> <a href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout">Logout</a> <?php
      }
  ?>

<?php if ( is_sidebar_active('primary_widget_area') ) : ?>
        <div id="primary" class="widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar('primary_widget_area'); ?>
            </ul>
        </div><!-- #primary .widget-area -->
<?php endif; ?>       
 
<?php if ( is_sidebar_active('secondary_widget_area') ) : ?>
        <div id="secondary" class="widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar('secondary_widget_area'); ?>
            </ul>
        </div><!-- #secondary .widget-area -->
<?php endif; ?>