<?php
add_action( 'after_setup_theme', '_pit_remove_admin_bar' );

function _pit_remove_admin_bar() {
    // if ( ! current_user_can( 'administrator' ) && ! is_admin() ) {
        show_admin_bar( false );
    // }
}

add_filter('show_admin_bar', '__return_false');
