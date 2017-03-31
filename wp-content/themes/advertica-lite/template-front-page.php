<?php get_header(); ?>

<!-- FEATURED BOXES SECTION -->
<?php get_template_part('includes/front','featured-boxes-section'); ?>

<!-- AWESOME PARALLAX SECTION -->
<?php // get_template_part('includes/front','parallax-section'); ?>

<?php if ( 'page' == get_option( 'show_on_front' ) ) {  ?>
<!-- PAGE EDITER CONTENT -->
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div id="front-page-content" class="skt-section">
			<div class="container">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php } ?>

<?php  if( get_theme_mod('home_blog_sec', 'on') == 'on' ) { ?>
<div id="front-content-box" class="skt-section">
	<div class="container">
		<div class="row-fluid">
			<h3 class="inline-border"><?php echo wp_kses_post( get_theme_mod('home_blog_title', __('Product Range', 'advertica-lite') ) ); ?></h3>
			<span class="border_left"></span></br>
		</div>
		<div id="front-blog-wrap" class="row-fluid">
		<?php $advertica_blogno = esc_attr( get_theme_mod('home_blog_num', '6') );
		if( !empty($advertica_blogno) && ($advertica_blogno > 0) ) {
				$advertica_lite_latest_loop = new WP_Query( array( 'post_type' => 'product_category', 'posts_per_page' => $advertica_blogno,'ignore_sticky_posts' => true ) );
		}else{
			   $advertica_lite_latest_loop = new WP_Query( array( 'post_type' => 'product_category', 'posts_per_page' => -1,'ignore_sticky_posts' => true ) );			
		} ?>
			<?php if ( $advertica_lite_latest_loop->have_posts() ) : ?>

			<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $advertica_lite_latest_loop->have_posts() ) : $advertica_lite_latest_loop->the_post(); ?>
					<div class="span4">
                                            <?php $site = get_site_url(); ?>
						<h2><a href="<?php echo $site.'/all-products/?cat_id='.get_the_ID(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                               <?php
                                    $tumb_id = get_post_thumbnail_id(get_the_ID());
                                    $thumb_url = wp_get_attachment_image_src($tumb_id, 'thumbnail');
                                    if ($thumb_url) { $thumb_url = $thumb_url[0]; ?>
                                                <img src="<?php echo $thumb_url; ?>" />
                                                <?php } ?>
						<?php the_excerpt(); ?>
                                                <div class="continue"><a href="<?php echo $site.'/all-products/?cat_id='.get_the_ID(); ?>"><?php _e('View Products &rarr;','advertica-lite');?></a></div>		  
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'advertica-lite' ); ?></p>
			<?php endif; ?>
		</div>
 	</div>
</div>
<?php } ?>

<!-- CLIENTS-LOGO SECTION -->
<?php // get_template_part('includes/front','client-logo-section'); ?>

<?php get_footer(); ?>