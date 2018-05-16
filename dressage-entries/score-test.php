<?php
include( 'dso-hook.php' );

doDB();

?>
<html>
<head>
<meta charset="UTF-8">
<title>Score Test</title>
<link rel="stylesheet" type="text/css" href="dso-styles.css">
<script>
function showEntries(str) {
	if (str=="") {
		document.getElementById("entryInfo").innerHTML="";
		return;
	} else {
		if (window.XMLHttpRequest) {
			//code for most browsers
			xmlhttp_entries = new XMLHttpRequest();
		} else {
			//code for OLD IE
			xmlhttp_entries = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp_entries.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("entryInfo").innerHTML = this.responseText;
			}
		};
		xmlhttp_entries.open("GET","gatherentries.php?e="+str,true);
		xmlhttp_entries.send();
	}
}
function showTests(str) {
	if (str=="") {
		document.getElementById("selectTest").innerHTML="";
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
				document.getElementById("selectTest").innerHTML = this.responseText;
			}
		};
		xmlhttp_tests.open("GET","gathertests.php?t="+str,true);
		xmlhttp_tests.send();
	}
}
function showMarks(str) {
	if (str=="") {
		document.getElementById("dressageTest").innerHTML="";
		return;
	} else {
		if (window.XMLHttpRequest) {
			//code for most browsers
			xmlhttp_marks = new XMLHttpRequest();
		} else {
			//code for OLD IE
			xmlhttp_marks = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp_marks.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("dressageTest").innerHTML = this.responseText;
			}
		};
		xmlhttp_marks.open("GET","showtest.php?d="+str,true);
		xmlhttp_marks.send();
	}
}
function numberVal() {
   var inputs = document.getElementsByClassName("number");
    for(var n=0;n<inputs.length;n++){
 		if (isNaN(inputs[n].value) || inputs[n].value < 0 || inputs[n].value > 10) {
       		alert("All inputs must be a number between 0 and 10.  Please check the form and try again");
       		return false;
    	} 
	}
	var e1 = document.getElementById("Error1").value;
		if(e1 == 1 || e1 > 2) {
			alert("The first Error can only be equivalent to 2.");
			return false;
		}
	var e2 = document.getElementById("Error2").value;
		if(e2 == 1 || e2 == 2 || e2 == 3 || e2 > 4 ) {
			alert("The second Error can only be equivalent to 4.");
			return false;
		} else if( e2 == 4 && e1 == 0 ) {
			alert("There must be a 2 entered for the first Error.");
			return false;
		}
	var e3 = document.getElementById("Error3").value;
		if(e3 == 1 || e3 == 2 || e3 == 3 || e3 == 4 || e3 == 5 || e3 > 6) {
			alert("The third Error can only be equivalent to 6 and Means Elimination.");
			return false;
		} else if(e3 == 6 && e2 == 0 ) {
			alert("There must be a 4 entered for the second Error, a third Error means Elimination.");
			return false;
		}
		if(e3 == 6){
			document.getElementById("FinalScore").value = "ELIM";
		}
	var t = document.getElementById("totalPossible").innerHTML;
	var f = document.getElementById("TotalEarned").value;
	if(f>t){
		alert("We have encountered and Error in your Form, please refresh and try your update again.");
		return false;
	}
	//get correct totals
	var scores = document.getElementsByClassName('TotalMark'); 
	var total=0; 
	for(var i=0;i<scores.length;i++){
		if(parseFloat(scores[i].value)){
			total += parseFloat(scores[i].value);
		}
	}
	var e1 = getElementById("Error1").value;
	var e2 = getElementById("Error2").value;
	var e3 = getElementById("Error3").value;	

	var errors = e1+e2+e3;	

	total = total-errors;	

	document.getElementById('TotalEarned').value = total;	

	var pos = document.getElementById('totalPossible').innerHTML;	

	var percent = ((total/pos) * 100).toFixed(3) + '%'; 
	document.getElementById('FinalScore').value = percent;
}
//document.form("updateScores").submit();
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
</style>
	<div id="wrapper">
		<div class="title">
			Let's Score a Test!
		</div>
			<div class="section group">
				<div class="col span_1_of_3">

					<form>
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
					</form>
				</div>
				<div class="col span_1_of_3">
					<div id="entryInfo">
		
					</div>
				</div>

			<div class="col span_1_of_3">
					<div id="selectTest">
		
					</div>
			</div>
		</div>
		<div class="section group">
			<div class="col span_3_of_3">
				<div id="dressageTest">

				</div>

			</div>

		</div>

	</div>

</body>
</html> 