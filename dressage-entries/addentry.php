<?php
include( 'dso-hook.php' );

doDB();


$ShowID = $_POST['ShowID'];
$RiderID = $_POST['RiderID'];
$HorseID = $_POST['HorseID'];
$EntryNumber = $_POST['EntryNumber'];
$MissingItems = $_POST['MissingItems'];
$Status = $_POST['Status'];
$Stall = $_POST['Stall'];
$stableWith = $_POST['StableWith'];
$nights = $_POST['Nights'];
$camping = $_POST['Camping'];


//echo "INSERT INTO entries (ShowID, HorseID, RiderID, EntryNumber, Missing, Status) VALUES ($ShowID, $RiderID, $HorseID, '$EntryNumber', '$MissingItems', '$Status')";

$add_entry_sql = "INSERT INTO entries (ShowID, HorseID, RiderID, EntryNumber, Missing, Status, Stall, Camping, Nights, StableWith) VALUES ($ShowID, $HorseID, $RiderID, '$EntryNumber', '$MissingItems', '$Status', '$Stall', '$camping', '$nights', '$stableWith')";
$add_entry_res = mysqli_query( $mysqli, $add_entry_sql )or die(mysqli_error( $mysqli ) );

//close connection
mysqli_close($mysqli);

header("location: http://dressageentriesonline.com/add-classes.php");
		exit();



?>