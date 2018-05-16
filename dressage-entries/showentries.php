<?php
$e = intval($_GET['e']);

include( 'dso-hook.php' );

doDB();

?>
<form  action="addclasses.php" method="post">
	<div class="section group">
		<div class="col span_1_of_2">
			SELECT Horse/Rider COMBINATION
			<select id="entry" name="entryID">
				<?php

				$get_entries_sql = 'SELECT entries.ID, entries.EntryNumber, riders.LastName, riders.FirstName, horses.Name FROM ( ( entries INNER JOIN riders ON entries.RiderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) WHERE entries.ShowID = ' . $e . ' AND entries.Status <> "Scratch" ORDER BY entries.EntryNumber ASC';//entries.EntryNumber
				$get_entries_res = mysqli_query( $mysqli, $get_entries_sql ) or die(mysqli_error( $mysqli ) );

				if(mysqli_num_rows( $get_entries_res ) > 0 ) {

					while( $entries = mysqli_fetch_array( $get_entries_res ) ) {

						?>

						<option value="<?php echo $entries['ID']; ?>">#<?php echo $entries['EntryNumber']; ?> - <?php echo $entries['LastName']; ?>, <?php echo $entries['FirstName']; ?> - <?php echo $entries['Name']; ?></option>

						<?php

					}

				} else {

					?>

					<option value="">NO ENTRIES AVAILABLE FOR THIS SHOW</option>

					<?php

				}

				

				?>
			</select>
		</div>
		<div class="col span_1_of_2">
			SELECT Tests for ENTRY
			<style>
				.testOption {
					padding: 3px;
				}
				.testOption:nth-child(even) {
					background: #EFEFEF;
				}
			</style>
			<select style="height:auto;min-height:350px;max-height:500px;" multiple id="tests" name="testID[]">

				<?php
				$get_tests_sql = 'SELECT ID, name, abbreviation FROM tests ORDER BY ID';
				$get_tests_res = mysqli_query( $mysqli, $get_tests_sql ) or die(mysqli_error( $mysqli ) );

				if(mysqli_num_rows( $get_tests_res ) > 0 ) {

					while( $tests = mysqli_fetch_array( $get_tests_res ) ) {

						?>

						<option class="testOption" value="<?php echo $tests['ID']; ?>"><?php echo $tests['abbreviation']; ?> - <?php echo $tests['name']; ?></option>

						<?php

					}

				}
				//close connection
				mysqli_close($mysqli);

				?>
				
			</select>
			
		</div>
	</div>
	<div class="section group">
		<div class="col span_2_of_2">
			<input type="submit" value="Add Classes">
		</div>
	</div>
</form>