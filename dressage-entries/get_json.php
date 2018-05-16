<?php
include( 'dso-hook.php' );

doDB();

?>
<html>
<head>
<meta charset="UTF-8">
<title>Add New Test</title>
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
			Add New Test
		</div>
		<form action="" method="post">
			<div class="section group">
				<div class="col span_1_of_3">
					<input type="text" name="name" placeholder="Test Name">
				</div>
				<div class="col span_1_of_3">
					<select name="arena" placeholder="Arena Size">
						<option value="Small">Small</option>
						<option value="Large">Large</option>
					</select>
				</div>
				<div class="col span_1_of_3">
					<input type="text" name="time" placeholder="Suggested Schedule Time">
				</div>
			</div>
			<div id="movements">
				<div class="section group movement">
					<div class="col span_1_of_4">
						<input type="text" name="order" placeholder="Directive Order">
					</div>
					<div class="col span_1_of_4">
						<input type="text" name="description" placeholder="Test Including Letters">
					</div>
					<div class="col span_1_of_4">
						<input type="text" name="directive" placeholder="Directive">
					</div>
					<div class="col span_1_of_4">
						<select name="coeffienct" placeholder="Coeffienct">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
					</div>
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_2">
					<input class="bttn blue" onclick="addMovement();" type="submit" value="Add New Line">
				</div>
				<div class="col span_1_of_2">
					<input type="submit" value="Add New Test">
				</div>
			</div>
		</form>
	</div>
	<script>
		function addMovement() {
    		var itm = document.getElementById("movements").lastChild;
    		var cln = itm.cloneNode(true);
    		document.getElementById("movements").appendChild(cln);
		}
</script>
</body>
</html>
