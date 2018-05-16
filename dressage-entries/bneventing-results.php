<?php

		//Beginner Novice Senior Results
		$bneventing_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (19, 20) AND riders.Level IN ('Open', 'Amateur') AND entries.ShowID = 6";
		$bneventing_entries_res = mysqli_query( $mysqli, $bneventing_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $bneventing_entries_res ) >0 ) {

			?>
			<br>
	<table id="table-wrap" style="width:100%;" border="1">
		<tbody>
			<tr>
				<td>
			<br>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">USEA Beginner Novice Senior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $bneventing_entries_res );

		}

		$senior_bn_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name 
				FROM  ( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
				INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
				INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 
				AND entries.Status <> 'Scratch' AND tests.ID = 19 AND riders.Level IN ('Open', 'Amateur')";
		$senior_bn_res = mysqli_query( $mysqli, $senior_bn_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $senior_bn_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USEA 2014 Beginner Novice Eventing Test A</span></strong></th>
					</tr>
				</tbody>
			</table>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th bgcolor="#75CCE0" width="300" style="text-align: center;"><strong><span class="list-title">Rider</span></strong></th>
						<th bgcolor="#75CCE0" width="300" style="text-align: center;"><strong><span class="list-title">Horse</span></strong></th>
						<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Score</span></strong></th>
						<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Place</span></strong></th>
					</tr>

			<?php

				while( $bneventing_open = mysqli_fetch_array( $senior_bn_res ) ) {

					?>

					<tr>
						<td><?php echo $bneventing_open['FirstName']; ?> <?php echo $bneventing_open['LastName']; ?></td>
						<td><?php echo $bneventing_open['Name']; ?></td>
						<td></td>
						<td></td>
					</tr>

					<?php

				}

				?>

					</tbody>
				</table>
				<br>

				<?php

			mysqli_free_result( $senior_bn_res );

		}

		$senior_bn_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 
			AND entries.Status <> 'Scratch' AND tests.ID = 20 AND riders.Level IN ('Open', 'Amateur')";
		$senior_bn_res = mysqli_query( $mysqli, $senior_bn_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $senior_bn_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USEA 2014 Beginner Novice Eventing Test B</span></strong></th>
					</tr>
				</tbody>
			</table>
			<table style="width:100%;" border="1">
				<tbody>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th bgcolor="#75CCE0" width="300" style="text-align: center;"><strong><span class="list-title">Rider</span></strong></th>
						<th bgcolor="#75CCE0" width="300" style="text-align: center;"><strong><span class="list-title">Horse</span></strong></th>
						<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Score</span></strong></th>
						<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Place</span></strong></th>
					</tr>

			<?php

				while( $bneventing_open = mysqli_fetch_array( $senior_bn_res ) ) {

					?>

					<tr>
						<td><?php echo $bneventing_open['FirstName']; ?> <?php echo $bneventing_open['LastName']; ?></td>
						<td><?php echo $bneventing_open['Name']; ?></td>
						<td></td>
						<td></td>
					</tr>

					<?php

				}

				?>

					</tbody>
				</table>
				<br>

				<?php

			mysqli_free_result( $senior_bn_res );

		}
		?>

			</td>
		</tr>
	</tbody>
</table>
<?php

		//Beginner Novice Junior
		$bneventing_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (19, 20) AND riders.Level = 'Junior' AND entries.ShowID = 6
				AND entries.Status <> 'Scratch'";
		$bneventing_entries_res = mysqli_query( $mysqli, $bneventing_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $bneventing_entries_res ) > 0 ) {

			?>
			<br>
	<table id="table-wrap" style="width:100%;" border="1">
		<tbody>
			<tr>
				<td>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">USEA Beginner Novice Junior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $bneventing_entries_res );

		}

		$senior_bn_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name 
			FROM  ( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) 
			INNER JOIN classes ON entries.ID = classes.EntryID ) INNER JOIN tests ON classes.TestID = tests.ID 
			WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 19 AND riders.Level = 'Junior'";
		$senior_bn_res = mysqli_query( $mysqli, $senior_bn_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $senior_bn_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USEA 2014 Beginner Novice Eventing Test A</span></strong></th>
					</tr>
				</tbody>
			</table>
			<table style="width:100%;" border="1">
				<tbody>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th bgcolor="#75CCE0" width="300" style="text-align: center;"><strong><span class="list-title">Rider</span></strong></th>
						<th bgcolor="#75CCE0" width="300" style="text-align: center;"><strong><span class="list-title">Horse</span></strong></th>
						<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Score</span></strong></th>
						<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Place</span></strong></th>
					</tr>

			<?php

				while( $bneventing_open = mysqli_fetch_array( $senior_bn_res ) ) {

					?>

					<tr>
						<td><?php echo $bneventing_open['FirstName']; ?> <?php echo $bneventing_open['LastName']; ?></td>
						<td><?php echo $bneventing_open['Name']; ?></td>
						<td></td>
						<td></td>
					</tr>

					<?php

				}

				?>

					</tbody>
				</table>
				<br>

				<?php

			mysqli_free_result( $senior_bn_res );

		}

		$senior_bn_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 20 AND riders.Level = 'Junior'";
		$senior_bn_res = mysqli_query( $mysqli, $senior_bn_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $senior_bn_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USEA 2014 Beginner Novice Eventing Test B</span></strong></th>
					</tr>
				</tbody>
			</table>
			<table style="width:100%;" border="1">
				<tbody>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th bgcolor="#75CCE0" width="300" style="text-align: center;"><strong><span class="list-title">Rider</span></strong></th>
						<th bgcolor="#75CCE0" width="300" style="text-align: center;"><strong><span class="list-title">Horse</span></strong></th>
						<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Score</span></strong></th>
						<th bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">Place</span></strong></th>
					</tr>

			<?php

				while( $bneventing_open = mysqli_fetch_array( $senior_bn_res ) ) {

					?>

					<tr>
						<td><?php echo $bneventing_open['FirstName']; ?> <?php echo $bneventing_open['LastName']; ?></td>
						<td><?php echo $bneventing_open['Name']; ?></td>
						<td></td>
						<td></td>
					</tr>

					<?php

				}

				?>

					</tbody>
				</table>
				<br>

				<?php

			mysqli_free_result( $senior_bn_res );

		}

			?>

			</td>
		</tr>
	</tbody>
</table>
<?php
