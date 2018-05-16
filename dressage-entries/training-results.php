<?php

		//training Level Open Results
		$training_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (6, 5, 4) AND riders.Level = 'Open' AND entries.ShowID = 6";
		$training_entries_res = mysqli_query( $mysqli, $training_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $training_entries_res ) >0 ) {

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
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Training Level Open</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $training_entries_res );

		}

		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name 
				FROM  ( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
				INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
				INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 
				AND entries.Status <> 'Scratch' AND tests.ID = 4 AND riders.Level = 'Open'";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">2015 USEF Training Level Test 1</span></strong></th>
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

				while( $training_open = mysqli_fetch_array( $open_training_res ) ) {

					?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
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

			mysqli_free_result( $open_training_res );

		}

		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 
			AND entries.Status <> 'Scratch' AND tests.ID = 5 AND riders.Level = 'Open'";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">2015 USEF Training Level Test 2</span></strong></th>
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

				while( $training_open = mysqli_fetch_array( $open_training_res ) ) {

					?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
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

			mysqli_free_result( $open_training_res );

		}

		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 6 AND riders.Level = 'Open'";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			?>
						<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">2015 USEF Training Level Test 3</span></strong></th>
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

				while( $training_open = mysqli_fetch_array( $open_training_res ) ) {

					?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
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

			mysqli_free_result( $open_training_res );

		}
		?>

					</td>
		</tr>
	</tbody>
</table>

<?php

		//training Level Amateur Results
		$training_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (6, 5, 4) AND riders.Level = 'Amateur' AND entries.ShowID = 6";
		$training_entries_res = mysqli_query( $mysqli, $training_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $training_entries_res ) >0 ) {

			?>
			<br>
	<table id="table-wrap" style="width:100%;" border="1">
		<tbody>
			<tr>
				<td>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Training Level Amateur</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $training_entries_res );

		}

		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name 
			FROM  ( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) 
			INNER JOIN classes ON entries.ID = classes.EntryID ) INNER JOIN tests ON classes.TestID = tests.ID 
			WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 4 AND riders.Level = 'Amateur'";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">2015 USEF Training Level Test 1</span></strong></th>
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

				while( $training_open = mysqli_fetch_array( $open_training_res ) ) {

					?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
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

			mysqli_free_result( $open_training_res );

		}

		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 5 AND riders.Level = 'Amateur'";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">2015 USEF Training Level Test 2</span></strong></th>
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

				while( $training_open = mysqli_fetch_array( $open_training_res ) ) {

					?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
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

			mysqli_free_result( $open_training_res );

		}

		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 6 AND riders.Level = 'Amateur'";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">2015 USEF Training Level Test 3</span></strong></th>
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

				while( $training_open = mysqli_fetch_array( $open_training_res ) ) {

					?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
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

			mysqli_free_result( $open_training_res );

		}
?>

					</td>
		</tr>
	</tbody>
</table>

<?php
		//training Level Junior
		$training_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (6, 5, 4) AND riders.Level = 'Junior' AND entries.ShowID = 6";
		$training_entries_res = mysqli_query( $mysqli, $training_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $training_entries_res ) >0 ) {

			?>
			<br>
	<table id="table-wrap" style="width:100%;" border="1">
		<tbody>
			<tr>
				<td>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Training Level Junior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $training_entries_res );

		}

		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name 
			FROM  ( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) 
			INNER JOIN classes ON entries.ID = classes.EntryID ) INNER JOIN tests ON classes.TestID = tests.ID 
			WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 4 AND riders.Level = 'Junior'";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">2015 USEF Training Level Test 1</span></strong></th>
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

				while( $training_open = mysqli_fetch_array( $open_training_res ) ) {

					?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
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

			mysqli_free_result( $open_training_res );

		}

		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 5 AND riders.Level = 'Junior'";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">2015 USEF Training Level Test 2</span></strong></th>
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

				while( $training_open = mysqli_fetch_array( $open_training_res ) ) {

					?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
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

			mysqli_free_result( $open_training_res );

		}

		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.ID FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 6 AND riders.Level = 'Junior'";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">2015 USEF Training Level Test 3</span></strong></th>
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

				while( $training_open = mysqli_fetch_array( $open_training_res ) ) {

					?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
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

			mysqli_free_result( $open_training_res );

		}

		?>

					</td>
		</tr>
	</tbody>
</table>

<?php

