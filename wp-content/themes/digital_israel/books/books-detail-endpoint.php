<?php
function book_details( $request ) {
	$post_id = (int) $request['id'];


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

	global $post;
	$post = get_post( $post_id );
	setup_postdata( $post );

	if ( null !== $post ) {
		$return = array(
			'ID'        => $post_id,
			'title'     => get_the_title(),
			'thumbnail' => $thumbnail,
			'rating'    => $rating,
			'content'   => get_the_content(),
		);

		wp_reset_postdata( $post );
	}

	$response = new WP_REST_Response( $return );

	$response->header( 'Access-Control-Allow-Origin', apply_filters( 'access_control_allow_origin', '*' ) );
	$response->header( 'Cache-Control', 'max-age=' . apply_filters( 'api_max_age', WEEK_IN_SECONDS ) );

	return $response;
}