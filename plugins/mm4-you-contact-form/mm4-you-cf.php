<?php
/*
Plugin Name: MM4 You Contact Form
Description: Contact form plugin with Google ReCAPTCHA integration for use on WordPress sites. Built with help from: https://gist.github.com/annalinneajohansson/5290405
Version: 3.0
Author: Chris Stielper
License: GPL
*/

// Setup the options page for our plugin.
add_action('admin_menu', 'mm4_you_cf_add_gcf_interface');
function mm4_you_cf_add_gcf_interface() {
	add_menu_page( 'Contact Form Settings', 'Contact Forms', 'manage_options', 'mm4-you-contact-form-options', 'mm4_you_cf_options', 'dashicons-edit' );
}

// Setup settings groups and fields
add_action( 'admin_init', 'mm4_you_cf_admin_init' );
function mm4_you_cf_admin_init() {
  /*
	 * http://codex.wordpress.org/Function_Reference/register_setting
	 * register_setting( $option_group, $option_name, $sanitize_callback );
	 * The second argument ($option_name) is the option name. It’s the one we use with functions like get_option() and update_option()
	 * */
  	# With input validation:
  	# register_setting( 'my-settings-group', 'my-plugin-settings', 'my_settings_validate_and_sanitize' );
  register_setting( 'mm4-you-cf-settings-group', 'mm4-you-cf-settings' );

  	/*
	 * http://codex.wordpress.org/Function_Reference/add_settings_section
	 * add_settings_section( $id, $title, $callback, $page );
	 * */
  add_settings_section( 'basic-form-settings', __( 'Basic Form Settings' ), 'mm4_you_cf_section_1_callback', 'mm4-you-contact-form-options' );
	add_settings_section( 'recaptcha-settings', __( 'ReCAPTCHA Settings' ), 'mm4_you_cf_section_2_callback', 'mm4-you-contact-form-options' );

	/*
	 * http://codex.wordpress.org/Function_Reference/add_settings_field
	 * add_settings_field( $id, $title, $callback, $page, $section, $args );
	 * */
	add_settings_field( 'form-email-to', __( 'Email address(es) for form submission (separate multiple email addresses with a comma):' ), 'email_to_callback', 'mm4-you-contact-form-options', 'basic-form-settings' );
	add_settings_field( 'form-subject', __( 'Subject line for form submission:' ), 'subject_line_callback', 'mm4-you-contact-form-options', 'basic-form-settings' );
	add_settings_field( 'form-email-from', __( 'Email address that the form should come from:' ), 'email_from_callback', 'mm4-you-contact-form-options', 'basic-form-settings' );
	add_settings_field( 'form-redirect', __( 'Enter the page ID of the contact form "Thank You" page. This is the page users will see after the form is submitted:' ), 'thank_you_page_callback', 'mm4-you-contact-form-options', 'basic-form-settings' );

	add_settings_field( 'recaptcha-public-key', __( 'ReCAPTCHA public key:' ), 'recaptcha_public_key_callback', 'mm4-you-contact-form-options', 'recaptcha-settings' );
	add_settings_field( 'recaptcha-private-key', __( 'ReCAPTCHA private key:' ), 'recaptcha_private_key_callback', 'mm4-you-contact-form-options', 'recaptcha-settings' );

}

function mm4_you_cf_options() { ?>
	<div class="wrap">
		<h2>Contact Form Settings</h2>
		<form method="POST" action="options.php">
			<?php settings_fields('mm4-you-cf-settings-group'); ?>
			<?php do_settings_sections('mm4-you-contact-form-options'); ?>
			<?php submit_button(); ?>
		</form>
	</div>
<?php }

/*
* THE SECTIONS
* Hint: You can omit using add_settings_field() and instead
* directly put the input fields into the sections.
* */
function mm4_you_cf_section_1_callback() {
	_e( '' ); ?>
<?php }

function mm4_you_cf_section_2_callback() {
	_e( '' );
}

// The fields
function email_to_callback() {
	$settings = (array) get_option( 'mm4-you-cf-settings' );
	$field = "form-email-to";
	$value = esc_attr( $settings[$field] );
	echo "<input type='text' name='mm4-you-cf-settings[$field]' value='$value' />";
}

function subject_line_callback() {
	$settings = (array) get_option( 'mm4-you-cf-settings' );
	$field = "form-subject";
	$value = esc_attr( $settings[$field] );
	echo "<input type='text' name='mm4-you-cf-settings[$field]' value='$value' />";
}

function email_from_callback() {
	$settings = (array) get_option( 'mm4-you-cf-settings' );
	$field = "form-email-from";
	$value = esc_attr( $settings[$field] );
	echo "<input type='text' name='mm4-you-cf-settings[$field]' value='$value' />";
}

function thank_you_page_callback() {
	$settings = (array) get_option( 'mm4-you-cf-settings' );
	$field = "form-thank-you";
	$value = esc_attr( $settings[$field] );
	echo "<input type='text' name='mm4-you-cf-settings[$field]' value='$value' />";
}

function recaptcha_public_key_callback() {
	$settings = (array) get_option( 'mm4-you-cf-settings' );
	$field = "recaptcha-public-key";
	$value = esc_attr( $settings[$field] );
	echo "<input type='text' name='mm4-you-cf-settings[$field]' value='$value' />";
}

function recaptcha_private_key_callback() {
	$settings = (array) get_option( 'mm4-you-cf-settings' );
	$field = "recaptcha-private-key";
	$value = esc_attr( $settings[$field] );
	echo "<input type='text' name='mm4-you-cf-settings[$field]' value='$value' />";
}

/* Quick Contact Form */

// Add Quick Conact Form?

function mm4_you_add_quick_contact_form() {
	if( function_exists('get_field') ) {
		$add_form = get_field('quick_contact_form');

		if ( $add_form == 'Yes' && is_front_page() ) {
			wp_enqueue_script( 'mm4-recaptcha', '//www.google.com/recaptcha/api.js', array(), NULL, TRUE );
			wp_enqueue_script('mm4-you-validate', get_template_directory_uri() . '/plugins/mm4-you-contact-form/js/min/mm4-you-quick-contact-validate-min.js', array('mm4-recaptcha'), NULL, TRUE );
			mm4_you_quick_contact_form();
		}
	}
}

// Quick Contact Form

function mm4_you_quick_contact_form() {

	$options_arr  = get_option('mm4-you-cf-settings');
	$subject_line = $options_arr['form-subject'];
	$public_key   = $options_arr['recaptcha-public-key'];
	$form_action  = get_permalink($options_arr['form-thank-you']); ?>

	<div class="form-quick-contact-wrapper">
		<h2>Have a Question?</h2>
		<hr>
		<form id="form-quick-contact" name="form-quick-contact" method="POST" action="<?php echo $form_action; ?>" novalidate>
			<input type="hidden" value="<?php echo $subject_line; ?>" name="subject" id="subject">
			<div class="flex">
				<div>
					<label for="first-name">Name</label>
					<input type="text" name="first-name" id="first-name" class="required" data-error-label="Name">
				</div>
				<div>
					<label for="email-address">Email</label>
					<input type="email" name="email-address" id="email-address" class="required" data-error-label="Email">
				</div>
				<!-- <div>
					<label for="contact-phone">Phone</label>
					<input type="tel" id="contact-phone" name="contact-phone">
				</div> -->
			</div>
			<div class="flex">
				<div>
					<label for="comments">Comments</label>
					<textarea name="comments" id="comments" rows="5"></textarea>
				</div>
			</div>
			<div class="g-recaptcha" data-sitekey="<?php echo $public_key; ?>"></div>
			<div class="msg-box"></div>
			<input class="form-button" type="submit" value="Submit Request">
		</form>
	</div>
<?php }


// Grab the settings from our options page
// Include the ReCAPTCHA library and JS validation
// Markup our form
function mm4_you_contact_form() {
	wp_enqueue_script( 'mm4-recaptcha', '//www.google.com/recaptcha/api.js', array(), NULL, TRUE );
	wp_enqueue_script('mm4-you-validate', get_template_directory_uri() . '/plugins/mm4-you-contact-form/js/min/mm4-you-validate-min.js', array(), NULL, TRUE );

	$options_arr  = get_option('mm4-you-cf-settings');
	$subject_line = $options_arr['form-subject'];
	$public_key   = $options_arr['recaptcha-public-key'];
	$form_action  = get_permalink($options_arr['form-thank-you']); ?>

	<form name="contact-form" id="contact-form" method="POST" action="<?php echo $form_action; ?>" novalidate>
		<input type="hidden" value="<?php echo $subject_line; ?>" name="subject" id="subject">
		<label for="first-name">First Name
			<input type="text" name="first-name" id="first-name" class="required" data-error-label="First Name">
		</label>
		<label for="last-name">Last Name
			<input type="text" name="last-name" id="last-name" class="required" data-error-label="Last Name">
		</label>
		<label for="email-address">Email
			<input type="email" name="email-address" id="email-address" class="required" data-error-label="Email">
		</label>
		<label for="primary-phone">Phone Number
			<input type="tel" name="primary-phone" id="primary-phone" data-error-label="Phone">
		</label>
		<label for="move-in">Desired Move In Date
			<input type="text" name="move-in" id="move-in" data-error-label="Move In Date">
		</label>
		<label for="how-hear">How Did You Hear About Us?
			<input type="text" name="how-hear" id="how-hear" data-error-label="How Did You Hear About Us?">
		</label>
		<label for="comments">Comments
			<textarea name="comments" id="comments" rows="6"></textarea>
		</label>
		<div class="g-recaptcha" data-sitekey="<?php echo $public_key; ?>"></div>
		<div class="msg-box"></div>
		<input class="submit-button" type="submit" value="Submit Request">
	</form>
<?php }

// Add our server-side mail processing script to the "thank you" page
function mm4_you_cf_thank_you_page() {
	global $post;
	$ID = $post->ID;
	$options_arr = get_option('mm4-you-cf-settings');
	$ty_page = $options_arr['form-thank-you'];
	if( $ID == $ty_page ) {
		require ('inc/contact.php');
	}
}
add_action('wp_head', 'mm4_you_cf_thank_you_page');
?>