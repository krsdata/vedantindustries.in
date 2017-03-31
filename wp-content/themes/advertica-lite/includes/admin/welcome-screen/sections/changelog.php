<?php
/**
 * Changelog
 */

$advertica_lite = wp_get_theme( 'advertica-lite' );

?>
<div class="advertica-lite-tab-pane" id="changelog">

	<div class="advertica-tab-pane-center">
	
		<h1>Advertica Lite <?php if( !empty($advertica_lite['Version']) ): ?> <sup id="advertica-lite-theme-version"><?php echo esc_attr( $advertica_lite['Version'] ); ?> </sup><?php endif; ?></h1>

	</div>

	<?php
	WP_Filesystem();
	global $wp_filesystem;
	$advertica_lite_changelog = $wp_filesystem->get_contents( get_template_directory().'/changelog.txt' );
	$advertica_lite_changelog_lines = explode(PHP_EOL, $advertica_lite_changelog);
	foreach($advertica_lite_changelog_lines as $advertica_lite_changelog_line){
		if(substr( $advertica_lite_changelog_line, 0, 3 ) === "###"){
			echo '<hr /><h1>'.substr($advertica_lite_changelog_line,3).'</h1>';
		} else {
			echo $advertica_lite_changelog_line,'<br/>';
		}
	}

	?>
	
</div>