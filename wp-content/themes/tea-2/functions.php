<?php

//load_template(TEMPLATEPATH . '/options.php');
//load_template(TEMPLATEPATH . '/customiser-default.php');
load_template(TEMPLATEPATH . '/customiser.php');

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'TEA Theme', TEMPLATEPATH . '/languages' );

	add_theme_support( 'menus' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable($locale_file) )
	    require_once($locale_file);

	// Get the page number
	function get_page_number() {
	    if ( get_query_var('paged') ) {
	        print ' | ' . __( 'Page ' , 'TEA Theme') . get_query_var('paged');
	    }
	} // end get_page_number

	// Custom callback to list comments in the TEA Theme style
	function custom_comments($comment, $args, $depth) {
	  $GLOBALS['comment'] = $comment;
	    $GLOBALS['comment_depth'] = $depth;
	  ?>
	    <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
	        <div class="comment-author vcard"><?php commenter_link() ?></div>
	        <div class="comment-meta"><?php printf(__('Posted %1$s at %2$s <span class="meta-sep">|</span> <a href="%3$s" title="Permalink to this comment">Permalink</a>', 'TEA Theme'),
	                    get_comment_date(),
	                    get_comment_time(),
	                    '#comment-' . get_comment_ID() );
	                    edit_comment_link(__('Edit', 'TEA Theme'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
	  <?php if ($comment->comment_approved == '0') _e("\t\t\t\t\t<span class='unapproved'>Your comment is awaiting moderation.</span>\n", 'TEA Theme') ?>
	          <div class="comment-content">
	            <?php comment_text() ?>
	        </div>
	        <?php // echo the comment reply link
	            if($args['type'] == 'all' || get_comment_type() == 'comment') :
	                comment_reply_link(array_merge($args, array(
	                    'reply_text' => __('Reply','TEA Theme'),
	                    'login_text' => __('Log in to reply.','TEA Theme'),
	                    'depth' => $depth,
	                    'before' => '<div class="comment-reply-link">',
	                    'after' => '</div>'
	                )));
	            endif;
	        ?>
	<?php } // end custom_comments

	// Custom callback to list pings
	function custom_pings($comment, $args, $depth) {
	       $GLOBALS['comment'] = $comment;
	        ?>
	            <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
	                <div class="comment-author"><?php printf(__('By %1$s on %2$s at %3$s', 'TEA Theme'),
	                        get_comment_author_link(),
	                        get_comment_date(),
	                        get_comment_time() );
	                        edit_comment_link(__('Edit', 'TEA Theme'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
	    <?php if ($comment->comment_approved == '0') _e('\t\t\t\t\t<span class="unapproved">Your trackback is awaiting moderation.</span>\n', 'TEA Theme') ?>
	            <div class="comment-content">
	                <?php comment_text() ?>
	            </div>
	<?php } // end custom_pings

	// Produces an avatar image with the hCard-compliant photo class
	function commenter_link() {
	    $commenter = get_comment_author_link();
	    if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
	        $commenter = ereg_replace( '(<a[^>]* class=[\'"]?)', '\\1url ' , $commenter );
	    } else {
	        $commenter = ereg_replace( '(<a )/', '\\1class="url "' , $commenter );
	    }
	    $avatar_email = get_comment_author_email();
	    $avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( $avatar_email, 80 ) );
	    echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
	} // end commenter_link

	// For category lists on category archives: Returns other categories except the current one (redundant)
	function cats_meow($glue) {
	    $current_cat = single_cat_title( '', false );
	    $separator = "\n";
	    $cats = explode( $separator, get_the_category_list($separator) );
	    foreach ( $cats as $i => $str ) {
	        if ( strstr( $str, ">$current_cat<" ) ) {
	            unset($cats[$i]);
	            break;
	        }
	    }
	    if ( empty($cats) )
	        return false;

	    return trim(join( $glue, $cats ));
	} // end cats_meow

	// For tag lists on tag archives: Returns other tags except the current one (redundant)
	function tag_ur_it($glue) {
	    $current_tag = single_tag_title( '', '',  false );
	    $separator = "\n";
	    $tags = explode( $separator, get_the_tag_list( "", "$separator", "" ) );
	    foreach ( $tags as $i => $str ) {
	        if ( strstr( $str, ">$current_tag<" ) ) {
	            unset($tags[$i]);
	            break;
	        }
	    }
	    if ( empty($tags) )
	        return false;

	    return trim(join( $glue, $tags ));
	} // end tag_ur_it

















	// REGISTER SIDEBAR WIDGETS ===============================================
	function theme_widgets_init() {
	    // Area 1
	    register_sidebar( array (
	    'name' => 'Primary Widget Area',
	    'id' => 'primary_widget_area',
	    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	    'after_widget' => "</li>",
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	  ) );

	    // Area 2
	    register_sidebar( array (
	    'name' => 'Secondary Widget Area',
	    'id' => 'secondary_widget_area',
	    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	    'after_widget' => "</li>",
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	  ) );
	} // end theme_widgets_init

	add_action( 'init', 'theme_widgets_init' );

	$preset_widgets = array (
	    'primary_widget_area'  => array( 'search', 'pages', 'categories', 'archives' ),
	    'secondary_widget_area'  => array( 'links', 'meta' )
	);
	if ( isset( $_GET['activated'] ) ) {
	    update_option( 'sidebars_widgets', $preset_widgets );
	}
	// update_option( 'sidebars_widgets', NULL );

	// Check for static widgets in widget-ready areas
	function is_sidebar_active( $index ){
	  global $wp_registered_sidebars;

	  $widgetcolums = wp_get_sidebars_widgets();

	  if ($widgetcolums[$index]) return true;

	    return false;
	} // end is_sidebar_active







	// REGISTER MENUS ===============================================

	add_action( 'init', 'register_my_menus' );

	function register_my_menus() {
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu' ),
				'float-menu' => __( 'Floating Menu' ),
				'slide-menu' => __( 'Slide Menu' ),
				'admin-menu' => __( 'Admin Menu' ),
			)
		);
	}






	// TEA Theme: REGSITER AND ENQUEUE SCRIPTS ===============================================

	function register_my_scripts()
	{
		// Register scripts like this for a theme:
		wp_register_script( 'my-scripts', get_template_directory_uri() . '/js/my-scripts.js', array( 'jquery', 'jquery-ui-core' ), '1.0.0', false );
		// For either a plugin or a theme, you can then enqueue the script:
		wp_enqueue_script( 'my-scripts' );

		wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), '1.0.0', false );
		wp_enqueue_script( 'modernizr' );

		wp_register_script( 'jq-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ), '1.0.0', false );
		wp_enqueue_script( 'jq-easing' );

		wp_register_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array( 'jquery' ), '1.0.0', false );
		wp_enqueue_script( 'fancybox' );

		wp_register_script( 'floating-nav', get_template_directory_uri() . '/js/floating-nav.js', array( 'jquery' ), '1.0.0', false );
		wp_enqueue_script( 'floating-nav' );

		wp_register_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array( 'jquery' ), '1.0.0', false );
		wp_enqueue_script( 'flexslider' );

		wp_register_script( 'flexsliderManualDirectionControls', get_template_directory_uri() . '/js/flexsliderManualDirectionControls.js', array( 'jquery','flexslider' ), '1.0.0', false );
		wp_enqueue_script( 'flexsliderManualDirectionControls' );

		wp_register_script( 'slidemenu', get_template_directory_uri() . '/js/slidemenu.js', array( 'jquery' ), '1.0.0', false );
		wp_enqueue_script( 'slidemenu' );

				//AJAX
		wp_enqueue_script('booking_widget', get_template_directory_uri().'/ajax-booking-widget.js', array('jquery'), '1.0', true );
		wp_localize_script('booking_widget', 'ajax_var', array(
		    'url' => admin_url('admin-ajax.php'),
		    'nonce' => wp_create_nonce('ajax-nonce')
		));




	}
	add_action( 'wp_enqueue_scripts', 'register_my_scripts' );




load_template(TEMPLATEPATH . '/ajax-booking-widget.php');





// CREATE CUSTOM ADMIN PAGE FOR USER INSTRUCTIONS
function custom_admin_page() {
	//add_dashboard_page( 'Website Instructions', 'Instructions', 'read', 'website-instructions', array( &$this,'custom_admin_page_setup') );
	add_menu_page( 'Instructions', 'Instructions', 'read', 'website-instructions', 'custom_admin_page_setup', 'dashicons-admin-page' ,3 );
}
add_action('admin_menu', 'custom_admin_page');
function custom_admin_page_setup() {
	include_once( 'dashboard_instructions.php'  );
}











// CUSTOMISE DASHBOARD WIDGETS  =============================================================================
function my_custom_dashboard_widgets() {
    global $wp_meta_boxes;
    wp_add_dashboard_widget('custom_help_widget', 'Nybble Digital Support', 'custom_dashboard_help');
    wp_add_dashboard_widget( 'custom_welcome_widget', 'Welcome to the Website Dashboard', 'custom_dashboard_welcome' );
    //wp_add_dashboard_widget( 'custom_links_widget', 'Useful Links', 'custom_dashboard_links' );
}

function custom_dashboard_help() {
    echo '<p>For all help and support with this website, please contact the <a href="http://www.nybble.com.au" target="_blank">Nybble Digital</a> digital team or call us on 0409 709 596.</p>';
}
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');


function custom_dashboard_welcome(){ ?>

    This is where all the magic happens on your website. Please take care editing content and get in touch with Nybble Digital if you get stuck.

    This website consists of the following content, which you can access via the menu on the left:

    <ul>
        <li><strong>Media</strong> - the full media library for all images on this website.</li>
        <li><strong>Forms</strong> - access to the contact form.</li>
        <li><strong>Pages</strong> - add and edit every page on the website.</li>
    </ul>

    On each editing screen there are instructions to help you add and edit content.

<?php }






// Rebrand Footer =============================================================================

 function filter_footer_admin() { ?>
 The <?php echo wp_get_theme(); ?> Theme was created and developed by <a href="http://nybble.com.au">Nybble Digital</a>
 <?php }
 add_filter('admin_footer_text', 'filter_footer_admin');





// Enqueue FontAwesome CDN  =============================================================
function st_load_fontawesome() {
     wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','st_load_fontawesome');





// SET UP ACF OPTIONS PAGE ===============================================================
if( function_exists('acf_add_options_page') ) {

	// add menu page for extra fields
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Extra Fields',
		'menu_title'	=> 'Extra Fields',
		// 'menu_slug' 	=> 'theme-general-settings',
		// 'capability'	=> 'edit_posts',
		// 'redirect'		=> false
	));

}






// CODE TO ADD CUSTOM DROP DOWN FORMATS IN EDITOR META BOX =======================================
 function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) {

	// Define the style_formats array

	$style_formats = array(
		// Each array child is a format with it's own settings
		array(
			'title' => 'General Button',
			'inline' => 'a',
			'classes' => 'general_button',
			'wrapper' => true,
		),
	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );

	return $init_array;

}
// Attach callback to 'tiny_mce_before_init'
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );




function add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'add_editor_styles' );





// Add Thumbnail (Featured Image) Support for this Theme
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

	// additional image sizes
	// add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}






// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );







// custom redirect on error login
add_action( 'wp_login_failed', 'my_front_end_login_fail' );  // hook failed login

function my_front_end_login_fail( $username ) {
   $referrer = $_SERVER['HTTP_REFERER'];  // where did the post submission come from?
   // if there's a valid referrer, and it's not the default log-in screen
   if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
      wp_redirect( $referrer . '?login=failed' );  // let's append some information (login=failed) to the URL for the theme to use
      exit;
   }
}




// Customised Login Screen
// Get new logo from Customizer
function new_loginlogo() {
	$newLogo = get_theme_mod('login_logo');
	$newBgImage = get_theme_mod('login_screen_bg_image');
	$newBgColor = get_theme_mod('login_screen_bg_colour');
	if ($newLogo) {
		  echo '<style type="text/css">
		    #login h1 a {
		      background-image: url(' . $newLogo . ') !important;
		      -webkit-background-size:cover;
		      background-size: cover;
		      width: 200px;
		      height: 200px;
		    }
		  </style>';
	}
	if ($newBgImage) {
		  echo '<style type="text/css">
		    body.login {
				 background-image: url(' . $newBgImage . ') !important;
		     -webkit-background-size:cover;
		     background-size: cover;
				 background-attachment: fixed;
				}
		  </style>';
	} else if ($newBgColor) {
			echo '<style type="text/css">
		    body.login {
				 background-color: ' . $newBgColor . ';
				}
		  </style>';
	}
}
add_action('login_head', 'new_loginlogo');

// Get new logo url from Customizer
function new_loginURL() {
		//$newLogoUrl = get_theme_mod('login_logo_url');
		$newLogoUrl = get_bloginfo('url');
		//if ($newLogoUrl) {
    	return $newLogoUrl;
		//}
}
add_filter('login_headerurl', 'new_loginURL');

// Set new logo title to site name
function new_loginURLtext() {
		$siteName = get_bloginfo('name');
    return $siteName;
}
add_filter('login_headertitle', 'new_loginURLtext');






// Changes the default Gravity Forms AJAX spinner.
add_filter( 'gform_ajax_spinner_url', 'custom_gforms_spinner' );
function custom_gforms_spinner( $src ) {
    return get_stylesheet_directory_uri() . '/img/gravity-forms-spinner.gif';
}




function build_term_string($tax,$sent) {
  $get_terms = get_terms($tax);
  $allTerms = '';
  $prefix = '';
  foreach ($get_terms as $term) {
      $allTerms .= $prefix . $term->slug;
      $prefix = ",";
  }
  if ($sent == "" || $sent == null) {
    $sent = $allTerms;
  }
  return $sent;
}

















//add_action( 'gform_paypal_fulfillment', 'booking_form_reduce_places', 10, 4 );
//function booking_form_reduce_places( $entry, $feed, $transaction_id, $amount ) {
add_action( 'gform_after_submission', 'booking_form_reduce_places', 10, 2 );
function booking_form_reduce_places( $entry, $form ) {

		$tourID = rgar($entry, '23');
		$tourDate = rgar($entry,'24');
		$numRiders = rgar($entry,'7');
		$initialRowCount = count(get_field('tour_dates',$tourID));

		for ($x = 0; $x < $initialRowCount; $x++) {
			$meta_datum = 'tour_dates_' . $x . '_datum';
			$meta_places = 'tour_dates_' . $x . '_places';
			$initialDatum = get_post_meta($tourID,$meta_datum,true);
			$initialPlaces = get_post_meta($tourID,$meta_places,true);
			if ($tourDate == $initialDatum) {
				$newPlaces = $initialPlaces - $numRiders;
				update_post_meta($tourID,$meta_places,$newPlaces);
			}
		}

}








// Associative array of date (key) and places (value)
global $date_list_tour_1;
$date_list_tour_1 = array();

function create_list_tour_1($date,$places) {
	global $date_list_tour_1;
	//array_push($date_list_tour_1,$date);
	$date_list_tour_1[$date] = $places;
}


// global $date_array;

// function create_date_array($date,$id) {
// 	global $date_array;
// 	//$newValues = array('date' => $date, 'id' => $id);
// 	//array_push($date_array,$date);
// 	$date_array[$date] = $id;
// }





function build_calendar_tour_1($id,$title) {

		$now = new DateTime('now');
	    $nowMonth = $now->format('m');
	    $nowYear = $now->format('Y');
	    $thisMonth = "d" . $nowYear . $nowMonth;
	    // TEMP FOR JULY
	    //$thisMonth = "d201711";

	    $started = "no";
	    $firstMonth = 0;

		for ($x = 1; $x <= 12; $x++) {

			switch ($x) {

				// case '1':
				// 	$month = "May 2017";
				// 	$tableCode = "d201705";
				// 	$start = 2;
				// 	$end = 32;
				// 	break;

				case '1':
					$month = "June 2017";
					$tableCode = "d201706";
					$start = 5;
					$end = 34;
					break;

				case '2':
					$month = "July 2017";
					$tableCode = "d201707";
					$start = 7;
					$end = 37;
					break;

				case '3':
					$month = "August 2017";
					$tableCode = "d201708";
					$start = 3;
					$end = 33;
					break;

				case '4':
					$month = "September 2017";
					$tableCode = "d201709";
					$start = 6;
					$end = 35;
					break;

				case '5':
					$month = "October 2017";
					$tableCode = "d201710";
					$start = 1;
					$end = 31;
					break;

				case '6':
					$month = "November 2017";
					$tableCode = "d201711";
					$start = 4;
					$end = 32;
					break;

				case '7':
					$month = "December 2017";
					$tableCode = "d201712";
					$start = 6;
					$end = 36;
					break;

				case '8':
					$month = "January 2018";
					$tableCode = "d201801";
					$start = 2;
					$end = 32;
					break;

				case '9':
					$month = "February 2018";
					$tableCode = "d201802";
					$start = 5;
					$end = 32;
					break;

				case '10':
					$month = "March 2018";
					$tableCode = "d201803";
					$start = 5;
					$end = 35;
					break;

				case '11':
					$month = "April 2018";
					$tableCode = "d201804";
					$start = 1;
					$end = 30;
					break;

				case '12':
					$month = "May 2018";
					$tableCode = "d201805";
					$start = 3;
					$end = 33;
					break;

				default:
					# code...
					break;
			}

			//$visibleClass = ($thisMonth == $tableCode ? "visible" : "");

			
			if ($thisMonth == $tableCode) {
				$visibleClass = "visible";
				$started = "yes";
				$firstMonth = 1;
			} else {
				$visibleClass = "";
			}

			if ($started == "yes") {

				echo '<table id="booking_table_' . $x . '" class="table_calendar ' . $visibleClass . '" BORDER=3 CELLSPACING=3 CELLPADDING=3>';
					echo '<tr>';
					if ($x > 1 && $firstMonth > 1) {
						$link = $x - 1;
						echo '<td><div data-close="booking_table_' . $x . '" data-open="booking_table_' . $link . '" class="previous_month"><i class="fa fa-2x fa-angle-double-left" aria-hidden="true"></i></div></td>';
					} else {
						echo '<td></td>';
					}
					echo '<td class="header" COLSPAN="5" ALIGN=center><strong>' . $month . '</strong></td>';
					if ($x < 12) {
						$link = $x + 1;
						echo '<td><div data-close="booking_table_' . $x . '" data-open="booking_table_' . $link . '" class="next_month"><i class="fa fa-2x fa-angle-double-right" aria-hidden="true"></i></div></td>';
					} else {
						echo '<td></td>';
					}
					echo '</tr>';
					echo '<tr class="row_top_days">';
					echo '<td>SUN</td>';
					echo '<td>MON</td>';
					echo '<td>TUE</td>';
					echo '<td>WED</td>';
					echo '<td>THU</td>';
					echo '<td>FRI</td>';
					echo '<td>SAT</td>';
					echo '</tr>';

					$the_id = $id;
					//$start = $start;
					$max = 42;
					echo '<tr class="row_days">';
					for ($i = 1; $i <= $max; $i++) {

						if ($i >= $start && $i <= $end) {
							$day = $i - $start + 1;
							$class = $tableCode . sprintf('%02d', $day);
						} else {
							$class = "";
							$day = "";
						}

						global $date_list_tour_1;
						if (array_key_exists($class, $date_list_tour_1)) {
							$hasTour = "hasTour";
							$places = $date_list_tour_1[$class];
						} else {
							$hasTour = "";
						}

						$places_string = substr($places,1);
						if ($places_string < 1) {
				            $soldClass = "soldout";
				        } elseif ($places_string > 0 && $places_string < 4) {
				            $soldClass = "nearlygone";
				        } else {
				          	$soldClass = "";
				        }

						echo '<td class="' . $class . ' ' . $hasTour . ' ' . $soldClass . '">&nbsp;';
						echo $day;
						echo '<div class="tourNAME hiddenData">' . $title . '</div>';
						echo '<div class="tourID hiddenData">' . $the_id . '</div>';
						$date_string = substr($class,1);
						echo '<div class="tourDATE hiddenData">' . $date_string . '</div>';
						//$places_string = substr($places,1);
						echo '<div class="tourPLACES hiddenData">' . $places_string . '</div>';
						echo '</td>';
						if (($i % 7) == 0) {
							echo '</tr>';
							if ($i != $max) {
								echo '<tr class="row_days">';
							}
						}

					}
				echo '</table>';

			}
			$firstMonth++;

		}
}





add_action('after_switch_theme', 'add_user_roles');

function add_user_roles () {
	if( get_role('gptt_staff') ){
	      remove_role( 'gptt_staff' );
	}
	if( get_role('gptt_board') ){
	      remove_role( 'gptt_board' );
	}
}






 // END MAIN PHP TAG
?>