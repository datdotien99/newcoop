<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
<main class="page__content">
<?php if(is_page('ve-chung-toi')){ ?> 
            <div class="page-ve-chung-toi">
                <section class="header">
                    <div class="header-box about-us">
                        <div class="header-title">
                            <h1></h1>
                        </div>
                        <!-- <div class="header-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-copy.png"/>
                        </div> -->
                    </div>
                </section>
                <section class="us">
                    <div class="box">
                        <div class="us-text" data-aos="fade-down" data-aos-duration="2000">
                            <h3>Về chúng tôi</h3>
                        </div>
                        <div class="wrap">
                            <div class="us-container">
                                <div class="us-wrap-box height-1">
                                    <div class="us-wrap-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 168.4 168.4"><title>Asset 19</title><g id="Layer_2" data-name="Layer 2"><g id="Oj"><path d="M84.2,0a84.2,84.2,0,1,0,84.2,84.2A84.2,84.2,0,0,0,84.2,0Z" style="fill:#26bbe3"></path><circle cx="84.2" cy="84.2" r="72.74" style="fill:#fff"></circle><text transform="translate(41.9 98.17)" style="font-size:72.09306335449219px;fill:#26bbe3;font-family:Quicksand-Bold, Quicksand;font-weight:700">20<tspan style="font-size:33.025508880615234px"><tspan x="3.8" y="33">Năm</tspan></tspan></text></g></g></svg>
                                    </div>
                                </div>
                                <div class="us-text-container">
                                    <div class="us-text-item item-color-1">
                                        Chúng tôi – những xã viên Hợp tác xã (HTX) – tự hào cùng nhau đóng góp và xây dựng nhà máy sữa GoAMILK trong suốt gần 20 năm qua.
                                    </div>
                                </div>
                            </div>
                            <div class="us-container">
                                <div class="us-wrap-box height-2">
                                    <div class="us-wrap-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 168.4 168.4"><title>Asset 18</title><g id="Layer_2" data-name="Layer 2"><g id="Oj"><path d="M84.2,0a84.2,84.2,0,1,0,84.2,84.2A84.2,84.2,0,0,0,84.2,0Z" style="fill:#006484"></path><circle cx="84.2" cy="84.2" r="72.74" style="fill:#fff"></circle><text transform="translate(38.69 95.83)" style="font-size:61.807411193847656px;fill:#006484;font-family:Quicksand-Bold, Quicksand;font-weight:700">2<tspan x="33.13" y="0" style="font-size:28.313690185546875px">.000</tspan><tspan style="font-size:28.313690185546875px"><tspan x="29.18" y="31">hộ</tspan></tspan></text></g></g></svg>
                                    </div>
                                </div>
                                <div class="us-text-container">
                                    <div class="us-text-item item-color-2">
                                        Chặng đường của chúng tôi khởi đầu với 171 hộ. Vượt qua nhiều khó khăn, nhờ sự hỗ trợ của Tổ chức Socodevi từ Canada, quy mô HTX đạt 2.000 hộ với gần 10.000 nhân khẩu, trở thành HTX bò sữa số 1 Việt Nam.
                                    </div>
                                </div>
                            </div>
                            <div class="us-container">
                                <div class="us-wrap-box height-1">
                                    <div class="us-wrap-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 168.4 168.4"><title>Asset 17</title><g id="Layer_2" data-name="Layer 2"><g id="Oj"><path d="M84.2,0a84.2,84.2,0,1,0,84.2,84.2A84.2,84.2,0,0,0,84.2,0Z" style="fill:#89ce00"></path><circle cx="84.2" cy="84.2" r="72.74" style="fill:#fff"></circle><text transform="translate(25.57 96.85)" style="font-size:61.807411193847656px;fill:#89ce00;font-family:Quicksand-Bold, Quicksand;font-weight:700">16<tspan x="56.37" y="0" style="font-size:28.313690185546875px">.000</tspan><tspan style="font-size:18.003889083862305px"><tspan x="4.88" y="24.86">lít sữa/n</tspan><tspan x="77.81" y="24.86" style="letter-spacing:-0.004990241251848802em">g</tspan><tspan x="89.12" y="24.86" style="letter-spacing:-0.011987427354984622em">à</tspan><tspan x="100.12" y="24.86">y</tspan></tspan></text></g></g></svg>
                                    </div>
                                </div>
                                <div class="us-text-container">
                                    <div class="us-text-item item-color-3">
                                        Nông trại của chúng tôi có hơn 7.000 con bò, được phát triển từ công nghệ bò giống hiện đại của Canada. Qua từng giai đoạn, tiếp thu quy trình chăn nuôi theo tiêu chuẩn nghiêm ngặt của châu Âu, đến nay, những chú bò của chúng tôi cho sản lượng tới hơn 16.000 lít sữa mỗi ngày.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="information">
                    <div class="information-box">
                        <div class="box">
                            <div class="wrap">
                                <p>Được hình thành từ các chương trình xoá đói giảm nghèo, phát triển bền vững của tỉnh Sóc Trăng, hợp tác xã New Coop đóng vai trò cầu nối giữa người nông dân tới với người tiêu dùng thông qua những sản phẩm nông nghiệp nổi trội của vùng đất trù phú miền Tây Việt Nam.</p>
                                <p>Đó là những dòng sữa tươi nguyên chất từ những chú bò sữa Sóc Trăng, giàu đạm sữa, dồi dào dinh dưỡng, thơm mát, và đặc biệt tươi ngon thuần khiết, phù hợp sử dụng cho mọi thành viên trong mỗi gia đình. Không chỉ vậy, sữa tươi GoA còn cung cấp nhiều axit amin nguồn gốc động vật rất có lợi cho tiêu hoá và chăm sóc sắc đẹp chị em phụ nữ.</p>
                                <p>Đó là gạo ngon nhất thế giới ST25 của vùng đất màu mỡ Sóc Trăng. Sau nhiều năm đưa đặc sản “ngọc trời” này đến với người dân ở các quốc gia châu Âu, tới nay, chúng tôi mong muốn sẽ gửi sản phẩm chất lượng cao này tới người tiêu dùng trong nước.</p>
                                <p>Đó là sự đồng hành hỗ trợ người nông dân Sóc Trăng trong quá trình gây dựng “cơ ngơi nông nghiệp” của riêng mình thông qua các dịch vụ hỗ trợ chăm sóc thú y, tư vấn chăn nuôi và cây/con giống.</p>
                                <p>Hợp tác xã New Coop xem việc đồng hành và đảm bảo sinh kế cho mỗi người nông dân Sóc Trăng trên chặng đường xoá đói giảm nghèo là sứ mệnh của mình. Từ đó, người nông dân Sóc Trăng phát triển cũng là minh chứng cho sự phát triển của Hợp tác xã New Coop, cùng đưa các sản phẩm nông nghiệp tốt tới với tất cả người dân Việt Nam.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="core-value">
                    <div class="core-value-box">
                        <div class="box">
                            <div class="wrap">
                                <h4 data-aos="fade-down" data-aos-duration="2000">Giá trị cốt lõi</h4>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-gtcl.png" alt="">
                            </div>
                        </div>
                    </div>
                </section>

                <section class="farm">
                    <div class="box">
                        <div class="farm-box">
                            <div class="wrap">
                                <h4 data-aos="fade-down" data-aos-duration="2000">Nông trại sữa bò của chúng tôi</h4>
                            </div>
                            <div class="farm-list">
                                <div class="wrap farm-wrap">
                                    <div class="farm-item">
                                        <span>
                                            2.000
                                        </span>
                                        <p>Hộ xã viên</p>
                                    </div>
                                </div>
                                <div class="wrap farm-wrap">
                                    <div class="farm-item">
                                        <span>
                                            10.000
                                        </span>
                                        <p>Nhập khẩu</p>
                                    </div>
                                </div>
                                <div class="wrap farm-wrap">
                                    <div class="farm-item">
                                        <span>
                                            7.000
                                        </span>
                                        <p>Chú bò sữa</p>
                                    </div>
                                </div>
                                <div class="wrap farm-wrap">
                                    <div class="farm-item">
                                        <span>
                                            16.000
                                        </span>
                                        <p>Lít sữa tươi/ngày</p>
                                    </div>
                                </div>
                            </div>
                            <p>2.000 hộ xã viên, 10.000 nhân khẩu.<br>Hơn 7.000 chú bò sữa, giống bò Holstien Friesian (HF) có nguồn gốc từ Hà Lan.<br>Trên 16.000 lít sữa tươi mỗi ngày. Sữa New Coop là sữa tươi nguyên chất 100%<br><strong>Sử dụng công nghệ chăn nuôi bò sữa của Canada, được chuyển giao từ Socodevi.</strong><br><strong>Được sự hỗ trợ phát triển từ CCPA – HTX lớn nhất tại Pháp</strong></p>
                        </div>
                    </div>
                </section>

                <section class="hitory">
                    <div class="box">
                        <div class="hitory-box">
                            <div class="wrap">
                                <h4 data-aos="fade-down" data-aos-duration="2000">Lịch sử của chúng tôi</h4>
                            </div>
                            
                            <div class="hitory-list">
                                <div class="hitory-empty-block"></div>
                                <div class="hitory-item">
                                    <div class="hitory-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-2003.png" alt="">
                                    </div>
                                    <div class="hitory-text">
                                        <p>Được thành lập ngày 29/3/2003 với sự hỗ trợ từ <b>Tổ chức Socodevi Canada</b>. Đầu tiên có 171 hộ xã viên tham gia, sau đó tăng lên gần 500 hộ, 1.000 hộ và đạt <b>2.000 hộ vào đầu năm 2021.</b></p>
                                    </div>
                                </div>
                            </div>
                            <div class="hitory-list list-margin">
                                <div class="hitory-item">
                                    <div class="hitory-img-2">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-2004.png" alt="">
                                    </div>
                                    <div class="hitory-text text-end">
                                        <p>HTX Nông nghiệp GoAMILK là một trong những mô hình <b>tiêu biểu trong lĩnh vực kinh tế tập thể của cả nước</b>, là mô hình mẫu được giới thiệu vượt ra ngoài biên giới. Thành lập nhà máy sản xuất cám bò ngày 21/12/2016</p>
                                    </div>
                                </div>
                            </div>
                            <div class="hitory-list">
                                <div class="hitory-empty-block"></div>
                                <div class="hitory-item">
                                    <div class="hitory-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-2019.png" alt="">
                                    </div>
                                    <div class="hitory-text">
                                        <p>Ngày 29/06/2019, <strong>Công ty CP Sữa GoAMILK</strong> từ HTX sữa GoAMILK chính thức khánh thành nhà máy sữa với tổng vốn đầu tư <strong>12 triệu USD</strong> và cho ra đời dòng sản phẩm<strong> sữa tươi nguyên chất</strong> NewCoop. Công suất chế biến 80 tấn sữa tươi/ngày.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ever-milk">
                    <div class="ever-milk-box">
                        <div class="box">
                            <div class="wrap">
                                <div class="ever-milk-list">
                                    <div class="milk-img-left">
                                        <div class="milk-img-box-left">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-nm.png" alt="">
                                        </div>
                                    </div>
                                    <div class="milk-img-right">
                                        <div class="milk-img-box-right">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-bo.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <h4 data-aos="fade-down" data-aos-duration="2000">NewCoop</h4>
                            </div>
                        </div>
                    </div>
                    <div class="ever-milk-box box-background">
                        <div class="box">
                            <div class="wrap">
                                <h4 data-aos="fade-down" data-aos-duration="2000">Sữa Tươi Thuần Khiết Của Sóc Trăng</h4>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="htx">
                    <div class="box">
                        <div class="wrap">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/VHL_8362.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/VHL_8437.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/VHL_8451.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/VHL_8538.jpg" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/VHL_8555.jpg" alt="">
                        </div>
                    </div>
                </section>
			</div>
		<?php } 
		else { ?> 
		<?php if ( have_posts() ) : ?>
			<?php the_content(); 
		endif; ?>
		<?php }
		?>

    <!-- sản phẩm -->
		<?php if(is_page('san-pham')){ ?> 
			<div class="page-san-pham">
                <section class="header header-product">
                    <div class="header-box product header-san-pham">
                        <div class="header-title">
                            <h1>Sản phẩm</h1>
                        </div>
                        <!-- <div class="header-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-copy.png" alt="">
                        </div> -->
                    </div>
                </section>

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

                <section class="milks">
                    <div class="box">
                        <!-- <div class="milk-box">
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
                        </div> -->

                        <section class="fresh-milk">
                            <div class="fresh-milk-title">
                                <h2>GoA Milk</h2>
                            </div>
                            <div class="wrap">
                                <div class="gird">
                                    <div class="row">
                                        <div class="row-item">
                                            <div class="row-box-img">
                                                <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                    <div class="row-item-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png" alt="" />
                                                        <div class="row-background"></div>
                                                        <div class="product-row-details">
                                                            <div class="details">
                                                                Chi tiết
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="row-item-text">
                                                <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                    <span>Sữa tươi nguyên chất 110ml</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-item">
                                            <div class="row-box-img">
                                                <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                    <div class="row-item-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png"
                                                            alt="" />
                                                        <div class="row-background"></div>
                                                        <div class="product-row-details">
                                                            <div class="details">
                                                                Chi tiết
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="row-item-text">
                                                <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                    <span>Sữa tươi nguyên chất 180ml</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-item">
                                            <div class="row-box-img">
                                                <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                    <div class="row-item-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392874021_107d7ff064a918db41a58a15d6206f3d.jpg"
                                                            alt="" />
                                                        <div class="row-background"></div>
                                                        <div class="product-row-details">
                                                            <div class="details">
                                                                Chi tiết
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="row-item-text">
                                                <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                    <span>Sữa tươi có đường 110ml</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-item">
                                            <div class="row-box-img">
                                                <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                    <div class="row-item-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392874021_107d7ff064a918db41a58a15d6206f3d.jpg"
                                                            alt="" />
                                                        <div class="row-background"></div>
                                                        <div class="product-row-details">
                                                            <div class="details">
                                                                Chi tiết
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="row-item-text">
                                                <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                    <span>Sữa tươi có đường 180ml</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <section class="milk-set">
                        <div class="box">
                            <div class="milk-set-box">
                                <div class="milk-set-title">
                                    <h2>GoA Yogurt</h2>
                                </div>
                                <!-- <div class="milk-set-text">Sản phẩm đang cập nhập</div> -->
                                <div class="wrap">
                                    <div class="gird">
                                        <div class="row">
                                            <div class="row-item">
                                                <div class="row-box-img">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <div class="row-item-img">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3336631659952_6c5e01cd76c0f40186e5fdfd3313296e-removebg-preview.png" alt="" />
                                                            <div class="row-background"></div>
                                                            <div class="product-row-details">
                                                                <div class="details">
                                                                    Chi tiết
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row-item-text">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <span>Sữa chua uống cam 110ml</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="row-item">
                                                <div class="row-box-img">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <div class="row-item-img">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3336631659952_6c5e01cd76c0f40186e5fdfd3313296e-removebg-preview.png"
                                                                alt="" />
                                                            <div class="row-background"></div>
                                                            <div class="product-row-details">
                                                                <div class="details">
                                                                    Chi tiết
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row-item-text">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <span>Sữa chua uống cam 180ml</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="row-item">
                                                <div class="row-box-img">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <div class="row-item-img">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3324826461273_fc76ac7479e8d9a6034b9b376bf93b2f-removebg-preview.png"
                                                                alt="" />
                                                            <div class="row-background"></div>
                                                            <div class="product-row-details">
                                                                <div class="details">
                                                                    Chi tiết
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row-item-text">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <span>Sữa chua uống dâu 110ml</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="row-item">
                                                <div class="row-box-img">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <div class="row-item-img">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3324826461273_fc76ac7479e8d9a6034b9b376bf93b2f-removebg-preview.png"
                                                                alt="" />
                                                            <div class="row-background"></div>
                                                            <div class="product-row-details">
                                                                <div class="details">
                                                                    Chi tiết
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row-item-text">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <span>Sữa chua uống dâu 180ml</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="milk-st">
                        <div class="box">
                            <div class="fresh-milk">
                                <div class="fresh-milk-title">
                                    <h2>GoA Rice</h2>
                                </div>
                                <div class="wrap">
                                    <div class="gird">
                                        <div class="row">
                                            <div class="row-item">
                                                <div class="row-box-img">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <div class="row-item-img">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png"
                                                                alt="" />
                                                            <div class="row-background" style="background-image: url(./image/ban-gao-thom-jasmine-85-gia-re-chat-luong-tai-tphcm-158778586286732333548-0-0-366-700-crop-1587786570714129664173.webp)"></div>
                                                            <div class="product-row-details">
                                                                <div class="details">Chi tiết</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row-item-text">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <span>Gạo đặc sản Sóc Trăng gói 1kg</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="row-item">
                                                <div class="row-box-img">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <div class="row-item-img">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png" alt="" />
                                                            <div class="row-background" style="background-image: url(./image/gao-dac-san.jpg)"></div>
                                                            <div class="product-row-details">
                                                                <div class="details">Chi tiết</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row-item-text">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <span>Gạo đặc sản Sóc Trăng thùng 5kg</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="yogurt">
                        <div class="box">
                            <div class="milk-set-box">
                                <div class="milk-set-title">
                                    <h2>Dịch vụ nông nghiệp New Coop</h2>
                                </div>
                                <!-- <div class="milk-set-text">Sản phẩm đang cập nhập</div> -->
                                <div class="wrap">
                                    <div class="gird">
                                        <div class="row">
                                            <div class="row-item">
                                                <div class="row-box-img">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <div class="row-item-img">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png" alt="" />
                                                            <div class="row-background" style="background-image: url(./image/images.jfif)"></div>
                                                            <div class="product-row-details">
                                                                <div class="details">Chi tiết</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row-item-text">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <span>Chăm sóc thú y cho gia súc, gia cầm</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="row-item">
                                                <div class="row-box-img">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <div class="row-item-img">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png" alt="" />
                                                            <div class="row-background" style="background-image: url(./image/A1.jpg)"></div>
                                                            <div class="product-row-details">
                                                                <div class="details">Chi tiết</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="row-item-text">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <span>Lai giống bò sữa</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                            <div class="row-item">
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
                                                <div class="row-item-text">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                                        <span>Cám chăn nuôi cho bò, lợn, gà</span>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
		<?php } 
		else { ?> 
		<?php if ( have_posts() ) : ?>
			<?php the_content(); 
		endif; ?>
		<?php }
		?>
	
	<!-- khuyến mãi -->
		<?php if(is_page('khuyen-mai')){ ?> 
			<div class="page-khuyen-mai">
				<section class="header">
					<div class="header-box promotion-background">
						<div class="header-title">
							<h1>Khuyến mãi</h1>
						</div>
						<!-- <div class="header-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-copy.png" alt="">
						</div> -->
					</div>
				</section>
				<section class="promotion">
					<div class="box">
						<div class="promotion-box">
							<div class="promotion-text-list">
								<div class="wrap">
									<div class="promotion-title">
										<h5 data-aos="fade-down" data-aos-duration="2000">Mới nhất</h5>
									</div>
									<div class="promotion-text-item">Có vẻ như chúng tôi không thể tìm thấy những gì bạn đang tìm kiếm.</div>
								</div>
							</div>
							<div class="promotion-outstanding">
								<div class="wrap">
									<div class="promotion-title">
										<h5 data-aos="fade-down" data-aos-duration="2000">Nổi bật</h5>
									</div>
									<div class="outstanding-box">
										<div class="outstanding-box-list">
											<div class="outstanding-img">
												<a href="<?php echo get_template_directory_uri(); ?>/news-details">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2022.317.png" alt="">
												</a>
											</div>
											<div class="outstanding-title">
												<div class="outstanding-title-item">
													<a href="<?php echo get_template_directory_uri(); ?>/news-details">Nhân viên bán hàng...</a>
												</div>
												<div class="outstanding-date">
													<div class="outstanding-date-icon">
														<i class="fas fa-calendar-alt"></i>
													</div>
													<div class="outstanding-date-item">18/07/2021</div>
												</div>
												<div class="outstanding-text">
													<p>Nhân viên bán hàng – Chiến sỹ thầm...</p>
												</div>
												<a href="<?php echo get_template_directory_uri(); ?>/news-details">
													<div class="outstanding-btn">Đọc tiếp</div>
												</a>
											</div>
										</div>
										<div class="outstanding-box-list">
											<div class="outstanding-img">
												<a href="<?php echo get_template_directory_uri(); ?>/news-details">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2022.317.png" alt="">
												</a>
											</div>
											<div class="outstanding-title">
												<div class="outstanding-title-item">
													<a href="<?php echo get_template_directory_uri(); ?>/news-details">Cách làm sữa chua...</a>
												</div>
												<div class="outstanding-date">
													<div class="outstanding-date-icon">
														<i class="fas fa-calendar-alt"></i>
													</div>
													<div class="outstanding-date-item">10/03/2021</div>
												</div>
												<div class="outstanding-text">
													<p>Chắc hẳn không ai còn lạ gì với...</p>
												</div>
												<a href="<?php echo get_template_directory_uri(); ?>/news-details">
													<div class="outstanding-btn">Đọc tiếp</div>
												</a>
											</div>
										</div>
										<div class="outstanding-box-list">
											<div class="outstanding-img">
												<a href="<?php echo get_template_directory_uri(); ?>/news-details">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/2022.317.png" alt="">
												</a>
											</div>
											<div class="outstanding-title">
												<div class="outstanding-title-item">
													<a href="<?php echo get_template_directory_uri(); ?>/news-details">HTX BÒ SỮA GoAMILK...</a>
												</div>
												<div class="outstanding-date">
													<div class="outstanding-date-icon">
														<i class="fas fa-calendar-alt"></i>
													</div>
													<div class="outstanding-date-item">16/08/2021</div>
												</div>
												<div class="outstanding-text">
													<p>Trong chuyến thị sát HTX mới đây, Bộ...</p>
												</div>
												<a href="<?php echo get_template_directory_uri(); ?>/news-details">
													<div class="outstanding-btn">Đọc tiếp</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		<?php } 
		else { ?> 
		<?php if ( have_posts() ) : ?>
			<?php the_content(); 
		endif; ?>
		<?php }
		?>

		<?php if(is_page('cua-hang')){ ?> 
			<div class="page-cua-hang">
                <section class="header header-store">
                    <div class="header-box store-background">
                        <div class="header-title">
                            <h1>Hệ thống phân phối</h1>
                        </div>
                        <!-- <div class="header-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-copy.png" alt="">
                        </div> -->
                    </div>
                </section>

                <section class="addr">
                    <div class="box">
                        <div class="wrap">
                            <div class="store">
                                <div class="row">
                                    <div class="row-item-store">
                                        <div class="title">Khu vực</div>
                                        <select name="" id="">
                                            <option value="">Chọn khu vực</option>
                                            <option value="">Miền Bắc</option>
                                            <option value="">Miền Nam</option>
                                        </select>
                                    </div>
                                    <div class="row-item-store">
                                        <div class="title">Tỉnh / Thành Phố</div>
                                        <select name="" id="">
                                            <option value="">Chọn Tỉnh / Thành Phố</option>
                                            <option value="">Hà Nội</option>
                                            <option value="">Thành Phố Hồ Chí Minh</option>
                                        </select>
                                    </div>
                                    <div class="row-item-store">
                                        <div class="title">Quận / Huyện</div>
                                        <select name="" id="">
                                            <option value="">Chọn Quận / Huyện</option>
                                            <option value="">Quận 1</option>
                                            <option value="">Quận 2</option>
                                            <option value="">Quận Cầu Giấy</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="map">
                    <div class="box">
                        <div class="store-bottom">
                            <div class="store-bottom-left">
                                <div class="list">
                                    <div class="wrap">
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="list-item">
                                                <h1>HỘ KINH DOANH GIA BẢO</h1>
                                                <p>BẾN CÁT - DẦU TIẾNG, BÌNH DƯƠNG</p>
                                                <div class="phone"></div>
                                            </div>
                                        </a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="list-item">
                                                <h1>HỘ KINH DOANH HIẾU TRUNG</h1>
                                                <p>Bình Thuận</p>
                                                <div class="phone"></div>
                                            </div>
                                        </a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="list-item">
                                                <h1>HỘ KINH DOANH NGUYỄN VĂN TUẤN</h1>
                                                <p>179 Bà Huyện Thanh Quan, Phường Thắng Lợi, Gia Lai</p>
                                                <div class="phone">Điện thoại:<p>0914574468</p></div>
                                            </div>
                                        </a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="list-item">
                                                <h1>HỘ KINH DOANH - SÁU TỴ</h1>
                                                <p>01 Phạm Văn Đồng, Thị trấn Ea Drang. Huyện Ea Hleo, tỉnh Đăk Lăk</p>
                                                <div class="phone">Điện thoại:<p>0375237213</p></div>
                                            </div>
                                        </a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="list-item">
                                                <h1>HỘ KINH DOANH - KHÁNH VY</h1>
                                                <p>Số 95 Thủ Khoa Huân, Tổ 4, Khu Phố Phú Cường, Phường An Lộc, TX Bình Long, Bình Phước</p>
                                                <div class="phone">Điện thoại:<p>0937959493</p></div>
                                            </div>
                                        </a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="list-item">
                                                <h1>HỘ KINH DOANH GIA HÂN</h1>
                                                <p>183 Trường Chinh - KP Hiệp Thạnh - Phường Hiệp Ninh - TP. Tây Ninh - Tỉnh Tây Ninh </p>
                                                <div class="phone">Điện thoại:<p>0938 349 063</p></div>
                                            </div>
                                        </a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="list-item">
                                                <h1>HỘ KINH DOANH VÂN ANH</h1>
                                                <p>27 Nguyễn Duy Trinh - P. Tân Thành - Tp. Buôn Ma Thuột - Tỉnh DakLak </p>
                                                <div class="phone">Điện thoại:<p>0905 792 006</p></div>
                                            </div>
                                        </a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="list-item">
                                                <h1>CTY TNHH MTV TMDV HÒA PHÁT QN ĐĂK NÔNG</h1>
                                                <p>Tổ Dân Phố 2, P. Nghĩa Tân, TP. Gia Nghĩa, Tỉnh Đak Nông</p>
                                                <div class="phone">Điện thoại:<p>0934916162</p></div>
                                            </div>
                                        </a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="list-item">
                                                <h1>HỘ KINH DOANH VŨ QUỐC KIỀU</h1>
                                                <p>Hẻm 277, đường Huỳnh Văn Lũy, TP Thủ Dầu Một, Bình Dương</p>
                                                <div class="phone">Điện thoại:<p>0344 527 167</p></div>
                                            </div>
                                        </a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="list-item">
                                                <h1>CÔNG TY TNHH HÙNG BẢO LONG</h1>
                                                <p>205/9 Đường DC 80, Tổ 15, KDC Việt Sing, P. Thuận Giao, TX Thuận An, Tỉnh Bình Dương</p>
                                                <div class="phone">Điện thoại:<p>0977 442 984</p></div>
                                            </div>
                                        </a>
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="list-item">
                                                <h1>HỘ KINH DOANH PHẠM HÙNG</h1>
                                                <p>25/10 Khu Phố Phước Tân, Phường Tân Thiện, Đồng Xoài, Bình Phước</p>
                                                <div class="phone">Điện thoại:<p>0962737737</p></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="store-bottom-right">
                                <div class="wrap">
                                    <div class="test" style="background-color:aqua ; width: 100%; height: 700px;">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.674928002218!2d105.85264231476285!3d21.00566388601089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac0a8d3eabc5%3A0xbc5d6e1f03c8f80f!2zODAgVsO1IFRo4buLIFPDoXUsIFRoYW5oIE5ow6BuLCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1653290672325!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="coop">
                    <div class="box">
                        <div class="wrap">
                            <h2>cơ hội hợp tác</h2>
                            <h1>Trở thành đại lý phân phối</h1>
                            <img class="coop-store-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/location-4110-636342594572114770.jpeg" alt="">
                            <p>
                                Với mong muốn tất cả người tiêu dùng Việt từ Bắc vào Nam, từ thành thị đến nông thôn, miền núi hay hải đảo đều có thể tiếp cận các sản phẩm giàu dinh dưỡng, chất lượng, GoA Milk đã phát triển một hệ thống phân phối rộng khắp, trải dài 63 tỉnh thành trên cả nước. Trong đó, hệ thống cửa hàng mang tên Giấc Mơ Sữa Việt được đầu tư mạnh từ năm 2016 đã liên tục phát triển trong nhiều năm qua về cả độ phủ lẫn chất lượng phục vụ.
                                    <br>
                                Năm 2020, mặc dù gặp những ảnh hưởng nhất định từ dịch Covid-19, nhưng số lượng cửa hàng Giấc Mơ Sữa Việt liên tục gia tăng và chính thức vượt mốc 500 cửa hàng vào đầu năm 2021. Giờ đây, tại bất cứ đâu, người tiêu dùng cũng có thể dễ dàng chọn mua các sản phẩm dinh dưỡng của GoA Milk cho tất cả thành viên trong gia đình tại Giấc Mơ Sữa Việt.
                            </p>
                            <div class="register-form">
                                <div class="row-left">
                                    <div class="row">
                                        <div class="row-item-store"><input type="text" name="" id="" placeholder="Họ và tên"></div>
                                    <div class="row-item-store"><input type="text" name="" id="" placeholder="Số điện thoại"></div>
                                    <div class="row-item-store"><input type="text" name="" id="" placeholder="Email"></div>
                                    <div class="row-item-store"><input type="text" name="" id="" placeholder="Địa chỉ đăng ký"></div>
                                    </div>
                                </div>
                                <div class="row-right">
                                    <div class="row-right-item"><button>ĐĂNG KÝ</button></div>
                                </div>
                            </div>
                            <div class="social">
                                <span class="social-box">
                                    <a href="#"><i class="fab fa-facebook icon"></i></a>
                                </span>
                                <span class="social-box">
                                    <a href="#"><i class="fab fa-instagram icon"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
		<?php } 
		else { ?> 
		<?php if ( have_posts() ) : ?>
			<?php the_content(); 
		endif; ?>
		<?php }
		?>

		<?php if(is_page('tin-tuc')){ ?> 
			<div class="page-tin-tuc">
                <section class="header">
                    <div class="header-box news-background">
                        <div class="header-title">
                            <h1>Tin tức mới</h1>
                        </div>
                        <!-- <div class="header-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-copy.png" alt="">
                        </div> -->
                    </div>
                </section>

                <section class="news">
                    <div class="box">
                        <div class="news-box">
                            <div class="news-content-list">
                                <div class="wrap">
                                    <div class="news-title">
                                        <h5 data-aos="fade-down" data-aos-duration="2000">Mới nhất</h5>
                                    </div>
                                    <div class="content-background" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/lam-sua-chua-bang-may.jpg)">
                                        <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                            <div class="content-text-box">
                                                <div class="content-text-title">Cách làm sữa chua bằng sữa tươi GoAMILK thơm ngon, đơn giản đến không ngờ</div>
                                                <div class="content-text-date">
                                                    <span class="content-post-date">
                                                        <span class="post-date-link">
                                                            10/03/2022
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="content-text-document">Chắc hẳn không ai còn lạ gì với công dụng tuyệt vời của sữa chua như giảm cân, làm đẹp...</div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="content-outstanding">
                                        <div class="content-outstanding-box">
                                            <div class="outstanding-box-list news-box-list">
                                                <div class="outstanding-img news-outstanding-img">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lam-sua-chua-bang-may.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="outstanding-title news-outstanding-title">
                                                    <div class="outstanding-title-item">
                                                        <a href="<?php echo get_template_directory_uri(); ?>/news-details">NEWCOOP – SỮA TƯƠI...</a>
                                                    </div>
                                                    <div class="outstanding-date">
                                                        <div class="outstanding-date-item"><a href="#">14/02/2022</a></div>
                                                    </div>
                                                    <div class="outstanding-text">
                                                        <p></p>
                                                    </div>
                                                    <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                        <div class="outstanding-btn">Đọc tiếp</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="outstanding-box-list news-box-list">
                                                <div class="outstanding-img news-outstanding-img">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lam-sua-chua-bang-may.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="outstanding-title news-outstanding-title">
                                                    <div class="outstanding-title-item">
                                                        <a href="<?php echo get_template_directory_uri(); ?>/news-details">Thay đổi ngày tổ...</a>
                                                    </div>
                                                    <div class="outstanding-date">
                                                        <div class="outstanding-date-item"><a href="#">07/01/2021</a></div>
                                                    </div>
                                                    <div class="outstanding-text">
                                                        <p>Do công tác tổ chức cho Đại hội...</p>
                                                    </div>
                                                    <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                        <div class="outstanding-btn">Đọc tiếp</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="content-news">
                                        <div class="content-news-box">
                                            <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                <div class="content-news-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lam-sua-chua-bang-may.jpg" alt="">
                                                </div>
                                            </a>
                                            <div class="content-news-title">
                                                <div class="content-news-title-item">
                                                    <h3>
                                                        <a href="<?php echo get_template_directory_uri(); ?>/news-details">Tình hình dịch COVID-19 của Sóc Trăng đến 22/11: Không còn huyện “vùng xanh”</a>
                                                    </h3>
                                                </div>
                                                <div class="content-news-date">
                                                    <div class="content-news-date-item">22/11/2021</div>
                                                </div>
                                                <div class="content-news-text">
                                                    <p>Tình hình dịch COVID-19 tại tỉnh Sóc Trăng tính đến 22/11 (thống kê hết ngày 21/11) vẫn còn rất phức tạp khi mà số ca dương tính Sars-CoV-2 tiếp tục tăng; toàn tỉnh không còn huyện nào là “vùng xanh”….</p>
                                                </div>
                                                <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                    <div class="content-news-btn">Đọc tiếp</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content-news-box">
                                            <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                <div class="content-news-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lam-sua-chua-bang-may.jpg" alt="">
                                                </div>
                                            </a>
                                            <div class="content-news-title">
                                                <div class="content-news-title-item">
                                                    <h3>
                                                        <a href="<?php echo get_template_directory_uri(); ?>/news-details">Tình hình dịch COVID-19 của Sóc Trăng đến 22/11: Không còn huyện “vùng xanh”</a>
                                                    </h3>
                                                </div>
                                                <div class="content-news-date">
                                                    <div class="content-news-date-item">22/11/2021</div>
                                                </div>
                                                <div class="content-news-text">
                                                    <p>Tình hình dịch COVID-19 tại tỉnh Sóc Trăng tính đến 22/11 (thống kê hết ngày 21/11) vẫn còn rất phức tạp khi mà số ca dương tính Sars-CoV-2 tiếp tục tăng; toàn tỉnh không còn huyện nào là “vùng xanh”….</p>
                                                </div>
                                                <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                    <div class="content-news-btn">Đọc tiếp</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content-news-box">
                                            <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                <div class="content-news-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lam-sua-chua-bang-may.jpg" alt="">
                                                </div>
                                            </a>
                                            <div class="content-news-title">
                                                <div class="content-news-title-item">
                                                    <h3>
                                                        <a href="<?php echo get_template_directory_uri(); ?>/news-details">Tình hình dịch COVID-19 của Sóc Trăng đến 22/11: Không còn huyện “vùng xanh”</a>
                                                    </h3>
                                                </div>
                                                <div class="content-news-date">
                                                    <div class="content-news-date-item">22/11/2021</div>
                                                </div>
                                                <div class="content-news-text">
                                                    <p>Tình hình dịch COVID-19 tại tỉnh Sóc Trăng tính đến 22/11 (thống kê hết ngày 21/11) vẫn còn rất phức tạp khi mà số ca dương tính Sars-CoV-2 tiếp tục tăng; toàn tỉnh không còn huyện nào là “vùng xanh”….</p>
                                                </div>
                                                <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                    <div class="content-news-btn">Đọc tiếp</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content-news-box">
                                            <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                <div class="content-news-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lam-sua-chua-bang-may.jpg" alt="">
                                                </div>
                                            </a>
                                            <div class="content-news-title">
                                                <div class="content-news-title-item">
                                                    <h3>
                                                        <a href="<?php echo get_template_directory_uri(); ?>/news-details">Tình hình dịch COVID-19 của Sóc Trăng đến 22/11: Không còn huyện “vùng xanh”</a>
                                                    </h3>
                                                </div>
                                                <div class="content-news-date">
                                                    <div class="content-news-date-item">22/11/2021</div>
                                                </div>
                                                <div class="content-news-text">
                                                    <p>Tình hình dịch COVID-19 tại tỉnh Sóc Trăng tính đến 22/11 (thống kê hết ngày 21/11) vẫn còn rất phức tạp khi mà số ca dương tính Sars-CoV-2 tiếp tục tăng; toàn tỉnh không còn huyện nào là “vùng xanh”….</p>
                                                </div>
                                                <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                    <div class="content-news-btn">Đọc tiếp</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="content-news-box">
                                            <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                <div class="content-news-img">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lam-sua-chua-bang-may.jpg" alt="">
                                                </div>
                                            </a>
                                            <div class="content-news-title">
                                                <div class="content-news-title-item">
                                                    <h3>
                                                        <a href="<?php echo get_template_directory_uri(); ?>/news-details">Tình hình dịch COVID-19 của Sóc Trăng đến 22/11: Không còn huyện “vùng xanh”</a>
                                                    </h3>
                                                </div>
                                                <div class="content-news-date">
                                                    <div class="content-news-date-item">22/11/2021</div>
                                                </div>
                                                <div class="content-news-text">
                                                    <p>Tình hình dịch COVID-19 tại tỉnh Sóc Trăng tính đến 22/11 (thống kê hết ngày 21/11) vẫn còn rất phức tạp khi mà số ca dương tính Sars-CoV-2 tiếp tục tăng; toàn tỉnh không còn huyện nào là “vùng xanh”….</p>
                                                </div>
                                                <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                    <div class="content-news-btn">Đọc tiếp</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <nav class="pageing">
                                        <div class="pageing-box">
                                            <a href=""><span class="prev-page"><</span></a>
                                        </div>
                                            <div class="pageing-box active-number">
                                                <span class="pageing-item number">
                                                    1
                                                </span>
                                            </div>
                                        <div class="pageing-box">
                                            <a href="">
                                                <span class="pageing-item number">2</span>
                                            </a>
                                        </div>
                                        <div class="pageing-box">
                                            <a href="">
                                                <span class="pageing-item number">3</span>
                                            </a>
                                        </div>
                                        <div class="pageing-box">
                                            <span class="pageing-item">...</span>
                                        </div>
                                        <div class="pageing-box">
                                            <a href="">
                                                <span class="pageing-item number">5</span>
                                            </a>
                                        </div>
                                        <div class="pageing-box">
                                            <a href=""><span class="next-page">></span></a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <div class="promotion-outstanding">
                                <div class="wrap">
                                    <div class="promotion-title">
                                        <h5 data-aos="fade-down" data-aos-duration="2000">Nổi bật</h5>
                                    </div>
                                    <div class="outstanding-box">
                                        <div class="outstanding-box-list">
                                            <div class="outstanding-img news-outstanding-img">
                                                <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2022.317.png" alt="">
                                                </a>
                                            </div>
                                            <div class="outstanding-title">
                                                <div class="outstanding-title-item">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/news-details">Nhân viên bán hàng...</a>
                                                </div>
                                                <div class="outstanding-date">
                                                    <div class="outstanding-date-item">18/07/2021</div>
                                                </div>
                                                <div class="outstanding-text">
                                                    <p>Nhân viên bán hàng – Chiến sỹ thầm...</p>
                                                </div>
                                                <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                    <div class="outstanding-btn">Đọc tiếp</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="outstanding-box-list">
                                            <div class="outstanding-img news-outstanding-img">
                                                <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2022.317.png" alt="">
                                                </a>
                                            </div>
                                            <div class="outstanding-title">
                                                <div class="outstanding-title-item">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/news-details">Cách làm sữa chua...</a>
                                                </div>
                                                <div class="outstanding-date">
                                                    <div class="outstanding-date-item">10/03/2021</div>
                                                </div>
                                                <div class="outstanding-text">
                                                    <p>Chắc hẳn không ai còn lạ gì với...</p>
                                                </div>
                                                <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                    <div class="outstanding-btn">Đọc tiếp</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="outstanding-box-list">
                                            <div class="outstanding-img news-outstanding-img">
                                                <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2022.317.png" alt="">
                                                </a>
                                            </div>
                                            <div class="outstanding-title">
                                                <div class="outstanding-title-item">
                                                    <a href="<?php echo get_template_directory_uri(); ?>/news-details">HTX BÒ SỮA GoAMILK...</a>
                                                </div>
                                                <div class="outstanding-date">
                                                    <div class="outstanding-date-item">16/08/2021</div>
                                                </div>
                                                <div class="outstanding-text">
                                                    <p>Trong chuyến thị sát HTX mới đây, Bộ...</p>
                                                </div>
                                                <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                                    <div class="outstanding-btn">Đọc tiếp</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
		<?php } 
		else { ?> 
		<?php if ( have_posts() ) : ?>
			<?php the_content(); 
		endif; ?>
		<?php }
		?>

		<?php if(is_page('lien-he')){ ?> 
			<div class="page-lien-he">
                <section class="header">
                    <div class="header-box contact">
                        <div class="header-title">
                            <h1>Liên hệ</h1>
                        </div>
                        <!-- <div class="header-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-copy.png" alt="">
                        </div> -->
                    </div>
                </section>

                <section class="address">
                    <div class="box">
                        <div class="contact-inner row">
                            <div class="contact-inner-right contact wrap col-sm-12 col-lg-6">
                                <div class="test-addr">
                                    <div class="title">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                <g>
                                                <g>
                                                <path d="M421.936,211.786v238.533h-90.064V347.155c0-9.045-7.331-16.375-16.375-16.375H200.324    c-9.045,0-16.375,7.331-16.375,16.375v103.164H94.431V211.786H61.681v254.908c0,9.045,7.331,16.375,16.375,16.375h122.269    c9.045,0,16.375-7.331,16.375-16.375V363.531h82.422v103.164c0,9.045,7.331,16.375,16.375,16.375h122.815    c9.045,0,16.375-7.331,16.375-16.375V211.786H421.936z"></path>
                                                </g>
                                                </g>
                                                <g>
                                                <g>
                                                <path d="M506.815,255.508L269.373,33.351c-6.25-5.857-15.966-5.895-22.27-0.104L5.295,255.405    c-6.659,6.119-7.096,16.474-0.977,23.133c3.226,3.521,7.636,5.3,12.063,5.3c3.957,0,7.931-1.43,11.075-4.318L258.085,67.635    l226.355,211.787c6.616,6.184,16.965,5.83,23.144-0.77C513.758,272.047,513.419,261.687,506.815,255.508z"></path>
                                                </g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                                <g>
                                                </g>
                                            </svg>
                                        </span>
                                        <span>Cửa hàng Cánh Đồng Xanh</span>
                                    </div>
                                    <div class="desc">
                                        <div class="desc-item">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                    <g>
                                                    <g>
                                                    <path d="M256,0C150.112,0,64,86.112,64,192c0,133.088,173.312,307.936,180.672,315.328C247.808,510.432,251.904,512,256,512    s8.192-1.568,11.328-4.672C274.688,499.936,448,325.088,448,192C448,86.112,361.888,0,256,0z M256,472.864    C217.792,431.968,96,293.664,96,192c0-88.224,71.776-160,160-160s160,71.776,160,160C416,293.568,294.208,431.968,256,472.864z"></path>
                                                    </g>
                                                    </g>
                                                    <g>
                                                    <g>
                                                    <path d="M256,96c-52.928,0-96,43.072-96,96s43.072,96,96,96c52.928,0,96-43.072,96-96C352,139.072,308.928,96,256,96z M256,256    c-35.296,0-64-28.704-64-64s28.704-64,64-64s64,28.704,64,64S291.296,256,256,256z"></path>
                                                    </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span>80 Võ Thị Sáu – quận Hai Bà Trưng – TP. Hà Nội</span>
                                        </div>
                                        <div class="desc-item">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon" id="Capa_1" x="0px" y="0px" viewBox="0 0 482.6 482.6" style="enable-background:new 0 0 482.6 482.6;" xml:space="preserve">
                                                    <g>
                                                    <path d="M98.339,320.8c47.6,56.9,104.9,101.7,170.3,133.4c24.9,11.8,58.2,25.8,95.3,28.2c2.3,0.1,4.5,0.2,6.8,0.2   c24.9,0,44.9-8.6,61.2-26.3c0.1-0.1,0.3-0.3,0.4-0.5c5.8-7,12.4-13.3,19.3-20c4.7-4.5,9.5-9.2,14.1-14   c21.3-22.2,21.3-50.4-0.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2c-12.8,0-25.1,5.6-35.6,16.1l-35.8,35.8   c-3.3-1.9-6.7-3.6-9.9-5.2c-4-2-7.7-3.9-11-6c-32.6-20.7-62.2-47.7-90.5-82.4c-14.3-18.1-23.9-33.3-30.6-48.8   c9.4-8.5,18.2-17.4,26.7-26.1c3-3.1,6.1-6.2,9.2-9.3c10.8-10.8,16.6-23.3,16.6-36s-5.7-25.2-16.6-36l-29.8-29.8   c-3.5-3.5-6.8-6.9-10.2-10.4c-6.6-6.8-13.5-13.8-20.3-20.1c-10.3-10.1-22.4-15.4-35.2-15.4c-12.7,0-24.9,5.3-35.6,15.5l-37.4,37.4   c-13.6,13.6-21.3,30.1-22.9,49.2c-1.9,23.9,2.5,49.3,13.9,80C32.739,229.6,59.139,273.7,98.339,320.8z M25.739,104.2   c1.2-13.3,6.3-24.4,15.9-34l37.2-37.2c5.8-5.6,12.2-8.5,18.4-8.5c6.1,0,12.3,2.9,18,8.7c6.7,6.2,13,12.7,19.8,19.6   c3.4,3.5,6.9,7,10.4,10.6l29.8,29.8c6.2,6.2,9.4,12.5,9.4,18.7s-3.2,12.5-9.4,18.7c-3.1,3.1-6.2,6.3-9.3,9.4   c-9.3,9.4-18,18.3-27.6,26.8c-0.2,0.2-0.3,0.3-0.5,0.5c-8.3,8.3-7,16.2-5,22.2c0.1,0.3,0.2,0.5,0.3,0.8   c7.7,18.5,18.4,36.1,35.1,57.1c30,37,61.6,65.7,96.4,87.8c4.3,2.8,8.9,5,13.2,7.2c4,2,7.7,3.9,11,6c0.4,0.2,0.7,0.4,1.1,0.6   c3.3,1.7,6.5,2.5,9.7,2.5c8,0,13.2-5.1,14.9-6.8l37.4-37.4c5.8-5.8,12.1-8.9,18.3-8.9c7.6,0,13.8,4.7,17.7,8.9l60.3,60.2   c12,12,11.9,25-0.3,37.7c-4.2,4.5-8.6,8.8-13.3,13.3c-7,6.8-14.3,13.8-20.9,21.7c-11.5,12.4-25.2,18.2-42.9,18.2   c-1.7,0-3.5-0.1-5.2-0.2c-32.8-2.1-63.3-14.9-86.2-25.8c-62.2-30.1-116.8-72.8-162.1-127c-37.3-44.9-62.4-86.7-79-131.5   C28.039,146.4,24.139,124.3,25.739,104.2z"></path>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span>0912345678</span>
                                        </div>
                                        <div class="desc-item">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" id="Capa_1" viewBox="0 0 479.058 479.058"><path d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"></path>
                                                </svg>
                                            </span>
                                            <span>xxxx@xxx.vn</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="map wrap col-sm-12 col-lg-6">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.674928002218!2d105.85264231476285!3d21.00566388601089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac0a8d3eabc5%3A0xbc5d6e1f03c8f80f!2zODAgVsO1IFRo4buLIFPDoXUsIFRoYW5oIE5ow6BuLCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1653290672325!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="form-contact">
                    <div class="box">
                        <div class="form-inner row">
                            <div class="background-img col-sm-12 col-lg-6" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background-img-vct.jpg)">
                                <div class="form-img wrap">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/5-copy.png" alt="">
                                </div>
                            </div>

                            <div class="form-content wrap col-sm-12 col-lg-6">
                                <div class="title mb-20">Liên hệ</div>
                                <div class="desc mb-20">Đừng ngần ngại, chỉ cần cho chúng tôi biết về bản thân bạn và chúng tôi sẽ tìm ra lựa chọn tốt nhất cho bạn hoặc công ty của bạn</div>
                                <form action="post">
                                    <div class="form-item">
                                        <input class="item" type="text" placeholder="Họ và tên" required>
                                    </div>
                                    <div class="form-item">
                                        <input class="item" type="text" placeholder="Số điện thoại" required>
                                    </div>
                                    <div class="form-item">
                                        <input class="item" type="text" placeholder="Email" required>
                                    </div>
                                    <div class="form-item">
                                        <textarea class="item" id="" rows="3" placeholder="Nội dung" required></textarea>
                                    </div>
                                    <div class="form-item box-item">
                                        <button class="item" type="submit"><span>Gửi đi</span></button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
		<?php } 
		else { ?> 
		<?php if ( have_posts() ) : ?>
			<?php the_content(); 
		endif; ?>
		<?php }
		?>

        <!-- product-details -->
        <?php if(is_page('sua')){ ?> 
			<div class="sua">
                <section class="header header-details-product">
                    <div class="header-box project-detail-background">
                        <div class="header-title">
                            <div>Chi tiết sản phẩm</div>
                        </div>
                    </div>
                </section>
                <section class="details details-product">
                    <div class="box details-inner">
                        <div class="box-item-product wrap">
                            <div class="box-item-inner">
                                <img class="box-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png" alt="">
                            </div>
                        </div>
                        <div class="box-item-product wrap wid-33">
                            <div class="box-item-inner border-nutri">
                                <div class="title">Thành Phần Dinh Dưỡng Trung Bình Trong 100ml</div>
                                <i class="en-title">Nutritional information per 100ml</i>
                                <div class="nutri-info">
                                    <div class="nutri-info-list">
                                        <div class="nutri-item">Năng lượng <i>/ Energy</i></div>
                                        <div class="nutri-item">Chất béo <i>/ Fat</i></div>
                                        <div class="nutri-item">Đạm <i>/ Protein</i></div>
                                        <div class="nutri-item">Hydrat cacbon <i>/ Carbohydrate</i></div>
                                        <div class="nutri-item">Canxi <i>/ Calcium</i></div>
                                        <div class="nutri-item">Vitamin A</div>
                                        <div class="nutri-item">Vitamin D</div>
                                        <div class="nutri-item">Vitamin B1</div>
                                        <div class="nutri-item">Vitamin B2</div>
                                        <div class="nutri-item">Magiê <i>/ Magnesium</i></div>
                                        <div class="nutri-item">Kẽm <i>/ Zinc</i></div>
                                    </div>
                                    <div class="nutri-info-list">
                                        <div class="nutri-item"><div class="num">80</div> Kcal</div>
                                        <div class="nutri-item"><div class="num">3,6</div> g</div>
                                        <div class="nutri-item"><div class="num">3,0</div> g</div>
                                        <div class="nutri-item"><div class="num">8,0</div> g</div>
                                        <div class="nutri-item"><div class="num">100</div> mg</div>
                                        <div class="nutri-item"><div class="num">115</div> IU</div>
                                        <div class="nutri-item"><div class="num">16</div> IU</div>
                                        <div class="nutri-item"><div class="num">25</div> µg</div>
                                        <div class="nutri-item"><div class="num">140</div> µg</div>
                                        <div class="nutri-item"><div class="num">7,7</div> mg</div>
                                        <div class="nutri-item"><div class="num">0,3</div> mg</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-item-product wrap">
                            <div class="box-item-inner">
                                <h1 class="elementor-heading-title">Sữa tươi nguyên chất</h1>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="box-item-product wrap jcl wid-33">
                            <div class="box-item-inner">
                                <ul>
                                    <li>Fresh milk</li>
                                    <li>Healthy product</li>
                                    <li>Natural ingredient</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="other-product">
                    <div class="box">
                        <div class="box-inner">
                            <h1>Sản phẩm khác</h1>
                            <div class="list-product">
                                <div class="row-item">
                                    <div class="row-box-img">
                                        <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                            <div class="row-item-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png" alt="">
                                                <div class="row-background"></div>
                                                <div class="product-row-details">
                                                    <div class="details">Chi tiết</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row-item-text">
                                        <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                            <span>Sữa chua uống dâu</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row-item">
                                    <div class="row-box-img">
                                        <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                            <div class="row-item-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png" alt="">
                                                <div class="row-background"></div>
                                                <div class="product-row-details">
                                                    <div class="details">Chi tiết</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row-item-text">
                                        <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                            <span>Sữa chua uống cam</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row-item">
                                    <div class="row-box-img">
                                        <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                            <div class="row-item-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/z3289392864116_f6131d1743d438c9fa64018b69a71ae4-removebg-preview.png" alt="">
                                                <div class="row-background"></div>
                                                <div class="product-row-details">
                                                    <div class="details">Chi tiết</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row-item-text">
                                        <a href="<?php echo get_template_directory_uri(); ?>/sua">
                                            <span>Sữa tươi ít đường</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
		<?php } 
		else { ?> 
		<?php if ( have_posts() ) : ?>
			<?php the_content(); 
		endif; ?>
		<?php }
		?>

        <!-- new-details -->
        <?php if(is_page('news-details')){ ?> 
			<div class="news-details">
                <section class="header">
                    <div class="header-box news-detail-background">
                        <div class="header-title news-details-title">
                            <h1>Cách làm sữa chua bằng sữa tươi GoAMilk thơm ngon, đơn giản đến không ngờ</h1>
                            <div class="news-details-desc">
                                <div class="list-text">Tác giả: Admin</div>
                                <div class="list-text">Ngày đăng: 10/03/2022</div>
                                <div class="list-text">Thư mục: Tin tức</div>
                                <div class="list-text none-border">Lượt xem: 35 lượt xem</div>
                            </div>
                        </div>
                        
                    </div>
                </section>
                
                <section class="news-details-box">
                    <div class="news-details-inner">
                        <div class="wrap">
                            <div class="desc">
                                <p>Chắc hẳn không ai còn lạ gì với công dụng tuyệt vời của sữa chua như giảm cân, làm đẹp da, tốt cho hệ tiêu hóa và cơ thể. Có rất nhiều công thức để làm sữa chua, mỗi công thức sẽ làm ra một thành phẩm có độ đông đặc và hương vị khác nhau. Hôm nay, chúng tôi sẽ cùng bạn đi tìm hiểu cách làm sữa chua bằng sữa tươi GoAMILK đang được rất nhiều người ưa chuộng nhé!</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/lam-sua-chua-bang-may.jpg" alt="">
                                <figcaption>Cách làm sữa chua bằng sữa tươi</figcaption>
                            </div>
                            <div class="ingredient">
                                <div class="title">Nguyên liệu:</div>
                                <ul>
                                    <li>1 hộp sữa đặc GoAMILK</li>
                                    <li>1 lon nước sôi (dùng lon sữa đặc để đong)</li>
                                    <li>6 bịch sữa tươi không đường GoAMILK</li>
                                    <li>2 hộp sữa chua có đường GoAMILK</li>
                                    <li>1 nồi kim loại sạch</li>
                                    <li>Nồi cơm điện</li>
                                </ul>
                                <div class="title">Cách làm sữa chua bằng sữa tươi GoAMilk</div>
                                <p>Bước 1: Khử trùng và lau khô tất cả dụng cụ. Cách làm đơn giản nhất là ngâm các dụng cụ trong nước đun sôi khoảng 30 giây rồi vớt ra, để khô hoàn toàn trong không khí hoặc nếu muộn nhanh hơn, bạn có thể hong khô trong lò vi sóng ở 80 – 100 độ C khoảng 2-3 phút nhé.</p>
                                <p>Bước 2: Đổ sữa đặc ra nồi sạch, dùng chính lon đó đong 1 lon nước sôi đổ tiếp vào, khuấy nhẹ cho tan ( khuấy theo một chiều nhé) Rót từ từ 6 bịch sữa tươi vào, cũng khuấy nhẹ nhàng và theo 1 chiều. Cho tiếp 2 hộp sữa chua cái vào tiếp tục khuấy nhẹ đến khi hỗn hợp hòa tan hoàn toàn với nhau.</p>
                                <p>Bước 3: Dùng thìa múc hỗn hợp vừa pha vào từng lọ, có thể dùng lọ thủy tinh hoặc lọ nhựa tùy ý.</p>
                                <p>Bước 4: Đun 1 ấm nước sôi, để 7 phút cho nước nguội bớt (nước khoảng 80 độ là được), xếp các hũ đựng vào nồi cơm điện, đổ phần nước đã nguội bớt vào nồi sao cho nước ngập 1/3 hũ, đậy nắp nồi cơm điện lại, để yên khoảng 7 tiếng. Trong khi ủ sữa chua, bạn không được di chuyển nồi đựng và hũ đựng nhé.</p>
                                <p>Sau 7 tiếng, thành phẩm sẽ đông đặc lại, mịn và có vị chua tự nhiên là sữa chua đã đạt rồi nhé. Bạn nhấc ra, cho vào tủ lạnh để ăn dần.</p>
                                <p>Sữa chua tự làm có thể bảo quản được khoảng 1 tuần trong tủ lạnh. Ăn một cốc sữa chua mỗi ngày giúp bạn có một làn da đẹp, một hệ tiêu hóa tốt và một thân hình thon gọn, khỏe mạnh. Với cách làm sữa chua bằng sữa tươi GoAMILK tại nhà, bạn đã tiết kiệm được rất nhiều chi phí so với việc mua trực tiếp ngoài hàng, hơn nữa lại đảm bảo an toàn vệ sinh cho cả gia đình.</p>
                                <p>Cùng thực hiện cách làm sữa chua bằng sữa tươi GoAMILK vào dịp cuối tuần nhé! GoAMILK chúc các bạn thành công!</p>
                            </div>
                            <div class="social news-details-social">
                                <div class="details-box"><a href=""><i class="fab fa-facebook"></i></a></div>
                                <div class="details-box"><a href=""><i class="fab fa-twitter"></i></a></div>
                                <div class="details-box"><a href=""><i class="fab fa-linkedin"></i></a></div>
                                <div class="details-box"><a href=""><i class="fab fa-pinterest"></i></a></div>
                            </div>
                            <div class="rating-cmt">
                                <div class="wrap rating-border">
                                    <div class="rating">
                                        <div class="rating-left-right"></div>
                                        <div class="rating-data">
                                            <div class="rating-value">
                                                <span class="wpv">0</span>
                                                <span class="wpc">0</span>
                                                <span class="wpt">Các đánh giá</span>
                                            </div>
                                            <div class="rating-title">Article Rating</div>
                                            <div class="stars rating-stars">
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                            </div>
                                            <div class="stars rate-stars">
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="rating-left-right"></div>
                                    </div>
                                    <div class="cmt">
                                        <div class="form-wrap">
                                            <div class="form-header">
                                                <div class="flex toggle" id="toggle">
                                                    <i class="far fa-envelope"></i>
                                                    <div class="title">Đăng ký</div>
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <div class="flex auth">
                                                    <div class="social-login">
                                                        Kết nối với
                                                        <i class="fab fa-google"></i>
                                                    </div>
                                                    <div class="login">
                                                        <a href="#">
                                                            <i class="fas fa-sign-in-alt"></i>
                                                            Đăng nhập
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="subcribe">
                                                <form action="post">
                                                    <div class="subc-info">Thông báo về</div>
                                                    <div class="subc-option">
                                                        <select name="subc_option">
                                                            <option value="post">Theo dõi bình luận mới nhất</option>
                                                            <option value="all_comment">Trả lời mới nhất cho nhận xét của tôi</option>
                                                        </select>
                                                    </div>
                                                    <div class="subc-email">
                                                        <input class="email" name="subc_email" type="text" placeholder="Email" required>
                                                    </div>
                                                    <div class="subc-button">
                                                        <input class="button" type="submit" value=">">
                                                    </div>
                                                    <div class="subc-captcha">
                                                        <div class="recaptcha">
                                                            <div style="width: 304px; height: 78px;">
                                                                <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LccEIkcAAAAAB2ckEoPDtqFZ_uTF2yjUkhCo7fb&amp;co=aHR0cHM6Ly9ldmVyZ3Jvd3RobWlsay52bjo0NDM.&amp;hl=en&amp;v=g9jXH0OtfQet-V0Aewq23c7K&amp;theme=light&amp;size=normal&amp;cb=jtr28x42wxss" width="304" height="78" role="presentation" name="a-gvqi07f4kk5m" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"></iframe>
                                                                <textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="form-cmt">
                                                <div class="textarea-wrap">
                                                    <div class="avatar">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.jpg" alt="">
                                                    </div>
                                                    <div class="editor">
                                                        <div class="editor-text">
                                                            <textarea id="editor-text" name="editor" cols="30" rows="10" placeholder="Hãy trở thành người đầu tiên bình luận!"></textarea>
                                                        </div>
                                                        <div class="editor-toolbar">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-foot">
                                                <div class="form-foot-left">
                                                    <div class="form-name form-input">
                                                        <div class="icon">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                        <input type="text" name="name" require placeholder="Name*">
                                                    </div>
                                                    <div class="form-email form-input">
                                                        <div class="icon">
                                                            <i class="fas fa-at"></i>
                                                        </div>
                                                        <input type="email" name="email" require placeholder="Email*">
                                                    </div>
                                                    <div class="form-website form-input">
                                                        <div class="icon">
                                                            <i class="fas fa-link"></i>
                                                        </div>
                                                        <input type="text" name="website" require placeholder="Website*">
                                                    </div>
                                                </div>
                                                <div class="form-foot-right">
                                                    <div class="recaptcha">
                                                        <div style="width: 304px; height: 78px;">
                                                            <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LccEIkcAAAAAB2ckEoPDtqFZ_uTF2yjUkhCo7fb&amp;co=aHR0cHM6Ly9ldmVyZ3Jvd3RobWlsay52bjo0NDM.&amp;hl=en&amp;v=g9jXH0OtfQet-V0Aewq23c7K&amp;theme=light&amp;size=normal&amp;cb=jtr28x42wxss" width="304" height="78" role="presentation" name="a-gvqi07f4kk5m" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"></iframe>
                                                            <textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-submit">
                                                        <div class="check" id="check">
                                                            <i class="fas fa-bell bell"></i>
                                                            <i class="fas fa-bell-slash unbell active-check"></i>
                                                        </div>
                                                        <input class="submit-post" type="submit" name="submit" value="Post Comment">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-threads">
                                            <div class="threads-header">
                                                <div class="threads-info">
                                                    <span class="wptc">0</span>
                                                    Comments
                                                </div>
                                                <div class="space"></div>
                                                <div class="threads-filter">
                                                    <div class="filter filter-left">
                                                        <i class="fas fa-bolt"></i>
                                                    </div>
                                                    <div class="filter filter-right">
                                                        <i class="fas fa-fire"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="threads-list">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-details-new">
                        <div class="inner">
                            <div class="wrap post-news">
                                <div class="prev-post-news ">
                                    <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                        <span class="arrow-post-news"><i class="fa fa-angle-left"></i></span>
                                        <span class="post-prev">
                                            <div class="label">Bài trước</div>
                                            <div class="title">GoAMILK - Sữa tươi của người việt nam</div>
                                        </span>
                                    </a>
                                </div>
                                <div class="news-present"></div>
                                <div class="next-post-news">
                                    <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                        <span class="post-next">
                                            <div class="label">Bài sau</div>
                                            <div class="title">GoAMILK - Sữa tươi của người việt nam</div>
                                        </span>
                                        <span class="arrow-post-news"><i class="fa fa-angle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="news-care">
                    <div class="news-care-inner">
                        <div class="wrap">
                            <div class="care-header">Có thể bạn quan tâm</div>
                            <div class="care-content">
                                <div class="care-list">
                                    <div class="care-item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                            <div class="care-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-details.png" alt="">
                                            </div>
                                            <div class="care-text">
                                                <div class="title">GoAMILK – SỮA TƯƠI CỦA NGƯỜI VIỆT NAM</div>
                                                <div class="desc"></div>
                                            </div>
                                            <div class="care-meta-data">14/02/2022</div>
                                        </a>
                                    </div>
                                    <div class="care-item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                            <div class="care-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-details.png" alt="">
                                            </div>
                                            <div class="care-text">
                                                <div class="title">Thay Đổi Ngày Tổ Chức Đại Hội Cổ Đông Bất Thường</div>
                                                <div class="desc">Do công tác tổ chức cho Đại hội cổ đông bất thường chưa được</div>
                                            </div>
                                            <div class="care-meta-data">07/01/2022</div>
                                        </a>
                                    </div>
                                    <div class="care-item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/news-details">
                                            <div class="care-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-details.png" alt="">
                                            </div>
                                            <div class="care-text">
                                                <div class="title">Tình Hình Dịch COVID-19 Của Sóc Trăng Đến 22/11: Không Còn Huyện “Vùng Xanh”</div>
                                                <div class="desc">Tình hình dịch COVID-19 tại tỉnh Sóc Trăng tính đến 22/11 (thống kê hết ngày 21/11) vẫn còn rất phức tạp khi mà số ca dương tính Sars-CoV-2 tiếp tục tăng; toàn tỉnh không còn huyện nào là “vùng xanh”….</div>
                                            </div>
                                            <div class="care-meta-data">22/11/2021</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
		<?php } 
		else { ?> 
		<?php if ( have_posts() ) : ?>
			<?php the_content(); 
		endif; ?>
		<?php }
		?>

        <!-- Store Details -->
        <?php if(is_page('store-details')){ ?> 
			<div class="news-details">
                <section class="header">
                    <div class="header-box store-background">
                        <div class="header-title news-details-title">
                            <h1>Cửa hàng cánh đồng xanh</h1>
                            <div class="news-details-desc">
                                <div class="list-text">Địa chỉ: 80 Võ Thị Sáu – quận Hai Bà Trưng – TP. Hà Nội</div>
                                <div class="list-text none-border">Điện thoại: 0912345678</div>
                            </div>
                        </div>
                        
                    </div>
                </section>
                
                <section class="news-details-box">
                    <div class="news-details-inner">
                        <div class="wrap">
                            <div class="desc">
                                <p>Với mong muốn tất cả người tiêu dùng Việt từ Bắc vào Nam, từ thành thị đến nông thôn, miền núi hay hải đảo đều có thể tiếp cận các sản phẩm giàu dinh dưỡng, chất lượng, GoA Milk đã phát triển một hệ thống phân phối rộng khắp, trải dài 63 tỉnh thành trên cả nước. Trong đó, hệ thống cửa hàng mang tên Giấc Mơ Sữa Việt được đầu tư mạnh từ năm 2016 đã liên tục phát triển trong nhiều năm qua về cả độ phủ lẫn chất lượng phục vụ.</p>
                                <p>Năm 2020, mặc dù gặp những ảnh hưởng nhất định từ dịch Covid-19, nhưng số lượng cửa hàng Giấc Mơ Sữa Việt liên tục gia tăng và chính thức vượt mốc 500 cửa hàng vào đầu năm 2021. Giờ đây, tại bất cứ đâu, người tiêu dùng cũng có thể dễ dàng chọn mua các sản phẩm dinh dưỡng của GoA Milk cho tất cả thành viên trong gia đình tại Giấc Mơ Sữa Việt.</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/store-details.png" alt="">
                                <figcaption>Thông tin cửa hàng</figcaption>
                            </div>
                            <div class="maps">
                                <p>Để mua sữa tươi GoA Milk và sữa chua uống GoA yogurt tại 80 Võ Thị Sáu, xin vui lòng gọi đến số điện thoại 09123456789 để được tư vấn. Hoặc quý khách hàng có thể tới cửa hàng theo chỉ dẫn địa lý sau:</p>
                                <div class="maps-inner">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6748029965315!2d105.85264231533193!3d21.005668893941227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac0a8d3eabc5%3A0xbc5d6e1f03c8f80f!2zODAgUC4gVsO1IFRo4buLIFPDoXUsIFRoYW5oIE5ow6BuLCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1655192123443!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                            <div class="social news-details-social">
                                <div class="details-box"><a href=""><i class="fab fa-facebook"></i></a></div>
                                <div class="details-box"><a href=""><i class="fab fa-twitter"></i></a></div>
                                <div class="details-box"><a href=""><i class="fab fa-linkedin"></i></a></div>
                                <div class="details-box"><a href=""><i class="fab fa-pinterest"></i></a></div>
                            </div>
                            <div class="rating-cmt">
                                <div class="wrap rating-border">
                                    <div class="rating">
                                        <div class="rating-left-right"></div>
                                        <div class="rating-data">
                                            <div class="rating-value">
                                                <span class="wpv">0</span>
                                                <span class="wpc">0</span>
                                                <span class="wpt">Các đánh giá</span>
                                            </div>
                                            <div class="rating-title">Article Rating</div>
                                            <div class="stars rating-stars">
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                            </div>
                                            <div class="stars rate-stars">
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path class="wpd-star" d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="rating-left-right"></div>
                                    </div>
                                    <div class="cmt">
                                        <div class="form-wrap">
                                            <div class="form-header">
                                                <div class="flex toggle" id="toggle">
                                                    <i class="far fa-envelope"></i>
                                                    <div class="title">Đăng ký</div>
                                                    <i class="fas fa-caret-down"></i>
                                                </div>
                                                <div class="flex auth">
                                                    <div class="social-login">
                                                        Kết nối với
                                                        <i class="fab fa-google"></i>
                                                    </div>
                                                    <div class="login">
                                                        <a href="#">
                                                            <i class="fas fa-sign-in-alt"></i>
                                                            Đăng nhập
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="subcribe">
                                                <form action="post">
                                                    <div class="subc-info">Thông báo về</div>
                                                    <div class="subc-option">
                                                        <select name="subc_option">
                                                            <option value="post">Theo dõi bình luận mới nhất</option>
                                                            <option value="all_comment">Trả lời mới nhất cho nhận xét của tôi</option>
                                                        </select>
                                                    </div>
                                                    <div class="subc-email">
                                                        <input class="email" name="subc_email" type="text" placeholder="Email" required>
                                                    </div>
                                                    <div class="subc-button">
                                                        <input class="button" type="submit" value=">">
                                                    </div>
                                                    <div class="subc-captcha">
                                                        <div class="recaptcha">
                                                            <div style="width: 304px; height: 78px;">
                                                                <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LccEIkcAAAAAB2ckEoPDtqFZ_uTF2yjUkhCo7fb&amp;co=aHR0cHM6Ly9ldmVyZ3Jvd3RobWlsay52bjo0NDM.&amp;hl=en&amp;v=g9jXH0OtfQet-V0Aewq23c7K&amp;theme=light&amp;size=normal&amp;cb=jtr28x42wxss" width="304" height="78" role="presentation" name="a-gvqi07f4kk5m" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"></iframe>
                                                                <textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="form-cmt">
                                                <div class="textarea-wrap">
                                                    <div class="avatar">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar.jpg" alt="">
                                                    </div>
                                                    <div class="editor">
                                                        <div class="editor-text">
                                                            <textarea id="editor-text" name="editor" cols="30" rows="10" placeholder="Hãy trở thành người đầu tiên bình luận!"></textarea>
                                                        </div>
                                                        <div class="editor-toolbar">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-foot">
                                                <div class="form-foot-left">
                                                    <div class="form-name form-input">
                                                        <div class="icon">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                        <input type="text" name="name" require placeholder="Name*">
                                                    </div>
                                                    <div class="form-email form-input">
                                                        <div class="icon">
                                                            <i class="fas fa-at"></i>
                                                        </div>
                                                        <input type="email" name="email" require placeholder="Email*">
                                                    </div>
                                                    <div class="form-website form-input">
                                                        <div class="icon">
                                                            <i class="fas fa-link"></i>
                                                        </div>
                                                        <input type="text" name="website" require placeholder="Website*">
                                                    </div>
                                                </div>
                                                <div class="form-foot-right">
                                                    <div class="recaptcha">
                                                        <div style="width: 304px; height: 78px;">
                                                            <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LccEIkcAAAAAB2ckEoPDtqFZ_uTF2yjUkhCo7fb&amp;co=aHR0cHM6Ly9ldmVyZ3Jvd3RobWlsay52bjo0NDM.&amp;hl=en&amp;v=g9jXH0OtfQet-V0Aewq23c7K&amp;theme=light&amp;size=normal&amp;cb=jtr28x42wxss" width="304" height="78" role="presentation" name="a-gvqi07f4kk5m" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation"></iframe>
                                                            <textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-submit">
                                                        <div class="check" id="check">
                                                            <i class="fas fa-bell bell"></i>
                                                            <i class="fas fa-bell-slash unbell active-check"></i>
                                                        </div>
                                                        <input class="submit-post" type="submit" name="submit" value="Post Comment">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-threads">
                                            <div class="threads-header">
                                                <div class="threads-info">
                                                    <span class="wptc">0</span>
                                                    Comments
                                                </div>
                                                <div class="space"></div>
                                                <div class="threads-filter">
                                                    <div class="filter filter-left">
                                                        <i class="fas fa-bolt"></i>
                                                    </div>
                                                    <div class="filter filter-right">
                                                        <i class="fas fa-fire"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="threads-list">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="news-details-new">
                        <div class="inner">
                            <div class="wrap post-news store-details">
                                <div class="prev-post-news ">
                                    <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                        <span class="arrow-post-news"><i class="fa fa-angle-left"></i></span>
                                        <span class="post-prev">
                                            <div class="label">Cửa hàng cánh đồng xanh</div>
                                            <div class="title">80 VÕ THỊ SÁU – QUẬN HAI BÀ TRƯNG – TP. HÀ NỘI</div>
                                        </span>
                                    </a>
                                </div>
                                <div class="news-present"></div>
                                <div class="next-post-news">
                                    <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                        <span class="post-next">
                                            <div class="label">Cửa hàng cánh đồng xanh</div>
                                            <div class="title">80 VÕ THỊ SÁU – QUẬN HAI BÀ TRƯNG – TP. HÀ NỘI</div>
                                        </span>
                                        <span class="arrow-post-news"><i class="fa fa-angle-right"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="news-care">
                    <div class="news-care-inner">
                        <div class="wrap">
                            <div class="care-header">Có thể bạn quan tâm</div>
                            <div class="care-content">
                                <div class="care-list">
                                    <div class="care-item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="care-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/store-details.png" alt="">
                                            </div>
                                            <div class="care-text">
                                                <div class="title">Cửa hàng cánh đồng xanh</div>
                                                <div class="desc">Với mong muốn tất cả người tiêu dùng Việt từ Bắc vào Nam, từ thành thị đến nông thôn, miền núi hay hải đảo đều có thể tiếp cận các sản phẩm giàu dinh dưỡng, chất lượng...</div>
                                            </div>
                                            <div class="care-meta-data">0912345678</div>
                                        </a>
                                    </div>
                                    <div class="care-item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="care-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/store-details.png" alt="">
                                            </div>
                                            <div class="care-text">
                                                <div class="title">Cửa hàng cánh đồng xanh</div>
                                                <div class="desc">Với mong muốn tất cả người tiêu dùng Việt từ Bắc vào Nam, từ thành thị đến nông thôn, miền núi hay hải đảo đều có thể tiếp cận các sản phẩm giàu dinh dưỡng, chất lượng...</div>
                                            </div>
                                            <div class="care-meta-data">0912345678</div>
                                        </a>
                                    </div>
                                    <div class="care-item">
                                        <a href="<?php echo get_template_directory_uri(); ?>/store-details">
                                            <div class="care-img">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/store-details.png" alt="">
                                            </div>
                                            <div class="care-text">
                                                <div class="title">Cửa hàng cánh đồng xanh</div>
                                                <div class="desc">Với mong muốn tất cả người tiêu dùng Việt từ Bắc vào Nam, từ thành thị đến nông thôn, miền núi hay hải đảo đều có thể tiếp cận các sản phẩm giàu dinh dưỡng, chất lượng...</div>
                                            </div>
                                            <div class="care-meta-data">0912345678</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
		<?php } 
		else { ?> 
		<?php if ( have_posts() ) : ?>
			<?php the_content(); 
		endif; ?>
		<?php }
		?>

</main><!-- #main -->
<?php
get_footer();