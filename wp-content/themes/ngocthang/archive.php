<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ngocthang
 */

get_header();
?>
<nav class="breadcrumbs">
	<div class="container">
		<div class="breadcrumbs-text">
			<?php  
				if(function_exists('yoast_breadcrumb')) {yoast_breadcrumb();}
			?>
			
		</div>
	</div>
</nav>
		<main class="archive__content">
			<div class="container">
				
					<?php
						the_archive_title( '<h1 class="h1-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					<?php if ( have_posts() ) : ?>
						<div class="row">
					<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();?>
							<div class="col-md-4 col-xs-6">
								<?php
									
									get_template_part( 'template-parts/content', 'post');?>
							</div>
							

						<?php endwhile;

						the_posts_navigation(); 
						else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
		</div>
				
			</div>
		

		</main><!-- #main -->
	
<?php

get_footer();
