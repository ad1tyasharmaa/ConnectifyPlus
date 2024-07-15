<?php
session_start();

if(isset($_SESSION['connectifyplus_userid'])) {
	$_SESSION['connectifyplus_userid'] = NULL;
	unset($_SESSION['connectifyplus_userid']);
}

header("Location: login.php");
die;
?>
