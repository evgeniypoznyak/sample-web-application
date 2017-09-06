<?php
/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 9/5/2017
 * Time: 11:34 PM
 */
include_once './driver.php';


// todo implement user hash + password + session name in post form


if ( isset( $_POST['by'] ) ) {

	$con = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

	switch ( $_POST['by'] ) {
		case 'id':
			// dy id is default
			$query  = "SELECT * FROM `users`";
			$result = mysqli_query( $con, $query );
		break;

		case 'name':
			$query  = "SELECT * FROM `users` ORDER BY `name` ASC";
			$result = mysqli_query( $con, $query );
		break;
	}


	$arr = [];
	while ( $row = mysqli_fetch_assoc( $result ) ) {
		$arr[] = $row;
	}
	$myJSON = json_encode( $arr );
	echo $myJSON;
	exit();


}