<?php
/**
 * Created by PhpStorm.
 * User: rustam
 * Date: 06.05.14
 * Time: 13:20
 */
require_once('recaptchalib.php');
$privatekey = "6LfBEfMSAAAAACuGMBOZCtmXvqPGiQW3V-kdHXfW";
$resp = recaptcha_check_answer ($privatekey,
	$_SERVER["REMOTE_ADDR"],
	$_POST["recaptcha_challenge_field"],
	$_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
	// What happens when the CAPTCHA was entered incorrectly
	die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
		"(reCAPTCHA said: " . $resp->error . ")");
} else {
	echo 'recapcha_success';
}