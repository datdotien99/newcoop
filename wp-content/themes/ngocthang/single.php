<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ngocthang
 */
get_header();
?>
<nav class="breadcrumbs">
	<div class="container">
		<div class="breadcrumbs-text">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb();
			}
			?>
		</div>
	</div>
</nav>
<main class="single__content">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h1 class="h1-title"><?php the_title(); ?></h1>
				<?php if (rwmb_meta('diadiem')) { ?>
					<div class="info-price">
						<p class="address1"><strong>Địa điểm :</strong><?php echo  $value = rwmb_meta('diadiem'); ?></p>
						<span class="price"><strong>Giá :</strong>
							<?php echo  $value = rwmb_meta('gia'); ?>
						</span>
						<span class="numberS"><strong>Diện tích:</strong></i><?php echo  $value = rwmb_meta('dientich'); ?></span>

					</div>
				<?php } ?>

				<!-- 	<?php ngocthang_posted_on(); ?>
			<?php ngocthang_posted_by(); ?> -->
				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post(); ?>
					<article class="entry-content">
						<?php the_content(); ?>
					</article>
				<?php endwhile; // End of the loop.
				?>
				<div class="tags">
					<?php the_tags('Tags:', ',', ','); ?>
				</div>
				<div class="single-author">
					<div class="single-author-img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-thammy.png" alt="anh" class="img-responsive">
					</div>
					<div class="single-author-name">
						<div class="name">
							<?php echo get_the_author(); ?>
						</div>
						<p>"Your wings already exist, all you have to do is fly"</p>
						<p>Chúng tôi sẽ giải đáp các thắc mắc của các bạn</p>
					</div>

				</div>
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) {
					comments_template();
				}
				?>


			</div>
			<div class="col-md-3">
				<?php dynamic_sidebar('sidebar'); ?>
				<div class="post-related">
					<h2 class="h2-title">TIN LIÊN QUAN</h2>

					<?php
					$categories = get_the_category($post->ID);
					if ($categories) {
						$category_ids = array();
						foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
						$args = array(
							'category__in' => $category_ids,
							'post__not_in' => array($post->ID),
							'showposts' => 3,
							'ignore_sticky_posts' => 1
						);
						$my_query = new wp_query($args);
						if ($my_query->have_posts()) { ?>
							<div class="row">
								<?php while ($my_query->have_posts()) {
									$my_query->the_post(); ?>
									<div class="col-12">
										<?php get_template_part('template-parts/content', 'post'); ?>
									</div>
								<?php } ?>
							</div>
					<?php }
					}

					?>
				</div>
			</div>
		</div>
	</div>
</main><!-- #main -->
<?php
get_footer();
