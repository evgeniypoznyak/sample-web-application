<?php
/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 9/5/2017
 * Time: 11:34 PM
 */


// If not autorized - redirect
if (!isset( $_SESSION['username']) && isset( $_COOKIE['username'])) {
	$_SESSION['username'] = $_COOKIE['username'];
	setcookie('username', $_COOKIE['username'], time() + 3600 * 30 * 7 * 24);
}elseif (isset( $_SESSION['username'])){
	$username = $_SESSION['username'];
} else {
	header('Location: login.php');
	exit();
}

