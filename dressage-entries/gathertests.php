<?php
$t = intval($_GET['t']);

include( 'dso-hook.php' );

doDB();

?>

<form>
			<select id="test" name="TestID" onchange="showMarks(this.value)">
				<option value="">SELECT Test to SCORE</option>

				<?php
				$get_tests_sql = 'SELECT classes.ID, classes.TestID, tests.Name FROM tests INNER JOIN classes ON classes.TestID = tests.ID WHERE classes.EntryID = ' . $t . ' ORDER BY tests.ID';
				$get_tests_res = mysqli_query( $mysqli, $get_tests_sql ) or die(mysqli_error( $mysqli ) );

				if(mysqli_num_rows( $get_tests_res ) > 0 ) {

					while( $tests = mysqli_fetch_array( $get_tests_res ) ) {

						?>

						<option value="<?php echo $tests['ID']; ?>"><?php echo $tests['Name']; ?></option>

						<?php

					}

				} else {

					?>

					<option value="">NO CLASSES AVAILABLE FOR THIS ENTRY</option>

					<?php

				}

				?>		
			</select>
	
		
</form>
<?php

mysqli_close( $mysqli );