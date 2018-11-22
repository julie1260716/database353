<?php
	if (isset($_GET['cookie_name'])) {
        $cookie_name = $_GET['cookie_name'];
    }

    echo $_POST['Sender'];

    if($_SERVER["REQUEST_METHOD"] == "POST") {
          
    	$sender = $receiver = "";

    	foreach ($cookie_account as $key => $value) {
    		if ($key == $_POST['Sender'])
    			echo "Hi";
    	}

     }
?>
