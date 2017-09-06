<?php
/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 9/5/2017
 * Time: 11:43 PM
 */
session_start();
require_once 'driver.php';


if (isset($_POST['login'])){

	$username = $_POST['username'];
	$password = $_POST['password'];




	if (login( $username, $password)){

		if ( isset($_POST['remember'] ) && strlen( $_POST['remember'] ) > 1 ) {
			setcookie( 'username', $username, time() + 3600 * 30 * 7 * 24 );
		}	else {
			setcookie( 'username', $username, time() + 120);
		}
		$session_id = session_id();
		$_SESSION['username'] = $username;

	}

	header('Location: admin.php');
	exit();



}

function login( $username, $password ) {
	$password = strtolower( trim( $password ) );
	$password = sha1( md5( $password ) );

	// delete spaces
	if ( ( trim( $username ) == '' ) OR ( trim( $password ) == '' ) OR ( $password != TRUE_PASS ) ) {
		return false;
	}
		return true;
}



require_once 'header.php';




?>
	<div class="container">

		<div class="col-lg-6 col-md-6">
			<form action="login.php" method="post" class="form-signin">
				<h2 class="form-signin-heading">Please sign in</h2>
				<label for="inputName" class="sr-only">Name</label>
				<input name="username" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
				<label for="inputPassword" class="sr-only">Password</label>
				<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
				<div class="checkbox">
					<label>
						<input name="remember" type="checkbox" value="remember-me"> Remember me
					</label>
				</div>
				<button name="login" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>

		</div>


	</div> <!-- /container -->




<?php

require_once 'footer.php';
