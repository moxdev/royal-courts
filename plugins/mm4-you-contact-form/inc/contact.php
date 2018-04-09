<?php
$wp_options_array = get_option('mm4-you-cf-settings');

if(!$_POST) {
	echo 'This page cannot be accessed directly.';
	exit();
}


if($_SERVER['REQUEST_METHOD'] == "POST") {
	$recipients = $wp_options_array["form-email-to"];
	//$recipients = 'chris@mm4solutions.com';
	$email_from = $wp_options_array["form-email-from"];
	$subject = strip_tags($_POST["subject"]);
	$secret_key = $wp_options_array['recaptcha-private-key'];
	$captcha = $_POST['g-recaptcha-response'];

	$first_name = strip_tags($_POST["first-name"]);
	$last_name  = strip_tags($_POST["last-name"]);
	$email      = strip_tags($_POST["email-address"]);
	$phone      = $_POST["primary-phone"];
	$move_in    = strip_tags($_POST["move-in"]);
	$how_hear   = strip_tags($_POST["how-hear"]);
	$comments   = strip_tags($_POST["comments"]);

	if(!$captcha){
		echo 'Please go back and check the spam protection checkbox.';
		exit();
	}

	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

	$message="First Name: " . $first_name . "<br>" . "Last Name: " . $last_name . "<br>" . "Email: " . $email . "<br>" . "Phone: " . $phone . "<br>" . "Move in Date: " . $move_in . "<br>" . "How did you hear about us: " . $how_hear . "<br>" . "Comments: " . $comments;

	$headers = array("From: Online Contact Form Submission <" . $email_from . ">", "Content-Type: text/html; charset=UTF-8");

	if($response.success == false) {
		echo 'We\'re sorry, but you appear to be a spambot.';
		exit();
	} else {
		//echo 'Success';
		wp_mail( $recipients, $subject, $message, $headers );
	}
}

?>