<?php

/* Theme Options Page ================= */


function build_options_page() { ?>

<!-- This section builds the Theme Options Page HTML -->
<div id="theme-options-wrap">
	<div class="icon32" id="icon-tools"> <br /> </div>
	<h2>Theme Custom Settings</h2>
	<p>Update custom settings on the website.</p>
	<form method="post" action="options.php" enctype="multipart/form-data">
		<?php settings_fields('theme_options'); ?>
		<?php do_settings_sections('theme_options'); ?>
		<p class="submit">
			<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
		</p>
	</form>
</div>
<?php }


// Register Settings Fields and Settings Sections
add_action('admin_init', 'register_and_build_fields');

function register_and_build_fields() {

	register_setting('theme_options', 'theme_options', 'validate_setting');

	add_settings_section('general_settings', '', 'section_general', 'theme_options');
	add_settings_section('body_settings', '', 'section_body', 'theme_options');
	add_settings_section('headings_settings', '', 'section_headings', 'theme_options');


	// Example line below:
	// add_settings_field('[insert_name_here]', '[Insert Label Here]', '[insert_name_here]_setting', 'theme_options', 'style_settings');

	// Add Fields for General Settings Section:
	add_settings_field('btt_bg_colour', 'Back To Top Arrow Background Colour', 'btt_bg_colour_setting', 'theme_options', 'general_settings');
	add_settings_field('body-bg-url', 'Body Background URL', 'body_bg_url_setting', 'theme_options', 'general_settings');
	add_settings_field('link_color', 'Link Colour (a:link, a:visited)', 'link_color_setting', 'theme_options', 'general_settings');
	add_settings_field('link_hover_color', 'Hover Colour (a:hover)', 'link_hover_color_setting', 'theme_options', 'general_settings');
	add_settings_field('site_color_one_name', 'Site Colour One Name', 'site_color_one_name_setting', 'theme_options', 'general_settings');
	add_settings_field('site_color_one_hex', 'Site Colour One Hex', 'site_color_one_hex_setting', 'theme_options', 'general_settings');
	add_settings_field('site_color_two_name', 'Site Colour Two Name', 'site_color_two_name_setting', 'theme_options', 'general_settings');
	add_settings_field('site_color_two_hex', 'Site Colour Two Hex', 'site_color_two_hex_setting', 'theme_options', 'general_settings');

	// Add Fields for Styleguide Settings Section:
	add_settings_field('body_font_size', 'Body Font Size', 'body_font_size_setting', 'theme_options', 'body_settings');
	add_settings_field('body_font_lh', 'Body Font Line Height', 'body_font_lh_setting', 'theme_options', 'body_settings');
	add_settings_field('body_font_color', 'Body Font Colour', 'body_font_color_setting', 'theme_options', 'body_settings');
	add_settings_field('body_font_family', 'Body Font Family', 'body_font_family_setting', 'theme_options', 'body_settings');
	add_settings_field('body_font_family_fallback', 'Body Font Fallback', 'body_font_family_fallback_setting', 'theme_options', 'body_settings');

	// Add Fields for Heading H1 Settings Section:
	add_settings_field('heading_one_size', 'Heading H1', 'heading_one_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_one_lh', 'heading_one_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_one_hex', 'heading_one_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_one_rgb', 'heading_one_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_one_family', 'heading_one_setting', 'theme_options', 'headings_settings');

	// Add Fields for Heading H2 Settings Section:
	add_settings_field('heading_two_size', 'Heading H2', 'heading_two_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_two_lh', 'heading_two_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_two_hex', 'heading_two_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_two_rgb', 'heading_two_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_two_family', 'heading_two_setting', 'theme_options', 'headings_settings');

	// Add Fields for Heading H3 Settings Section:
	add_settings_field('heading_three_size', 'Heading H3', 'heading_three_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_three_lh', 'heading_three_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_three_hex', 'heading_three_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_three_rgb', 'heading_three_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_three_family', 'heading_three_setting', 'theme_options', 'headings_settings');

	// Add Fields for Heading H4 Settings Section:
	add_settings_field('heading_four_size', 'Heading H4', 'heading_four_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_four_lh', 'heading_four_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_four_hex', 'heading_four_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_four_rgb', 'heading_four_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_four_family', 'heading_four_setting', 'theme_options', 'headings_settings');

	// Add Fields for Heading H5 Settings Section:
	add_settings_field('heading_five_size', 'Heading H5', 'heading_five_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_five_lh', 'heading_five_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_five_hex', 'heading_five_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_five_rgb', 'heading_five_setting', 'theme_options', 'headings_settings');
	add_settings_field('heading_five_family', 'heading_five_setting', 'theme_options', 'headings_settings');


}



function section_general() {
	echo '<hr>';
	echo '<h2>General Settings</h2>';
	echo '<p>Set sitewide CSS settings for use across the website.</p>';
}
function section_body() {
	echo '<hr>';
	echo '<h2>Body Settings</h2>';
	echo '<p>Set sitewide CSS settings for use across the website.</p>';
}
function section_headings() {
	echo '<hr>';
	echo '<h2>Heading H1 Settings</h2>';
	echo '<p>Set Heading styles below (SIZE, COLOR and FAMILY.</p>';
	echo '<p>SIZE: Eg 23px or 3.1rem</p>';
	echo '<p>Line Height: Eg 23px or 3.1rem</p>';
	echo '<p>COLOR HEX: Eg #e4g887</p>';
	echo '<p>COLOR RGB: Eg: rgb(23,34,6)</p>';
	echo '<p>Family: Eg: Open-Sans, sans-serif; (White space must be quoted)</p>';
}




// Validate Settings Fields
function validate_setting($theme_options) {
	return $theme_options;
}



// Create HTML Form inputs for each Option

// template function below
// function [insert_name_here]_setting() {
// 	$options = get_option('theme_options');
// 	echo "<input name='theme_options[[insert_name_here]_setting]' type='text' value='{$options['[insert_name_here]_setting']}' />";
// }


function link_color_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[link_color_setting]' type='text' value='{$options['link_color_setting']}' />";
}

function link_hover_color_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[link_hover_color_setting]' type='text' value='{$options['link_hover_color_setting']}' />";
}
function btt_bg_colour_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[btt_bg_colour_setting]' type='text' value='{$options['btt_bg_colour_setting']}' />";
}

function body_bg_url_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[body_bg_url_setting]' type='text' value='{$options['body_bg_url_setting']}' />";
}

function site_color_one_name_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[site_color_one_name_setting]' type='text' value='{$options['site_color_one_name_setting']}' />";
}

function site_color_one_hex_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[site_color_one_hex_setting]' type='text' value='{$options['site_color_one_hex_setting']}' />";
}

function site_color_two_name_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[site_color_two_name_setting]' type='text' value='{$options['site_color_two_name_setting']}' />";
}

function site_color_two_hex_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[site_color_two_hex_setting]' type='text' value='{$options['site_color_two_hex_setting']}' />";
}





function body_font_size_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[body_font_size_setting]' type='text' value='{$options['body_font_size_setting']}' />";
}

function body_font_lh_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[body_font_lh_setting]' type='text' value='{$options['body_font_lh_setting']}' />";
}

function body_font_color_setting() {
	$options = get_option('theme_options');
	// echo "<input name='theme_options[body_font_color_setting]' type='text' value='{$options['body_font_color_setting']}' />";
	echo "<input name='theme_options[body_font_color_setting]' type='text' value='{$options['body_font_color_setting']}' />";
}

function body_font_family_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[body_font_family_setting]' type='text' value='{$options['body_font_family_setting']}' />";
}

function body_font_family_fallback_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[body_font_family_fallback_setting]' type='text' value='{$options['body_font_family_fallback_setting']}' />";
}







function heading_one_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[heading_one_size_setting]' type='text' value='{$options['heading_one_size_setting']}' />";
	echo "<input name='theme_options[heading_one_lh_setting]' type='text' value='{$options['heading_one_lh_setting']}' />";
	echo "<input name='theme_options[heading_one_hex_setting]' type='text' value='{$options['heading_one_hex_setting']}' />";
	echo "<input name='theme_options[heading_one_rgb_setting]' type='text' value='{$options['heading_one_rgb_setting']}' />";
	echo "<input name='theme_options[heading_one_family_setting]' type='text' value='{$options['heading_one_family_setting']}' />";
}

function heading_two_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[heading_two_size_setting]' type='text' value='{$options['heading_two_size_setting']}' />";
	echo "<input name='theme_options[heading_two_lh_setting]' type='text' value='{$options['heading_two_lh_setting']}' />";
	echo "<input name='theme_options[heading_two_hex_setting]' type='text' value='{$options['heading_two_hex_setting']}' />";
	echo "<input name='theme_options[heading_two_rgb_setting]' type='text' value='{$options['heading_two_rgb_setting']}' />";
	echo "<input name='theme_options[heading_two_family_setting]' type='text' value='{$options['heading_two_family_setting']}' />";
}

function heading_three_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[heading_three_size_setting]' type='text' value='{$options['heading_three_size_setting']}' />";
	echo "<input name='theme_options[heading_three_lh_setting]' type='text' value='{$options['heading_three_lh_setting']}' />";
	echo "<input name='theme_options[heading_three_hex_setting]' type='text' value='{$options['heading_three_hex_setting']}' />";
	echo "<input name='theme_options[heading_three_rgb_setting]' type='text' value='{$options['heading_three_rgb_setting']}' />";
	echo "<input name='theme_options[heading_three_family_setting]' type='text' value='{$options['heading_three_family_setting']}' />";
}

function heading_four_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[heading_four_size_setting]' type='text' value='{$options['heading_four_size_setting']}' />";
	echo "<input name='theme_options[heading_four_lh_setting]' type='text' value='{$options['heading_four_lh_setting']}' />";
	echo "<input name='theme_options[heading_four_hex_setting]' type='text' value='{$options['heading_four_hex_setting']}' />";
	echo "<input name='theme_options[heading_four_rgb_setting]' type='text' value='{$options['heading_four_rgb_setting']}' />";
	echo "<input name='theme_options[heading_four_family_setting]' type='text' value='{$options['heading_four_family_setting']}' />";
}

function heading_five_setting() {
	$options = get_option('theme_options');
	echo "<input name='theme_options[heading_five_size_setting]' type='text' value='{$options['heading_five_size_setting']}' />";
	echo "<input name='theme_options[heading_five_lh_setting]' type='text' value='{$options['heading_five_lh_setting']}' />";
	echo "<input name='theme_options[heading_five_hex_setting]' type='text' value='{$options['heading_five_hex_setting']}' />";
	echo "<input name='theme_options[heading_five_rgb_setting]' type='text' value='{$options['heading_five_rgb_setting']}' />";
	echo "<input name='theme_options[heading_five_family_setting]' type='text' value='{$options['heading_five_family_setting']}' />";
}






// Hook to add Theme Options Page to Admin Menu
add_action('admin_menu', 'theme_options_page');

function theme_options_page() {
	add_menu_page('Theme Settings', 'Theme Settings', 'administrator', 'theme_options', 'build_options_page');
}



?>