<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/about-us.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style-page.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/promotion.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/product.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/store-details.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/news-detail.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/product-detail.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

	<?php wp_head(); ?>

</head>
<script>
	function showMenu() {
		var element = document.getElementById("ul-moblie");
		element.classList.add("show-item-header");

		var hiddenMenu = document.getElementsByClassName("elementor-menu-toggle")[0];
		var ShowCloseMenu = document.getElementsByClassName("elementor-menu-toggle-x")[0];

		hiddenMenu.style.display = "none";
		ShowCloseMenu.style.display = "block"
	}

	function closeMenu() {
		var element = document.getElementById("ul-moblie");
		element.classList.remove("show-item-header");

		var hiddenMenu = document.getElementsByClassName("elementor-menu-toggle")[0];
		var ShowCloseMenu = document.getElementsByClassName("elementor-menu-toggle-x")[0];

		hiddenMenu.style.display = "block";
		ShowCloseMenu.style.display = "none"
	}
</script>

<body <?php body_class(); ?>>

	<?php
	wp_body_open();
	?>

	<header id="site-header" class="header-footer-group" role="banner">
		<div class="wrapperheader">
			<div class="item-header">
				<div class="header-left">
					<a href="/"><img src="http://newcoop.acstech.vn/wp-content/uploads/2022/05/logo.png" /></a>
				</div>
				<div class="wrapperr-right">
					<div onclick="showMenu()" class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</div>
					<div onclick="closeMenu()" class="elementor-menu-toggle-x" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
						<i class="fa fa-times" aria-hidden="true"></i>

					</div>
					<div>
						<ul class="elementor-nav-menu">
							<li><a href="<?php echo get_template_directory_uri(); ?>/ve-chung-toi">Về chúng tôi</a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/san-pham">Sản phẩm</a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/khuyen-mai">Khuyến mãi</a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/cua-hang">Cửa hàng</a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/tin-tuc">Tin tức</a></li>
							<li><a href="<?php echo get_template_directory_uri(); ?>/lien-he">Liên hệ</a></li>
						</ul>
					</div>
					<ul class="elementor-icon-list-items">
						<li class="elementor-icon-list-item">
							<span class="elementor-icon-list-icon">
								<i aria-hidden="true" class="fas fa-chevron-down"></i> </span>
							<span class="elementor-icon-list-text">VN</span>
						</li>
					</ul>
					<div><i aria-hidden="true" class="fas fa-search"></i></div>
				</div>
			</div>
			<div id="ul-moblie" class="ul-mobile">
				<ul class="elementor-nav-menu elementor-nav-menu-mobile ">
					<li><a href="<?php echo get_template_directory_uri(); ?>/ve-chung-toi">Về chúng tôi</a></li>
					<li><a href="<?php echo get_template_directory_uri(); ?>/san-pham">Sản phẩm</a></li>
					<li><a href="<?php echo get_template_directory_uri(); ?>/khuyen-mai">Khuyến mãi</a></li>
					<li><a href="<?php echo get_template_directory_uri(); ?>/cua-hang">Cửa hàng</a></li>
					<li><a href="<?php echo get_template_directory_uri(); ?>/tin-tuc">Tin tức</a></li>
					<li><a href="<?php echo get_template_directory_uri(); ?>/lien-he">Liên hệ</a></li>
				</ul>

			</div>
		</div>




		<?php
		// Output the search modal (if it is activated in the customizer).
		if (true === $enable_header_search) {
			get_template_part('template-parts/modal-search');
		}
		?>

	</header><!-- #site-header -->

	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
