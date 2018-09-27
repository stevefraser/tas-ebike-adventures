<?php


/**
 * Adds the individual sections, settings, and controls to the theme customizer
 */
function example_customizer( $wp_customize ) {


		// REMOVE AND EDIT EXISTING CUSTOMIZER SECTIONS
		$wp_customize->remove_section('static_front_page');

		// Adds textarea support to the theme customizer
		class Example_Customize_Textarea_Control extends WP_Customize_Control {
		    public $type = 'textarea';

		    public function render_content() {
		        ?>
		            <label>
		                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>>
		                	<?php //echo esc_textarea( $this->value() ); ?>
		                	<?php echo nl2br($this->value() ); ?>
		                </textarea>
		            </label>
		        <?php
		    }
		}


		// Add section
    $wp_customize->add_section(
        'example_section_one',
        array(
            'title' => 'Example Settings',
            'description' => 'This is a settings section.',
            'priority' => 35,
        )
    );






    // TEXT BOX ==============================================================================

    $wp_customize->add_setting(
		    'copyright_textbox',
		    array(
		        'default' => 'Default copyright text',
		        'sanitize_callback' => 'example_sanitize_text',
		    )
		);

		$wp_customize->add_control(
		    'copyright_textbox',
		    array(
		        'label' => 'Copyright text',
		        'section' => 'example_section_one',
		        'type' => 'text',
		    )
		);




		// CHECKBOX ==============================================================================

		$wp_customize->add_setting(
		    'hide_copyright',
		    array(
		    	'sanitize_callback' => 'example_sanitize_checkbox',
		    )
		);

		$wp_customize->add_control(
		    'hide_copyright',
		    array(
		        'label' => 'Hide copyright text',
		        'section' => 'example_section_one',
		        'type' => 'checkbox',
		    )
		);



		// RADIO BUTTON ==============================================================================

		$wp_customize->add_setting(
		    'copyright_alignment',
		    array(
		        'default' => 'center',
		        'sanitize_callback' => 'example_sanitize_copyright_alignment',
		    )
		);

		$wp_customize->add_control(
		    'copyright_alignment',
		    array(
		        'type' => 'radio',
		        'label' => 'Copyright Alignment',
		        'section' => 'example_section_one',
		        'choices' => array(
		            'left' => 'Left',
		            'center' => 'Center',
		            'right' => 'Right',
		        ),
		    )
		);



		// SELECT BOX ==============================================================================

		$wp_customize->add_setting(
		    'powered_by',
		    array(
		        'default' => 'Wordpress',
		        'sanitize_callback' => 'example_sanitize_powered_by',
		    )
		);

		$wp_customize->add_control(
		    'powered_by',
		    array(
		        'type' => 'select',
		        'label' => 'This site is powered by:',
		        'section' => 'example_section_one',
		        'choices' => array(
		            'Wordpress' => 'WordPress',
		            'Hamsters' => 'Hamsters',
		            'Jet Fuel' => 'Jet Fuel',
		            'Nuclear Energy' => 'Nuclear Energy',
		        ),
		    )
		);





		// TEXTAREA ==============================================================================

		$wp_customize->add_setting(
			'textarea',
			array(
				'sanitize_callback' => 'example_sanitize_textarea',
			)
		);

		$wp_customize->add_control(
		    new Example_Customize_Textarea_Control(
		        $wp_customize,
		        'textarea',
		        array(
		            'label' => 'Textarea',
		            'section' => 'example_section_one',
		            'settings' => 'textarea'
		        )
		    )
		);



		// COLOR PICKER ==============================================================================

		$wp_customize->add_setting(
		    'color-setting',
		    array(
		        'default' => '#000000',
		        'sanitize_callback' => 'sanitize_hex_color',
		    )
		);

		$wp_customize->add_control(
		    new WP_Customize_Color_Control(
		        $wp_customize,
		        'color-setting',
		        array(
		            'label' => 'Color Setting',
		            'section' => 'example_section_one',
		            'settings' => 'color-setting',
		        )
		    )
		);








}
add_action( 'customize_register', 'example_customizer' );





// Sanitisation function for the text box input
function example_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}



// Sanitisation function for the checkbox input
function example_sanitize_checkbox( $input ) {
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



// Sanitisation function for powered by
function example_sanitize_powered_by( $input ) {
    $valid = array(
        'Wordpress' => 'WordPress',
        'Hamsters' => 'Hamsters',
        'Jet Fuel' => 'Jet Fuel',
        'Nuclear Energy' => 'Nuclear Energy',
    );

    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}


// Sanitisation function for the textarea
function example_sanitize_textarea( $input ) {
    return nl2br($input);
}





?>

