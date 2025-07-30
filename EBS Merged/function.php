<?php
function EmailValidation($email){
	return filter_var($email, FILTER_VALIDATE_EMAIL)!== false;
}
function BrowserAgent(){
	return $_SERVER['HTTP_USER_AGENT'];
}
function Userip(){
	return $_SERVER['REMOTE_ADDR'];
}
?>