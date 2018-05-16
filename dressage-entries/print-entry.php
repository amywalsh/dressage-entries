<?php
include( 'dso-hook.php' );

doDB();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Print Entry Form</title>
<link rel="stylesheet" type="text/css" href="dso-styles.css">
<style>
	table {
		margin: 0 auto;
	}
	.list-title {
		padding: 3px 10px;
	}
	#wrapper {
		width: 80%;
		margin: 0 auto;
		padding: 50px 0;
	}
	.show {
		margin: 0 auto;
		text-align: center;
		width: 50%;
		font-style: bold;
		font-size: 24px;
		padding-bottom: 30px;
	}
	.title {
		text-align: center;
		font-size: 17px;
		font-weight: bold;
	}
	td.image,
	td.borderLeft {
		border-top: 1px solid #000;
		border-left: 1px solid #000;
		border-bottom: 1px solid #000;
	}
	td.image img {
		padding-left: 6px;
	}
	td.borderRow,
	td.borderRight,
	td.sym,
	td.shaded {
		border-top: 1px solid #000;
		border-right: 1px solid #000;
		border-bottom: 1px solid #000;
	}
	.borderAll {
		border: 1px solid #000;
	}
	td.sym {
		font-weight: bold;
	}
	.subTitle {
		text-align: center;
		font-weight: bold;
		font-size: 15px;
		padding: 6px;
	}
	td.emptyBox {
		width: 230px;
    	border: 2px solid #000;
	}
	.text {
		text-align: left;
	}
	.borderBox {
		border: 1px solid #000;
		padding: 5px;
	}
	.italic {
		font-style: italic;
	}
	.bold {
		font-weight: bold;
	}
	.underline {
		text-decoration: underline; 
	}
	.caps {
		text-transform: uppercase;
	}
	.lower {
		text-transform: lowercase;
	}
	.small {
		font-size: 11px;
		line-height: 11px;
	}
	.med {
		font-size: 13px;
		line-height: 13px;
	}
	.large {
		font-size: 18px;
	}
	.textBlock span {
		display: inline-block;
	}
	.data {
		border-bottom: 1px solid #000;
		padding: 2px;
		text-align: center;
		width: 100%;
	}
	.officeUse {
		border: 2px solid #000;
		background: #DDD;
		padding: 5px 0;
	}
	.shaded {
		background: #DDD;
	}
	.inline {
		display: inline-block;
		width: 49.4%;
		vertical-align: top;
	}
	.neat {
		display: inline-block;
	}
	.pad {
		padding: 6px 0;
	}
	.cell {
		padding-left: 2px;
	}
	#col1,
	#col2 {
		display: inline-block;
		vertical-align: top;
	}
	#col1 {
		width: 32.5%;
	}
	#col2 {
		width: 66.26%;
	}
	.release {
		border: 2px solid #000;
		padding: 3px;
	}
	.clinic {
		padding: 6px;
	}
	ul {
		margin: 0;
	}
	@media print {
		@page {
    		size: 297mm 210mm; /* landscape */
    		/* you can also specify margins here: */
    		margin: 25mm;
  		}
		#SelectionValues,
		.selectShow {
			display: none;
		}
		#wrapper {
			width: 100%;
			padding: 0;
		}
		.small {
			line-height: 10px;
			font-size: 9px;
		}
		.clinic {
			padding: 3px;
		}
		.pad {
			padding: 3px 0;
		}
	}
</style>
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
		xmlhttp.open("GET","gatherprintentries.php?e="+str,true);
		xmlhttp.send();
	}
}
function showEntry(str) {
	if (str=="") {
		document.getElementById("printEntry").innerHTML="";
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
				document.getElementById("printEntry").innerHTML = this.responseText;
			}
		};
		xmlhttp_tests.open("GET","showprintentry.php?p="+str,true);
		xmlhttp_tests.send();
	}
}
</script>
</head>
<body>
<?php


?>
	<div id="wrapper">
			<div class="selectShow">Select SHOW Date</div>
		<form>
			<div id="SelectionValues" class="section group">
				<div class="col span_1_of_2">
					<select id="ShowDate" name="ShowID" onchange="showEntries(this.value)">
						<option value="">Select Show Date</option>
						<?php
							$get_shows_sql = 'SELECT ID, Name FROM shows ORDER BY ID';
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
				<div id="printEntry">

			</div>
		</div>


	</div><!-- End Wrapper -->

</body>
</html> 