<?php


/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function theme_customizer( $wp_customize ) {


		// REMOVE AND EDIT EXISTING CUSTOMIZER SECTIONS
		//$wp_customize->remove_section('static_front_page');
		//$wp_customize->remove_control('page_for_posts');
		//$wp_customize->remove_control('show_on_front');

		$wp_customize->get_section('static_front_page')->priority = 10;
		$wp_customize->get_section('static_front_page')->description = '';




		// Adds textarea support to the theme customizer
		class Example_Customize_Textarea_Control extends WP_Customize_Control {
		    public $type = 'textarea';

		    public function render_content() {
		        ?>
		            <label>
		                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>>
		                	<?php echo esc_textarea( $this->value() ); ?>
		                	<?php //echo nl2br($this->value() ); ?>
		                </textarea>
		            </label>
		            <br><br><br>
		        <?php
		    }
		}









		// SETTINGS FOR login_screen_settings SECTION ==============================================================================

    $wp_customize->add_section(
        'login_screen_settings',
        array(
            'title' => 'Login Screen Settings',
            //'description' => 'Edit the body font styles',
            'priority' => 30,
        )
    );

    $wp_customize->add_setting(
		    'login_logo',
		    array(
		        //'default' => '16px',
		        //'sanitize_callback' => 'sanitize_text',
		    		//'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_control(
				new WP_Customize_Image_Control( $wp_customize, 'login_logo', array(
				    'label'    => 'Login Logo',
				    'section' => 'login_screen_settings',
				    'settings' => 'login_logo',
					)
				)
		);

  //   $wp_customize->add_setting(
		//     'login_logo_url',
		//     array(
		//         //'default' => '16px',
		//         'sanitize_callback' => 'sanitize_text',
		//     		'transport'         => 'postMessage',
		//     )
		// );
		// $wp_customize->add_control(
		//     'login_logo_url',
		//     array(
		//         'label' => 'Login Logo URL',
		//         'section' => 'login_screen_settings',
		//         'type' => 'text',
		//     )
		// );

    $wp_customize->add_setting(
		    'login_screen_bg_image',
		    array(
		        //'default' => '16px',
		        //'sanitize_callback' => 'sanitize_text',
		    		//'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_control(
				new WP_Customize_Image_Control( $wp_customize, 'login_screen_bg_image', array(
				    'label'    => 'Background Image',
				    'section' => 'login_screen_settings',
				    'settings' => 'login_screen_bg_image',
					)
				)
		);

		$wp_customize->add_setting(
		    'login_screen_bg_colour',
		    array(
		        'default' => '#000000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control( $wp_customize, 'login_screen_bg_colour', array(
		            'label' => 'Fallback BG Colour',
		            'section' => 'login_screen_settings',
		            'settings' => 'login_screen_bg_colour',
		        )
		    )
		);








		// SETTINGS FOR website_fonts SECTION ==============================================================================

    $wp_customize->add_section(
        'website_fonts',
        array(
            'title' => 'Website Font Stacks',
            'description' => 'Fonts used in this website',
            'priority' => 39,
        )
    );

		$wp_customize->add_setting(
			'font_stacks',
			array(
				'sanitize_callback' => 'sanitize_textarea_font_stack',
			)
		);

		$wp_customize->add_control(
		    new Example_Customize_Textarea_Control(
		        $wp_customize,
		        'font_stacks',
		        array(
		            'label' => 'Website font stacks',
		            'section' => 'website_fonts',
		            'settings' => 'font_stacks'
		        )
		    )
		);












		// SETTINGS FOR body_font_styles SECTION ==============================================================================

    $wp_customize->add_section(
        'body_font_styles',
        array(
            'title' => 'Body Font Styles',
            //'description' => 'Edit the body font styles',
            'priority' => 40,
        )
    );

    $wp_customize->add_setting(
		    'body_font_family',
		    array(
		        'sanitize_callback' => 'sanitize_body_font_family',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'body_font_family',
		    array(
		        'type' => 'select',
		        'label' => 'Font family:',
		        'section' => 'body_font_styles',
		        'choices' => create_font_stack_array(),
		    		'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_setting(
		    'body_font_weight',
		    array(
		        'default' => 'normal',
		        'sanitize_callback' => 'sanitize_body_font_weight',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'body_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font weight',
		        'section' => 'body_font_styles',
		        'choices' => array(
		            'normal' => 'Normal',
		            'bold' => 'Bold',
		        ),
		    )
		);

		$wp_customize->add_setting(
		    'body_font_size',
		    array(
		        'default' => '16px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'body_font_size',
		    array(
		        'label' => 'Font size',
		        'section' => 'body_font_styles',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'body_font_line_height',
		    array(
		        'default' => '22px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'body_font_line_height',
		    array(
		        'label' => 'Line Height',
		        'section' => 'body_font_styles',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'body_font_colour',
		    array(
		        'default' => '#000000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'body_font_colour',
		        array(
		            'label' => 'Color Setting',
		            'section' => 'body_font_styles',
		            'settings' => 'body_font_colour',
		        )
		    )
		);










		// SETTINGS FOR heading_one_css SECTION ==============================================================================

    $wp_customize->add_section(
        'heading_one_css',
        array(
            'title' => 'H1 Styles',
            //'description' => 'Edit the heading styles',
            'priority' => 41,
        )
    );

    $wp_customize->add_setting(
		    'h1_font_family',
		    array(
		        'sanitize_callback' => 'sanitize_body_font_family',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h1_font_family',
		    array(
		        'type' => 'select',
		        'label' => 'Font family:',
		        'section' => 'heading_one_css',
		        'choices' => create_font_stack_array(),
		    		'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_setting(
		    'h1_font_weight',
		    array(
		        'default' => 'normal',
		        'sanitize_callback' => 'sanitize_body_font_weight',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h1_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font weight',
		        'section' => 'heading_one_css',
		        'choices' => array(
		            'normal' => 'Normal',
		            'bold' => 'Bold',
		        ),
		    )
		);

		$wp_customize->add_setting(
		    'h1_font_size',
		    array(
		        'default' => '16px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h1_font_size',
		    array(
		        'label' => 'Font size',
		        'section' => 'heading_one_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h1_font_line_height',
		    array(
		        'default' => '22px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h1_font_line_height',
		    array(
		        'label' => 'Line Height',
		        'section' => 'heading_one_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h1_font_colour',
		    array(
		        'default' => '#000000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'h1_font_colour',
		        array(
		            'label' => 'Color Setting',
		            'section' => 'heading_one_css',
		            'settings' => 'h1_font_colour',
		        )
		    )
		);

		$wp_customize->add_setting(
		    'h1_font_uppercase',
		    array(
		    	'sanitize_callback' => 'sanitize_checkbox',
		    	'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h1_font_uppercase',
		    array(
		        'label' => 'Uppercase?',
		        'section' => 'heading_one_css',
		        'type' => 'checkbox',
		    )
		);








		// SETTINGS FOR heading_two_css SECTION ==============================================================================

    $wp_customize->add_section(
        'heading_two_css',
        array(
            'title' => 'H2 Styles',
            //'description' => 'Edit the heading styles',
            'priority' => 42,
        )
    );

    $wp_customize->add_setting(
		    'h2_font_family',
		    array(
		        'sanitize_callback' => 'sanitize_body_font_family',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h2_font_family',
		    array(
		        'type' => 'select',
		        'label' => 'Font family:',
		        'section' => 'heading_two_css',
		        'choices' => create_font_stack_array(),
		    		'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_setting(
		    'h2_font_weight',
		    array(
		        'default' => 'normal',
		        'sanitize_callback' => 'sanitize_body_font_weight',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h2_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font weight',
		        'section' => 'heading_two_css',
		        'choices' => array(
		            'normal' => 'Normal',
		            'bold' => 'Bold',
		        ),
		    )
		);

		$wp_customize->add_setting(
		    'h2_font_size',
		    array(
		        'default' => '16px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h2_font_size',
		    array(
		        'label' => 'Font size',
		        'section' => 'heading_two_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h2_font_line_height',
		    array(
		        'default' => '22px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h2_font_line_height',
		    array(
		        'label' => 'Line Height',
		        'section' => 'heading_two_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h2_font_colour',
		    array(
		        'default' => '#000000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'h2_font_colour',
		        array(
		            'label' => 'Color Setting',
		            'section' => 'heading_two_css',
		            'settings' => 'h2_font_colour',
		        )
		    )
		);

		$wp_customize->add_setting(
		    'h2_font_uppercase',
		    array(
		    	'sanitize_callback' => 'sanitize_checkbox',
		    	'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h2_font_uppercase',
		    array(
		        'label' => 'Uppercase?',
		        'section' => 'heading_two_css',
		        'type' => 'checkbox',
		    )
		);








		// SETTINGS FOR heading_three_css SECTION ==============================================================================

    $wp_customize->add_section(
        'heading_three_css',
        array(
            'title' => 'H3 Styles',
            //'description' => 'Edit the heading styles',
            'priority' => 43,
        )
    );

    $wp_customize->add_setting(
		    'h3_font_family',
		    array(
		        'sanitize_callback' => 'sanitize_body_font_family',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h3_font_family',
		    array(
		        'type' => 'select',
		        'label' => 'Font family:',
		        'section' => 'heading_three_css',
		        'choices' => create_font_stack_array(),
		    		'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_setting(
		    'h3_font_weight',
		    array(
		        'default' => 'normal',
		        'sanitize_callback' => 'sanitize_body_font_weight',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h3_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font weight',
		        'section' => 'heading_three_css',
		        'choices' => array(
		            'normal' => 'Normal',
		            'bold' => 'Bold',
		        ),
		    )
		);

		$wp_customize->add_setting(
		    'h3_font_size',
		    array(
		        'default' => '16px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h3_font_size',
		    array(
		        'label' => 'Font size',
		        'section' => 'heading_three_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h3_font_line_height',
		    array(
		        'default' => '22px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h3_font_line_height',
		    array(
		        'label' => 'Line Height',
		        'section' => 'heading_three_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h3_font_colour',
		    array(
		        'default' => '#000000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'h3_font_colour',
		        array(
		            'label' => 'Color Setting',
		            'section' => 'heading_three_css',
		            'settings' => 'h3_font_colour',
		        )
		    )
		);

		$wp_customize->add_setting(
		    'h3_font_uppercase',
		    array(
		    	'sanitize_callback' => 'sanitize_checkbox',
		    	'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h3_font_uppercase',
		    array(
		        'label' => 'Uppercase?',
		        'section' => 'heading_three_css',
		        'type' => 'checkbox',
		    )
		);







		// SETTINGS FOR heading_four_css SECTION ==============================================================================

    $wp_customize->add_section(
        'heading_four_css',
        array(
            'title' => 'H4 Styles',
            //'description' => 'Edit the heading styles',
            'priority' => 44,
        )
    );

    $wp_customize->add_setting(
		    'h4_font_family',
		    array(
		        'sanitize_callback' => 'sanitize_body_font_family',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h4_font_family',
		    array(
		        'type' => 'select',
		        'label' => 'Font family:',
		        'section' => 'heading_four_css',
		        'choices' => create_font_stack_array(),
		    		'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_setting(
		    'h4_font_weight',
		    array(
		        'default' => 'normal',
		        'sanitize_callback' => 'sanitize_body_font_weight',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h4_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font weight',
		        'section' => 'heading_four_css',
		        'choices' => array(
		            'normal' => 'Normal',
		            'bold' => 'Bold',
		        ),
		    )
		);

		$wp_customize->add_setting(
		    'h4_font_size',
		    array(
		        'default' => '16px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h4_font_size',
		    array(
		        'label' => 'Font size',
		        'section' => 'heading_four_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h4_font_line_height',
		    array(
		        'default' => '22px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h4_font_line_height',
		    array(
		        'label' => 'Line Height',
		        'section' => 'heading_four_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h4_font_colour',
		    array(
		        'default' => '#000000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'h4_font_colour',
		        array(
		            'label' => 'Color Setting',
		            'section' => 'heading_four_css',
		            'settings' => 'h4_font_colour',
		        )
		    )
		);

		$wp_customize->add_setting(
		    'h4_font_uppercase',
		    array(
		    	'sanitize_callback' => 'sanitize_checkbox',
		    	'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h4_font_uppercase',
		    array(
		        'label' => 'Uppercase?',
		        'section' => 'heading_four_css',
		        'type' => 'checkbox',
		    )
		);







		// SETTINGS FOR heading_five_css SECTION ==============================================================================

    $wp_customize->add_section(
        'heading_five_css',
        array(
            'title' => 'H5 Styles',
            //'description' => 'Edit the heading styles',
            'priority' => 45,
        )
    );

    $wp_customize->add_setting(
		    'h5_font_family',
		    array(
		        'sanitize_callback' => 'sanitize_body_font_family',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h5_font_family',
		    array(
		        'type' => 'select',
		        'label' => 'Font family:',
		        'section' => 'heading_five_css',
		        'choices' => create_font_stack_array(),
		    		'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_setting(
		    'h5_font_weight',
		    array(
		        'default' => 'normal',
		        'sanitize_callback' => 'sanitize_body_font_weight',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h5_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font weight',
		        'section' => 'heading_five_css',
		        'choices' => array(
		            'normal' => 'Normal',
		            'bold' => 'Bold',
		        ),
		    )
		);

		$wp_customize->add_setting(
		    'h5_font_size',
		    array(
		        'default' => '16px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h5_font_size',
		    array(
		        'label' => 'Font size',
		        'section' => 'heading_five_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h5_font_line_height',
		    array(
		        'default' => '22px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h5_font_line_height',
		    array(
		        'label' => 'Line Height',
		        'section' => 'heading_five_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h5_font_colour',
		    array(
		        'default' => '#000000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'h5_font_colour',
		        array(
		            'label' => 'Color Setting',
		            'section' => 'heading_five_css',
		            'settings' => 'h5_font_colour',
		        )
		    )
		);

		$wp_customize->add_setting(
		    'h5_font_uppercase',
		    array(
		    	'sanitize_callback' => 'sanitize_checkbox',
		    	'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h5_font_uppercase',
		    array(
		        'label' => 'Uppercase?',
		        'section' => 'heading_five_css',
		        'type' => 'checkbox',
		    )
		);







		// SETTINGS FOR heading_six_css SECTION ==============================================================================

    $wp_customize->add_section(
        'heading_six_css',
        array(
            'title' => 'H6 Styles',
            //'description' => 'Edit the heading styles',
            'priority' => 46,
        )
    );

    $wp_customize->add_setting(
		    'h6_font_family',
		    array(
		        'sanitize_callback' => 'sanitize_body_font_family',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h6_font_family',
		    array(
		        'type' => 'select',
		        'label' => 'Font family:',
		        'section' => 'heading_six_css',
		        'choices' => create_font_stack_array(),
		    		'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_setting(
		    'h6_font_weight',
		    array(
		        'default' => 'normal',
		        'sanitize_callback' => 'sanitize_body_font_weight',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h6_font_weight',
		    array(
		        'type' => 'select',
		        'label' => 'Font weight',
		        'section' => 'heading_six_css',
		        'choices' => array(
		            'normal' => 'Normal',
		            'bold' => 'Bold',
		        ),
		    )
		);

		$wp_customize->add_setting(
		    'h6_font_size',
		    array(
		        'default' => '16px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h6_font_size',
		    array(
		        'label' => 'Font size',
		        'section' => 'heading_six_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h6_font_line_height',
		    array(
		        'default' => '22px',
		        'sanitize_callback' => 'sanitize_text',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h6_font_line_height',
		    array(
		        'label' => 'Line Height',
		        'section' => 'heading_six_css',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'h6_font_colour',
		    array(
		        'default' => '#000000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'h6_font_colour',
		        array(
		            'label' => 'Color Setting',
		            'section' => 'heading_six_css',
		            'settings' => 'h6_font_colour',
		        )
		    )
		);

		$wp_customize->add_setting(
		    'h6_font_uppercase',
		    array(
		    	'sanitize_callback' => 'sanitize_checkbox',
		    	'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'h6_font_uppercase',
		    array(
		        'label' => 'Uppercase?',
		        'section' => 'heading_six_css',
		        'type' => 'checkbox',
		    )
		);













		// SETTINGS FOR colours SECTION ==============================================================================

    $wp_customize->add_section(
        'colours',
        array(
            'title' => 'Website Colours',
            'description' => 'Primary website colour scheme',
            'priority' => 33,
        )
    );

		$wp_customize->add_setting(
		    'colours_body_bg',
		    array(
		        'default' => '#ffffff',
		        'sanitize_callback' => 'sanitize_hex_color',
		    	'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'colours_body_bg',
		        array(
		            'label' => 'Body background colour',
		            'section' => 'colours',
		            'settings' => 'colours_body_bg',
		        )
		    )
		);

		$wp_customize->add_setting(
		    'colours_btt_icon',
		    array(
		        'default' => '#ff0000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    		'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'colours_btt_icon',
		        array(
		            'label' => 'Back to top icon colour',
		            'section' => 'colours',
		            'settings' => 'colours_btt_icon',
		        )
		    )
		);

		$wp_customize->add_setting(
		    'colours_hyperlink',
		    array(
		        'default' => '#000000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    		'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'colours_hyperlink',
		        array(
		            'label' => 'Hyperlink colour',
		            'section' => 'colours',
		            'settings' => 'colours_hyperlink',
		        )
		    )
		);

		$wp_customize->add_setting(
		    'colours_hyperlink_hover',
		    array(
		        'default' => '#000000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    		'transport'         => 'postMessage',
		    )
		);

		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'colours_hyperlink_hover',
		        array(
		            'label' => 'Hyperlink hover colour',
		            'section' => 'colours',
		            'settings' => 'colours_hyperlink_hover',
		        )
		    )
		);

		$wp_customize->add_setting(
		    'hyperlink_decoration',
		    array(
		        'default' => 'none',
		        'sanitize_callback' => 'sanitize_hyperlink_decoration',
		    		'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'hyperlink_decoration',
		    array(
		        'type' => 'select',
		        'label' => 'Underline hyperlinks?',
		        'section' => 'colours',
		        'choices' => array(
		            'none' => 'No',
		            'underline' => 'Yes',
		        ),
		    )
		);









		// SETTINGS FOR footer SECTION ==============================================================================

    $wp_customize->add_section(
        'footer',
        array(
            'title' => 'Footer Settings',
            //'description' => 'Fonts used in this website',
            'priority' => 50,
        )
    );

    $wp_customize->add_setting(
		    'copyright_textbox',
		    array(
		        'sanitize_callback' => 'sanitize_text',
		    		//'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'copyright_textbox',
		    array(
		        'label' => 'Copyright text',
		        'section' => 'footer',
		        'type' => 'text',
		    )
		);

		$wp_customize->add_setting(
		    'hide_copyright',
		    array(
		    	'sanitize_callback' => 'sanitize_checkbox',
		    		//'transport'         => 'postMessage',
		    )
		);
		$wp_customize->add_control(
		    'hide_copyright',
		    array(
		        'label' => 'Hide copyright text',
		        'section' => 'footer',
		        'type' => 'checkbox',
		    )
		);

		$wp_customize->add_setting(
		    'copyright_alignment',
		    array(
		        'default' => 'center',
		        'sanitize_callback' => 'sanitize_copyright_alignment',
		    )
		);
		$wp_customize->add_control(
		    'copyright_alignment',
		    array(
		        'type' => 'radio',
		        'label' => 'Copyright Alignment',
		        'section' => 'footer',
		        'choices' => array(
		            'left' => 'Left',
		            'center' => 'Center',
		            'right' => 'Right',
		        ),
		    )
		);










		function theme_customizer_live_preview() {
			wp_enqueue_script(
				'tmx-theme-customizer',
				get_template_directory_uri() . '/js/theme-customizer.js',
				array( 'jquery', 'customize-preview' ),
				'',
				true
			);
		}
		add_action( 'customize_preview_init', 'theme_customizer_live_preview' );





}
add_action( 'customize_register', 'theme_customizer' );










// Sanitisation function for the text box input
function sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}



// Sanitisation function for the checkbox input
function sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}




// Sanitisation function for copyright alignment
function example_sanitize_copyright_alignment( $input ) {
    $valid = array(
        'left' => 'Left',
        'right' => 'Right',
        'center' => 'Center',
    );

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}





// Sanitisation function for body font family
function sanitize_body_font_family( $input ) {
    $valid = create_font_stack_array();

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function create_font_stack_array() {
	$stack = get_theme_mod( 'font_stacks' );
  $fonts_array = explode(PHP_EOL, $stack);
  return $fonts_array;
}



// Sanitisation function for body font weight
function sanitize_body_font_weight( $input ) {
    $valid = array(
        'normal' => 'Normal',
		    'bold' => 'Bold',
    );

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}


// Sanitisation function for body font weight
function sanitize_hyperlink_decoration( $input ) {
    $valid = array(
        'none' => 'No',
		    'underline' => 'Yes',
    );

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

// Sanitisation function for copyright alignment
function sanitize_copyright_alignment( $input ) {
    $valid = array(
        'left' => 'Left',
        'right' => 'Right',
        'center' => 'Center',
    );

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}




// Sanitisation function for ANY textarea
function example_sanitize_textarea( $input ) {
    return nl2br($input);
}


// Sanitisation function for the font stack textarea
function sanitize_textarea_font_stack( $input ) {
    $fontstack_array = explode(PHP_EOL, $input);
    $temp = nl2br($input);
    return strip_tags($temp);
}








?>