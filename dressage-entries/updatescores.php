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

	

	$update_scores_sql = "UPDATE MMscores SET Score = $MMscore, FinalScore = $TotalMark WHERE MMID = $MMID AND ClassID = $cid";
	$update_scores_res = mysqli_query( $mysqli, $update_scores_sql ) or die(mysqli_error( $mysqli ) );


}

$up_scores_sql = "UPDATE TestScores SET Error1 = '" . $_POST['Error1'] . "', Error2 = '" . $_POST['Error2'] . "', Error3 = '" . $_POST['Error3'] . "', TotalPoints = '" . $_POST['TotalEarned'] . "', PercentageScore = '" . $_POST['FinalScore'] . "' WHERE ClassID = $cid";
$up_scores_res = mysqli_query( $mysqli, $up_scores_sql ) or die(mysqli_error( $mysqli ) );



//close connection
mysqli_close($mysqli);

header("location: http://dressageentriesonline.com/score-test.php");
		exit();
