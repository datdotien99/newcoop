<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">
	<div class="banner">

		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Banner 2.png" />
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DK-dai-ly-(1).png" class="img-banner" /> -->
	</div>

	<div class="milk-img-box">
		<!-- <div class="img-milk">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/image.png" />
		</div> -->
		<div class="categoty-milk">
			<div class="milk-box-list">
				<div class="wrap-5">
					<a href="#">
						<div class="milk-image-box">
							<div class="milk-img-list">
								<div class="milk-img-item">
									<svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 126 255" width="126" height="255">
										<style>tspan{white-space:pre}.a{fill:#fff}.b{fill:#35ccf6}</style>
										<rect class="a" x=".3" y=".3" width="125.4" height="254" rx="5.4"/>
										<rect class="b" x="4.1" y="4.1" width="117.8" height="246.4" rx="5.4"/>
										<path class="a" d="m7.9 241.3v-109c0-1.2 0.4-2.3 1-3.2 4.3-5.9 22-25 54.1 7.7 20.5 20.8 35.9 8.3 45.1-5.8 2.9-4.5 9.9-2.5 9.9 2.9v107.4c0 2.9-2.4 5.4-5.4 5.4h-99.3c-3 0-5.4-2.5-5.4-5.4z"/>
										<path class="a" d="m108.7 113.8c-2.6 4.1-8.9 2.9-9.9-1.8-0.9-4.4-2.7-7.5-3.8-9.2q-0.5-0.7-1-1.4c-4.3-7.2 0.5-17.3 11.1-16.8q0.9 0 1.7 0.4c4.7 2 7 5.6 7.5 9.3 1.3 6.2-1.8 13.5-5.6 19.5z"/>
										<path class="a" d="m91.8 114.7q0.2 0.3 0.4 0.7c2.3 5-3.9 9.6-8.3 6.3q0 0 0 0-0.3-0.2-0.5-0.3c-2.9-2.4-2.7-7.2 1.1-9.2 1.1-0.6 2.4-0.8 3.6-0.4 1.8 0.4 3 1.5 3.7 2.9z"/>
									</svg>
								</div>
								<div class="milk-img-text">Sữa tươi</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="milk-box-list">
				<div class="wrap-5">
					<a href="#">
						<div class="milk-image-box">
							<div class="milk-img-list">
								<div class="milk-img-item">
									<svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 128 268" width="128" height="268">
										<style>tspan{white-space:pre}.a{fill:#fff}.b{fill:#35ccf6}</style>
										<rect class="a" x=".8" y="86.2" width="125.4" height="181.1" rx="10.9"/>
										<rect class="b" x="4.6" y="90.7" width="117.8" height="173.5" rx="10.9"/>
										<path class="a" d="m8.4 248.8v-95.2c0-6.3 5.3-11.3 11.5-10.9 8 0.5 21.3 2.3 43.5 7.1 25.7 5.4 41.5 12.3 49.2 16.3 3.7 1.9 5.9 5.6 5.9 9.6v73.1c0 6-4.9 10.9-10.9 10.9h-88.4c-6 0-10.8-4.9-10.8-10.9z"/>
										<path class="a" d="m122.6 2l4.3 6.8c1 1.5 0.5 3.4-1.2 4.3l-64.8 33.8c-1.1 0.5-1.7 1.6-1.8 2.7 0 8.1-5.8 16.7-15.7 21.9-13.7 7.1-29.9 5-36.3-4.7-6.3-9.8-0.4-23.5 13.3-30.6 9.9-5.2 21.2-5.5 29-1.5 1.1 0.5 2.5 0.6 3.6 0l64.7-33.8c1.7-0.9 3.9-0.4 4.9 1.1z"/>
										<path class="b" d="m41.2 68.1c-11.8 6.2-26 4.8-31-2.9-5.1-7.8 0.6-19.5 12.3-25.6 9.3-4.9 20.2-5.2 27.1-0.9l0.1 0.1c1.1 0.7 2.6 0.7 3.8 0.1l63.4-33c1.7-0.9 3.8-0.4 4.8 1.1 1 1.5 0.4 3.4-1.3 4.3l-63.4 33.1c-1.1 0.6-1.8 1.8-1.7 3v0.1c0.8 7.5-4.9 15.8-14.1 20.6z"/>
										<path class="a" d="m41 72.6q-21.8 51.7 31.3 79.2l-31.8 20.1q-13.7-11.9-27-25.8c21.8 1.6 15.8-26.4 13.6-43.9q-2.2-17.5-16.8-31.8 0 0 0-0.1c-1.2-1-2.3-2.2-3.2-3.5q-1.2-1.9-1.8-3.8c7.6 0.8 4.3 4.4 24 4.4 19.8 0 17-3.6 24.7-4.5-2.6 3.3-6.2 6.3-10.6 8.6q-1.2 0.6-2.4 1.1 0 0 0 0z"/>
									</svg>
								</div>
								<div class="milk-img-text">Sữa đặc</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="milk-box-list">
				<div class="wrap-5">
					<a href="#">
						<div class="milk-image-box">
							<div class="milk-img-list">
								<div class="milk-img-item">
									<svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 126 255" width="126" height="255">
										<style>tspan{white-space:pre}.a{fill:#fff}.b{fill:#35ccf6}</style>
										<rect class="a" x=".2" y=".3" width="125.4" height="254" rx="10.9"/>
										<rect class="b" x="4" y="4.1" width="117.8" height="246.4" rx="10.9"/>
										<rect class="a" x="7.8" y="8" width="110.1" height="71.1" rx="10.9"/>
										<path class="a" d="m23.6 175.2c37.7 19 62.2 1.2 78.6-7.1 7.2-3.6 15.8 1.6 15.8 9.8v57.9c0 6-4.9 10.9-10.9 10.9h-88.4c-6 0-10.9-4.9-10.9-10.9v-50.8c0-8.1 8.5-13.4 15.8-9.8z"/>
										<path class="a" d="m45.1 145.5q0 13.5-12.6 13.5-12.2 0-12.2-13.2v-17.3h6.8v17.4q0 7.3 5.7 7.3 5.6 0 5.6-7v-17.7h6.7z"/>
										<path class="a" d="m77.6 158.5h-6.8v-12.2h-12.4v12.2h-6.8v-30h6.8v12h12.4v-12h6.8z"/>
										<path class="a" d="m105.4 134h-8.5v24.5h-6.8v-24.5h-8.5v-5.5h23.8z"/>
										<path class="a" d="m110.8 101.3c0 5.8-4.7 10.5-10.5 10.5-5.8 0-10.4-4.7-10.4-10.5 0-2.8 1.1-5.4 3-7.3q0 0 0 0 0.1-0.1 0.1-0.1c1-0.9 5.7-5.7 6.9-11.8q0.4-2.1-3.3-4.8h3.7 3.7q-3.7 2.7-3.2 4.8c1.1 6.1 5.9 10.9 6.8 11.8q0.1 0 0.2 0.1 0 0 0 0c1.8 1.9 3 4.5 3 7.3z"/>
									</svg>
								</div>
								<div class="milk-img-text">Sữa tiệt trùng</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="milk-box-list">
				<div class="wrap-5">
					<a href="#">
						<div class="milk-image-box">
							<div class="milk-img-list">
								<div class="milk-img-item">
									<svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 179 134" width="179" height="134">
										<style>tspan{white-space:pre}.a{fill:#fff}.b{fill:#35ccf6}</style>
										<rect class="a" x="25.7" y="4.4" width="125.4" height="128.9" rx="3.8"/>
										<rect class="b" x="29.5" y="8.2" width="117.8" height="121.3" rx="3.8"/>
										<path class="a" d="m33.3 121.8v-71.8c0-2.3 2-4.1 4.3-3.8 8.5 1.2 28.1 3.6 50.7 3.6 22.6 0 42.2-2.9 50.6-4.3 2.4-0.4 4.5 1.4 4.5 3.8v72.5c0 2.1-1.7 3.9-3.8 3.9h-102.5c-2.1 0-3.8-1.8-3.8-3.9z"/>
										<rect class="a" x=".1" y=".5" width="178.6" height="7.7" rx="3.8"/>
									</svg>
								</div>
								<div class="milk-img-text">Sữa chua</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="milk-box-list">
				<div class="wrap-5">
					<a href="#">
						<div class="milk-image-box">
							<div class="milk-img-list">
								<div class="milk-img-item">
									<svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 226 251" width="226" height="251">
										<style>tspan{white-space:pre}.a{fill:#fff}</style>
										<path fill-rule="evenodd" class="a" d="m169.9 250.1h-43.2c-1.6 0-3-1.3-3-3v-6.6c-31.4-8.9-52.4-33.4-52.4-61.7 0-1.6 1.3-3 3-3h148.1c1.6 0 3 1.4 3 3 0 28.3-21 52.8-52.5 61.7v6.6c0 1.7-1.4 3-3 3zm-40.2-6h37.2v-5.6c-0.2-1.5 0.8-2.8 2.2-3.2 28.9-7.4 48.7-28.6 50.2-53.5h-141.9c1.4 24.9 21.2 46.1 50.1 53.5 1.5 0.4 2.4 1.8 2.2 3.3q0 0 0 0z"/>
										<path fill-rule="evenodd" class="a" d="m7.7 250.1c-2.1 0-4.1-0.9-5.5-2.6-1.8-2.2-2.1-5.3-0.7-7.8l5.7-10.4q0.1-0.3 0.1-0.5v-207.5q0-0.3-0.1-0.5l-5.7-10.4c-1.4-2.6-1.1-5.7 0.7-7.9 1.8-2.2 4.8-3.1 7.6-2.3l13.4 4.2q0.1 0.1 0.3 0.1h141.5q0.1 0 0.3-0.1l13.4-4.2c2.8-0.8 5.7 0.1 7.5 2.3 1.9 2.2 2.2 5.3 0.8 7.9l-5.7 10.4q-0.1 0.2-0.1 0.5v157.5c0 1.7-1.4 3-3 3h-100.8c1.4 24.9 21.2 46.1 50.1 53.5 1.5 0.4 2.4 1.8 2.2 3.3q0 0 0 0v4c0 1.6-1.3 3-3 3h-103.2q-0.2 0-0.3 0l-13.4 4.2q-1.1 0.3-2.1 0.3zm-0.1-244.2c-0.3 0-0.6 0.2-0.7 0.4-0.2 0.2-0.5 0.6-0.2 1.2l5.7 10.4c0.6 1 0.9 2.2 0.9 3.4v207.5c0 1.1-0.3 2.3-0.9 3.3l-5.7 10.5c-0.3 0.5 0 0.9 0.2 1.1 0.1 0.2 0.5 0.6 1.1 0.4l13.4-4.2q1-0.3 2.1-0.3h97.2c-29.8-9.6-49.4-33.4-49.4-60.8 0-1.6 1.3-3 3-3h100.9v-154.5c0-1.2 0.3-2.4 0.8-3.4l5.7-10.4c0.3-0.6 0.1-1-0.1-1.2-0.2-0.2-0.5-0.5-1.1-0.3l-13.4 4.1q-1.1 0.4-2.1 0.4h-141.5q-1.1 0-2.1-0.4l-13.4-4.1q-0.2-0.1-0.4-0.1z"/><path class="a" d="m92.7 178.8c0-21.7 24.9-39.2 55.6-39.2 30.8 0 55.7 17.5 55.7 39.2z"/>
										<path class="a" d="m48.5 61.5c-12.2-8.7-12.2-22.8 0-34.3 13.4 12.4 12.6 28.2 0 34.3z"/>
										<path class="a" d="m50.5 75.9c-3-11 2.8-18.6 20.1-19.8-0.1 14.9-7.2 21.9-20.1 19.8z"/>
										<path class="a" d="m27 55.9c15.7 1.2 23 8.3 20.6 20-12.7 2.6-19.9-4.3-20.6-20z"/>
										<path class="a" d="m50.5 96.3c-3-11 2.8-18.6 20.1-19.9-0.1 15-7.2 22-20.1 19.9z"/>
										<path class="a" d="m27 76.3c15.7 1.1 23 8.2 20.6 20-12.7 2.6-19.9-4.3-20.6-20z"/>
										<path class="a" d="m50.5 116.7c-3-11 2.8-18.6 20.1-19.9-0.1 15-7.2 22-20.1 19.9z"/>
										<path class="a" d="m27 96.7c15.7 1.1 23 8.2 20.6 20-12.7 2.5-19.9-4.3-20.6-20z"/>
										<path class="a" d="m50.5 137.1c-3-11 2.8-18.6 20.1-19.9-0.1 15-7.2 21.9-20.1 19.9z"/>
										<path class="a" d="m27 117.1c15.7 1.1 23 8.2 20.6 19.9-12.7 2.6-19.9-4.2-20.6-19.9z"/>
										<path class="a" d="m50.5 157.4c-3-10.9 2.8-18.6 20.1-19.8-0.1 14.9-7.2 21.9-20.1 19.8z"/>
										<path class="a" d="m27 137.4c15.7 1.2 23 8.3 20.6 20-12.7 2.6-19.9-4.3-20.6-20z"/>
										<path class="a" d="m50.5 177.8c-3-11 2.8-18.6 20.1-19.9-0.1 15-7.2 22-20.1 19.9z"/>
										<path class="a" d="m27 157.8c15.7 1.2 23 8.3 20.6 20-12.7 2.6-19.9-4.3-20.6-20z"/>
										<rect class="a" x="45.6" y="183.3" width="6.4" height="58.5" rx="3.2"/>
									</svg>
								</div>
								<div class="milk-img-text">Gạo ST25</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="milk-box-list">
				<div class="wrap-5">
					<a href="#">
						<div class="milk-image-box">
							<div class="milk-img-list">
								<div class="milk-img-item">
									<svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 251 265" width="251" height="265">
										<style>tspan{white-space:pre}.a{fill:#fff}</style>
										<path fill-rule="evenodd" class="a" d="m147.9 171.7c-8.1 0-15.9-4.1-20.5-11.3l-3-4.5c-6.5-10.2-4.5-23.7 4.5-31.6l13.8-22.5v-10.8c0-14.7 11.9-26.6 26.6-26.6h50.9c14.6 0 26.5 11.9 26.5 26.6v38.5c0 14.7-11.9 26.6-26.5 26.6h-20.1l-44.7 14.4c-2.4 0.8-5 1.2-7.5 1.2zm21.4-101.3c-11.3 0-20.6 9.2-20.6 20.6v11.7q0 0.8-0.4 1.5l-14.5 23.7q-0.3 0.4-0.6 0.7c-7.1 5.9-8.7 16.3-3.7 24l2.9 4.6c4.5 7 13.2 10.2 21.2 7.6l45.2-14.6q0.4-0.1 0.9-0.1h20.5c11.3 0 20.5-9.2 20.5-20.6v-38.5c0-11.4-9.2-20.6-20.5-20.6z"/>
										<path class="a" d="m219.6 70.4h-40c-17.2 0-31.2-17.1-31.2-38.1v-5.8c0-1.6 1.4-3 3-3 1.7 0 3 1.4 3 3v5.8c0 17.7 11.3 32.1 25.2 32.1h40c13.9 0 25.2-14.4 25.2-32.1v-5.8c0-1.6 1.3-3 3-3 1.6 0 3 1.4 3 3v5.8c0 21-14 38.1-31.2 38.1z"/>
										<path fill-rule="evenodd" class="a" d="m216.7 264.5h-184.2c-16.8 0-30.4-13.6-30.4-30.4v-43.1c0-1.7 1.4-3 3-3h239c1.6 0 3 1.3 3 3v43.1c0 16.8-13.6 30.4-30.4 30.4zm-208.6-70.5v40.1c0 13.5 10.9 24.4 24.4 24.4h184.2c13.5 0 24.4-10.9 24.4-24.4v-40.1z"/>
										<path class="a" d="m32.5 251.5c-9.6 0-17.4-7.8-17.4-17.4v-33.1h219v33.1c0 9.6-7.8 17.4-17.4 17.4z"/>
										<path class="a" d="m14.3 191c0-6.5 19.7-11.8 43.9-11.8 24.3 0 43.9 5.3 43.9 11.8"/>
										<path class="a" d="m73.4 191c0-6.5 19.7-11.8 44-11.8 24.2 0 43.9 5.3 43.9 11.8"/>
										<path class="a" d="m3.3 77.9c-0.9 0-1.8-0.4-2.4-1.2-1-1.3-0.7-3.2 0.6-4.2l97-71.5c0.6-0.4 1.2-0.6 1.8-0.6h145.6c1.7 0 3 1.4 3 3 0 1.7-1.3 3-3 3h-144.6l-96.2 70.9c-0.6 0.4-1.2 0.6-1.8 0.6z"/>
										<circle class="a" cx="170.3" cy="97.7" r="4.7"/>
									</svg>
								</div>
								<div class="milk-img-text">Thức ăn gia súc</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="title-pick">
		<h2 class="elementor-heading-title elementor-size-default">GoA MILK - Sữa tươi dành cho gia đình bạn</h2>
	</div>

	<div class="wrapper-info-milk">
		<div class="info-milk">
			<div class="content-milk content-milk-mobile">
				<div class="name">
					<div class="lable-mikle lable-mikle-left">
						100% sữa tươi từ những chú bò tại các hợp tác xã bò sữa Sóc Trăng
					</div>
					<div class="icon-success">
						<img src="http://newcoop.acstech.vn/wp-content/themes/ngocthang/assets/images/icon.JPG" />
					</div>
				</div>
				<div class="name">
					<div class="lable-mikle lable-mikle-left">
						Bò lấy sữa được nuôi tự nhiên, không ép sản lượng cho sữa
					</div>
					<div class="icon-success">
						<img src="http://newcoop.acstech.vn/wp-content/themes/ngocthang/assets/images/icon.JPG" />

					</div>
				</div>
				<div class="name">
					<div class="lable-mikle lable-mikle-left">
						Quy trình sản xuất đạt tiêu chuẩn chất lượng châu Âu
					</div>
					<div class="icon-success">
						<img src="http://newcoop.acstech.vn/wp-content/themes/ngocthang/assets/images/icon.JPG" />

					</div>
				</div>
				<div class="name">
					<div class="lable-mikle lable-mikle-left">
						Tiêu chuẩn trồng cỏ & chăm sóc đàn bò chuẩn VietGap
					</div>
					<div class="icon-success">
						<img src="http://newcoop.acstech.vn/wp-content/themes/ngocthang/assets/images/icon.JPG" />
					</div>
				</div>
				<div class="name">
					<div class="lable-mikle lable-mikle-left">
						Được đóng gói tại nhà máy sản xuất sữa tươi lớn nhất vùng Nam Bộ - Daenest
						(Phần chất lượng sữa)
					</div>
					<div class="icon-success">
						<img src="http://newcoop.acstech.vn/wp-content/themes/ngocthang/assets/images/icon.JPG" />

					</div>
				</div>
			</div>
			<div class="content-milk background-content-milk">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-copy.png" class="img-center" />
			</div>
			<div class="content-milk">
				<div class="name name-mobile">
					<div class="icon-success">
						<img src="http://newcoop.acstech.vn/wp-content/themes/ngocthang/assets/images/icon.JPG" />

					</div>
					<div class="lable-mikle lable-mikle-right">
						Hàm lượng vật chất khô (VCK) hấp thụ trong sữa lên tới 13 – 14,5%
					</div>

				</div>
				<div class="name name-mobile">
					<div class="icon-success">
						<img src="http://newcoop.acstech.vn/wp-content/themes/ngocthang/assets/images/icon.JPG" />

					</div>
					<div class="lable-mikle lable-mikle-right">
						Hàm lượng chất béo (FAT) trong mỗi lít sữa đạt 4 – 5%
					</div>

				</div>
				<div class="name name-mobile">
					<div class="icon-success">
						<img src="http://newcoop.acstech.vn/wp-content/themes/ngocthang/assets/images/icon.JPG" />

					</div>
					<div class="lable-mikle lable-mikle-right">
						Sữa tươi nguyên chất 100%
					</div>

				</div>
				<div class="name name-mobile">
					<div class="icon-success">
						<img src="http://newcoop.acstech.vn/wp-content/themes/ngocthang/assets/images/icon.JPG" />

					</div>
					<div class="lable-mikle lable-mikle-right">
						Nguồn dinh dưỡng dồi dào, phù hợp tăng năng lượng cho cơ thể hàng ngày.
					</div>
				</div>
				<div class="name name-mobile">
					<div class="icon-success">
						<img src="http://newcoop.acstech.vn/wp-content/themes/ngocthang/assets/images/icon.JPG" />

					</div>
					<div class="lable-mikle lable-mikle-right">
						Lượng axit amin gốc động vật phong phú, giúp tiêu hoá tốt, dáng khoẻ, da đẹp.
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper-cooperate-index">
		<div class="wrapper-cooperate">
			<div class="container-cooperate">
				<span></span>
				<div class="elementor-divider__text elementor-divider__element">Cơ hội hợp tác - đồng hành cùng GoA</div>
				<span></span>
			</div>

			<div class="elementor-widget-container">
				<h2 class="elementor-heading-title elementor-size-default">Đưa sữa tươi tốt nhất, gạo ngon nhất tới người tiêu dùng</h2>
			</div>
			<div class="elementor-widget-container conent-elementor-widget-container">
				Với mục tiêu mang nguồn sữa tươi nguyên chất và các sản phẩm nông nghiệp tốt tới người tiêu dùng, GoA tạo cơ hội hợp tác dành cho những cá nhân và tổ chức mong muốn hợp tác kinh doanh.
			</div>
			<div class="elementor-widget-container conent-elementor-widget-container">Vui lòng điền thông tin của bạn vào form dưới đây.</div>
			<form>
				<div class="wrapper-input">
					<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-20 elementor-md-25 elementor-field-required">
						<input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Họ và tên" required="required" aria-required="true">
					</div>
					<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-20 elementor-md-25 elementor-field-required">
						<input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Số điện thoại" required="required" aria-required="true" maxlength="10">
					</div>
					<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-20 elementor-md-25 e<llementor-field-required">
						<input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email" required="required" aria-required="true">
					</div>
					<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-20 elementor-md-25 elementor-field-required">
						<input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Địa chỉ đăng ký" required="required" aria-required="true">
					</div>
					<div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-20 elementor-md-25 elementor-field-required elementor-field-type-text-820">
						<button type="submit" class="elementor-field elementor-button elementor-size-sm">Đăng ký</button>
					</div>

				</div>
			</form>

			<div class="elementor-widget-container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3457411383626_22000a8c75683ffebb4a0a60ad669062.jpg" />
			</div>
			<!-- <div class="icon-share">
				<a href="https://www.facebook.com/GoAMilk" target="_blank">
					<div class="content-icon-share">
						<i class="fab fa-facebook"></i>
					</div>
				</a>

				<div class="content-icon-share">
					<i class="fab fa-instagram"></i>
				</div>
			</div> -->
		</div>
	</div>

	<div class="wrapper-blog">
		<div class="none-blog">
			<div class="elementor-widget-container">
				<h2 class="elementor-heading-title elementor-size-default">Blog</h2>
			</div>
			<div class="elementor-widget-container">
				<h5 class="elementor-heading-title elementor-size-default">Công thức chế biến đồ ăn<br>Thức uống cùng sữa</h5>
			</div>

			<div id="carouselExampleSlidesOnly" class="carousel slide carousel-mobile" data-ride="carousel">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3324826461273_fc76ac7479e8d9a6034b9b376bf93b2f.jpg" />
							<div class="title-blog">
								<h3>
									GoAMILK – SỮA TƯƠI CỦA NGƯỜI VIỆT NAM
								</h3>
								<button class="see-more-button" type="submit">
									<a href="#">Xem thêm</a>
								</button>

							</div>
						</div>

						<div class="carousel-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3324826461273_fc76ac7479e8d9a6034b9b376bf93b2f.jpg" />
							<div class="title-blog">
								<h3>
									Người mắc Covid-19 nên ăn những thực phẩm nào?
								</h3>
								<button class="see-more-button" type="submit">
									<a href="#">Xem thêm</a>
								</button>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

			<div class="item-blog">
				<div class="content-blog">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3324826461273_fc76ac7479e8d9a6034b9b376bf93b2f.jpg">
					<div class="title-blog">
						<h3>
							GoAMILK – SỮA TƯƠI CỦA NGƯỜI VIỆT NAM
						</h3>
						<button class="see-more-button" type="submit">Xem thêm</button>

					</div>

				</div>
				<div class="content-blog">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3324826461273_fc76ac7479e8d9a6034b9b376bf93b2f.jpg">
					<div class="title-blog">
						<h3>
							Người mắc Covid-19 nên ăn những thực phẩm nào?
						</h3>
						<button class="see-more-button" type="submit">Xem thêm</button>

					</div>
				</div>
			</div>
		</div>
		<div class="wrapper-new-products">
			<div class="elementor-widget-container lable-new-products">
				<h2 class="elementor-heading-title elementor-size-default">Sản phẩm mới</h2>
			</div>
			<div class="item-new-products">
				<div class="content-new-products">
					<div class="row-box-img">
						<a href="<?php echo get_template_directory_uri(); ?>/sua">
							<div class="row-item-img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png" alt="" />
								<div class="row-background" style="background-image: url(./image/2022.317.png)"></div>
								<div class="product-row-details">
									<div class="details">Chi tiết</div>
								</div>
							</div>
						</a>
					</div>
					<div class="wrapper-title-products">
						<a href="<?php echo get_template_directory_uri(); ?>/sua" class="title-new-products">
							<span>ST Milk Dâu</span>
						</a>
					</div>
				</div>
				<div class="content-new-products">
					<div class="row-box-img">
						<a href="<?php echo get_template_directory_uri(); ?>/sua">
							<div class="row-item-img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png" alt="" />
								<div class="row-background" style="background-image: url(./image/2022.317.png)"></div>
								<div class="product-row-details">
									<div class="details">Chi tiết</div>
								</div>
							</div>
						</a>
					</div>
					<div class="wrapper-title-products">
						<a href="<?php echo get_template_directory_uri(); ?>/sua" class="title-new-products">
							<span>ST Milk Có Đường</span>
						</a>
					</div>
				</div>
				<div class="content-new-products">
					<div class="row-box-img">
						<a href="<?php echo get_template_directory_uri(); ?>/sua">
							<div class="row-item-img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png" alt="" />
								<div class="row-background" style="background-image: url(./image/2022.317.png)"></div>
								<div class="product-row-details">
									<div class="details">Chi tiết</div>
								</div>
							</div>
						</a>
					</div>
					<div class="wrapper-title-products">
						<a href="<?php echo get_template_directory_uri(); ?>/sua" class="title-new-products">
							<span>GoAMILK Có Đường</span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="wrapper-news">
			
			<div class="item-news">
				<div class="news-left">
					
					<div class="news-main">
						<img src="https://cdn.tgdd.vn/2021/05/CookProduct/BeFunky-collage-1200x676-10.jpg" />
						<div class="img-news-main">
							<a href="<?php echo get_template_directory_uri(); ?>/news-details">
								<div class="jet-smart-listing__post-title post-title-featured">
									Cách làm sữa chua bằng sữa tươi GoAMILK thơm ngon, đơn giản đến không ngờ
								</div>
							</a>
							<span class="post__date-link ">
								<time datetime="2022-03-10T10:53:35+07:00" title="2022-03-10T10:53:35+07:00">
									10/03/2022
								</time>
								<div class="jet-smart-listing__post-excerpt post-excerpt-featured">
									Chắc hẳn không ai còn lạ gì với công dụng tuyệt vời của sữa chua như giảm cân, làm đẹp...
								</div>
							</span>
						</div>

					</div>
					<div class="news-main-bottom">
						<div class="news-main-bottom-left">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner5-1.jpg" class="img-news-bottom" />
							<div class="content-news-main-bottom">
								<div class="title-news">
									<a href="<?php echo get_template_directory_uri(); ?>/news-details">GoAMILK – SỮA TƯƠI...</a>
								</div>
								<div class="day-posts">
									<a href="#">14/02/2022</a>
								</div>
								<div class="summary">
									Do công tác tổ chức cho Đại hội...
								</div>
								<div class="see-more">
									<a href="<?php echo get_template_directory_uri(); ?>/news-details">Đọc tiếp</a>
								</div>
							</div>
						</div>
						<div class="news-main-bottom-left">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner5-1.jpg" class="img-news-bottom" />
							<div class="content-news-main-bottom">
								<div class="title-news">
									<a href="<?php echo get_template_directory_uri(); ?>/news-details">GoAMILK – SỮA TƯƠI...</a>
								</div>
								<div class="day-posts">
									<a href="#">14/02/2022</a>
								</div>
								<div class="summary">
									Do công tác tổ chức cho Đại hội...
								</div>
								<div class="see-more">
									<a href="<?php echo get_template_directory_uri(); ?>/news-details">Đọc tiếp</a>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="news-right">
					
					<div class="content-news-right">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner5-1.jpg" class="img-news-right" />
						<div class="content-news-main-bottom">
							<div class="title-news">
								<a href="<?php echo get_template_directory_uri(); ?>/news-details">GoAMILK – SỮA TƯƠI...</a>
							</div>
							<div class="day-posts">
								<a href="#">14/02/2022</a>
							</div>
							<div class="summary">
								Do công tác tổ chức cho Đại hội...
							</div>
							<div class="see-more">
								<a href="<?php echo get_template_directory_uri(); ?>/news-details">Đọc tiếp</a>
							</div>
						</div>
					</div>
					<div class="content-news-right">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner5-1.jpg" class="img-news-right" />
						<div class="content-news-main-bottom">
							<div class="title-news">
								<a href="<?php echo get_template_directory_uri(); ?>/news-details">GoAMILK – SỮA TƯƠI...</a>
							</div>
							<div class="day-posts">
								<a href="#">14/02/2022</a>
							</div>
							<div class="summary">
								Do công tác tổ chức cho Đại hội...
							</div>
							<div class="see-more">
								<a href="<?php echo get_template_directory_uri(); ?>/news-details">Đọc tiếp</a>
							</div>
						</div>
					</div>
					<div class="content-news-right">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner5-1.jpg" class="img-news-right" />
						<div class="content-news-main-bottom">
							<div class="title-news">
								<a href="<?php echo get_template_directory_uri(); ?>/news-details">GoAMILK – SỮA TƯƠI...</a>
							</div>
							<div class="day-posts">
								<a href="#">14/02/2022</a>
							</div>
							<div class="summary">
								Do công tác tổ chức cho Đại hội...
							</div>
							<div class="see-more">
								<a href="<?php echo get_template_directory_uri(); ?>/news-details">Đọc tiếp</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->

		<section class="tin-moi-nhat">
			<div class="elementor-widget-container lable-new-products">
				<h2 class="elementor-heading-title elementor-size-default">Tin tức</h2>
			</div>
			<section class="blogs">
				<div class="container">			
					<div class="row row-blog">
						<?php
						$project_post_args = array(                 
							'post_type' => 'post',
							'category_name' => 'blog-tin-tuc',
							'order' => 'DESC',
							'orderby' => 'date', 
							'posts_per_page' => '1',
						); ?>
						<?php $wp_query = new WP_Query( $project_post_args );
						if ( $wp_query -> have_posts() ) : 
							while ( $wp_query -> have_posts() ) : $wp_query -> the_post(); ?>
								<div class="news-left">
									<h5 class="elementor-heading-title elementor-size-default">Mới nhất</h5>
									<div class="news-main blog-main-left">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array( 'class' => 'img-fluid center-block' ) ); ?></a>
										<div class="img-news-main">
											<a href="<?php the_permalink(); ?>">
												<div class="jet-smart-listing__post-title post-title-featured">
													<?php the_title(); ?>
												</div>
											</a>
										</div>
									</div>
								</div>
								<?php endwhile; endif; ?>
								<?php wp_reset_postdata(); ?>
								<div class="news-right">
									<h5 class="new-right-margin elementor-heading-title elementor-size-default">Nổi bật</h5>
									<div class="content-news-right">
										<div class="content-news-main-bottom">
											<?php dynamic_sidebar( 'home' ); ?>
										</div>
									</div>
								</div>
					</div>
				</div>
			</section>
		</section>


</main><!-- #site-content -->
<?php
get_footer(); ?>