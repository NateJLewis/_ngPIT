<?php
function _ngPIT_editor_set_quality_example( $quality ) {
    return 100;
}
add_filter( 'wp_editor_set_quality', '_ngPIT_editor_set_quality_example' );
