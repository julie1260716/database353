<?php
	$cookie_name = "user";
	$cookie_value = "John Doe";
	$cookie_account = array(40023289,50023289);
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>