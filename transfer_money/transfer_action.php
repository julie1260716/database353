<?php
	$cookie_account = unserialize($_COOKIE['accounts']);
	$amount = $_POST['amt'];

    if($_SERVER["REQUEST_METHOD"] == "POST") {
          
    	$sender = $_POST['Sender'];
    	$receiver = $_POST['Receiver'];

    	foreach ($cookie_account as $key => $value) {
    		if ($key == $sender)
    			$value = $value - $amount;

    		if ($key == $receiver)
    			$value = $value + $amount;
    	}

     }

?>
