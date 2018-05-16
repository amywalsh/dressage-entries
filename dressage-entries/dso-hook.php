<?php

function doDB() {
	global $mysqli;
	//Lets Join Up
	$mysqli=mysqli_connect("localhost", "empire", "tfRaVf&/bUYOO#0#", "empire_dressagescores");
	
	//Double Checking
	if(mysqli_connect_errno()) {
		printf( '#FAIL' );
		exit();
	}

}

?>