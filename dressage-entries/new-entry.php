<?php
include( 'dso-hook.php' );

doDB();

?>
<html>
<head>
<meta charset="UTF-8">
<title>Add New Entry</title>
<link rel="stylesheet" type="text/css" href="dso-styles.css">
</head>
<body>
<style>
	#wrapper {
		width: 80%;
		margin: 0 auto;
		padding: 50px 0;
	}
	.title {
		margin: 0 auto;
		text-align: center;
		width: 50%;
		font-style: bold;
		font-size: 24px;
	}
</style>
	<div id="wrapper">
		<div class="title">
			Add New Entry
		</div>
		<form action="addentry.php" method="post">
			<div class="section group">
				<div class="col span_1_of_3">
					<div class="label">SELECT a Show Date</div>
					<select id="ShowDate" name="ShowID">
						<?php
							$get_shows_sql = 'SELECT ID, Name FROM shows ORDER BY ID DESC';
							$get_shows_res = mysqli_query( $mysqli, $get_shows_sql ) or die(mysqli_error( $mysqli ) );

							if(mysqli_num_rows( $get_shows_res ) > 0 ) {

								while( $shows = mysqli_fetch_array( $get_shows_res ) ) {

									?>

									<option value="<?php echo $shows['ID']; ?>"><?php echo $shows['Name']; ?></option>

									<?php

								} 
							} else {

								?>

								<option>No Shows Available</option>

								<?php

							}
						?>

					</select>
				</div>
				<div class="col span_1_of_3">
					<div class="label">SELECT a Rider</div>
					<select id="Rider" name="RiderID" onchange="if(this.value == 'http://dressageentriesonline.com/new-rider.php'){location.href = this.value;};">

						<?php
							$get_riders_sql = 'SELECT ID, FirstName, LastName, City, State FROM riders ORDER BY LastName';
							$get_riders_res = mysqli_query( $mysqli, $get_riders_sql ) or die(mysqli_error( $mysqli ) );

							if(mysqli_num_rows( $get_riders_res ) > 0 ) {

								while( $riders = mysqli_fetch_array( $get_riders_res ) ) {

									?>

									<option value="<?php echo $riders['ID']; ?>"><?php echo $riders['LastName']; ?>, <?php echo $riders['FirstName']; ?> - <?php echo $riders['City']; ?>, <?php echo $riders['State']; ?></option>

									<?php

								}

								?>

								<option value="http://dressageentriesonline.com/new-rider.php">Add New Rider</option>

								<?php

							} else {

								?>

								<option>No Riders Available</option>

								<?php

							}

						?>
						
					</select>
				</div>
				<div class="col span_1_of_3">
					<div class="label">SELECT a Horse</div>
					<select id="Horse" name="HorseID" onchange="if(this.value == 'http://dressageentriesonline.com/new-horse.php'){location.href = this.value;};">

						<?php
							$get_horses_sql = 'SELECT ID, Name, Owner FROM horses ORDER BY Name';
							$get_horses_res = mysqli_query( $mysqli, $get_horses_sql ) or die(mysqli_error( $mysqli ) );

							if(mysqli_num_rows( $get_horses_res ) > 0 ) {

								while( $horses = mysqli_fetch_array( $get_horses_res ) ) {

									?>

									<option value="<?php echo $horses['ID']; ?>"><?php echo $horses['Name']; ?> - Owned By <?php echo $horses['Owner']; ?></option>

									<?php

								}

								?>

								<option value="http://dressageentriesonline.com/new-horse.php">Add New Horse</option>

								<?php


							} else {

								?>

								<option>No Available Horses</option>

								<?php

							}

						?>
						
					</select>
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_3">
					<input id="EntryNumber" name="EntryNumber" type="text" placeholder="Entry Number">
				</div>
				<div class="col span_1_of_3">
					<input id="MissingItems" name="MissingItems" type="text" placeholder="Items Missing">
				</div>
				<div class="col span_1_of_3">
					<select id="Status" name="Status">
						<option value="Incomplete">Incomplete</option>
						<option value="complete">Complete</option>
					</select>
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_5">
					<div class="label">Stabling Required?</div>
					<select id="Stall" Name="Stall">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				<div class="col span_1_of_5">
					<div class="label">Will Rider Be Camping?</div>
					<select id="Camping" Name="Camping">
						<option value="Yes">Yes</option>
						<option value="No">No</option>
					</select>
				</div>
				<div class="col span_2_of_5">
					<div class="label">Stabling Requests</div>
					<input id="StableWith" name="StableWith" type="text" placeholder="Stable With...">
				</div>
				<div class="col span_1_of_5">
					<div class="label">Number of Nights</div>
					 <input id="Nights" name="Nights" type="number" min="1" max="5">
				</div>
			</div>
			
			<div class="section group">
				<div class="col span_2_of_2">
					<input type="submit" value="Add Entry">
				</div>
			</div>
		</div>
		</form>
	
</div>

</body>
</html> 