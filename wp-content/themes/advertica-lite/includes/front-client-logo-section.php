<?php 
	// define image directory path
	$imagepath =  get_template_directory_uri() . '/images/';
?>

<div id="full-client-box" class="skt-section">
	<div class="container">
		<div class="row-fluid">
			<?php if( get_theme_mod('home_brand_sec_title', '') != '' ) { ?>
				<h3 class="inline-border"><?php echo get_theme_mod('home_brand_sec_title'); ?></h3>
				<span class="border_left"></span>
			<?php } ?>

			<ul class="clients-items clearfix">
				<li class="span2"><a id="brand1-a" href="<?php echo esc_url( get_theme_mod('brand1_url', '#' ) ); ?>" title="<?php echo esc_attr( get_theme_mod('brand1_alt', __('Logo Image', 'advertica-lite') ) ); ?>"><img id="brand1-img" alt="<?php echo esc_attr( get_theme_mod('brand1_alt', __('Logo Image', 'advertica-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand1_img', $imagepath.'client-logo1.png' ) ); ?>" /></a></li>

				<li class="span2"><a id="brand2-a" href="<?php echo esc_url( get_theme_mod('brand2_url', '#' ) ); ?>" title="<?php echo esc_attr( get_theme_mod('brand2_alt', __('Logo Image', 'advertica-lite') ) ); ?>"><img id="brand2-img" alt="<?php echo esc_attr( get_theme_mod('brand2_alt', __('Logo Image', 'advertica-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand2_img', $imagepath.'client-logo1.png' ) ); ?>" /></a></li>

				<li class="span2"><a id="brand3-a" href="<?php echo esc_url( get_theme_mod('brand3_url', '#' ) ); ?>" title="<?php echo esc_attr( get_theme_mod('brand3_alt', __('Logo Image', 'advertica-lite') ) ); ?>"><img id="brand3-img" alt="<?php echo esc_attr( get_theme_mod('brand3_alt', __('Logo Image', 'advertica-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand3_img', $imagepath.'client-logo1.png' ) ); ?>" /></a></li>

				<li class="span2"><a id="brand4-a" href="<?php echo esc_url( get_theme_mod('brand4_url', '#' ) ); ?>" title="<?php echo esc_attr( get_theme_mod('brand4_alt', __('Logo Image', 'advertica-lite') ) ); ?>"><img id="brand4-img" alt="<?php echo esc_attr( get_theme_mod('brand4_alt', __('Logo Image', 'advertica-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand4_img', $imagepath.'client-logo1.png' ) ); ?>" /></a></li>

				<li class="span2"><a id="brand5-a" href="<?php echo esc_url( get_theme_mod('brand5_url', '#' ) ); ?>" title="<?php echo esc_attr( get_theme_mod('brand5_alt', __('Logo Image', 'advertica-lite') ) ); ?>"><img id="brand5-img" alt="<?php echo esc_attr( get_theme_mod('brand5_alt', __('Logo Image', 'advertica-lite') ) ); ?>" src="<?php echo esc_url( get_theme_mod('brand5_img', $imagepath.'client-logo1.png' ) ); ?>" /></a></li>
			</ul>
		</div>
	</div>
</div>
