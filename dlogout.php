<?php
	session_start();
	session_destroy();
	header('location: designer-login.php');
?>
