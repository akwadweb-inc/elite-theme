<?php
/**
 * Elite functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Elite
 */
add_action('wp_ajax_nopriv_elite_save_user_contact_form','elite_save_contact');
add_action('wp_ajax_elite_save_user_contact_form','elite_save_contact');

function elite_save_contact(){
	$name 		= wp_strip_all_tags($_POST['name']);
	$email 		= wp_strip_all_tags($_POST['email']);
	$message	= wp_strip_all_tags($_POST['message']);

 	$args = array(
 		'post_title' 	=> $name,
 		'post_content' 	=> $message,
 		'post_author'	=> 1,
 		'post_type'		=> 'message',
 		'post_status'	=> 'publish',
 		'meta_input'	=> array(
 			'_contact_email_value_key' => $email
 			)
 	);
 	
 	$postID = wp_insert_post( $args );

 	if($postID !== 0){

 		$to 		= get_bloginfo('admin_email');
 		$subject	= 'Elite contact Form -' . $name;
 		$headers[]	= 'From: '. get_bloginfo('name') . '<' . $to . ">";
 		$headers[]	= 'Reply-To: '. $name . '<' . $email . ">";
 		$headers[] 	= 'Content-Type: text/html: charset=UTF-8';

 		wp_mail( $to, $subject, $message, $headers );

 		echo $postID;
 	}else{
 		echo 0;
 	}

 	 echo $postID;

	die();
}