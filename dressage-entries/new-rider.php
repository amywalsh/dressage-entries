<?php
include( 'dso-hook.php' );

doDB();

?>
<html>
<head>
<meta charset="UTF-8">
<title>Add New Rider</title>
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
			Add New Rider
		</div>
		<form action="addrider.php" method="post">
			<div class="section group">
				<div class="col span_1_of_3">
					<input id="riderFirstName" name="riderFirstName" type="text" placeholder="Rider's First Name">
				</div>
				<div class="col span_1_of_3">
					<input id="riderLastName" name="riderLastName" type="text" placeholder="Rider's Last Name">
				</div>
				<div class="col span_1_of_3">
					<input id="Email" name="Email" type="text" placeholder="name@email.com">
				</div>
			</div>
			<div class="section group">
				<div class="col span_2_of_2">
					<input id="StreetAddress" name="StreetAddress" type="text" placeholder="123 Any Street">
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_3">
					<input id="City" name="City" type="text" placeholder="City">
				</div>
				<div class="col span_1_of_3">
					<input id="State" name="State" type="text" placeholder="LA">
				</div>
				<div class="col span_1_of_3">
					<input id="Zip" name="Zip" type="text" placeholder="71107">
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_2">
					<input id="CellPhone" name="CellPhone" type="text" placeholder="318-555-5555">
				</div>
				<div class="col span_1_of_2">
					<input id="HomePhone" name="HomePhone" type="text" placeholder="318-555-5555">
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_2">
					<select id="Level" name="Level">
						<option value="Amateur">Amateur</option>
						<option value="Junior">Junior</option>
						<option value-"Senior">Open</option>
					</select>
				</div>
				<div class="col span_1_of_2">
					<input id="DOB" name="DOB" type="text" placeholder="DOB">
				</div>
			</div>
			<div class="section group">
				<div class="col span_2_of_2">
					<input type="submit" value="Add Rider">
				</div>
			</div>
		</form>



	
</div>

</body>
</html> 