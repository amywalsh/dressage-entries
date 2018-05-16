<?php
$d = intval($_GET['d']);

include( 'dso-hook.php' );

doDB();

?>
<style>
table, th, td {
    border: 1px solid #EBF5FB;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table th {
    background-color: #02558B;
    color: white;
}
table tr:nth-child(even) {
    background-color: #EBF5FB;
}
table tr:nth-child(odd) {
   background-color: #FFFFFF;
}
.points {
	width: 40%;
	float: right;
}
.totalPossible,
.ErrorsTitle {
	font-weight: bold;
	font-size: 18px;
	text-align: right;
}
.PointsTitle {
	font-weight: bold;
	font-size: 24px;
	text-align: right;
}
</style>
<?php
//Show RECORDED Test
	$get_class_sql = 'SELECT ClassID FROM TestScores WHERE ClassID = ' . $d . '';
	$get_class_res = mysqli_query( $mysqli, $get_class_sql ) or die(mysqli_error( $mysqli ) );

	if(mysqli_num_rows( $get_class_res ) > 0 ) {

		include_once( 'scoredtest.php' );

	} else {

?>

<!--<form name="addscores" action="addscores.php" onsubmit="return numberVal()" method="post">-->
<form name="addscores" action="addscores.php" method="post">
	<input type="hidden" name="classID" value="<?php echo $d; ?>">
	<table style="width:100%">
		<tr>
			<th>TEST</th>
			<th>Directives</th>
			<th>Points</th>
			<th width="30" style="text-align:center;"></th>
			<th width="30" style="text-align:center;">X</th>
			<th width="30" style="text-align:center;">Total</th>
		</tr>
		<?php

		//Show UNRECORDED Test

		//$get_marks_sql = 'SELECT * FROM movements_marks WHERE TestID = ' . $d . ' ORDER BY MarkOrder';
		$get_marks_sql = 'SELECT movements_marks.ID, movements_marks.TestID, movements_marks.MarkOrder, movements_marks.Test, movements_marks.DirectiveIdeas, movements_marks.Coefficient FROM movements_marks INNER JOIN classes ON movements_marks.TestID = classes.TestID WHERE classes.ID = ' . $d . ' ORDER BY MarkOrder';
		$get_marks_res = mysqli_query( $mysqli, $get_marks_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $get_marks_res ) > 0 ) {

			$x = 0;

			while( $marks = mysqli_fetch_array( $get_marks_res ) ) {

				$x++;

				?>
				<tr>
				<td><?php echo $marks['MarkOrder']; ?>. <?php echo $marks['Test']; ?></td>
				<td><?php echo $marks['DirectiveIdeas']; ?></td>
				<td><input type="hidden" name="rowcount" value="<?php echo $x; ?>"><input type="hidden" name="MMID_<?php echo $x; ?>" value="<?php echo $marks['ID']; ?>"><input id="MMscore<?php echo $x; ?>" class="numbers" name="MMscore_<?php echo $x; ?>" type="text" onchange="var score = parseFloat(document.getElementById('MMscore<?php echo $x; ?>').value); var m = parseFloat(document.getElementById('coe<?php echo $x; ?>').innerHTML); document.getElementById('TotalMark<?php echo $x; ?>').value = score * m;"></td>
				<td width="20" style="text-align:center;">x</td>
				<td width="30" style="text-align:center;"><input type="hidden" name="coe_<?php echo $x; ?>" value="<?php echo $marks['Coefficient']; ?>"><span id="coe<?php echo $x; ?>"><?php echo $marks['Coefficient']; ?></span></td>
				<td><input class="TotalMark" id="TotalMark<?php echo $x; ?>" name="TotalMark_<?php echo $x; ?>" type="text" onblur="var scores = document.getElementsByClassName('TotalMark'); var total=0; for(var i=0;i<scores.length;i++){if(parseFloat(scores[i].value)){total += parseFloat(scores[i].value);}} document.getElementById('TotalEarned').value = total;" tabindex="-1"></td>
				</tr>

				<?php

			}



		}

		?>

	</table>

	<div class="points">
			<div class="section group">
				<div class="col span_1_of_2">
					<div class="totalPossible">Total Possible:</div>
				</div>
				<div class="col span_1_of_2">
					<?php

					$get_testID = "SELECT TestID FROM classes WHERE ID = " . $d;
					$res_testID = mysqli_query( $mysqli, $get_testID ) or die(mysqli_error( $mysqli ) );

					if(mysqli_num_rows( $res_testID ) > 0 ) {

						while( $tid = mysqli_fetch_array( $res_testID ) ) {

							$get_total_sql = "SELECT total_possible FROM tests WHERE ID = " . $tid['TestID'];

						}

					}


					
					$get_total_res = mysqli_query( $mysqli, $get_total_sql ) or die(mysqli_error( $mysqli ) );

					if(mysqli_num_rows( $get_total_res ) > 0 ) {

						while( $total = mysqli_fetch_array( $get_total_res ) ) {

							?>

							<div class="totalPossible" id="totalPossible"><?php echo $total['total_possible']; ?></div>

							<?php

						}

					} else {

						echo 'ERROR';

					}

					?>

				</div>
			</div>
			<div class="ErrorsTitle">Errors</div>
			<div class="section group">
				<div class="col span_1_of_2">
					<div class="PointsTitle">1st</div>
				</div>
				<div class="col span_1_of_2">
					<input class="errors" id="Error1" name="Error1" type="text" onchange="var error = parseFloat(document.getElementById('Error1').value) + parseFloat(document.getElementById('Error2').value) + parseFloat(document.getElementById('Error3').value); var scores = document.getElementsByClassName('TotalMark'); var total=0; for(var i=0;i<scores.length;i++){if(parseFloat(scores[i].value)){total += parseFloat(scores[i].value);}} var newtotal = total - error; document.getElementById('TotalEarned').value = newtotal">
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_2">
					<div class="PointsTitle">2nd</div>
				</div>
				<div class="col span_1_of_2">
					<input class="errors" id="Error2" name="Error2" type="text" onchange="var error = parseFloat(document.getElementById('Error1').value) + parseFloat(document.getElementById('Error2').value) + parseFloat(document.getElementById('Error3').value); var scores = document.getElementsByClassName('TotalMark'); var total=0; for(var i=0;i<scores.length;i++){if(parseFloat(scores[i].value)){total += parseFloat(scores[i].value);}} var newtotal = total - error; document.getElementById('TotalEarned').value = newtotal">
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_2">
					<div class="PointsTitle">3rd</div>
				</div>
				<div class="col span_1_of_2">
					<input class="errors" id="Error3" name="Error3" type="text" onblur="var error = parseFloat(document.getElementById('Error1').value) + parseFloat(document.getElementById('Error2').value) + parseFloat(document.getElementById('Error3').value); var scores = document.getElementsByClassName('TotalMark'); var total=0; for(var i=0;i<scores.length;i++){if(parseFloat(scores[i].value)){total += parseFloat(scores[i].value);}} var newtotal = total - error; document.getElementById('TotalEarned').value = newtotal">
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_2">
					<div class="PointsTitle">TOTAL POINTS</div>
				</div>
				<div class="col span_1_of_2">
					<input id="TotalEarned" name="TotalEarned" type="text" onblur="var total = parseFloat(document.getElementById('TotalEarned').value); var pos = document.getElementById('totalPossible').innerHTML; var percent = ((total/pos) * 100).toFixed(3) + '%'; document.getElementById('FinalScore').value = percent;">
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_2">
					<div class="PointsTitle">FINAL SCORE</div>
				</div>
				<div class="col span_1_of_2">
					<input id="FinalScore" name="FinalScore" type="text">
				</div>
			</div>
			<div class="section group">
				<div class="col span_2_of_2">
					<input type="submit" value="Record Score">
				</div>
			</div>

	</div>
		
</form>
<?php

mysqli_close( $mysqli );

	}

