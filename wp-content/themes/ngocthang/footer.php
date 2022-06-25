<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer>
	<div class="wrapper-footer">
		<div class="item-footer">
			<div class="item-footer-left">
				<div class="logo-footer">
				<a href="/"><img  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png" /></a>

				</div>
				<div class="info-footer-left">
					<div class="footer-left-name">HTX Dịch vụ Nông Nghiệp NEWCOOP</div>
					<div class="footer-left-contact">
						<a href="#">Địa chỉ: ĐT8, Tài Văn, Trần Đề, Sóc Trăng</a>
						<a href="#">Email: info@newcoop.vn</a>
						<a href="#">Hotline: 0586 610 442</a>
					</div>
					<div class="footer-left-social">
						<a href="https://www.facebook.com/GoAMilk" target="_blank">
							<div class="icon">
								<i class="fab fa-facebook"></i>
							</div>
						</a>
						<!-- <div>
							<a href="#"><i class="fab fa-instagram"></i></a>
						</div>
						<div>
							<a href="#"><i class="fab fa-youtube"></i></a>
						</div> -->
					</div>
				</div>
			</div>
			<div class="item-footer-right">
				<div class="info-footer-right-left">
					<div class="conent-info-footer-right">
						<h5 class="elementor-heading-title elementor-size-default footer-title">Giới thiệu</h5>

						<div><a href="<?php echo get_template_directory_uri(); ?>/ve-chung-toi">Về chúng tôi</a></div>
						<div><a href="<?php echo get_template_directory_uri(); ?>/cua-hang">Cửa hàng</a></div>
						<div><a href="<?php echo get_template_directory_uri(); ?>/tin-tuc">Tin tức</a></div>
						<div><a href="<?php echo get_template_directory_uri(); ?>/khuyen-mai">Khuyến mãi</a></div>
						<div><a href="<?php echo get_template_directory_uri(); ?>/lien-he">Liên hệ</a></div>

					</div>
					<div class="conent-info-footer-right">
						<h5 class="elementor-heading-title elementor-size-default footer-title">Sản phẩm</h5>

						<div><a href="#">Fresh Milk</a></div>
						<div><a href="#">Condensed Milk</a></div>
						<div><a href="#">ST Milk</a></div>
						<div><a href="#">Yogurt</a></div>
					</div>
					<div class="conent-info-footer-right">
						<h5 class="elementor-heading-title elementor-size-default footer-title">Mua hàng</h5>

						<div>
							<a href="#">Shoppe</a>
						</div>
						<div>
							<a href="#">Tiki</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>

</html>