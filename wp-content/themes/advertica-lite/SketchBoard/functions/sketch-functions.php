<?php
/***************** EXCERPT LENGTH ************/
function advertica_lite_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'advertica_lite_excerpt_length');

/***************** READ MORE ****************/
function advertica_lite_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'advertica_lite_excerpt_more');
