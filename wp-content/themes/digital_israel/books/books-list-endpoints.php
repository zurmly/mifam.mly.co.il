<?php
function list_books( $request ) {

	$args = $request['query_args'];

	$book_args = array(
		'post_type'           => 'books',
		'post_status'         => 'publish',
		'posts_per_page'      => 25,
		'ignore_sticky_posts' => true,
	);

	$standard_params = array(
		'order',
		'orderby',
		'author',
		'post_type',
		'ignore_sticky_posts',
		'paged',
		'page',
		'nopaging',
		'posts_per_page',
		's',
	);

	foreach ( $standard_params as $standard_param ) {
		if ( isset( $args[ $standard_param ] ) && ! empty( $args[ $standard_param ] ) ) {
			$book_args[ $standard_param ] = $args[ $standard_param ];
		}
	}

	$the_query = new WP_Query( $book_args );

	$return = array(
		'total'          => (int) $the_query->found_posts,
		'count'          => (int) $the_query->post_count,
		'pages'          => (int) $the_query->max_num_pages,
		'posts_per_page' => (int) $book_args['posts_per_page'],
		'query_args'     => $book_args,
		'books'          => array(),
	);

	if ( $the_query->have_posts() ):

		$i = 0;

		while ( $the_query->have_posts() ):
			$the_query->the_post();
			$post_id = get_the_ID();

			$rating = get_post_meta( $post_id, '_book_rating', true );
			$rating = ( empty( $rating ) ) ? false : (int) $rating;

			$thumbnail = get_post_thumbnail_id( $post_id );
			if ( empty( $thumbnail ) ) {
				$thumbnail = false;
			} else {
				$thumbnail = wp_get_attachment_image_src( $thumbnail, 'thumbnail' );
				if ( is_array( $thumbnail ) ) {
					$thumbnail = array(
						'src'    => $thumbnail[0],
						'width'  => $thumbnail[1],
						'height' => $thumbnail[2],
					);
				}
			}

			$return['books'][ $i ] = array(
				'ID'        => $post_id,
				'title'     => get_the_title( $post_id ),
				'rating'    => $rating,
				'thumbnail' => $thumbnail,
			);

			$i ++;

		endwhile;

		wp_reset_postdata();

	endif;


	$response = new WP_REST_Response( $return );

	$response->header( 'Access-Control-Allow-Origin', apply_filters( 'access_control_allow_origin', '*' ) );
	$response->header( 'Cache-Control', 'max-age=' . apply_filters( 'api_max_age', WEEK_IN_SECONDS ) );

	return $response;
}