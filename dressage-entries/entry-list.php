<?php
include( 'dso-hook.php' );

doDB();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Entry List</title>
</head>
<body onload="styleTable()">
<script>
function styleTable() {
	var rows = document.getElementsByTagName("tr");

	var white = "rgb(255, 255, 255)";

	var lightBlue = "rgb(217, 244, 252)";

	for(var i=0;i<rows.length;i++) {
		if(i == 1) {
			rows[i].style.backgroundColor = "#FFFFFF";
		} else if (i > 1 && rows[i-1].style.backgroundColor == white ) {
			rows[i].style.backgroundColor = "#D9F4FC";
		} else if (i > 1 && rows[i-1].style.backgroundColor == lightBlue ) {
			rows[i].style.backgroundColor = "#9CD3EF";
		} else {
			rows[i].style.backgroundColor = "#FFFFFF";
		}
		if(i > 1 && rows[i].cells[0].innerHTML == rows[i-1].cells[0].innerHTML) {
			var color = rows[i-1].style.backgroundColor;
			rows[i].style.backgroundColor = color;
		}
	}
}
</script>
<style>
	.list-title {
		padding: 3px 10px;
	}
	#wrapper {
		width: 80%;
		margin: 0 auto;
		padding: 50px 0;
	}
	.time {
		margin: 0 auto;
		text-align: center;
		width: 50%;
		padding: 20px 0;
	}
	.show {
		margin: 0 auto;
		text-align: center;
		width: 50%;
		font-style: bold;
		font-size: 24px;
	}
	ul {
		margin: 0;
	}
</style>
<div id="wrapper">
	<div class="show">TSDS June 2nd</div>
	<div class="time">Entry Status as of <?php echo date( 'm/d' ); ?>&nbsp;<?php echo date( 'h:ia' ); ?></div>
<table style="width:100%;" border="1">
<tbody>
<tr>
<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Rider</span></strong></th>
<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Horse</span></strong></th>
<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Classes</span></strong></th>
<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Level</span></strong></th>
<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Missing Info</span></strong></th>
<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Status</span></strong></th>
</tr>

<?php
$get_entries_sql = 'SELECT riders.LastName, riders.FirstName, horses.Name, riders.Level, entries.Missing, entries.Status, entries.ID FROM ( (entries INNER JOIN riders ON entries.RiderID=riders.ID) INNER JOIN horses ON entries.HorseID=horses.ID) WHERE entries.ShowID = 6 ORDER BY riders.LastName;';

$get_entries_res = mysqli_query( $mysqli, $get_entries_sql ) or die(mysqli_error( $mysqli ) );

if(mysqli_num_rows( $get_entries_res ) > 0 ) {

	$count = mysqli_num_rows( $get_entries_res );
	$color = '#FFFFFF';

	while( $list = mysqli_fetch_array( $get_entries_res ) ) {

		$lastName = $list['LastName'];
		$firstName = $list['FirstName'];
		$horseName = $list['Name'];
		$level = $list['Level'];
		$missing = $list['Missing'];
		$status = $list['Status'];
		$entryID = $list['ID'];

		?>

		<tr>
			<td><?php echo $lastName; ?>, <?php echo $firstName; ?></td>
			<td><?php echo $horseName; ?></td>
			<td>

			<?php
				$get_classes_sql = 'SELECT tests.Name, classes.EntryID FROM classes INNER JOIN tests ON classes.TestID=tests.ID WHERE classes.EntryID=' . $list['ID'] . '';
				$get_classes_res = mysqli_query( $mysqli, $get_classes_sql ) or die(mysqli_error( $mysqli ) );

				if(mysqli_num_rows( $get_classes_res ) > 0 ) {

					?>

					<ul>

					<?php

					while( $classes = mysqli_fetch_array( $get_classes_res ) ) {
						$class = $classes['Name'];

						?>
								<li><?php echo $class; ?></li>


						<?php
					}

					?>
					</ul>
					<?php
				}

			?>
			</td>
			<td><?php echo $level; ?></td>
			<td><?php echo $missing; ?></td>
			<td><?php echo $status; ?></td>
		</tr>

<?php

	} 


} else {

		echo 'NOTHING TO SEE.';
	}

?>

</tbody>
</table>
</div>
</body>

</html> 