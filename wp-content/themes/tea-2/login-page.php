<?php
/*
Template Name: Login Page
*/
?>

<?php get_header('login'); ?>

<?php
        if ( ! is_user_logged_in() ) { // Display WordPress login form:
            $args = array(
                'redirect' => site_url('index.php'),
                'form_id' => 'loginform-custom',
                'label_username' => __( 'Enter your username' ),
                'label_password' => __( 'Enter your password' ),
                'label_remember' => __( 'Remember Me' ),
                'label_log_in' => __( 'Log me in' ),
                'remember' => true,
                'value_remember' => true,
            );
            wp_login_form( $args );
        } else { // If logged in:
            //wp_loginout( site_url('index.php') ); // Display "Log Out" link.
            //echo " | ";
            //wp_register('', ''); // Display "Site Admin" link.
                echo '<a href="' . wp_logout_url( home_url() ) . '" title="Logout">Click here to Log out.</a>';
        }
?>


<?php get_footer(); ?>