 <?php
/**
 * Flexible Posts Widget: Widget Post Sidebar
 * 
 * @since 3.4.0
 *
 * This template was added to overcome some often-requested changes
 * to the old default template (widget.php).
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;

if ( ! empty( $title ) )
	echo $before_title; ?>
	<a href="<?php echo get_category_link($term[0]); ?>"><?php echo $title ;?></a>
	<?php echo $after_title; ?>

<?php if ( $flexible_posts->have_posts() ):
?>
	<div class="post-list">
		<div class="row">
			<?php while ( $flexible_posts->have_posts() ) : $flexible_posts->the_post(); global $post; ?>
			<div class="col-md-12">
				<?php get_template_part( 'template-parts/content', 'post' );?>
			</div>
				
				
			<?php endwhile; ?>
		</div>
	
	</div><!-- .dpe-flexible-posts -->
<?php	
endif; // End have_posts()
	
echo $after_widget;
