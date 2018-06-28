<?php
function register_books_cpt() {

	$args = array(
		'labels'          => array(
			'name'          => _x( 'Books', 'post type general name' ),
			'singular_name' => _x( 'Book', 'post type singular name' ),
		),
		'description'     => '',
		'hierarchical'    => false,
		'menu_position'   => null,
		// No admin UI or archive pages
		'public'          => true,
		// Expose through REST API
		'show_in_rest'    => true,
		'rest_base'       => 'books',
		'capability_type' => 'post',
		'supports'        => array( 'title', 'editor', 'custom-fields' )
	);
	register_post_type( 'books', $args );
}

add_action( 'init', 'register_books_cpt' );

function add_book_info_metabox() {
	add_meta_box( 'book-info-meta-box', 'Book Info', 'book_info_metabox_markup', 'books', 'advanced', 'high', null );
}

add_action( 'add_meta_boxes', 'add_book_info_metabox' );

function book_info_metabox_markup( $object ) {
	wp_nonce_field( basename( __FILE__ ), 'book-info-meta-box-nonce' );

	?>
	<div>
		<label for='_book_rating'>Book Rating</label>
		<select name='_book_rating'>
			<?php
			$option_values = array( 0, 1, 2, 3, 4, 5 );

			foreach ( $option_values as $key => $value ) {
				if ( $value == get_post_meta( $object->ID, '_book_rating', true ) ) {
					?>
					<option selected><?php echo $value; ?></option>
					<?php
				} else {
					?>
					<option><?php echo $value; ?></option>
					<?php
				}
			}
			?>
		</select>
	</div>
	<?php
}

function save_book_info_metabox( $post_id, $post, $update ) {
	if ( ! isset( $_POST['book-info-meta-box-nonce'] ) || ! wp_verify_nonce( $_POST['book-info-meta-box-nonce'], basename( __FILE__ ) ) ) {
		return $post_id;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}

	if ( 'books' != $post->post_type ) {
		return $post_id;
	}

	$book_rating = '';

	if ( isset( $_POST['_book_rating'] ) ) {
		$book_rating = (int) $_POST['_book_rating'];
	}
	update_post_meta( $post_id, '_book_rating', $book_rating );

}

add_action( 'save_post', 'save_book_info_metabox', 10, 3 );