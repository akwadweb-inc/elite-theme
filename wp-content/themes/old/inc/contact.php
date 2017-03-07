<?php 
/**
 * Elite functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Elite
 */
	/*
======================================================================================
    Contact form
======================================================================================
 */

/**
 * register Contact custom post type
 */

    function elite_register_Messages(){
        $plural = 'Messages';
        $singular = 'Message';
        
            $labels = array(
                'name'                => __( $plural, 'elite' ),
                'singular_name'       => __( $singular, 'elite' ),
                'add_new'             => __( 'Add New '.$singular, 'elite'),
                'add_new_item'        => __( 'Add New '.$singular , 'elite' ),
                'edit_item'           => __( 'Edit ' . $singular, 'elite' ),
                'new_item'            => __( 'New ' . $singular, 'elite' ),
                'view_item'           => __( 'View ' .$singular, 'elite' ),
                'search_items'        => __( 'Search '. $plural, 'elite' ),
                'not_found'           => __( 'No '. $plural. ' found', 'elite' ),
                'not_found_in_trash'  => __( 'No '. $plural .' found in Trash', 'elite' ),
                'parent_item_colon'   => __( 'Parent ' .$singular .' :', 'elite' ),
                'menu_name'           => __( $plural , 'elite' ),
            );
        
            $args = array(
                'labels'              => $labels,
                'hierarchical'        => false,
                'description'         => 'description',
                'taxonomies'          => array(),
                'public'              => true,
                'show_ui'             => true,
                'show_in_menu'        => true,
                'show_in_admin_bar'   => true,
                'menu_position'       => 22,
                'menu_icon'           => 'dashicons-email',
                'show_in_nav_menus'   => true,
                'publicly_queryable'  => true,
                'exclude_from_search' => false,
                'has_archive'         => true,
                'query_var'           => true,
                'can_export'          => true,
                'rewrite'             => true,
                'capability_type'     => 'post',
                'supports'            => array(
                    'title','editor', 'author'
                    )
            );
        
            register_post_type( $singular, $args );
        }
        
     

    add_action('init', 'elite_register_Messages');

    /*
    Edit Contact Custom Post Columns
     */
    add_filter('manage_message_posts_columns','elite_set_message_columns');
    add_action('manage_message_posts_custom_column','elite_message_custom_columns',10,2);
    add_action('add_meta_boxes', 'elite_contact_add_metabox');
    add_action('save_post', 'elite_save_contact_email_data');

    function elite_set_message_columns($columns){
        $newColumns = array();
        $newColumns['title'] = 'Full Name' ;
        $newColumns['message'] = 'Message' ;
        $newColumns['email'] = 'Email' ;
        $newColumns['date'] = 'Date' ;
        return $newColumns;
     }

     function elite_message_custom_columns($column , $post_id){
     	switch( $column ){
     		case 'message';
     		echo get_the_excerpt();
     		break;

     		case 'email';
     		$email = get_post_meta($post_id, '_contact_email_value_key', true );
			echo '<a href="mailto:' .$email . '" >'. $email . '</a>';
     		break;
     	}
     }

     /*
     Contact meta boxes
      */
     function elite_contact_add_metabox(){
     	add_meta_box('contact-email', 'User Email', 'elite_contact_email_callback', 'message','side');
     }

     function elite_contact_email_callback($post){
     	wp_nonce_field( 'elite_save_contact_email_data', 'elite_contact_email_meta_box_nonce' );

     	$value = get_post_meta( $post->ID, '_contact_email_value_key', true );
     	echo '<label for="elite_contact_email_field">User Email Address: </label>';
     	echo '<input type="email" id="elite_contact_email_field" name="elite_contact_email_field" value="'. esc_attr($value) .'" size="25" />';
     }

     function elite_save_contact_email_data($post_id){
     	if ( ! isset( $_POST['elite_contact_email_meta_box_nonce'] ) ) {
     		return ;
     	}

     	if( ! wp_verify_nonce( $_POST['elite_contact_email_meta_box_nonce'] , 'elite_save_contact_email_data' ) ){
     		return;
     	}

     	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ){
     		return;
     	}

     	if ( ! current_user_can('edit_post', $post_id) ){
     		return;
     	}

     	if ( ! isset( $_POST['elite_contact_email_field'] ) ){
     		return ;
     	}

     	$mydata = sanitize_text_field($_POST['elite_contact_email_field']) ;
     	update_post_meta( $post_id, '_contact_email_value_key',  $mydata);
     }


/*
Contact form Shortcode
 */
function elite_contact_form( $atts, $content = null){
	// [contact_form]
	
	// get the attributes
	$atts = shortcode_atts(
		array(),
		$atts,
		'contact_form'
		);

	ob_start();
	get_template_part('template-parts/content', 'contact');
	return ob_get_clean();
}

add_shortcode( 'contact_form', 'elite_contact_form' );


/*
======================================================================================
    Contact form
======================================================================================
 */
