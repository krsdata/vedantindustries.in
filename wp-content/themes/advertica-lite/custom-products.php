<?php
/*
Template Name: Custom Products
*/
?>

<?php get_header(); ?>

<?php
$category_id = $_GET['cat_id'];
?>

<div class="bread-title-holder">
	<div class="bread-title-bg-image full-bg-breadimage-fixed"></div>
	<div class="container">
		<div class="row-fluid">
		  <div class="container_inner clearfix">
			<h1 class="title"><?php the_title(); ?></h1>
				<?php  if( get_theme_mod('breadcrumb_sec', 'on') == 'on' ) {
                                            if ((class_exists('advertica_lite_breadcrumb_class'))) {$advertica_breadcumb->advertica_lite_custom_breadcrumb();}
				}
				?>
		   </div>
		 </div>
	</div>
</div>

<div class="page-content fullwidth-temp">
	<div class="container">
		<div class="row-fluid">
			<h3 class="inline-border"><?php echo wp_kses_post( get_theme_mod('home_blog_title', __('Product List', 'advertica-lite') ) ); ?></h3>
			<span class="border_left"></span></br>
		</div>
                <div id="front-blog-wrap" class="row-fluid">
		<?php
                
                $args = array( 
                    'post_type' => 'products', 
                    'posts_per_page' => -1,
                    'ignore_sticky_posts' => true,
                    );
                    
                if(!empty($category_id)){
                	$args['meta_key'] = 'category';
                	$args['meta_value'] = $category_id;
                }
                
                $advertica_lite_latest_loop = new WP_Query( $args ); ?>
                <?php if ( $advertica_lite_latest_loop->have_posts() ) : ?>
                    
                    <!-- the loop -->
                    <?php while ( $advertica_lite_latest_loop->have_posts() ) : $advertica_lite_latest_loop->the_post(); ?>
                            <div class="span4">
                                    <?php $site = get_site_url(); ?>
                                    <h2><a href="<?php echo $site.'/enquiry/?cat_id='.get_the_ID(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                   <?php
                        $tumb_id = get_post_thumbnail_id(get_the_ID());
                        $thumb_url = wp_get_attachment_image_src($tumb_id, 'thumbnail');
                        if ($thumb_url) { $thumb_url = $thumb_url[0]; ?>
                                    <img src="<?php echo $thumb_url; ?>" />
                                    <?php } ?>
                                    <?php the_excerpt(); ?>
                                    <div class="continue"><a href="<?php echo $site.'/enquiry/?cat_id='.get_the_ID(); ?>"><?php _e('Ask for Price','advertica-lite');?></a></div>		  
                            </div>
                    <?php endwhile; ?>
                    <!-- end of the loop -->
                    
                    <!-- pagination here -->
                    
                    <?php wp_reset_postdata(); ?>
                    
                <?php else : ?>
                        <p><?php _e( 'Sorry, no products found.', 'advertica-lite' ); ?></p>
                <?php endif; ?>
	</div>
        
</div>

<?php get_footer(); ?>