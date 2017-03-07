<?php 
	/**
	* Registers a new post type
	* @uses $wp_post_types Inserts new post type object into the list
	*
	* @param string  Post type key, must not exceed 20 characters
	* @param array|string  See optional args description above.
	* @return object|WP_Error the registered post type object, or an error object
	*/

    /**
	 * register about custom post type
     */
	function elite_register_about() {
	
		$labels = array(
			'name'                => __( 'About', 'elite' ),
			'singular_name'       => __( 'About', 'elite' ),
			'add_new'             => __( 'Add New About', 'elite', 'elite' ),
			'add_new_item'        => __( 'Add New About', 'elite' ),
			'edit_item'           => __( 'Edit About', 'elite' ),
			'new_item'            => __( 'New About', 'elite' ),
			'view_item'           => __( 'View About', 'elite' ),
			'search_items'        => __( 'Search About', 'elite' ),
			'not_found'           => __( 'No About found', 'elite' ),
			'not_found_in_trash'  => __( 'No About found in Trash', 'elite' ),
			'parent_item_colon'   => __( 'Parent About:', 'elite' ),
			'menu_name'           => __( 'About Section', 'elite' ),
		);
	
		$args = array(
			'labels'                   => $labels,
			'hierarchical'        => false,
			'description'         => 'description',
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 20,
			'menu_icon'           => 'dashicons-nametag',
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => false,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
  			'supports'            => array(
				'title', 'thumbnail',
				
				)
		);
	
		register_post_type( 'about', $args );
	}
	
	add_action( 'init', 'elite_register_about' );

/**
 * register Services custom post type
 */

    function elite_register_services(){
    	$plural = 'services';
    	$singular = 'service';
        
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
        		'menu_name'           => __( $plural. ' Section', 'elite' ),
        	);
        
        	$args = array(
        		'labels'                   => $labels,
        		'hierarchical'        => false,
        		'description'         => 'description',
        		'taxonomies'          => array(),
        		'public'              => true,
        		'show_ui'             => true,
        		'show_in_menu'        => true,
        		'show_in_admin_bar'   => true,
        		'menu_position'       => 21,
        		'menu_icon'           => 'dashicons-admin-multisite',
        		'show_in_nav_menus'   => true,
        		'publicly_queryable'  => true,
        		'exclude_from_search' => false,
        		'has_archive'         => true,
        		'query_var'           => true,
        		'can_export'          => true,
        		'rewrite'             => true,
        		'capability_type'     => 'post',
        		'supports'            => array(
        			'title', 'editor', 
        			 'post-formats'
        			)
        	);
        
        	register_post_type( 'service', $args );
        }
        
     

    add_action('init', 'elite_register_services');


/**
 * register Team custom post type
 */

    function elite_register_team(){
    	$plural = 'Team';
    	$singular = 'Team Member';
        
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
        		'menu_name'           => __( $plural. ' Section', 'elite' ),
        	);
        
        	$args = array(
        		'labels'                   => $labels,
        		'hierarchical'        => false,
        		'description'         => 'description',
        		'taxonomies'          => array(),
        		'public'              => true,
        		'show_ui'             => true,
        		'show_in_menu'        => true,
        		'show_in_admin_bar'   => true,
        		'menu_position'       => 21,
        		'menu_icon'           => 'dashicons-groups',
        		'show_in_nav_menus'   => true,
        		'publicly_queryable'  => true,
        		'exclude_from_search' => false,
        		'has_archive'         => true,
        		'query_var'           => true,
        		'can_export'          => true,
        		'rewrite'             => true,
        		'capability_type'     => 'post',
        		'supports'            => array(
        			'title', 'editor', 
        			 'post-formats','thumbnail'
        			)
        	);
        
        	register_post_type( $singular, $args );
        }
        
     

    add_action('init', 'elite_register_team');



/**
 * register Works custom post type
 */

    function elite_register_works(){
    	$plural = 'Works';
    	$singular = 'Work';
        
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
        		'menu_name'           => __( $plural. ' Section', 'elite' ),

        	);
        
        	$args = array(
        		'labels'                   => $labels,
        		'hierarchical'        => false,
        		'description'         => 'description',
        		'taxonomies'          => array('category',),
        		'public'              => true,
        		'show_ui'             => true,
        		'show_in_menu'        => true,
        		'show_in_admin_bar'   => true,
        		'menu_position'       => 22,
        		'menu_icon'           => 'dashicons-images-alt',
        		'show_in_nav_menus'   => true,
        		'publicly_queryable'  => true,
        		'exclude_from_search' => false,
        		'has_archive'         => false,
        		'query_var'           => true,
        		'can_export'          => true,
        		'rewrite'             => true,
        		'capability_type'     => 'post',
        		'supports'            => array(
        			'title', 'editor', 
        			 'post-formats','thumbnail'
        			)
        	);
        
        	register_post_type( $singular, $args );
        }
        
     

    add_action('init', 'elite_register_works');
 
 /**
 * register Clients custom post type
 */

    function elite_register_clients(){
    	$plural = 'Clients';
    	$singular = 'Client';
        
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
        		'menu_name'           => __( $plural. ' Section', 'elite' ),
        	);
        
        	$args = array(
        		'labels'                   => $labels,
        		'hierarchical'        => false,
        		'description'         => 'description',
        		'taxonomies'          => array(),
        		'public'              => true,
        		'show_ui'             => true,
        		'show_in_menu'        => true,
        		'show_in_admin_bar'   => true,
        		'menu_position'       => 22,
        		'menu_icon'           => 'dashicons-universal-access',
        		'show_in_nav_menus'   => true,
        		'publicly_queryable'  => true,
        		'exclude_from_search' => false,
        		'has_archive'         => true,
        		'query_var'           => true,
        		'can_export'          => true,
        		'rewrite'             => true,
        		'capability_type'     => 'post',
        		'supports'            => array(
        			'title',
                'thumbnail'
        			)
        	);
        
        	register_post_type( $singular, $args );
        }
        
     

    add_action('init', 'elite_register_clients');




 /**
 * register Clients custom post type
 */

    function elite_register_testimonial(){
        $plural = 'Testimonials';
        $singular = 'Testimonial';
        
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
                'menu_name'           => __( $plural. ' Section', 'elite' ),
            );
        
            $args = array(
                'labels'                   => $labels,
                'hierarchical'        => false,
                'description'         => 'description',
                'taxonomies'          => array(),
                'public'              => true,
                'show_ui'             => true,
                'show_in_menu'        => true,
                'show_in_admin_bar'   => true,
                'menu_position'       => 22,
                'menu_icon'           => 'dashicons-format-quote',
                'show_in_nav_menus'   => true,
                'publicly_queryable'  => true,
                'exclude_from_search' => false,
                'has_archive'         => true,
                'query_var'           => true,
                'can_export'          => true,
                'rewrite'             => true,
                'capability_type'     => 'post',
                'supports'            => array(
                    'title','editor'
                    )
            );
        
            register_post_type( $singular, $args );
        }


    /*
    repostition featured image in clients post type
     */
      add_action('do_meta_boxes', 'elite_clients_move_meta_box');

function elite_clients_move_meta_box(){
    remove_meta_box( 'postimagediv', 'Client', 'core' );
     add_meta_box('postimagediv', __('Client\'s LOGO'), 'post_thumbnail_meta_box', 'Client', 'advanced', 'high');
}

/* Change set featured image text*/
function elite_client_image_text($content){

    if('client' === get_post_type() ){
        $content = str_replace( 'Set featured image', __( 'Set Featured LOGO image', 'elite' ), $content );
         $content = str_replace( 'Remove featured image', __( 'Remove Featured LOGO image', 'elite' ), $content );
    }
    return $content;
}

  add_filter('admin_post_thumbnail_html', 'elite_client_image_text');




	
 ?>