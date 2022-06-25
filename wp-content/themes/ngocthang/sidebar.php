<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ngocthang
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-md-3 col-md-pull-9">
	<aside id="secondary" class="widget-area">
		<div class="widget widget-fb">
			<h3 class="widget-title h3-title">Facebook Fanpage</h3>
			<div class="fb-page" data-href="<?php echo of_get_option('facebook'); ?>" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
		</div>
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</aside><!-- #secondary -->

</div>
