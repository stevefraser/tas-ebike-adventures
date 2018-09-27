<?php
/**
 * Website Usage Instructions
 */

/** WordPress Administration Bootstrap */
require_once( ABSPATH . 'wp-load.php' );
require_once( ABSPATH . 'wp-admin/admin.php' );
require_once( ABSPATH . 'wp-admin/admin-header.php' );
?>

<style type="text/css">


</style>

<div class="wrap about-wrap">

	<h1><?php _e( 'Website Instructions' ); ?></h1>

	 <div class="about-text">
	 <?php _e('Below are some simple instructions on how to use this website. For more information, please contact <a href="http://nybble.com.au" target="blank">Nybble Digital</a>.' ); ?>
	 </div>

	 <?php
		$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'basics';
	 ?>

	 <h2 class="nav-tab-wrapper">
    <a href="?page=website-instructions&tab=basics" class="nav-tab <?php echo $active_tab == 'basics' ? 'nav-tab-active' : ''; ?>">The Basics</a>
    <a href="?page=website-instructions&tab=editing" class="nav-tab <?php echo $active_tab == 'editing' ? 'nav-tab-active' : ''; ?>">Editing Content</a>
    <a href="?page=website-instructions&tab=styleguide" class="nav-tab <?php echo $active_tab == 'styleguide' ? 'nav-tab-active' : ''; ?>">Style Guide</a>
</h2>

	 <div class="changelog">


<?php

			switch ($active_tab) {
				case 'basics':
					?>
         		<h4><?php _e( 'Welcome' ); ?></h4>
         		<p>Welcome to your Wordpress website. Please make yourself familiar with the menu on the left.
						</p>
						<h4><?php _e( 'The Dashboard' ); ?></h4>
         <?php
					break;

				case 'editing':
						?>
	         		<h4><?php _e( 'Editing Content' ); ?></h4>
	         		<p>This website makes extensive use of <strong>Custom Fields</strong>, a little piece of Wordpress awesomeness for developers and their clients!
	         		</p>
	         		<p>Custom Fields break the website content into clear, easy-to-edit blocks with almost no risk of breaking the website. Here's how to use them:</p>
	         		<p>To edit any page or post, simply navigate to the page or post while logged in as a admin user, and click on the Edit Page (or Edit Post) link at the top of the page:</p>
							<p><img src="<?php bloginfo('template_directory'); ?>/img/instructions_edit_page.jpg" alt="edit page" /></p>
							<p>&nbsp;</p>
							<p>For more specific content editing guidelines, please talk to the Nybble Digital team.</p>
	         <?php
					break;

				case 'styleguide':
						?>
	         		<h4><?php _e( 'Style Guide' ); ?></h4>
	         		<p>This awesome Wordpress theme developed by Nybble Digital has an in-built Style Guide page and is fully customisable in the Dashboard.
	         		</p>
	         		<p>To activate the Style Guide, go to &#34;Pages&#34;, then &#34;Add New&#34; in the dashboard menu and create a new page called &#34;Style Guide&#34; or something similar:
							</p>
							<p><img src="<?php bloginfo('template_directory'); ?>/img/instructions_add_new_page.jpg" alt="add new page" /></p>
							<p>&nbsp;</p>
							<p>On the new page, over on the right hand side, under &#34;Page Attributes&#34;, select the &#34;Style Guide&#34; page template from the Template drop down box. Then click Update:</p>
							<p><img src="<?php bloginfo('template_directory'); ?>/img/instructions_styleguide_template.jpg" alt="set page template" /></p>
							<p>&nbsp;</p>
							<p>Now click on Appearance, then Customise in the dashboard menu. Under the &#34;Static Front Page&#34; menu item, change the Front Page to &#34;Style Guide&#34;:</p>
							<p><img src="<?php bloginfo('template_directory'); ?>/img/instructions_change_front_page.jpg" alt="add new page" /></p>
							<p>&nbsp;</p>
							<p>Enter values for all settings and click &#34;Save and Publish&#34; to set the changes.</p>
							<p>&nbsp;</p>
							<p>You are new free to edit any of the settings on the left and see them previewed live on the right.</p>
							<p>IMPORTANT NOTE: Make sure the Website Font Stacks are entered perfectly, one stack on each line:</p>
							<p><img src="<?php bloginfo('template_directory'); ?>/img/instructions_font_stacks.jpg" alt="add new page" /></p>


	         <?php
					break;

				default:
					?>
         		<h4><?php _e( 'Default' ); ?></h4>
         		<p>Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
         		</p>
         		<p>Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
						</p>
         <?php
					break;
			}


?>










</div>


<?php //include( ABSPATH . 'wp-admin/admin-footer.php' );