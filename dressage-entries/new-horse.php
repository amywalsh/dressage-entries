<?php
include( 'dso-hook.php' );

doDB();

?>
<html>
<head>
<meta charset="UTF-8">
<title>Add New Horse</title>
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
			Add New Horse
		</div>
		<form action="addhorse.php" method="post">
			<div class="section group">
				<div class="col span_1_of_3">
					<input id="horseName" name="horseName" type="text" placeholder="Horse's Name">
				</div>
				<div class="col span_1_of_3">
					<input id="horseBreed" name="horseBreed" type="text" placeholder="Breed of Horse">
				</div>
				<div class="col span_1_of_3">
					<select id="horseGender" name="horseGender">
						<option value="Gelding">Gelding</option>
						<option value="Mare">Mare</option>
						<option value="Stallion">Stallion</option>
					</select>
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_3">
					<input id="Age" name="Age" type="text" placeholder="Horse's Age">
				</div>
				<div class="col span_1_of_3">
					<input id="Height" name="Height" type="text" placeholder="Horse's Height">
				</div>
				<div class="col span_1_of_3">
					<input id="Color" name="Color" type="text" placeholder="Color">
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_2">
					<input id="Owner" name="Owner" type="text" placeholder="Owner of Horse">
				</div>
				<div class="col span_1_of_2">
					<input id="Trainer" name="Trainer" type="text" placeholder="Person Responsible for Horse at Show">
				</div>
			</div>
			<div class="section group">
				<div class="col span_2_of_2">
					<input type="submit" value="Add Horse">
				</div>
			</div>
		</form>
	
</div>

</body>
</html> 