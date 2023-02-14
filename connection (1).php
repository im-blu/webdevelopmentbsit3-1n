<?php
//hostname,database name, user, password
$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "db_students";
$table = "tblstudent";

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
		studid	INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		studno VARCHAR(20) NOT NULL,
		studname VARCHAR(30) NOT NULL,
		year_sec VARCHAR(10) NOT NULL)
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