<?php
//hostname,database name, user, password
$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "project";
$table = "class_information_details";

//mysqli_connect("localhost","root","","dba");
/*
$con=mysqli_connect($host,$user,$pwd,$dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
*/

try {
	$mysqli = new mysqli($host, $user, $pwd, "");
} catch (\Exception $e) {
	echo $e->getMessage(), PHP_EOL;
}

$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($mysqli->query($sql)) {
	$mysqli->select_db($dbname);
	
	$mysqli->query("CREATE TABLE IF NOT EXISTS $table (
		`class_info_id` int(11) NOT NULL,
		`class_number` varchar(30) NOT NULL,
		`letter_order_number` varchar(15) NOT NULL,
		`general_order` varchar(30) NOT NULL,
		`cert_ctrl_no` varchar(30) NOT NULL,
		`student_reg_id` int(11) NOT NULL)
		");

	//if empty	
	$result = $mysqli->query("SELECT * FROM $table");
	if ($result->num_rows == 0) {
		//insert initial values
		$mysqli->query("INSERT INTO $table (studid, studno, studname, year_sec) 
		VALUES (0, '2020-06765-MN-0', 'Marcus Ray Ignacio', 'BSIT 3-1N'), 
				(0, '2020-06765-MN-1', 'Rob Bautisto', 'BSIT 3-2')");
	}
}
$mysqli->select_db($dbname);
?>
