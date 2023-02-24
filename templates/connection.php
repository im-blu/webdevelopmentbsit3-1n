<?php
	// start session
    if(!isset($_SESSION))
    {
        session_start();
    }
    else
    {
        session_destroy();
        session_start();
	}

	// connect to database
	$con=mysqli_connect("localhost","root","","project");

	if(!$con){
		die(mysqli_error($con));
	}

	// initialize variables with empty values (for registration & login)
	$error = "";
	$username_err = "";
	$entry_added = "";
	$entry_error = "";
?>