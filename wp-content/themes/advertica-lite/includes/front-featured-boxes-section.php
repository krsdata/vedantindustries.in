<div id="featured-box" class="skt-section">
	<div class="container">
		<div class="mid-box-mid row-fluid"> 
			<!-- Featured Box 1 -->
			<div class="mid-box span4 fade_in_hide element_fade_in">
				<div class="skt-iconbox iconbox-top">		
					<div class="iconbox-icon skt-animated small-to-large skt-viewport">	
						<?php if( get_theme_mod('first_feature_image', '') != '' ) { ?>
							<a class="skt-featured-images" href="<?php echo esc_url( get_theme_mod('first_feature_link', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('first_feature_heading', __('Business Strategy', 'advertica-lite') ) ); ?>">
								<span class="skt-featured-image-mask"></span>
								<img class="skin-bg" src="<?php echo esc_url( get_theme_mod('first_feature_image') ) ?>" alt="boximg"/>
							</a>
						<?php } else { ?>
						<a class="skt-featured-icons" href="<?php echo esc_url( get_theme_mod('first_feature_link', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('first_feature_heading', __('Business Strategy', 'advertica-lite') ) ); ?>">
							<i class="fa fa-briefcase"></i>		  
						</a>
						<?php } ?>
					</div>		
					<div class="iconbox-content">
						<h4 id="first-feature-heading"><?php echo esc_attr( get_theme_mod('first_feature_heading', __('Business Strategy', 'advertica-lite') ) ); ?></h4>
						<p><?php echo wp_kses_post( get_theme_mod('first_feature_content', __('Get focused from your target consumers and increase your business with Web portal Design and Development.', 'advertica-lite') ) ); ?></p>
					</div>
					<div class="clearfix"></div>	
				</div>
			</div>
			<!-- Featured Box 2 -->
			<div class="mid-box span4 fade_in_hide element_fade_in" >
				<div class="skt-iconbox iconbox-top">
					<div class="iconbox-icon skt-animated small-to-large skt-viewport">	
					<?php if( get_theme_mod('second_feature_image', '') != '' ) { ?>
						<a class="skt-featured-images" href="<?php echo esc_url( get_theme_mod('second_feature_link', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('second_feature_heading', __('Quality Products', 'advertica-lite') ) ); ?>">
								<span class="skt-featured-image-mask"></span>
								<img class="skin-bg" src="<?php echo esc_url( get_theme_mod('second_feature_image') ) ?>" alt="boximg"/>
							</a>
					  <?php } else { ?>
						<a class="skt-featured-icons" href="<?php echo esc_url( get_theme_mod('second_feature_link', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('second_feature_heading', __('Quality Products', 'advertica-lite') ) ); ?>">
							<i class="fa fa-bar-chart-o"></i>
						</a>
					  <?php  } ?>	
					</div>		
					<div class="iconbox-content">
						<h4 id="second-feature-heading"><?php echo esc_attr( get_theme_mod('second_feature_heading', __('Quality Products', 'advertica-lite') ) ); ?></h4>
						<p><?php echo wp_kses_post( get_theme_mod('second_feature_content', __('Products with the ultimate features and functionality that provide the complete satisfaction to the clients.', 'advertica-lite') ) ); ?></p>
					</div>
					<div class="clearfix"></div>	
				</div>
			</div>
			<!-- Featured Box 3 -->
			<div class="mid-box span4 fade_in_hide element_fade_in" >
				<div class="skt-iconbox iconbox-top">		
					<div class="iconbox-icon skt-animated small-to-large skt-viewport">
					<?php if( get_theme_mod('third_feature_image', '') != '' ) { ?>
						<a class="skt-featured-images" href="<?php echo esc_url( get_theme_mod('third_feature_link', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('third_feature_heading', __('Best Business Plans', 'advertica-lite') ) ); ?>">
								<span class="skt-featured-image-mask"></span>
								<img class="skin-bg" src="<?php echo esc_url( get_theme_mod('third_feature_image') ) ?>" alt="boximg"/>
							</a>
					  <?php } else { ?>
						<a class="skt-featured-icons" href="<?php echo esc_url( get_theme_mod('third_feature_link', '#') ); ?>" title="<?php echo esc_attr( get_theme_mod('third_feature_heading', __('Best Business Plans', 'advertica-lite') ) ); ?>">
							<i class="fa fa-sitemap"></i>
						</a>
					  <?php } ?>	
					</div>			
					<div class="iconbox-content">
						<h4 id="third-feature-heading"><?php echo esc_attr( get_theme_mod('third_feature_heading', __('Best Business Plans', 'advertica-lite') ) ); ?></h4>
						<p><?php echo wp_kses_post( get_theme_mod('third_feature_content', __('Based on the client requirement, different business plans suits and fulfill your business and cost requirement.', 'advertica-lite') ) ); ?></p>
					</div>
					<div class="clearfix"></div>	
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>