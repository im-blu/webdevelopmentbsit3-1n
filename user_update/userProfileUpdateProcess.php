<?php
session_start();
// Report all PHP errors
error_reporting(E_ALL);

if(isset($_POST['update'])){

	include('connection.php');

	$userNewUsername = $_POST['updateUsername'];
    $userNewPassword = $_POST['updatePassword'];
    $userNewLName = $_POST['updateLname'];
    $userNewFName = $_POST['updateFname'];
    $userNewMName = $_POST['updateMname'];
    $userNewSuffix = $_POST['updateSuffix'];

	if(isset($_POST['username'])){

	$loggedInUser = $_SESSION['username'];
	$sql = "UPDATE account_details SET username = '$userNewUsername', password ='$userNewPassword',
	lastname='$userNewLName', firstname='$userNewFName', middlename = $userNewMName, suffix = 'userNewSuffix'  WHERE username = '$loggedInUser'";

	$results = mysqli_query($con,$sql);
	header('Location:/userProfile/userProfile.php?success=userUpdated');
	exit;
	}

}

?>