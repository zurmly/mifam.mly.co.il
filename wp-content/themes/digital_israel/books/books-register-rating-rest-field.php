<?php
function register_books_rest_fields() {
	register_rest_field(
		'books',
		'rating',
		array(
			'get_callback'    => function ( $data ) {
				return (int) get_post_meta( $data['id'], '_book_rating', true );
			},
			'update_callback' => function ( $value, $post ) {
				$value = intval( $value );
				if ( $value >= 0 && $value <= 5 ) {
					update_post_meta( $post->ID, '_book_rating', $value );
				}
			},
			'schema'          => array(
				'description' => __( 'The rating, 0 - 5, for the book.' ),
				'type'        => 'integer'
			),
		)
	);
}

add_action( 'rest_api_init', 'register_books_rest_fields' );