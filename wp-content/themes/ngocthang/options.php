<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {
	
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'ngocthang'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all the taxonomy into an array
	$options_taxonomy = array();
	$terms = get_terms(array(
		'taxonomy'	=>	'product_cat',
		'parent'	=>	0
	));

	if ( $terms && !is_wp_error( $terms ) ){
		$options_taxonomy[''] ='Vui lòng chọn danh mục';
		foreach ( $terms as $term ) {
			$options_taxonomy[$term->term_id] = $term->name;
		}
	}

	
		// Pull all the tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}
		// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	$options = array();
	$imagepath =  get_template_directory_uri() . '/images/';

	
	$options[] = array(
		'name' => __('Tổng quan', 'ngocthang'),
		'type' => 'heading');
	$options[] = array(
		'desc' => __('
			<strong>Thông tin website</strong>
			<ul>
			<li><i>Giao diện đang sử dụng:</i> '.wp_get_theme()->get('Name').'</li>
			<li><i>Mô tả:</i> '.wp_get_theme()->get('Description').'</li>
			<li><i>Thiết kế bởi:</i> '.wp_get_theme()->get('Author').'</li>
			<li><i>Phiên bản:</i> '.wp_get_theme()->get('Version').'</li>
			<li><i>Phát triển nền tảng:</i> Wordpress '.get_bloginfo('version').'</li>
			</ul>

			', 'ngocthang'),
		'type' => 'info');
	/**
	 * Thiết lập thông tin website
	 */
	$options[] = array(
		'name' => __('Info Company', 'ngocthang'),
		'type' => 'heading');	

	$options[] = array(
		'name' => __('Logo', 'ngocthang'),
		'desc' => __('Upload your logo here', 'ngocthang'),
		'id' => 'logo',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Giới thiệu ở footer', 'ngocthang'),
		'desc' => __('Đoạn giới thiệu', 'ngocthang'),
		'id'   => 'footer-info',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('Ảnh khuyến mãi trong sản phẩm','ngocthang'),
		'id'   => 'anh-khuyen-mai',
		'type' => 'upload'
	);

	/**
	 * Thiết lập trang chủ
	 */
	$options[] = array(
		'name' => __('Home', 'ngocthang'),
		'type' => 'heading');
	
	$options[] =array(
		'name' => __('Hastag', 'cosmetic'),
		'type' => 'info'
	);
	for($i=1;$i<=10;$i++){
		$options[] = array(
			'desc' => __('Hastag '.$i, 'cosmetic'),
			'id' => 'hastag'.$i,
			'type' => 'text',
		);
	}
	
	$options[] =array(
		'name' => __('Ảnh Footer', 'cosmetic'),
		'type' => 'info'
	);
	for($i=1;$i<=6;$i++){
		$options[] = array(
			'desc' => __('Ảnh footer '.$i, 'cosmetic'),
			'id' => 'image-footer-'.$i,
			'type' => 'upload',
		);
	}

	/**
	 * Thiết lập Popup
	 */
	$options[] = array(
		'name' => __('Modal', 'ngocthang'),
		'type' => 'heading');
	$options[] = array(
		'name' => __('Image', 'ngocthang'),
		'desc' => __('Upload your Image here', 'ngocthang'),
		'id' => 'popup_image',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
	$options[] = array(
		'name' => __('Set Minutes', 'ngocthang'),
		'desc' => __('Cài đặt sau bao nhiêu phút sẽ hiển thị Popup', 'ngocthang'),
		'id' => 'popup_minutes',
		'std' => '40',
		'type' => 'text',);


	// Thiết lập category
	$options[] = array(
		'name' => __('Các dịch vụ', 'ngocthang'),
		'type' => 'heading');

	$options[] =array(
		'name' => __('Dịch vụ chính', 'ngocthang'),
		'type' => 'info'
	);
	for($i=1;$i<=6;$i++){
		$options[] = array(
			'desc' => __('Link trang '.$i, 'ngocthang'),
			'id' => 'link_page_'.$i,
			'type' => 'select',
			'options' => $options_pages
		);
		$options[] = array(
		
			'id'   => 'content_page_'.$i,
			'type' => 'textarea'
		);
		$options[] = array(
		
		'id'   => 'img_page_'.$i,
		'type' => 'upload'
	);
	}


	/**
	 * Thiết lập mạng xã hội
	 */
	$options[] = array(
		'name' => __('Social Settings', 'ngocthang'),
		'type' => 'heading');
	
	$options[] = array(
		'desc' => __('Cài đặt mạng xã hội', 'ngocthang'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Facebook', 'ngocthang'),
		'desc' => __('Địa chỉ Facebook', 'ngocthang'),
		'id' => 'facebook',
		'std' => 'https://www.facebook.com/ngocthang.net/',
		'class' => 'mini',
		'type' => 'text',
		'subtype' => 'url');
	
	$options[] = array(
		'name' => __('Instagram', 'ngocthang'),
		'desc' => __('Địa chỉ Instagram', 'ngocthang'),
		'id' => 'instagram',
		'std' => '',
		'class' => 'mini',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Skype', 'ngocthang'),
		'desc' => __('Nick Skype', 'ngocthang'),
		'id' => 'skype',
		'std' => '',
		'class' => 'mini',
		'type' => 'text',
		'subtype' => 'url');

	$options[] = array(
		'name' => __('Youtube', 'ngocthang'),
		'desc' => __('Địa chỉ Youtube', 'ngocthang'),
		'id' => 'youtube',
		'std' => '',
		'class' => 'mini',
		'type' => 'text',
		'subtype' => 'url');	
	/**
	 * Thiết lập liên hệ
	 */
	$options[] = array(
		'name' => __('Contact Details', 'ngocthang'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Image', 'ngocthang'),
		'desc' => __('Upload your Image here', 'ngocthang'),
		'id' => 'logo_footer',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
	$options[] = array(
		'desc' => __('Tên công ty', 'ngocthang'),
		'id' => 'cong-ty',
		'std' => 'Công Ty TNHH MTV Công Nghệ Và Truyền Thông Ngọc Thắng',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Địa chỉ', 'ngocthang'),
		'id' => 'dia-chi',
		'std' => 'Trần Phú - Hà Đông',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Hotline', 'ngocthang'),
		'id' => 'hotline',
		'std' => '1900 89 21',
		'type' => 'text');


	$options[] = array(
		'desc' => __('Điện thoại-1', 'ngocthang'),
		'id' => 'dien-thoai-1',
		'std' => '098 148 1368',
		'type' => 'text');


	$options[] = array(
		'desc' => __('Email', 'ngocthang'),
		'id' => 'email',
		'std' => sanitize_email( 'lienhe@ngocthang.net' ),
		'type' => 'text',
		'subtype' => 'email');	
	$options[] = array(
		'desc' => __('Website', 'ngocthang'),
		'id' => 'website',
		'std' => 'www.ngocthang.net',
		'type' => 'text',
	);

	return $options;
}