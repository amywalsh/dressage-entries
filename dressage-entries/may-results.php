<?php

//Fourth Level Open Results
		$fourth_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (16, 17, 18) AND riders.Level = 'Open'";
		$fourth_entries_res = mysqli_query( $mysqli, $fourth_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $fourth_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Fourth Level Open</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $fourth_entries_res );

		}

		$open_fourth_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 16 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_fourth_res = mysqli_query( $mysqli, $open_fourth_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_fourth_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Fourth Level Test 1</span></strong></th>
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

			while( $fourth_open = mysqli_fetch_array( $open_fourth_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $fourth_open['FirstName']; ?> <?php echo $fourth_open['LastName']; ?></td>
						<td><?php echo $fourth_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $fourth_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_fourth_res );

		}
		//Fourth Test 2 Open
		$open_fourth_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 17 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_fourth_res = mysqli_query( $mysqli, $open_fourth_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_fourth_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Fourth Level Test 2</span></strong></th>
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

			while( $fourth_open = mysqli_fetch_array( $open_fourth_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $fourth_open['FirstName']; ?> <?php echo $fourth_open['LastName']; ?></td>
						<td><?php echo $fourth_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $fourth_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_fourth_res );

		}

//Fourth Test 3 Open
		$open_fourth_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 18 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_fourth_res = mysqli_query( $mysqli, $open_fourth_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_fourth_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Fourth Level Test 3</span></strong></th>
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

			while( $fourth_open = mysqli_fetch_array( $open_fourth_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $fourth_open['FirstName']; ?> <?php echo $fourth_open['LastName']; ?></td>
						<td><?php echo $fourth_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $fourth_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_fourth_res );

		}	

//Fourth Open Champ/Reserve
		$fourth_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (16, 17, 18) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Open' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$fourth_champs_res = mysqli_query( $mysqli, $fourth_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $fourth_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>
					
						<?php
						while( $champs = mysqli_fetch_array( $fourth_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>
							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $fourth_champs_res );

		}

//Fourth Level Amateur Results
		$fourth_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (16, 17, 18) AND riders.Level = 'Amateur'";
		$fourth_entries_res = mysqli_query( $mysqli, $fourth_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $fourth_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Fourth Level Amateur</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $fourth_entries_res );

		}
//Fourth Test 1 Amateur

		$amateur_fourth_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 16 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_fourth_res = mysqli_query( $mysqli, $amateur_fourth_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_fourth_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Fourth Level Test 1</span></strong></th>
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

			while( $fourth_amateur = mysqli_fetch_array( $amateur_fourth_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $fourth_amateur['FirstName']; ?> <?php echo $fourth_amateur['LastName']; ?></td>
						<td><?php echo $fourth_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $fourth_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_fourth_res );

		}
//Fourth Test 2 Amateur

		$amateur_fourth_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 17 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_fourth_res = mysqli_query( $mysqli, $amateur_fourth_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_fourth_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Fourth Level Test 2</span></strong></th>
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

			while( $fourth_amateur = mysqli_fetch_array( $amateur_fourth_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $fourth_amateur['FirstName']; ?> <?php echo $fourth_amateur['LastName']; ?></td>
						<td><?php echo $fourth_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $fourth_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_fourth_res );

		}

//Fourth Test 3 Amateur

		$amateur_fourth_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 18 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_fourth_res = mysqli_query( $mysqli, $amateur_fourth_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_fourth_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Fourth Level Test 3</span></strong></th>
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

			while( $fourth_amateur = mysqli_fetch_array( $amateur_fourth_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $fourth_amateur['FirstName']; ?> <?php echo $fourth_amateur['LastName']; ?></td>
						<td><?php echo $fourth_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $fourth_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_fourth_res );

		}

		//Fourth Amateur Champ/Reserve
		$fourth_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (16, 17, 18) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Amateur' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$fourth_champs_res = mysqli_query( $mysqli, $fourth_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $fourth_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>
					
						<?php
						while( $champs = mysqli_fetch_array( $fourth_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $fourth_champs_res );

		}


//Fourth Level junior Results
		$fourth_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (16, 17, 18) AND riders.Level = 'Junior'";
		$fourth_entries_res = mysqli_query( $mysqli, $fourth_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $fourth_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Fourth Level Junior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $fourth_entries_res );

		}
//Fourth Test 1 Junior

		$junior_fourth_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 16 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_fourth_res = mysqli_query( $mysqli, $junior_fourth_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_fourth_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Fourth Level Test 1</span></strong></th>
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

			while( $fourth_junior = mysqli_fetch_array( $junior_fourth_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $fourth_junior['FirstName']; ?> <?php echo $fourth_junior['LastName']; ?></td>
						<td><?php echo $fourth_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $fourth_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_fourth_res );

		}
//Fourth Test 2 Junior

		$junior_fourth_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 17 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_fourth_res = mysqli_query( $mysqli, $junior_fourth_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_fourth_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Fourth Level Test 2</span></strong></th>
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

			while( $fourth_junior = mysqli_fetch_array( $junior_fourth_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $fourth_junior['FirstName']; ?> <?php echo $fourth_junior['LastName']; ?></td>
						<td><?php echo $fourth_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $fourth_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_fourth_res );

		}

//Fourth Test 3 Junior

		$junior_fourth_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 18 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_fourth_res = mysqli_query( $mysqli, $junior_fourth_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_fourth_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Fourth Level Test 3</span></strong></th>
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

			while( $fourth_junior = mysqli_fetch_array( $junior_fourth_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $fourth_junior['FirstName']; ?> <?php echo $fourth_junior['LastName']; ?></td>
						<td><?php echo $fourth_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $fourth_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_fourth_res );

		}

//Fourth Junior Champ/Reserve
		$fourth_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (16, 17, 18) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Junior' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$fourth_champs_res = mysqli_query( $mysqli, $fourth_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $fourth_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $fourth_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $fourth_champs_res );

		}



//Third Level Open Results
		$third_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (15, 14, 13) AND riders.Level = 'Open'";
		$third_entries_res = mysqli_query( $mysqli, $third_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $third_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Third Level Open</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $third_entries_res );

		}

		$open_third_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 13 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_third_res = mysqli_query( $mysqli, $open_third_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_third_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Third Level Test 1</span></strong></th>
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

			while( $third_open = mysqli_fetch_array( $open_third_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $third_open['FirstName']; ?> <?php echo $third_open['LastName']; ?></td>
						<td><?php echo $third_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $third_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_third_res );

		}
		//Third Test 2 Open
		$open_third_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 14 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_third_res = mysqli_query( $mysqli, $open_third_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_third_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Third Level Test 2</span></strong></th>
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

			while( $third_open = mysqli_fetch_array( $open_third_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $third_open['FirstName']; ?> <?php echo $third_open['LastName']; ?></td>
						<td><?php echo $third_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $third_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_third_res );

		}


//Third Test 3 Open
		$open_third_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 15 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_third_res = mysqli_query( $mysqli, $open_third_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_third_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Third Level Test 3</span></strong></th>
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

			while( $third_open = mysqli_fetch_array( $open_third_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $third_open['FirstName']; ?> <?php echo $third_open['LastName']; ?></td>
						<td><?php echo $third_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $third_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_third_res );

		}

		//Third Open Champ/Reserve
		$third_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (13, 14, 15) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Open' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$third_champs_res = mysqli_query( $mysqli, $third_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $third_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $third_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $third_champs_res );

		}

//Third Level Amateur Results
		$third_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (15, 14, 13) AND riders.Level = 'Amateur'";
		$third_entries_res = mysqli_query( $mysqli, $third_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $third_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Third Level Amateur</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $third_entries_res );

		}
//Third Test 1 Amateur

		$amateur_third_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 13 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_third_res = mysqli_query( $mysqli, $amateur_third_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_third_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Third Level Test 1</span></strong></th>
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

			while( $third_amateur = mysqli_fetch_array( $amateur_third_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $third_amateur['FirstName']; ?> <?php echo $third_amateur['LastName']; ?></td>
						<td><?php echo $third_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $third_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_third_res );

		}
//Third Test 2 Amateur

		$amateur_third_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 14 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_third_res = mysqli_query( $mysqli, $amateur_third_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_third_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Third Level Test 2</span></strong></th>
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

			while( $third_amateur = mysqli_fetch_array( $amateur_third_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $third_amateur['FirstName']; ?> <?php echo $third_amateur['LastName']; ?></td>
						<td><?php echo $third_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $third_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_third_res );

		}

//Third Test 3 Amateur

		$amateur_third_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 15 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_third_res = mysqli_query( $mysqli, $amateur_third_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_third_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Third Level Test 3</span></strong></th>
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

			while( $third_amateur = mysqli_fetch_array( $amateur_third_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $third_amateur['FirstName']; ?> <?php echo $third_amateur['LastName']; ?></td>
						<td><?php echo $third_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $third_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_third_res );

		}

	//Third Amateur Champ/Reserve
		$third_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (13, 14, 15) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Amateur' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$third_champs_res = mysqli_query( $mysqli, $third_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $third_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $third_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $third_champs_res );

		}


//Third Level junior Results
		$third_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (15, 14, 13) AND riders.Level = 'Junior'";
		$third_entries_res = mysqli_query( $mysqli, $third_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $third_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Third Level Junior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $third_entries_res );

		}
//Third Test 1 Junior

		$junior_third_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 13 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_third_res = mysqli_query( $mysqli, $junior_third_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_third_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Third Level Test 1</span></strong></th>
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

			while( $third_junior = mysqli_fetch_array( $junior_third_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $third_junior['FirstName']; ?> <?php echo $third_junior['LastName']; ?></td>
						<td><?php echo $third_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $third_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_third_res );

		}
//Third Test 2 Junior

		$junior_third_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 14 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_third_res = mysqli_query( $mysqli, $junior_third_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_third_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Third Level Test 2</span></strong></th>
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

			while( $third_junior = mysqli_fetch_array( $junior_third_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $third_junior['FirstName']; ?> <?php echo $third_junior['LastName']; ?></td>
						<td><?php echo $third_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $third_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_third_res );

		}

//Third Test 3 Junior

		$junior_third_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 15 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_third_res = mysqli_query( $mysqli, $junior_third_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_third_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Third Level Test 3</span></strong></th>
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

			while( $third_junior = mysqli_fetch_array( $junior_third_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $third_junior['FirstName']; ?> <?php echo $third_junior['LastName']; ?></td>
						<td><?php echo $third_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $third_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_third_res );

		}	

//Third Junior Champ/Reserve
		$third_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (13, 14, 15) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Junior' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$third_champs_res = mysqli_query( $mysqli, $third_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $third_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $third_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $third_champs_res );

		}

//Second Level Open Results
		$second_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (10, 11, 12) AND riders.Level = 'Open'";
		$second_entries_res = mysqli_query( $mysqli, $second_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $second_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Second Level Open</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $second_entries_res );

		}

		$open_second_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 10 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_second_res = mysqli_query( $mysqli, $open_second_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_second_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Second Level Test 1</span></strong></th>
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

			while( $second_open = mysqli_fetch_array( $open_second_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $second_open['FirstName']; ?> <?php echo $second_open['LastName']; ?></td>
						<td><?php echo $second_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $second_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_second_res );

		}
		//Second Test 2 Open
		$open_second_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 11 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_second_res = mysqli_query( $mysqli, $open_second_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_second_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Second Level Test 2</span></strong></th>
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

			while( $second_open = mysqli_fetch_array( $open_second_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $second_open['FirstName']; ?> <?php echo $second_open['LastName']; ?></td>
						<td><?php echo $second_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $second_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_second_res );

		}


//Second Test 3 Open
		$open_second_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 12 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_second_res = mysqli_query( $mysqli, $open_second_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_second_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Second Level Test 3</span></strong></th>
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

			while( $second_open = mysqli_fetch_array( $open_second_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $second_open['FirstName']; ?> <?php echo $second_open['LastName']; ?></td>
						<td><?php echo $second_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $second_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_second_res );

		}

		//Second Open Champ/Reserve
		$second_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (10, 11, 12) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Open' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$second_champs_res = mysqli_query( $mysqli, $second_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $second_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $second_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $second_champs_res );

		}

//Second Level Amateur Results
		$second_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (10, 11, 12) AND riders.Level = 'Amateur'";
		$second_entries_res = mysqli_query( $mysqli, $second_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $second_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Second Level Amateur</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $second_entries_res );

		}
//Second Test 1 Amateur

		$amateur_second_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 10 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_second_res = mysqli_query( $mysqli, $amateur_second_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_second_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Second Level Test 1</span></strong></th>
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

			while( $second_amateur = mysqli_fetch_array( $amateur_second_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $second_amateur['FirstName']; ?> <?php echo $second_amateur['LastName']; ?></td>
						<td><?php echo $second_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $second_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_second_res );

		}
//Second Test 2 Amateur

		$amateur_second_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 11 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_second_res = mysqli_query( $mysqli, $amateur_second_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_second_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Second Level Test 2</span></strong></th>
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

			while( $second_amateur = mysqli_fetch_array( $amateur_second_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $second_amateur['FirstName']; ?> <?php echo $second_amateur['LastName']; ?></td>
						<td><?php echo $second_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $second_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_second_res );

		}

//Second Test 3 Amateur

		$amateur_second_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 12 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_second_res = mysqli_query( $mysqli, $amateur_second_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_second_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Second Level Test 3</span></strong></th>
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

			while( $second_amateur = mysqli_fetch_array( $amateur_second_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $second_amateur['FirstName']; ?> <?php echo $second_amateur['LastName']; ?></td>
						<td><?php echo $second_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $second_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_second_res );

		}

	//Second Amateur Champ/Reserve
		$second_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (10, 11, 12) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Amateur' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$second_champs_res = mysqli_query( $mysqli, $second_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $second_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $second_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $second_champs_res );

		}


//Second Level junior Results
		$second_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (10, 11, 12) AND riders.Level = 'Junior'";
		$second_entries_res = mysqli_query( $mysqli, $second_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $second_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Second Level Junior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $second_entries_res );

		}
//Second Test 1 Junior

		$junior_second_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 10 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_second_res = mysqli_query( $mysqli, $junior_second_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_second_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Second Level Test 1</span></strong></th>
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

			while( $second_junior = mysqli_fetch_array( $junior_second_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $second_junior['FirstName']; ?> <?php echo $second_junior['LastName']; ?></td>
						<td><?php echo $second_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $second_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_second_res );

		}
//Second Test 2 Junior

		$junior_second_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 11 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_second_res = mysqli_query( $mysqli, $junior_second_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_second_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Second Level Test 2</span></strong></th>
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

			while( $second_junior = mysqli_fetch_array( $junior_second_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $second_junior['FirstName']; ?> <?php echo $second_junior['LastName']; ?></td>
						<td><?php echo $second_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $second_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_second_res );

		}

//Second Test 3 Junior

		$junior_second_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 12 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_second_res = mysqli_query( $mysqli, $junior_second_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_second_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Second Level Test 3</span></strong></th>
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

			while( $second_junior = mysqli_fetch_array( $junior_second_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $second_junior['FirstName']; ?> <?php echo $second_junior['LastName']; ?></td>
						<td><?php echo $second_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $second_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_second_res );

		}	

//Second Junior Champ/Reserve
		$second_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (10, 11, 12) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Junior' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$second_champs_res = mysqli_query( $mysqli, $second_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $second_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $second_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $second_champs_res );

		}

//First Level Open Results
		$first_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (7, 8, 9) AND riders.Level = 'Open'";
		$first_entries_res = mysqli_query( $mysqli, $first_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $first_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">First Level Open</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $first_entries_res );

		}

		$open_first_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 7 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_first_res = mysqli_query( $mysqli, $open_first_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_first_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF First Level Test 1</span></strong></th>
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

			while( $first_open = mysqli_fetch_array( $open_first_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $first_open['FirstName']; ?> <?php echo $first_open['LastName']; ?></td>
						<td><?php echo $first_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $first_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_first_res );

		}
		//First Test 2 Open
		$open_first_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 8 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_first_res = mysqli_query( $mysqli, $open_first_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_first_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF First Level Test 2</span></strong></th>
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

			while( $first_open = mysqli_fetch_array( $open_first_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $first_open['FirstName']; ?> <?php echo $first_open['LastName']; ?></td>
						<td><?php echo $first_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $first_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_first_res );

		}


//First Test 3 Open
		$open_first_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 9 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_first_res = mysqli_query( $mysqli, $open_first_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_first_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF First Level Test 3</span></strong></th>
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

			while( $first_open = mysqli_fetch_array( $open_first_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $first_open['FirstName']; ?> <?php echo $first_open['LastName']; ?></td>
						<td><?php echo $first_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $first_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_first_res );

		}

		//First Open Champ/Reserve
		$first_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (7, 8, 9) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Open' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$first_champs_res = mysqli_query( $mysqli, $first_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $first_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $first_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $first_champs_res );

		}

//First Level Amateur Results
		$first_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (7, 8, 9) AND riders.Level = 'Amateur'";
		$first_entries_res = mysqli_query( $mysqli, $first_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $first_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">First Level Amateur</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $first_entries_res );

		}
//First Test 1 Amateur

		$amateur_first_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 7 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_first_res = mysqli_query( $mysqli, $amateur_first_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_first_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF First Level Test 1</span></strong></th>
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

			while( $first_amateur = mysqli_fetch_array( $amateur_first_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $first_amateur['FirstName']; ?> <?php echo $first_amateur['LastName']; ?></td>
						<td><?php echo $first_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $first_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_first_res );

		}
//First Test 2 Amateur

		$amateur_first_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 8 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_first_res = mysqli_query( $mysqli, $amateur_first_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_first_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF First Level Test 2</span></strong></th>
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

			while( $first_amateur = mysqli_fetch_array( $amateur_first_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $first_amateur['FirstName']; ?> <?php echo $first_amateur['LastName']; ?></td>
						<td><?php echo $first_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $first_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_first_res );

		}

//First Test 3 Amateur

		$amateur_first_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 9 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_first_res = mysqli_query( $mysqli, $amateur_first_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_first_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF First Level Test 3</span></strong></th>
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

			while( $first_amateur = mysqli_fetch_array( $amateur_first_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $first_amateur['FirstName']; ?> <?php echo $first_amateur['LastName']; ?></td>
						<td><?php echo $first_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $first_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_first_res );

		}

	//First Amateur Champ/Reserve
		$first_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (7, 8, 9) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Amateur' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$first_champs_res = mysqli_query( $mysqli, $first_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $first_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $first_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $first_champs_res );

		}


//First Level junior Results
		$first_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (7, 8, 9) AND riders.Level = 'Junior'";
		$first_entries_res = mysqli_query( $mysqli, $first_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $first_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">First Level Junior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $first_entries_res );

		}
//First Test 1 Junior

		$junior_first_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 7 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_first_res = mysqli_query( $mysqli, $junior_first_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_first_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF First Level Test 1</span></strong></th>
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

			while( $first_junior = mysqli_fetch_array( $junior_first_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $first_junior['FirstName']; ?> <?php echo $first_junior['LastName']; ?></td>
						<td><?php echo $first_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $first_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_first_res );

		}
//First Test 2 Junior

		$junior_first_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 8 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_first_res = mysqli_query( $mysqli, $junior_first_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_first_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF First Level Test 2</span></strong></th>
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

			while( $first_junior = mysqli_fetch_array( $junior_first_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $first_junior['FirstName']; ?> <?php echo $first_junior['LastName']; ?></td>
						<td><?php echo $first_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $first_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_first_res );

		}

//First Test 3 Junior

		$junior_first_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 9 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_first_res = mysqli_query( $mysqli, $junior_first_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_first_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF First Level Test 3</span></strong></th>
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

			while( $first_junior = mysqli_fetch_array( $junior_first_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $first_junior['FirstName']; ?> <?php echo $first_junior['LastName']; ?></td>
						<td><?php echo $first_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $first_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_first_res );

		}	

//First Junior Champ/Reserve
		$first_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (7, 8, 9) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Junior' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 1 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$first_champs_res = mysqli_query( $mysqli, $first_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $first_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $first_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $first_champs_res );

		}

//Training Level Open Results
		$training_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (4, 5, 6) AND riders.Level = 'Open'";
		$training_entries_res = mysqli_query( $mysqli, $training_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $training_entries_res ) >0 ) {

			?>

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

		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 4 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Training Level Test 1</span></strong></th>
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

				$place++;

				?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $training_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
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
		//Training Test 2 Open
		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 5 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Training Level Test 2</span></strong></th>
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

				$place++;

				?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $training_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
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


//Training Test 3 Open
		$open_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 6 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_training_res = mysqli_query( $mysqli, $open_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_training_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Training Level Test 3</span></strong></th>
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

				$place++;

				?>

					<tr>
						<td><?php echo $training_open['FirstName']; ?> <?php echo $training_open['LastName']; ?></td>
						<td><?php echo $training_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $training_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
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

		//Training Open Champ/Reserve
		$training_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (4, 5, 6) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Open' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 2 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$training_champs_res = mysqli_query( $mysqli, $training_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $training_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $training_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $training_champs_res );

		}

//Training Level Amateur Results
		$training_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (4, 5, 6) AND riders.Level = 'Amateur'";
		$training_entries_res = mysqli_query( $mysqli, $training_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $training_entries_res ) >0 ) {

			?>

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
//Training Test 1 Amateur

		$amateur_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 4 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_training_res = mysqli_query( $mysqli, $amateur_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_training_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Training Level Test 1</span></strong></th>
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

			while( $training_amateur = mysqli_fetch_array( $amateur_training_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $training_amateur['FirstName']; ?> <?php echo $training_amateur['LastName']; ?></td>
						<td><?php echo $training_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $training_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_training_res );

		}
//Training Test 2 Amateur

		$amateur_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 5 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_training_res = mysqli_query( $mysqli, $amateur_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_training_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Training Level Test 2</span></strong></th>
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

			while( $training_amateur = mysqli_fetch_array( $amateur_training_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $training_amateur['FirstName']; ?> <?php echo $training_amateur['LastName']; ?></td>
						<td><?php echo $training_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $training_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_training_res );

		}

//Training Test 3 Amateur

		$amateur_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 6 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_training_res = mysqli_query( $mysqli, $amateur_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_training_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Training Level Test 3</span></strong></th>
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

			while( $training_amateur = mysqli_fetch_array( $amateur_training_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $training_amateur['FirstName']; ?> <?php echo $training_amateur['LastName']; ?></td>
						<td><?php echo $training_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $training_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_training_res );

		}

	//Training Amateur Champ/Reserve
		$training_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (4, 5, 6) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Amateur' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 2 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$training_champs_res = mysqli_query( $mysqli, $training_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $training_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $training_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $training_champs_res );

		}


//Training Level junior Results
		$training_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (4, 5, 6) AND riders.Level = 'Junior'";
		$training_entries_res = mysqli_query( $mysqli, $training_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $training_entries_res ) >0 ) {

			?>

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
//Training Test 1 Junior

		$junior_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 4 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_training_res = mysqli_query( $mysqli, $junior_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_training_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Training Level Test 1</span></strong></th>
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

			while( $training_junior = mysqli_fetch_array( $junior_training_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $training_junior['FirstName']; ?> <?php echo $training_junior['LastName']; ?></td>
						<td><?php echo $training_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $training_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_training_res );

		}
//Training Test 2 Junior

		$junior_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 5 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_training_res = mysqli_query( $mysqli, $junior_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_training_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Training Level Test 2</span></strong></th>
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

			while( $training_junior = mysqli_fetch_array( $junior_training_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $training_junior['FirstName']; ?> <?php echo $training_junior['LastName']; ?></td>
						<td><?php echo $training_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $training_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_training_res );

		}

//Training Test 3 Junior

		$junior_training_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 6 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_training_res = mysqli_query( $mysqli, $junior_training_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_training_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Training Level Test 3</span></strong></th>
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

			while( $training_junior = mysqli_fetch_array( $junior_training_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $training_junior['FirstName']; ?> <?php echo $training_junior['LastName']; ?></td>
						<td><?php echo $training_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $training_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_training_res );

		}	

//Training Junior Champ/Reserve
		$training_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (4, 5, 6) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Junior' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 2 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$training_champs_res = mysqli_query( $mysqli, $training_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $training_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $training_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $training_champs_res );

		}

//Introductory Level Open Results
		$intro_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (1, 2, 3) AND riders.Level = 'Open'";
		$intro_entries_res = mysqli_query( $mysqli, $intro_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Introductory Level Open</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $intro_entries_res );

		}

		$open_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 1 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_intro_res = mysqli_query( $mysqli, $open_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Introductory Level Test A</span></strong></th>
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

			while( $intro_open = mysqli_fetch_array( $open_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_open['FirstName']; ?> <?php echo $intro_open['LastName']; ?></td>
						<td><?php echo $intro_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_intro_res );

		}
		//Introductory Test 2 Open
		$open_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 2 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_intro_res = mysqli_query( $mysqli, $open_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Introductory Level Test B</span></strong></th>
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

			while( $intro_open = mysqli_fetch_array( $open_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_open['FirstName']; ?> <?php echo $intro_open['LastName']; ?></td>
						<td><?php echo $intro_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_intro_res );

		}


//Introductory Test 3 Open
		$open_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 3 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_intro_res = mysqli_query( $mysqli, $open_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Introductory Level Test C</span></strong></th>
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

			while( $intro_open = mysqli_fetch_array( $open_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_open['FirstName']; ?> <?php echo $intro_open['LastName']; ?></td>
						<td><?php echo $intro_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_intro_res );

		}

		//Introductory Open Champ/Reserve
		$intro_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (1, 2, 3) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Open' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 2 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$intro_champs_res = mysqli_query( $mysqli, $intro_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $intro_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $intro_champs_res );

		}

//Introductory Level Amateur Results
		$intro_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (1, 2, 3) AND riders.Level = 'Amateur'";
		$intro_entries_res = mysqli_query( $mysqli, $intro_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Introductory Level Amateur</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $intro_entries_res );

		}
//Introductory Test 1 Amateur

		$amateur_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 1 
							AND riders.Level = 'Amateur' AND riders.FirstName <> 'Test' ORDER BY TestScores.PercentageScore DESC";
		$amateur_intro_res = mysqli_query( $mysqli, $amateur_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Introductory Level Test A</span></strong></th>
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

			while( $intro_amateur = mysqli_fetch_array( $amateur_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_amateur['FirstName']; ?> <?php echo $intro_amateur['LastName']; ?></td>
						<td><?php echo $intro_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_intro_res );

		}
//Introductory Test 2 Amateur

		$amateur_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 2 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_intro_res = mysqli_query( $mysqli, $amateur_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Introductory Level Test B</span></strong></th>
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

			while( $intro_amateur = mysqli_fetch_array( $amateur_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_amateur['FirstName']; ?> <?php echo $intro_amateur['LastName']; ?></td>
						<td><?php echo $intro_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_intro_res );

		}

//Introductory Test 3 Amateur

		$amateur_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 3 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_intro_res = mysqli_query( $mysqli, $amateur_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Introductory Level Test C</span></strong></th>
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

			while( $intro_amateur = mysqli_fetch_array( $amateur_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_amateur['FirstName']; ?> <?php echo $intro_amateur['LastName']; ?></td>
						<td><?php echo $intro_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_intro_res );

		}

	//Introductory Amateur Champ/Reserve
		$intro_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (1, 2, 3) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Amateur' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 2 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$intro_champs_res = mysqli_query( $mysqli, $intro_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $intro_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $intro_champs_res );

		}


//Introductory Level junior Results
		$intro_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (1, 2, 3) AND riders.Level = 'Junior'";
		$intro_entries_res = mysqli_query( $mysqli, $intro_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Introductory Level Junior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $intro_entries_res );

		}
//Introductory Test 1 Junior

		$junior_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 1 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_intro_res = mysqli_query( $mysqli, $junior_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Introductory Level Test A</span></strong></th>
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

			while( $intro_junior = mysqli_fetch_array( $junior_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_junior['FirstName']; ?> <?php echo $intro_junior['LastName']; ?></td>
						<td><?php echo $intro_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_intro_res );

		}
//Introductory Test 2 Junior

		$junior_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 2 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_intro_res = mysqli_query( $mysqli, $junior_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Introductory Level Test B</span></strong></th>
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

			while( $intro_junior = mysqli_fetch_array( $junior_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_junior['FirstName']; ?> <?php echo $intro_junior['LastName']; ?></td>
						<td><?php echo $intro_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_intro_res );

		}

//Introductory Test 3 Junior

		$junior_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 3 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_intro_res = mysqli_query( $mysqli, $junior_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2015 USEF Introductory Level Test C</span></strong></th>
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

			while( $intro_junior = mysqli_fetch_array( $junior_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_junior['FirstName']; ?> <?php echo $intro_junior['LastName']; ?></td>
						<td><?php echo $intro_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_intro_res );

		}	

//Introductory Junior Champ/Reserve
		$intro_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (1, 2, 3) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Junior' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 2 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$intro_champs_res = mysqli_query( $mysqli, $intro_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $intro_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $intro_champs_res );

		}

//Beginner Novice Senior Results
		$bneventing_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (19, 20) AND riders.Level IN ('Open', 'Amateur')";
		$bneventing_entries_res = mysqli_query( $mysqli, $bneventing_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $bneventing_entries_res ) >0 ) {

			?>

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

//Beginner Novice Test A Senior

		$senior_bneventing_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 19
							AND riders.Level IN ('Open', 'Amateur') ORDER BY TestScores.PercentageScore DESC";
		$senior_bneventing_res = mysqli_query( $mysqli, $senior_bneventing_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $senior_bneventing_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">USEA Beginner Novice Test A</span></strong></th>
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

			while( $bneventing_open = mysqli_fetch_array( $senior_bneventing_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $bneventing_open['FirstName']; ?> <?php echo $bneventing_open['LastName']; ?></td>
						<td><?php echo $bneventing_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $bneventing_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $senior_bneventing_res );

		}

//Beginner Novice Test B Senior
		$senior_bneventing_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 20 
							AND riders.Level IN ('Open', 'Amateur') ORDER BY TestScores.PercentageScore DESC";
		$senior_bneventing_res = mysqli_query( $mysqli, $senior_bneventing_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $senior_bneventing_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">USEA Beginner Novice Test B</span></strong></th>
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

			while( $bneventing_open = mysqli_fetch_array( $senior_bneventing_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $bneventing_open['FirstName']; ?> <?php echo $bneventing_open['LastName']; ?></td>
						<td><?php echo $bneventing_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $bneventing_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $senior_bneventing_res );

		}


//Beginner Novice junior Results
		$bneventing_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (19, 20) AND riders.Level = 'Junior'";
		$bneventing_entries_res = mysqli_query( $mysqli, $bneventing_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $bneventing_entries_res ) >0 ) {

			?>

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
//Beginner Novice A Junior

		$junior_bneventing_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 19
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_bneventing_res = mysqli_query( $mysqli, $junior_bneventing_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_bneventing_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">USEA Beginner Novice Test A</span></strong></th>
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

			while( $bneventing_junior = mysqli_fetch_array( $junior_bneventing_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $bneventing_junior['FirstName']; ?> <?php echo $bneventing_junior['LastName']; ?></td>
						<td><?php echo $bneventing_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $bneventing_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_bneventing_res );

		}
//Beginner Novice B Junior

		$junior_bneventing_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 20 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_bneventing_res = mysqli_query( $mysqli, $junior_bneventing_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_bneventing_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">USEA Beginner Novice Test B</span></strong></th>
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

			while( $bneventing_junior = mysqli_fetch_array( $junior_bneventing_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $bneventing_junior['FirstName']; ?> <?php echo $bneventing_junior['LastName']; ?></td>
						<td><?php echo $bneventing_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $bneventing_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_bneventing_res );

		}

//Intermediate Senior Results
		$intermed_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (27, 28) AND riders.Level IN ('Open', 'Amateur')";
		$intermed_entries_res = mysqli_query( $mysqli, $intermed_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intermed_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">USEA Intermediate Senior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $intermed_entries_res );

		}

//Intermediate Test A Senior

		$senior_intermed_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 27
							AND riders.Level IN ('Open', 'Amateur') ORDER BY TestScores.PercentageScore DESC";
		$senior_intermed_res = mysqli_query( $mysqli, $senior_intermed_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $senior_intermed_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">USEA Intermediate Test A</span></strong></th>
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

			while( $intermed_open = mysqli_fetch_array( $senior_intermed_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intermed_open['FirstName']; ?> <?php echo $intermed_open['LastName']; ?></td>
						<td><?php echo $intermed_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intermed_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $senior_intermed_res );

		}

//Intermediate Test B Senior
		$senior_intermed_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 28 
							AND riders.Level IN ('Open', 'Amateur') ORDER BY TestScores.PercentageScore DESC";
		$senior_intermed_res = mysqli_query( $mysqli, $senior_intermed_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $senior_intermed_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">USEA Intermediate Test B</span></strong></th>
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

			while( $intermed_open = mysqli_fetch_array( $senior_intermed_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intermed_open['FirstName']; ?> <?php echo $intermed_open['LastName']; ?></td>
						<td><?php echo $intermed_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intermed_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $senior_intermed_res );

		}


//Intermediate junior Results
		$intermed_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (27, 28) AND riders.Level = 'Junior'";
		$intermed_entries_res = mysqli_query( $mysqli, $intermed_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intermed_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">USEA Intermediate Junior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $intermed_entries_res );

		}
//Intermediate A Junior

		$junior_intermed_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 27
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_intermed_res = mysqli_query( $mysqli, $junior_intermed_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_intermed_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">USEA Intermediate Test A</span></strong></th>
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

			while( $intermed_junior = mysqli_fetch_array( $junior_intermed_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intermed_junior['FirstName']; ?> <?php echo $intermed_junior['LastName']; ?></td>
						<td><?php echo $intermed_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intermed_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_intermed_res );

		}
//Intermediate B Junior

		$junior_intermed_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 28 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_intermed_res = mysqli_query( $mysqli, $junior_intermed_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_intermed_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">USEA Intermediate Test B</span></strong></th>
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

			while( $intermed_junior = mysqli_fetch_array( $junior_intermed_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intermed_junior['FirstName']; ?> <?php echo $intermed_junior['LastName']; ?></td>
						<td><?php echo $intermed_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intermed_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_intermed_res );

		}

//WD Intro Results
//Western Dressage Introductory Level Open Results
		$intro_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (32, 33, 34, 35) AND riders.Level = 'Open'";
		$intro_entries_res = mysqli_query( $mysqli, $intro_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Western Dressage Introductory Level Open</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $intro_entries_res );

		}

		$open_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 32 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_intro_res = mysqli_query( $mysqli, $open_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 1</span></strong></th>
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

			while( $intro_open = mysqli_fetch_array( $open_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_open['FirstName']; ?> <?php echo $intro_open['LastName']; ?></td>
						<td><?php echo $intro_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_intro_res );

		}
		//Western Dressage Introductory Test 2 Open
		$open_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 33 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_intro_res = mysqli_query( $mysqli, $open_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 2</span></strong></th>
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

			while( $intro_open = mysqli_fetch_array( $open_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_open['FirstName']; ?> <?php echo $intro_open['LastName']; ?></td>
						<td><?php echo $intro_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_intro_res );

		}


//Western Dressage Introductory Test 3 Open
		$open_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 34 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_intro_res = mysqli_query( $mysqli, $open_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 3</span></strong></th>
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

			while( $intro_open = mysqli_fetch_array( $open_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_open['FirstName']; ?> <?php echo $intro_open['LastName']; ?></td>
						<td><?php echo $intro_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_intro_res );

		}

//Western Dressage Introductory Test 4 Open
		$open_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 35 
							AND riders.Level = 'Open' ORDER BY TestScores.PercentageScore DESC";
		$open_intro_res = mysqli_query( $mysqli, $open_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 3</span></strong></th>
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

			while( $intro_open = mysqli_fetch_array( $open_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_open['FirstName']; ?> <?php echo $intro_open['LastName']; ?></td>
						<td><?php echo $intro_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_intro_res );

		}		

		//Western Dressage Introductory Open Champ/Reserve
		$intro_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (32, 33, 34, 35) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Open' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 2 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$intro_champs_res = mysqli_query( $mysqli, $intro_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $intro_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $intro_champs_res );

		}

//Western Dressage Introductory Level Amateur Results
		$intro_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (32, 33, 34, 35) AND riders.Level = 'Amateur'";
		$intro_entries_res = mysqli_query( $mysqli, $intro_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Western Dressage Introductory Level Amateur</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $intro_entries_res );

		}
//Western Dressage Introductory Test 1 Amateur

		$amateur_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 32 
							AND riders.Level = 'Amateur' AND riders.FirstName <> 'Test' ORDER BY TestScores.PercentageScore DESC";
		$amateur_intro_res = mysqli_query( $mysqli, $amateur_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 1</span></strong></th>
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

			while( $intro_amateur = mysqli_fetch_array( $amateur_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_amateur['FirstName']; ?> <?php echo $intro_amateur['LastName']; ?></td>
						<td><?php echo $intro_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_intro_res );

		}
//Western Dressage Introductory Test 2 Amateur

		$amateur_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 33 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_intro_res = mysqli_query( $mysqli, $amateur_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 2</span></strong></th>
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

			while( $intro_amateur = mysqli_fetch_array( $amateur_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_amateur['FirstName']; ?> <?php echo $intro_amateur['LastName']; ?></td>
						<td><?php echo $intro_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_intro_res );

		}

//Western Dressage Introductory Test 3 Amateur

		$amateur_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 34 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$amateur_intro_res = mysqli_query( $mysqli, $amateur_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amateur_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 3</span></strong></th>
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

			while( $intro_amateur = mysqli_fetch_array( $amateur_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_amateur['FirstName']; ?> <?php echo $intro_amateur['LastName']; ?></td>
						<td><?php echo $intro_amateur['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_amateur['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $amateur_intro_res );

		}

//Western Dressage Introductory Test 4 Amateur
		$open_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 35 
							AND riders.Level = 'Amateur' ORDER BY TestScores.PercentageScore DESC";
		$open_intro_res = mysqli_query( $mysqli, $open_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 3</span></strong></th>
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

			while( $intro_open = mysqli_fetch_array( $open_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_open['FirstName']; ?> <?php echo $intro_open['LastName']; ?></td>
						<td><?php echo $intro_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_intro_res );

		}		


	//Western Dressage Introductory Amateur Champ/Reserve
		$intro_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (32, 33, 34, 35) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Amateur' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 2 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$intro_champs_res = mysqli_query( $mysqli, $intro_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $intro_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $intro_champs_res );

		}


//Western Dressage Introductory Level junior Results
		$intro_entries_sql = "SELECT entries.ID, riders.ID, classes.ID, tests.ID 
				FROM ( ( entries INNER JOIN riders ON riders.ID = entries.RiderID ) 
				INNER JOIN classes ON classes.EntryID = entries.ID ) INNER JOIN tests 
				ON tests.ID = classes.TestID WHERE tests.ID IN (32, 33, 34, 35) AND riders.Level = 'Junior'";
		$intro_entries_res = mysqli_query( $mysqli, $intro_entries_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_entries_res ) >0 ) {

			?>

			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#162B54" style="text-align: center;"><strong><span class="list-title" style="color:#FFFFFF">Western Dressage Introductory Level Junior</span></strong></th>
					</tr>
				</tbody>
			</table>

			<?php

			mysqli_free_result( $intro_entries_res );

		}
//Western Dressage Introductory Test 1 Junior

		$junior_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 32 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_intro_res = mysqli_query( $mysqli, $junior_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 1</span></strong></th>
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

			while( $intro_junior = mysqli_fetch_array( $junior_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_junior['FirstName']; ?> <?php echo $intro_junior['LastName']; ?></td>
						<td><?php echo $intro_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_intro_res );

		}
//Western Dressage Introductory Test 2 Junior

		$junior_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 33 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_intro_res = mysqli_query( $mysqli, $junior_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 2</span></strong></th>
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

			while( $intro_junior = mysqli_fetch_array( $junior_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_junior['FirstName']; ?> <?php echo $intro_junior['LastName']; ?></td>
						<td><?php echo $intro_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_intro_res );

		}

//Western Dressage Introductory Test 3 Junior

		$junior_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 34 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$junior_intro_res = mysqli_query( $mysqli, $junior_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junior_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 3</span></strong></th>
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

			while( $intro_junior = mysqli_fetch_array( $junior_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_junior['FirstName']; ?> <?php echo $intro_junior['LastName']; ?></td>
						<td><?php echo $intro_junior['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_junior['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $junior_intro_res );

		}

//Western Dressage Introductory Test 4 Junior
		$open_intro_sql = "SELECT riders.FirstName, riders.LastName, horses.Name, TestScores.PercentageScore 
							FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) 
							INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) 
							INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID = 35 
							AND riders.Level = 'Junior' ORDER BY TestScores.PercentageScore DESC";
		$open_intro_res = mysqli_query( $mysqli, $open_intro_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $open_intro_res ) > 0 ) {

			$place = 0;

			?>
			<table style="width:100%;" border="1">
				<tbody>
					<tr>
						<th colspan="4" bgcolor="#75CCE0" style="text-align: left;"><strong><span class="list-title">2017 Western Dressage Introductory Level Test 3</span></strong></th>
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

			while( $intro_open = mysqli_fetch_array( $open_intro_res ) ) {

				$place++;

				?>

					<tr>
						<td><?php echo $intro_open['FirstName']; ?> <?php echo $intro_open['LastName']; ?></td>
						<td><?php echo $intro_open['Name']; ?></td>
						<td style="text-align: center;"><?php echo $intro_open['PercentageScore']; ?></td>
						<td style="text-align: center;"><strong><?php echo $place; ?></strong></td>
					</tr>

					<?php

			}

			?>
			</tbody>
		</table>
		<br>

		<?php
			mysqli_free_result( $open_intro_res );

		}		


//Western Dressage Introductory Junior Champ/Reserve
		$intro_champs_sql = "SELECT classes.EntryID, riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE classes.TestID = ANY ( SELECT ID from tests WHERE tests.ID IN (32, 33, 34, 35) ) AND entries.ShowID = 1 AND riders.FirstName <> 'test' AND riders.Level = 'Junior' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) > 2 ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 2";
		$intro_champs_res = mysqli_query( $mysqli, $intro_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $intro_champs_res ) > 0 ) {

			$place = 0;

			?>

			<table style="width:50%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $intro_champs_res ) ) {

							$place++;

							if( $place == 1 ) {

								$place = 'Champion';

							} else {

								$place = 'Reserve';

							}

							
							?>

							<tr><td bgcolor="#75CCE0"><strong><?php echo $place; ?></strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $intro_champs_res );

		}


//High Point Open
		$openhp_champs_sql = "SELECT classes.EntryID, COUNT(classes.TestID), riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID NOT IN (1, 2, 3, 32, 33, 34, 35) AND riders.FirstName <> 'test' AND riders.Member = 'Yes' AND riders.Level = 'Open' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 1";
		$openhp_champs_res = mysqli_query( $mysqli, $openhp_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $openhp_champs_res ) > 0 ) {

			?>

			<table style="width:60%;" border="1">
				<tbody>

						<?php
						while( $champs = mysqli_fetch_array( $openhp_champs_res ) ) {

							
							?>

							<tr><td bgcolor="#75CCE0" width="200"><strong>Open High Point Winner</strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

			<?php

			mysqli_free_result( $openhp_champs_res );

		}

//High Point Amatuer
		$amathp_champs_sql = "SELECT classes.EntryID, COUNT(classes.TestID), riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes ON entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID NOT IN (1, 2, 3, 32, 33, 34, 35) AND riders.FirstName <> 'test' AND riders.Member = 'Yes' AND riders.Level = 'Amateur' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 1";
		$amathp_champs_res = mysqli_query( $mysqli, $amathp_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $amathp_champs_res ) > 0 ) {

			?>

			

						<?php
						while( $champs = mysqli_fetch_array( $amathp_champs_res ) ) {

							
							?>

							<tr><td bgcolor="#75CCE0" width="200"><strong>Amateur High Point Winner</strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

			<?php

			mysqli_free_result( $amathp_champs_res );

		}

//High Point Junior
		$junhp_champs_sql = "SELECT classes.EntryID, COUNT(classes.TestID), riders.FirstName, riders.LastName, horses.Name, AVG(TestScores.PercentageScore) FROM ( ( ( entries INNER JOIN riders ON entries.riderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) INNER JOIN classes on entries.ID = classes.EntryID ) INNER JOIN TestScores ON classes.ID = TestScores.ClassID WHERE entries.ShowID = 1 AND classes.TestID NOT IN (1, 2, 3, 32, 33, 34, 35) AND riders.FirstName <> 'test' AND riders.Member = 'yes' AND riders.Level = 'Junior' GROUP BY classes.EntryID HAVING COUNT(classes.TestID) ORDER BY AVG(TestScores.PercentageScore) DESC LIMIT 1";
		$junhp_champs_res = mysqli_query( $mysqli, $junhp_champs_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $junhp_champs_res ) > 0 ) {

			?>

			

						<?php
						while( $champs = mysqli_fetch_array( $junhp_champs_res ) ) {

							
							?>

							<tr><td bgcolor="#75CCE0" width="200"><strong>Junior High Point Winner</strong></td>
							<td><?php echo $champs['FirstName']?> <?php echo $champs['LastName']?></td>
							<td><?php echo $champs['Name']?></td></tr>

							<?php

						}

						?>

				</tbody>
			</table>
			<br>
			<br>

			<?php

			mysqli_free_result( $junhp_champs_res );

		}