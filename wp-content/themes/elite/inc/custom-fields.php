<?php 
// add custom fields and meta box to about custom post type

function elite_add_custom_metabox_about(){
	add_meta_box( 'Ak_meta', 'Tell the World About You', 'Ak_meta_callback', 'about');
}

add_action('add_meta_boxes', 'elite_add_custom_metabox_about');



function Ak_meta_callback($post){
	wp_nonce_field(basename(__FILE__), 'Ak_job_nonce' );
	$Ak_stored_meta = get_post_meta($post->ID);
	?>

	<div>	
		<div class="meta-row">
			<div class="meta-th">
				<label for="first-section" class"Ak_row_title">First section</label>
			</div>
			<div class="meta-td">
				<input type="text" name="first_section" id="first-section" value="<?php if(! empty ($Ak_stored_meta['first_section'])) echo esc_attr($Ak_stored_meta['first_section']['0']); ?>"/>
			</div>
		</div>
	</div>
	<div>	
		<div class="meta-row">
			<div class="meta-th">
				<label for="second-section" class"Ak_row_title">Second section</label>
			</div>
			<div class="meta-td">
				<input type="text" name="second_section" id="second-section" class="Ak-row-content datepicker" value="<?php if(! empty ($Ak_stored_meta['second_section'])) echo esc_attr($Ak_stored_meta['second_section']['0']); ?>"/>
			</div>
		</div>
	</div>
	
	<div class="meta">
		<div class="meta-th">
			<span>State your message</span>
		</div>
	</div>
	<div class="meta-editor">
	<?php

	$content = get_post_meta( $post->ID, 'message_box' , true);
	$editor  = 'message_box';
	$settings = array(
			'textarea_rows' => 8,
			'media_buttons'	=> false,
		);
	wp_editor( $content, $editor, $settings );

	?>

	</div>

	<?php

}

function Ak_meta_save($post_id){
	// check save status

	$is_autosave 	= wp_is_post_autosave($post_id );
	$is_revision	= wp_is_post_revision($post_id );
	$is_valid_nonce	= (isset ($_POST['Ak_job_nonce']) && wp_verify_nonce($_POST['Ak_job_nonce'], basename(__FILE__) )) ? 'true' : 'false';

	// Exit script depending on save status
	if($is_autosave || $is_revision || !$is_valid_nonce) {
		return;
	}

	if(isset($_POST['first_section'])){
		update_post_meta($post_id, 'first_section', sanitize_text_field($_POST['first_section'] ) );
	}
	if(isset($_POST['second_section'])){
		update_post_meta($post_id, 'second_section', sanitize_text_field($_POST['second_section'] ) );
	}
	if(isset($_POST['message_box'])){
		update_post_meta($post_id, 'message_box', wp_kses_post($_POST['message_box'] ) );
	}


}

add_action('save_post' , 'Ak_meta_save');


// add custom fields and meta box to services custom post type

function elite_add_custom_metabox_service(){
	add_meta_box( 'elite_service_meta', 'Services Settings', 'elite_service_meta_callback', 'service','side');
}

add_action('add_meta_boxes', 'elite_add_custom_metabox_service');

function elite_service_meta_callback($post){
	wp_nonce_field(basename(__FILE__), 'elite_service_nonce' );
	$elite_stored_meta = get_post_meta($post->ID);
	?>

	<div>	
		<div class="meta-row">
			<div class="meta-th">
				<label for="service-icon" class"Ak_row_title">Service Icon</label>

			</div>
			<div class="meta-td">
				<input type="text" name="service_icon" id="service-icon" value="<?php if(! empty ($elite_stored_meta['service_icon'])) echo esc_attr($elite_stored_meta['service_icon']['0']); ?>" placeholder="Insert Font Awesome Class"/>
			</div>
		</div>

	



	<?php

}

function elite_service_meta_save($post_id){
	// check save status

	$is_autosave 	= wp_is_post_autosave($post_id );
	$is_revision	= wp_is_post_revision($post_id );
	$is_valid_nonce	= (isset ($_POST['elite_service_nonce']) && wp_verify_nonce($_POST['elite_service_nonce'], basename(__FILE__) )) ? 'true' : 'false';

	// Exit script depending on save status
	if($is_autosave || $is_revision || !$is_valid_nonce) {
		return;
	}

	if(isset($_POST['service_icon'])){
		update_post_meta($post_id, 'service_icon', sanitize_text_field($_POST['service_icon'] ) );
	}



}

add_action('save_post' , 'elite_service_meta_save');



/**
 * add custom fields and meta box to Team custom post type
 */

function elite_add_custom_metabox_team(){
	add_meta_box( 'elite_team_meta', 'Team Settings', 'elite_team_meta_callback', 'Team member','side');
}

add_action('add_meta_boxes', 'elite_add_custom_metabox_team');

function elite_team_meta_callback($post){
	wp_nonce_field(basename(__FILE__), 'elite_team_nonce' );
	$elite_stored_meta = get_post_meta($post->ID);
	?>

	<div>	
		<div class="meta-row">
			<div class="meta-th">
				<label for="team-id" class"Ak_row_title">Position</label>

			</div>
			<div class="meta-td">
				<input type="text" name="team_id" id="team-id" value="<?php if(! empty ($elite_stored_meta['team_id'])) echo esc_attr($elite_stored_meta['team_id']['0']); ?>" placeholder="Insert Team member position"/>
			</div>
		</div>

	



	<?php

}

function elite_team_meta_save($post_id){
	// check save status

	$is_autosave 	= wp_is_post_autosave($post_id );
	$is_revision	= wp_is_post_revision($post_id );
	$is_valid_nonce	= (isset ($_POST['elite_team_nonce']) && wp_verify_nonce($_POST['elite_team_nonce'], basename(__FILE__) )) ? 'true' : 'false';

	// Exit script depending on save status
	if($is_autosave || $is_revision || !$is_valid_nonce) {
		return;
	}

	if(isset($_POST['team_id'])){
		update_post_meta($post_id, 'team_id', sanitize_text_field($_POST['team_id'] ) );
	}



}

add_action('save_post' , 'elite_team_meta_save');

/**
 * add custom fields and meta box to Testimonials custom post type
 */

function elite_add_custom_metabox_testimonials(){
	add_meta_box( 'elite_testimonials_meta', 'Testimonials Settings', 'elite_testimonials_meta_callback', 'testimonial','side');
}

add_action('add_meta_boxes', 'elite_add_custom_metabox_testimonials');

function elite_testimonials_meta_callback($post){
	wp_nonce_field(basename(__FILE__), 'elite_testimonials_nonce' );
	$elite_stored_meta = get_post_meta($post->ID);
	?>

	<div>	
		<div class="meta-row">
			<div class="meta-th">
				<label for="team-id" class"Ak_row_title">Position</label>

			</div>
			<div class="meta-td">
				<input type="text" name="testimonials_id" id="testimonials-id" value="<?php if(! empty ($elite_stored_meta['testimonials_id'])) echo esc_attr($elite_stored_meta['testimonials_id']['0']); ?>" placeholder="Insert Name , position"/>
			</div>
		</div>

	



	<?php

}

function elite_testimonials_meta_save($post_id){
	// check save status

	$is_autosave 	= wp_is_post_autosave($post_id );
	$is_revision	= wp_is_post_revision($post_id );
	$is_valid_nonce	= (isset ($_POST['elite_testimonials_nonce']) && wp_verify_nonce($_POST['elite_testimonials_nonce'], basename(__FILE__) )) ? 'true' : 'false';

	// Exit script depending on save status
	if($is_autosave || $is_revision || !$is_valid_nonce) {
		return;
	}

	if(isset($_POST['testimonials_id'])){
		update_post_meta($post_id, 'testimonials_id', sanitize_text_field($_POST['testimonials_id'] ) );
	}



}

add_action('save_post' , 'elite_testimonials_meta_save');