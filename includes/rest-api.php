<?php
function _pit_register_fields() {
    register_rest_field( 'post',
        'author_name',
        array(
            'get_callback' => '_pit_get_author_name',
            'update_callback' => null,
            'schema' => null,
        )
    );
}

function _pit_get_author_name( $object, $field_name, $request ) {
    return get_the_author_meta('display_name');
}
add_action( 'rest_api_init', '_pit_register_fields' );


// add_filter( 'rest_prepare_post', '_pit_post_json_fields', 12, 3 );
// function _pit_post_json_fields( $data, $post, $context ) {
// 	return [
//         'id'                => $data->data['id'],
//         'date'              => $data->data['date'],
//         'slug'              => $data->data['slug'],
//         'type'              => $data->data['type'],
//         'link'              => $data->data['link'],
//         'title'             => $data->data['title']['rendered'],
//         'author_name'       => $data->data['author_name'],
//         'featured_media'    => $data->data['acf']['featured_media'],
//         'featured_excerpt'  => $data->data['acf']['featured_excerpt'],
//         'full_post'         => $data->data['acf']['full_post'],
//         'categories'        => $data->data['acf']['categories'],
//         'tags'              => $data->data['acf']['tags'],
//         'facebook_excerpt'  => $data->data['acf']['facebook_excerpt'],
//         'facebook_image'    => $data->data['acf']['facebook_image'],
//         'twitter_excerpt'   => $data->data['acf']['twitter_excerpt'],
// 	];
// }

// add_filter( 'rest_prepare_products', '_pit_product_json_fields', 12, 3 );
// function _pit_product_json_fields( $data, $post, $context ) {
//
// 	return [
//         'id'                => $data->data['id'],
//         'date'              => $data->data['date'],
//         'slug'              => $data->data['slug'],
//         'type'              => $data->data['type'],
//         'link'              => $data->data['link'],
//         'flavor'            => ( ! empty( $data->data['acf']['flavor'] ) ) ? $data->data['acf']['flavor'] : '',
//         'frosting'          => ( ! empty( $data->data['acf']['frosting'] ) ) ? $data->data['acf']['frosting'] : '',
//         'full_image'        => $data->data['acf']['full_image'],
//         'product_name'      => $data->data['acf']['product_name'],
//         'product_desc'      => $data->data['acf']['product_desc'],
//         'reg_price'         => $data->data['acf']['reg_price'],
//         'sale_price'        => $data->data['acf']['sale_price'],
//         'product_cats'      => $data->data['acf']['product_cats'],
//         'allergies'         => $data->data['acf']['allergies'],
//         'product_sets'      => $data->data['acf']['product_sets'],
//         'min_order_amount'  => $data->data['acf']['min_order_amount'],
//         'max_order_amount'  => $data->data['acf']['max_order_amount'],
//         'stock_status'      => $data->data['acf']['stock_status'],
//         'wp_category'       => $data->data['acf']['wp_category'],
// 	];
//
// }

// add_filter( 'rest_prepare_product_cat', '_pit_product_category_json_fields', 12, 3 );
// function _pit_product_category_json_fields( $data, $post, $context ) {
//
// 	return [
//         'id'                => $data->data['id'],
//         'count'             => $data->data['count'],
//         'description'       => $data->data['description'],
//         'link'              => $data->data['link'],
//         'name'              => $data->data['name'],
//         'slug'              => $data->data['slug'],
//         'taxonomy'          => $data->data['taxonomy'],
// 	];
// }
