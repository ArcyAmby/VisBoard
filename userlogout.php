<?php
	session_start();
	session_destroy();
	header('location: index-4.php#login');
?>
