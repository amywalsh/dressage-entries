<?php 

include( 'dso-hook.php' );

doDB();

$d = $_POST['id'];



$get_tests_sql = 'SELECT total_possible as "total", name as "name", Arena as "size", TimeLength as "time" FROM tests WHERE ID = ' . $d . '';
$get_tests_res = mysqli_query( $mysqli, $get_tests_sql ) or die(mysqli_error( $mysqli ) );

$tests = mysqli_fetch_array( $get_tests_res, MYSQL_ASSOC );

echo 'INSERT INTO tests (name, test_info)';
echo '<br>';
echo 'VALUES';
echo "('".$tests['name']."','";
echo '{"total":"';
echo $tests['total'].'",';
echo '"arenas":[{"size":"'.$tests['size'].'","time":"'.$tests['time'].'" }],';


$get_marks_sql = 'SELECT MarkOrder as "order", Test as "description", DirectiveIdeas as "directive", Coefficient as "coefficient" FROM movements_marks WHERE TestID = ' . $d . ' ORDER BY MarkOrder';
$get_marks_res = mysqli_query( $mysqli, $get_marks_sql ) or die(mysqli_error( $mysqli ) );

//$i = mysqli_num_rows( $get_marks_res );

//$marks = mysqli_fetch_array( $get_marks_res, MYSQL_ASSOC );

//echo json_encode($marks);

$i = 1;

echo '"movements":["';

while ( $marks = mysqli_fetch_array( $get_marks_res, MYSQL_ASSOC ) ) {

	$i++;

	$marks = json_encode( $marks );

	echo $marks . ',';

}

echo "]}')";

?>




