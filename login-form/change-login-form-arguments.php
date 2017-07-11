<?php 
/**
 * The `charitable_login_form_args` filter allows you to set 
 * the arguments that are passed to wp_login_form().
 *
 * In this example, we change the URL that people are redirected
 * to after logging in through the form generated by [charitable_login].
 * You can include any other parameters that are used by 
 * wp_login_form().
 */
function ed_change_login_form_arguments( $args ) {
    $args[ 'redirect' ] = home_url();

    return $args;
}

add_filter( 'charitable_login_form_args', 'ed_change_login_form_arguments' );