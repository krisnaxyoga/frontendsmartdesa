<?php
	define('HOSTNAME', 'localhost');
	define('USERNAME', 'mundehkauh_web');
	define('PASSWORD', 'krisna@2020');
	define('DB_SELECT', 'mundehkauh_web');

	$koneksi = new mysqli(HOSTNAME,USERNAME,PASSWORD,DB_SELECT) or die(mysqli_errno());


?>