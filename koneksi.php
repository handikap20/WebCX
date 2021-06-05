<?php

    $hostname   = "localhost";
    $username   = "root";
    $password   = "";
    $database   ="cxdb";

	date_default_timezone_set('Asia/Jakarta');

    try {
        $connection = new PDO("mysql:host=$hostname;dbname=$database, $username, $password");
        echo "Connection Success";
    } catch(PDOException $exception) {
		echo $exception->getMessage();
	}

?>
