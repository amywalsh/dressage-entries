<?php
$s = intval($_GET['s']);


include( 'dso-hook.php' );

doDB();

?>
<style>
.sendTo,
.dearRider,
.showDate,
.missing,
.viewed,
.times,
.bring,
.closing {
	margin-bottom: 20px;
}
.missing div {
	margin-left: 10px;
}
.caps {
	text-transform: uppercase;
}

</style>

<?php

$get_info_sql = 'SELECT riders.LastName, riders.FirstName, riders.Email, horses.Name, riders.Level, entries.ShowID, entries.Stall, entries.Nights, entries.StableWith, entries.Missing, entries.Status, entries.ID FROM ( (entries INNER JOIN riders ON entries.RiderID=riders.ID) INNER JOIN horses ON entries.HorseID=horses.ID) WHERE entries.ID = ' . $s . '';
$get_info_res = mysqli_query( $mysqli, $get_info_sql ) or die(mysqli_error( $mysqli ) );

if(mysqli_num_rows( $get_info_res ) > 0 ) {

	while( $info = mysqli_fetch_array( $get_info_res ) ) {

		?>

		<div class="sendTo">Send To: <?php echo $info['Email']; ?></div>

		<div class="dearRider">Dear <?php echo $info['FirstName']; ?></div>


		<?php

		$get_show_sql = 'SELECT Name FROM shows WHERE ID = ' . $info['ShowID'] . '';
		$get_show_res = mysqli_query( $mysqli, $get_show_sql ) or die(mysqli_error( $mysqli ) );

		if(mysqli_num_rows( $get_show_res ) > 0 ) {

			while( $show = mysqli_fetch_array( $get_show_res ) ) {

				?>

				<div class="showDate">Thank you for entering TSDS <?php echo $show['Name']; ?> Show</div>

			<?php

			}

		}

		?>

		<div class="entryStatus">Your entry status is: <span class="caps"><?php echo $info['Status']; ?></span></span></div>
		<div class="entryInfo">Here's the entry information we have received:</div>
		<ul>
			<li>Rider: <?php echo $info['FirstName']; ?> <?php echo $info['LastName']; ?></li>
			<li>Horse: <?php echo $info['Name']; ?></li>
			<li>Tests:
				<?php

				$get_classes_sql = 'SELECT tests.Name, classes.EntryID FROM classes INNER JOIN tests ON classes.TestID=tests.ID WHERE classes.EntryID=' . $info['ID'] . '';
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
				 </li>
				 <li> Level: <?php echo $info['Level']; ?></li>
				 <?php

				 if( isset( $info['Stall'] ) ) {

				 	if( $info['Stall'] == 'Yes' ) {

				 		?>

				 		<li>Stabling: <?php echo $info['Stall']; ?>, <?php echo $info['Nights']; ?> Night(s)</li>
				 		<li>Stabling Near: <?php echo $info['StableWith']; ?></li>

				 		<?php

				 	}

				 }

				?>
				 
		</ul>

		<?php

		if( isset( $info['Missing'] ) ) {

			?>

			<div class="missing">We're still missing a few things to complete your entry:
				<div><?php echo $info['Missing']; ?></div>
			</div>

			<?php

		}

		?>

		<div class="viewed">TSDS Entry status can be viewed on line at;

			<?php

			  if( $info['ShowID'] == 1 ) {

			  	$link = 'may6-entrylist.html';

			  } elseif ( $info['ShowID'] == 2 ) {

			  	$link = 'june3-entrylist.html';

			  } else {

			  	$link = 'may5-entrylist.html';

			  }

			?>
			<div><a href="http://tristatedressagesociety.com/<?php echo $link; ?>">http://tristatedressagesociety.com/<?php echo $link; ?></a></div>
		</div>

		<div class="times">Ride times will be posted the Wednesday Before the show.</div>

		<div class="bring">Please bring your missing items with you at check in the day of the show.  You may email an electronic copy of your horse’s coggins, (if your horse is not a boarder at Holly Hill) please send it to <a href="mailto:amybethw74@gmail.com">amybethw74@gmail.com</a> or text it to <a href="tel:479-601-3290">479-601-3290</a></div>

		<div class="closing">We look forward to seeing you at the Show!</div>

		<div class="sig">Sincerely,<br>
			Amy Walsh
		</div>

		<?php

	}

} else {

	?>

	<div class="nothing">NO EMAIL TO SHOW FOR ENTRY</div>

	<?php

}

?>


