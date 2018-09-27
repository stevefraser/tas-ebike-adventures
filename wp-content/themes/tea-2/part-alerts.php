<?php if (get_field('show_alert_box') == "yes") { ?>
<div class="container">
    <div class="row">
        <div class="sixteen columns">
          <div class="alert_box">
              <div class="twelve columns">
                <h3><?php echo get_field('alert_box_heading'); ?></h3>
                <?php echo get_field('alert_box_content'); ?>
              </div>
              <div class="four columns">
                <?php
                  $linkOne = get_field('alert_box_button_one_link');
                  $textOne = get_field('alert_box_button_one_text');
                  $linkTwo = get_field('alert_box_button_two_link');
                  $textTwo = get_field('alert_box_button_two_text');
                  if ($linkOne) {
                    echo '<a href="' . $linkOne . '" class="button_white">' . $textOne . '</a>';
                  }
                  if ($linkTwo) {
                    echo '<a href="' . $linkTwo . '" class="button_white">' . $textTwo . '</a>';
                  }
                ?>
              </div>
              <div class="clear"></div>
          </div>
        </div>
    </div>
</div>
<?php } ?>