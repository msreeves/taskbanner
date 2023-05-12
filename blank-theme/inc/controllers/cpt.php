<?php
function create_posttype() {
  
    register_post_type( 'promo',
        array(
            'labels' => array(
                'name' => __( 'Promo' ),
                'singular_name' => __( 'Promo' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'promos'),
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-format-image',
  
        )
    );
}
add_action( 'init', 'create_posttype' );