<?php
include( 'dso-hook.php' );

doDB();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Results</title>
</head>
<body>

<style>
	.list-title {
		padding: 3px 10px;
	}
	#wrapper {
		width: 80%;
		margin: 0 auto;
		padding: 50px 0;
	}
	.time {
		margin: 0 auto;
		text-align: center;
		width: 50%;
		padding: 20px 0;
	}
	.show {
		margin: 0 auto;
		text-align: center;
		width: 50%;
		font-style: bold;
		font-size: 24px;
	}
	ul {
		margin: 0;
	}
	td {
		height: 50px;
	}
	@media print {
		@page {
    		size: 210mm 297mm; /* landscape */
    		/* you can also specify margins here: */
    		margin: 50mm;
  		}
		.show,
		.time {
			display: none;
		}
		#wrapper {
			width: 90%;
			padding: 0;
		}
		table { page-break-inside:avoid }
   		tr    { page-break-inside:avoid; page-break-after:auto }
   		#table-wrap  { page-break-inside:avoid }
		}
	}
</style>
<div id="wrapper">
	<div class="show">TSDS June 2nd</div>

	<!--<div class="time">Updates will be done throughout the competition</div>-->

	<?php

		//include_once( 'sept-results.php' );

		include_once( 'june-results.php' );
		
		include_once( 'may-results.php' );

		include_once( 'fourth-results.php' );

		include_once( 'third-results.php' );

		include_once( 'second-results.php' );

		include_once( 'first-results.php' );

		include_once( 'training-results.php' );

		include_once( 'intro-results.php' );

		include_once( 'bneventing-results.php' );

		include_once( 'novice-results.php' );

		include_once( 'trainingusea-results.php' );

		include_once( 'prelim-results.php' );

		include_once( 'intermed-results.php' );

		include_once( 'advanced-results.php' );

		include_once( 'prix-results.php' );

		include_once( 'wdintro-results.php' );

	?>

</div>
</body>

</html> 