<?php
include( 'dso-hook.php' );

doDB();

$horseName = addslashes( $_POST['horseName'] );
$horseBreed = addslashes( $_POST['horseBreed'] );
$horseGender = $_POST['horseGender'];
$Age = $_POST['Age'];
$Height = addslashes( $_POST['Height'] );
$Color = addslashes( $_POST['Color'] );
$Owner = addslashes( $_POST['Owner'] );
$Trainer = addslashes( $_POST['Trainer'] );

if ( $horseBreed == "" ) { $horseBreed = "Unknown"; }

if ( $Color == "" ) { $Color = "Unknown"; }

if ( $Height == "" ) { $Height = "0.0"; }

if ( $Age == "" ) { $Age = "Unknown"; }

if ( $horseGender == "" ) { $horseGender = "Unknown"; }

$add_horse_sql = "INSERT INTO horses (Name, Breed, Color, Height, Age, Gender, Owner, Trainer) VALUES ('$horseName', '$horseBreed', '$Color', '$Height', '$Age', '$horseGender', '$Owner', '$Trainer')";
$add_horse_res =  mysqli_query( $mysqli, $add_horse_sql )or die(mysqli_error( $mysqli ) );

//close connection
mysqli_close($mysqli);

header("location: http://dressageentriesonline.com/new-entry.php");
		exit();