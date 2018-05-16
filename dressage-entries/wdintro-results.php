<?php

		//WD Intro Level Open Results
		$wdintro_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (32, 33, 34, 35) AND riders.Level = 'Open'";
		$wdintro_entries_res = mysqli_query( $mysqli, $wdintro_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $wdintro_entries_res ) >0 ) {

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
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Western Dressage Introductory Level Open</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $wdintro_entries_res );

		}

		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name 
				FROM  ( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
				INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
				INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 
				AND entries.Status <> 'Scratch' AND tests.ID = 32 AND riders.Level = 'Open'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 1</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}

		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 
			AND entries.Status <> 'Scratch' AND tests.ID = 33 AND riders.Level = 'Open'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 2</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}

		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 34 AND riders.Level = 'Open'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
						<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 3</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}

		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name 
				FROM  ( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
				INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
				INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 
				AND entries.Status <> 'Scratch' AND tests.ID = 35 AND riders.Level = 'Open'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 4</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}

		?>

		</td>
		</tr>
	</tbody>
</table>

<?php
		//Intro Level Amateur Results
		$wdintro_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (32, 33, 34, 35) AND riders.Level = 'Amateur'";
		$wdintro_entries_res = mysqli_query( $mysqli, $wdintro_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $wdintro_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Western Dressage Introductory Level Amateur</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $wdintro_entries_res );

		}

		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name 
			FROM  ( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) 
			INNER JOIN classes ON entries.ID = classes.EntryID ) INNER JOIN tests ON classes.TestID = tests.ID 
			WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 32 AND riders.Level = 'Amateur'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 1</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}

		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 33 AND riders.Level = 'Amateur'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 2</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}

		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 34 AND riders.Level = 'Amateur'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 3</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}
		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 35 AND riders.Level = 'Amateur'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 4</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}
		?>

			</td>
		</tr>
	</tbody>
</table>

					<?php

		//Intro Level Junior
		$wdintro_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (32, 33, 34, 35) AND riders.Level = 'Junior'";
		$wdintro_entries_res = mysqli_query( $mysqli, $wdintro_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $wdintro_entries_res ) >0 ) {

			?>
			<br>
	<table id="table-wrap" style="width:100%;" border="1">
		<tbody>
			<tr>
				<td>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Western Dressage Introductory Level Junior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $wdintro_entries_res );

		}

		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name 
			FROM  ( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) 
			INNER JOIN classes ON entries.ID = classes.EntryID ) INNER JOIN tests ON classes.TestID = tests.ID 
			WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 32 AND riders.Level = 'Junior'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 1</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}

		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.name FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 33 AND riders.Level = 'Junior'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 2</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}

		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.ID FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 34 AND riders.Level = 'Junior'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 3</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}

		$open_wdintro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, classes.ID, tests.ID FROM  
			( ( ( entries INNER JOIN riders on entries.riderID = riders.ID ) 
			INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) 
			INNER JOIN tests ON classes.TestID = tests.ID WHERE entries.ShowID = 6 AND entries.Status <> 'Scratch' AND tests.ID = 35 AND riders.Level = 'Junior'";
		$open_wdintro_res = mysqli_query( $mysqli, $open_wdintro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_wdintro_res ) > 0 ) {

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: center;"><strong><span class="list-title">USDF 2015 Western Dressage Introductory Level Test 4</span></strong></th>
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

				while( $wdintro_open = mysqli_fetch_array( $open_wdintro_res ) ) {

					?>

					<tr>
						<td><?php echo $wdintro_open['FirstName']; ?> <?php echo $wdintro_open['LastName']; ?></td>
						<td><?php echo $wdintro_open['Name']; ?></td>
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

			mysqli_free_result( $open_wdintro_res );

		}

?>

			</td>
		</tr>
	</tbody>
</table>

					<?php
					