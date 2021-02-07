<?php
session_start();
session_destroy();
	$_SESSION['msg'] = 'Logged out succesfully';
header('Location: login.php');
?>