<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ngocthang
 */

?>


<div class="blog-item">
	<div class="blog-img">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array( 'class' => 'img-fluid center-block' ) ); ?></a>
	</div>
	<div class="blog-content">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>
</div>