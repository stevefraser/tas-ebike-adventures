<?php
 // IMPORTANT! Any code outside of PHP tags must be treated as CSS
 // header("Content-type: text/css; charset: UTF-8");
 $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
 $wp_load = $absolute_path[0] . 'wp-load.php';
 require_once($wp_load);
  /* Do stuff like connect to WP database and grab user set values
  */
  header('Content-type: text/css');
  header('Cache-control: must-revalidate');
?>

<?php

	// Theme Settings generated in options.php ================>
	// Get option values and assign to variables for use in CSS below
  // $options = get_option('theme_options');
  // $navBarTop = $options['navbar_bg_top_colour_setting'];
  // $navBarBottom = $options['navbar_bg_bottom_colour_setting'];
  // $bttIcon = $options['btt_bg_colour_setting'];
  // $bodyBg = $options['body_bg_url_setting'];

	// Customize settings generated in customiser.php ===============>
	//$ = get_theme_mod( '' );
	$font_stack = get_theme_mod( 'font_stacks' );
  $fontstack_array = explode(PHP_EOL, $font_stack);

  $body_font_index = get_theme_mod( 'body_font_family' );
  $body_font_family = $fontstack_array[$body_font_index];
	$body_font_weight = get_theme_mod( 'body_font_weight' );
	$body_font_size = get_theme_mod( 'body_font_size' );
	$body_font_line_height = get_theme_mod( 'body_font_line_height' );
	$body_font_colour = get_theme_mod( 'body_font_colour' );
	$body_font_uppercase = get_theme_mod( 'body_font_uppercase' );

	$colours_body_bg = get_theme_mod( 'colours_body_bg' );
	$colours_btt_icon = get_theme_mod( 'colours_btt_icon' );
	$colours_hyperlink = get_theme_mod( 'colours_hyperlink' );
	$colours_hyperlink_hover = get_theme_mod( 'colours_hyperlink_hover' );
	$hyperlink_decoration = get_theme_mod( 'hyperlink_decoration' );

  $h1_font_index = get_theme_mod( 'h1_font_family' );
  $h1_font_family = $fontstack_array[$h1_font_index];
	$h1_font_weight = get_theme_mod( 'h1_font_weight' );
	$h1_font_size = get_theme_mod( 'h1_font_size' );
	$h1_font_line_height = get_theme_mod( 'h1_font_line_height' );
	$h1_font_colour = get_theme_mod( 'h1_font_colour' );
	$h1_font_uppercase = get_theme_mod( 'h1_font_uppercase' );

  $h2_font_index = get_theme_mod( 'h2_font_family' );
  $h2_font_family = $fontstack_array[$h2_font_index];
	$h2_font_weight = get_theme_mod( 'h2_font_weight' );
	$h2_font_size = get_theme_mod( 'h2_font_size' );
	$h2_font_line_height = get_theme_mod( 'h2_font_line_height' );
	$h2_font_colour = get_theme_mod( 'h2_font_colour' );
	$h2_font_uppercase = get_theme_mod( 'h2_font_uppercase' );

  $h3_font_index = get_theme_mod( 'h3_font_family' );
  $h3_font_family = $fontstack_array[$h3_font_index];
	$h3_font_weight = get_theme_mod( 'h3_font_weight' );
	$h3_font_size = get_theme_mod( 'h3_font_size' );
	$h3_font_line_height = get_theme_mod( 'h3_font_line_height' );
	$h3_font_colour = get_theme_mod( 'h3_font_colour' );
	$h3_font_uppercase = get_theme_mod( 'h3_font_uppercase' );

  $h4_font_index = get_theme_mod( 'h4_font_family' );
  $h4_font_family = $fontstack_array[$h4_font_index];
	$h4_font_weight = get_theme_mod( 'h4_font_weight' );
	$h4_font_size = get_theme_mod( 'h4_font_size' );
	$h4_font_line_height = get_theme_mod( 'h4_font_line_height' );
	$h4_font_colour = get_theme_mod( 'h4_font_colour' );
	$h4_font_uppercase = get_theme_mod( 'h4_font_uppercase' );

  $h5_font_index = get_theme_mod( 'h5_font_family' );
  $h5_font_family = $fontstack_array[$h5_font_index];
	$h5_font_weight = get_theme_mod( 'h5_font_weight' );
	$h5_font_size = get_theme_mod( 'h5_font_size' );
	$h5_font_line_height = get_theme_mod( 'h5_font_line_height' );
	$h5_font_colour = get_theme_mod( 'h5_font_colour' );
	$h5_font_uppercase = get_theme_mod( 'h5_font_uppercase' );

  $h6_font_index = get_theme_mod( 'h6_font_family' );
  $h6_font_family = $fontstack_array[$h6_font_index];
	$h6_font_weight = get_theme_mod( 'h6_font_weight' );
	$h6_font_size = get_theme_mod( 'h6_font_size' );
	$h6_font_line_height = get_theme_mod( 'h6_font_line_height' );
	$h6_font_colour = get_theme_mod( 'h6_font_colour' );
	$h6_font_uppercase = get_theme_mod( 'h6_font_uppercase' );
?>

/* Start CSS ====================================================== */

body {
	font-family: <?php echo $body_font_family; ?>;
	font-weight: <?php echo $body_font_weight; ?>;
	line-height: <?php echo $body_font_line_height; ?>;
	font-size: <?php echo $body_font_size; ?>;
	color: <?php echo $body_font_colour; ?>;
	text-transform: <?php echo ($body_font_uppercase == 1 ? 'uppercase' : 'none'); ?>;
	background: <?php echo $colours_body_bg; ?> url('../img/map_bg1.jpg') repeat;
  background-size: cover;
}

h1 {
	font-family: <?php echo $h1_font_family; ?>;
	font-weight: <?php echo $h1_font_weight; ?>;
	line-height: <?php echo $h1_font_line_height; ?>;
	font-size: <?php echo $h1_font_size; ?>;
	color: <?php echo $h1_font_colour; ?>;
	text-transform: <?php echo ($h1_font_uppercase == 1 ? 'uppercase' : 'none'); ?>;
}

h2 {
	font-family: <?php echo $h2_font_family; ?>;
	font-weight: <?php echo $h2_font_weight; ?>;
	line-height: <?php echo $h2_font_line_height; ?>;
	font-size: <?php echo $h2_font_size; ?>;
	color: <?php echo $h2_font_colour; ?>;
	text-transform: <?php echo ($h2_font_uppercase == 1 ? 'uppercase' : 'none'); ?>;
}

h3 {
	font-family: <?php echo $h3_font_family; ?>;
	font-weight: <?php echo $h3_font_weight; ?>;
	line-height: <?php echo $h3_font_line_height; ?>;
	font-size: <?php echo $h3_font_size; ?>;
	color: <?php echo $h3_font_colour; ?>;
	text-transform: <?php echo ($h3_font_uppercase == 1 ? 'uppercase' : 'none'); ?>;
}

h4 {
	font-family: <?php echo $h4_font_family; ?>;
	font-weight: <?php echo $h4_font_weight; ?>;
	line-height: <?php echo $h4_font_line_height; ?>;
	font-size: <?php echo $h4_font_size; ?>;
	color: <?php echo $h4_font_colour; ?>;
	text-transform: <?php echo ($h4_font_uppercase == 1 ? 'uppercase' : 'none'); ?>;
}

h5 {
	font-family: <?php echo $h5_font_family; ?>;
	font-weight: <?php echo $h5_font_weight; ?>;
	line-height: <?php echo $h5_font_line_height; ?>;
	font-size: <?php echo $h5_font_size; ?>;
	color: <?php echo $h5_font_colour; ?>;
	text-transform: <?php echo ($h5_font_uppercase == 1 ? 'uppercase' : 'none'); ?>;
}

h6 {
	font-family: <?php echo $h6_font_family; ?>;
	font-weight: <?php echo $h6_font_weight; ?>;
	line-height: <?php echo $h6_font_line_height; ?>;
	font-size: <?php echo $h6_font_size; ?>;
	color: <?php echo $h6_font_colour; ?>;
	text-transform: <?php echo ($h6_font_uppercase == 1 ? 'uppercase' : 'none'); ?>;
}

a, a:visited {
	color: <?php echo $colours_hyperlink; ?>;
	text-decoration: <?php echo $hyperlink_decoration; ?>;
}

a:hover {
	color: <?php echo $colours_hyperlink_hover; ?>;
}

a.backtotop	{
	background-color: <?php echo $colours_btt_icon; ?>;
	background: <?php echo $colours_btt_icon; ?> url(../img/goup.png) 12px 14px no-repeat;
}



/* End CSS ====================================================== */



