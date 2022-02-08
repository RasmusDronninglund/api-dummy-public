<?php

$api_url = 'http://23.97.145.133/database.php';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$arrdata = json_decode($json_data);

// shuffle array
shuffle($arrdata);

// Cut long data into small & select only first 10 records
$arrdata = array_slice($arrdata, 0, 5);

print_r($arrdata);

// Traverse array and display user data
/*
foreach ($user_data as $user) {
	echo "name: ".$user->employee_name;
	echo "<br />";
	echo "name: ".$user->employee_age;
	echo "<br /> <br />";
}
*/

?>
