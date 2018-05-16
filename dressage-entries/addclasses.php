<?php
include( 'dso-hook.php' );

doDB();

$entryID = $_POST['entryID'];
$testIDs = $_POST['testID'];


foreach( $testIDs as $key => $val ) {

	//echo 'INSERT INTO classes (TestID, EntryID) VALUES (' . $entryID . ', ' . $val . ') <br>';

   $add_classes_sql = "INSERT INTO classes (TestID, EntryID) VALUES ($val, $entryID)";
   $add_classes_res = mysqli_query( $mysqli, $add_classes_sql )or die(mysqli_error( $mysqli ) );

}

//close connection
mysqli_close($mysqli);

header("location: http://dressageentriesonline.com/entry-email.php");
		exit();
