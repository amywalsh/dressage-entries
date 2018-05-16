<?php
include( 'dso-hook.php' );

doDB();

$riderFirstName = addslashes( $_POST['riderFirstName'] );
$riderLastName = addslashes( $_POST['riderLastName'] );
$Email = $_POST['Email'];
$StreetAddress = addslashes( $_POST['StreetAddress'] );
$City = $_POST['City'];
$State = $_POST['State'];
$Zip = $_POST['Zip'];
$CellPhone = $_POST['CellPhone'];
$HomePhone = $_POST['HomePhone'];
$Level = $_POST['Level'];
$DOB = $_POST['DOB'];

if ( $DOB == "" ) {

	$DOB = '0000-00-00';

}

if ( $Email == "" ) {

	$Email = 'not given';

}

if ( $CellPhone == "" ) {

	$CellPhone == 'None Given';

}

$add_rider_sql = "INSERT INTO riders (FirstName, LastName, StreetAddress, City, State, Zip, CellPhone, HomePhone, Email, Level, DOB) VALUES ('$riderFirstName', '$riderLastName', '$StreetAddress', '$City', '$State', '$Zip', '$CellPhone', '$HomePhone', '$Email', '$Level', '$DOB' )";
$add_rider_res = mysqli_query( $mysqli, $add_rider_sql )or die(mysqli_error( $mysqli ) );

//close connection
mysqli_close($mysqli);

header("location: http://dressageentriesonline.com/new-entry.php");
		exit();

