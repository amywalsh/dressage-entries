<?php

		//Novice Senior Results
		$novice_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (21, 22) AND riders.Level IN ('Open', 'Amateur') AND entries.ShowID = 6";
		$novice_entries_res = mysqli_query( $mysqli, $novice_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $novice_entries_res ) >0 ) {

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
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">USEA Novice Senior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $novice_entries_res );

		}

		$senior_novice_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name 
				FROM  ( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
				INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
				INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 
				AND entries.Status <> 'Scratch' AND tests.ID = 21 AND riders.Level IN ('Open', 'Amateur')";
		$senior_novice_res = mysqli_query( $mysqli, $senior_novice_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $senior_novice_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USEA 2014 Novice Eventing Test A</span></strong></th>
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

				while( $novice_open = mysqli_fetch_array( $senior_novice_res ) ) {

					?>

					<tr>
						<td><?php echo $novice_open['FirstName']; ?> <?php echo $novice_open['LastName']; ?></td>
						<td><?php echo $novice_open['Name']; ?></td>
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

			mysqli_free_result( $senior_novice_res );

		}

		$senior_novice_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 
			AND entries.Status <> 'Scratch' AND tests.ID = 22 AND riders.Level IN ('Open', 'Amateur')";
		$senior_novice_res = mysqli_query( $mysqli, $senior_novice_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $senior_novice_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USEA 2014 Novice Eventing Test B</span></strong></th>
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

				while( $novice_open = mysqli_fetch_array( $senior_novice_res ) ) {

					?>

					<tr>
						<td><?php echo $novice_open['FirstName']; ?> <?php echo $novice_open['LastName']; ?></td>
						<td><?php echo $novice_open['Name']; ?></td>
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

			mysqli_free_result( $senior_novice_res );

		}
		?>

			</td>
		</tr>
	</tbody>
</table>
<?php

		//Novice Junior
		$novice_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (21, 22) AND riders.Level = 'Junior' AND entries.ShowID = 6";
		$novice_entries_res = mysqli_query( $mysqli, $novice_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $novice_entries_res ) >0 ) {

			?>
			<br>
	<table id="table-wrap" style="width:100%;" border="1">
		<tbody>
			<tr>
				<td>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">USEA Novice Junior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $novice_entries_res );

		}

		$junior_novice_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name 
			FROM  ( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) 
			INNER JOIN classes ON entries.ID = classes.EntryID ) INNER JOIN tests ON classes.TestID = tests.ID 
			WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 21 AND riders.Level = 'Junior'";
		$junior_novice_res = mysqli_query( $mysqli, $junior_novice_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_novice_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USEA 2014 Novice Eventing Test A</span></strong></th>
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

				while( $novice_open = mysqli_fetch_array( $junior_novice_res ) ) {

					?>

					<tr>
						<td><?php echo $novice_open['FirstName']; ?> <?php echo $novice_open['LastName']; ?></td>
						<td><?php echo $novice_open['Name']; ?></td>
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

			mysqli_free_result( $junior_novice_res );

		}

		$junior_novice_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 22 AND riders.Level = 'Junior'";
		$junior_novice_res = mysqli_query( $mysqli, $junior_novice_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_novice_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USEA 2014 Novice Eventing Test B</span></strong></th>
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

				while( $novice_open = mysqli_fetch_array( $junior_novice_res ) ) {

					?>

					<tr>
						<td><?php echo $novice_open['FirstName']; ?> <?php echo $novice_open['LastName']; ?></td>
						<td><?php echo $novice_open['Name']; ?></td>
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

			mysqli_free_result( $junior_novice_res );

		}

			?>

			</td>
		</tr>
	</tbody>
</table>
<?php
