<?php
add_filter( 'rwmb_meta_boxes', function ( $meta_boxes ) {

    $meta_boxes[] = array(
        'title'  => 'Thông tin',
        'post_types' => array( 'page' ),
        'fields' => array(
            array(
                'id'   => 'logo-doitac',
                'name' => 'Logo đối tác',
                'type'             => 'image_advanced',
            ),

        ),
    );

    $meta_boxes[] = array(
        'title'  => 'Thông tin',
        'post_types' => array( 'post' ),
        'fields' => array(
            array(
                'id'   => 'linhvuc',
                'name' => 'Lĩnh Vực',
                'type'             => 'text',
            ),

        ),
    );


    $meta_boxes[] = array(
        'title'  => 'Lời nhận xét',
        'post_types' => array( 'post' ),
        'fields' => array(
            array(
                'id'   => 'nghenghiep',
                'name' => 'Nghề nghiệp',
                'type'             => 'text',
            ),

        ),
    );

    return $meta_boxes;
});