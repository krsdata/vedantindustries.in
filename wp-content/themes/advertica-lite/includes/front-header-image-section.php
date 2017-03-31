<?php if( get_header_image() ) { ?>
<!-- header image -->
<div class="front-header-image">
	<div class="advertica-image-post">
	<img alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="ad-slider-image"  src="<?php header_image(); ?>" />
	</div>
</div>
<?php } ?>