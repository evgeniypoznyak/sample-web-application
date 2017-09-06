<?php
/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 9/5/2017
 * Time: 11:32 PM
 */
session_start();
require_once 'driver.php';

if (isset( $_POST['logout'])){

// reset cookies
	setcookie( 'username', '', time() - 1 );

	// reset session.
	unset( $_SESSION[ 'username' ] );
	unset( $_COOKIE[ 'username' ] );


}
require_once 'check.php';





require_once 'header.php';
?>
    <br>
	<div class="container">
		<div class="col-lg-6 col-md-6">
			<form action="admin.php" method="post" class="form-signin">
				<button name="logout" class="btn btn-lg btn-danger btn-block" type="submit">Logout</button>
			</form>
		</div>
	</div>
<?php


?>
	<br><br><br>
		<div class="container">
			<div class="col-lg-6 col-md-6">
				<form id="info" action="getInfo.php">
					<button id="byId" class="btn btn-lg btn-primary btn-block" type="submit">LIST BY ID</button>
					<button id="byName" class="btn btn-lg btn-success btn-block" type="submit">LIST BY NAME</button>
				</form>
			</div>
	</div>
    <br>
<div class="container col-md-8">
    <div id="res"></div>
</div>



<?php


require_once 'footer.php';