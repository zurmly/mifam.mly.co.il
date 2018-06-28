<?php
function register_books_rest_routes() {

	register_rest_route( 'app/v1', '/books', array(
		'methods'  => 'GET',
		'callback' => 'list_books',
		'args'     => array(
			'query_args' => array(
				'default' => array(),
			),
		),
	) );

	register_rest_route( 'app/v1', '/books/(?P<id>\d+)', array(
		'methods'  => 'GET',
		'callback' => 'book_details',
		'args'     => array(
			'id' => array(
				'validate_callback' => function ( $param, $request, $key ) {
					if( ! is_numeric( $param ) ){
						return new WP_Error( 'books_bad_post_id', __('Invalid post ID format. Please pass an integer.'), array( 'status' => 400 ) );
					}
					$post_id = (int) $param;
					if ( false === get_post_status( $post_id ) || 'books' !== get_post_type( $post_id ) ) {
						return new WP_Error( 'books_bad_post_id', __( 'Invalid books post ID.' ), array( 'status' => 400 ) );
					}
					return true;
				}
			),
		),
	) );

}

add_action( 'rest_api_init', 'register_books_rest_routes' );