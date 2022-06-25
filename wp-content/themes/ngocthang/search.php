<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ngocthang
 */

get_header();
?>

<section id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="h1-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'ngocthang' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->

				<div class="favorite-themes themes-list">
					<div class="row">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();?>
							<div class="col-md-4 col-xs-6">
								<?php

								get_template_part( 'template-parts/content', 'post');?>
							</div>


						<?php endwhile; ?>


					</div>
				</div>

				<?php the_posts_pagination( array(
						'prev_text'          => __( 'Trước', 'ngocthang' ),
						'next_text'          => __( 'Sau', 'ngocthang' ),
						'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'ngocthang' ) . ' </span>',
					) );

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

		</div>
		
	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
