<?php
include( 'dso-hook.php' );

doDB();

?>
<html>
<head>
<meta charset="UTF-8">
<title>Add Classes for Entry</title>
<link rel="stylesheet" type="text/css" href="dso-styles.css">
<script>
function showEntries(str) {
	if (str=="") {
		document.getElementById("entryList").innerHTML="";
		return;
	} else {
		if (window.XMLHttpRequest) {
			//code for most browsers
			xmlhttp = new XMLHttpRequest();
		} else {
			//code for OLD IE
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("entryList").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET","gatheremails.php?e="+str,true);
		xmlhttp.send();
	}
}
function showEmail(str) {
	if (str=="") {
		document.getElementById("copyEmail").innerHTML="";
		return;
	} else {
		if (window.XMLHttpRequest) {
			//code for most browsers
			xmlhttp_tests = new XMLHttpRequest();
		} else {
			//code for OLD IE
			xmlhttp_tests = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp_tests.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("copyEmail").innerHTML = this.responseText;
			}
		};
		xmlhttp_tests.open("GET","getemail.php?s="+str,true);
		xmlhttp_tests.send();
	}
}
</script>
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
	#copyEmail {
		width: 80%;
    	margin: 0 auto;
    	padding: 20px;
    	background: #F2FBFF;
    	border: 1px solid #01669A;
    	border-radius: 6px;
    	font: Arial, Helvetica, sans-serif;
	}
</style>
	<div id="wrapper">
		<div class="title">Entry Emails</div>
		<div class="selectShow">Select SHOW Date</div>
		<form>
			<div class="section group">
				<div class="col span_1_of_2">
					<select id="ShowDate" name="ShowID" onchange="showEntries(this.value)">
						<option value="">Select Show Date</option>
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
				<div class="col span_1_of_2">
					<div id="entryList">
					</div>
				</div>
			</div>
		</form>
		<div class="section group">
			<div class="col span_2_of_2">
				<div id="copyEmail">
			</div>
		</div>


	</div>

</body>
</html> 