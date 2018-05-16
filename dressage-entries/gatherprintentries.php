<?php
$e = intval($_GET['e']);

include( 'dso-hook.php' );

doDB();

?>

<form>
			
			<select id="entry" name="entryID" onchange="showEntry(this.value)">
				<option value="">SELECT Horse/Rider COMBINATION</option>
				<?php

				$get_entries_sql = 'SELECT entries.ID, entries.EntryNumber, riders.LastName, riders.FirstName, horses.Name FROM ( ( entries INNER JOIN riders ON entries.RiderID = riders.ID ) INNER JOIN horses ON entries.HorseID = horses.ID ) WHERE entries.ShowID = ' . $e . ' AND entries.Status <> "Scratch" ORDER BY entries.EntryNumber';
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
	
		
</form>
<?php

mysqli_close( $mysqli );