<?php
class ValidateEmail {
	function validateForm($form, $email){
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo 'This is not a valid e-mail.';}
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo 'This is a valid e-mail.';}
	}
}

$e = new ValidateEmail();
$f = '<input type="text" name="email" value=$email size="50"/>';
echo $e->validateForm($f, 'gia@aol.com');

class SanitizeForm {
	function sanitize($form, $url){
		echo filter_var($url, FILTER_SANITIZE_URL);
	
	}
}

$s = '<input type="text" name="homepage" value=$url size="50" />';
$c = new SanitizeForm();
echo $c->sanitize($s, 'www.facebook.com');
?>