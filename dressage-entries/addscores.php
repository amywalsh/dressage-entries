<?php
include( 'dso-hook.php' );

doDB();

$count = $_POST['rowcount'];
$cid = $_POST['classID'];


for( $i=1; $i<=$count; $i++ ) {

	$MMID = addslashes( $_POST['MMID_' . $i] );
	$MMscore = addslashes( $_POST['MMscore_' . $i] );
	//$TotalMark = addslashes( $_POST['TotalMark_' . $i] );
	$coe = addslashes( $_POST['coe_' . $i] );

	$TotalMark = $MMscore * $coe;


	$add_scores_sql = "INSERT INTO MMscores (classID, MMID, Score, FinalScore) VALUES ($cid, " . $MMID . ", " . $MMscore . ", " . $TotalMark . ")";
	$add_scores_res = mysqli_query( $mysqli, $add_scores_sql ) or die(mysqli_error( $mysqli ) );


}


$post_scores_sql = "INSERT INTO TestScores (ClassID, Error1, Error2, Error3, TotalPoints, PercentageScore) VALUES (" . $cid . ", '" . $_POST['Error1'] . "', '" . $_POST['Error2'] . "', '" . $_POST['Error3'] . "', " . $_POST['TotalEarned'] . ", '" . $_POST['FinalScore'] . "')";
$post_scores_res = mysqli_query( $mysqli, $post_scores_sql ) or die(mysqli_error( $mysqli ) );



//close connection
mysqli_close($mysqli);

header("location: http://dressageentriesonline.com/score-test.php");
		exit();
