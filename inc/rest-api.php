<?php


add_action( 'rest_api_init', 'add_thumbnail_to_JSON' );

function add_thumbnail_to_JSON() {
//Add featured image
register_rest_field( 
    'post', // Where to add the field (Here, blog posts. Could be an array)
    'featured_image_src', // Name of new field (You can call this anything)
    array(
        'get_callback'    => 'get_image_src',
        'update_callback' => null,
        'schema'          => null,
         )
    );
}

function get_image_src( $object, $field_name, $request ) {
  $feat_img_array = wp_get_attachment_image_src(
    $object['featured_media'], // Image attachment ID
    'large',  // Size.  Ex. "thumbnail", "large", "full", etc..
    true // Whether the image should be treated as an icon.
  );
  return $feat_img_array[0];
}

function wpse_287931_register_categories_names_field() {

    register_rest_field( 'post',
        'categories_names',
        array(
            'get_callback'    => 'wpse_287931_get_categories_names',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}

add_action( 'rest_api_init', 'wpse_287931_register_categories_names_field' );

function wpse_287931_get_categories_names( $object, $field_name, $request ) {

    $formatted_categories = array();

    $categories = get_the_category( $object['id'] );

    foreach ($categories as $category) {
        $formatted_categories[] = $category->name;
    }

    return $formatted_categories;
}