<?php
	// include connection file
	require dirname(__DIR__). "/templates/connection.php";

	// register the instructor
	if (isset($_POST['btnRegister'])) {

		// variable declaration
		$username = $_POST['username'];
		$password = $_POST['password'];
		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$suffix = $_POST['suffix'];
		$user_type = $_POST['type'];

		$check_uid = "select * from account_details order by account_id desc limit 1";
		$checkresult = mysqli_query($con,$check_uid);

		// validate username
		if (empty(trim($_POST['username']))) {
		    $username_err = "Please enter a username.";		// if username is empty
			}

		elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', trim($_POST["username"]))) {					// if username contains special characters
			$username_err = "Username can only contain an email.";
			}

		else {
			$sql = "SELECT account_id FROM account_details WHERE username = ?"; // if username is already taken

			if($stmt = mysqli_prepare($con, $sql)) {
				mysqli_stmt_bind_param($stmt, "s", $param_username);

				$param_username = trim($_POST["username"]);

				if (mysqli_stmt_execute($stmt)) {
					mysqli_stmt_store_result($stmt);
					if (mysqli_stmt_num_rows($stmt) == 1) {
						$username_err = "This username is already taken.";
					}

					else {
						$username = trim($_POST["username"]);
					}
				}
				mysqli_stmt_close($stmt);																												// close statement
			}
		}

		// validate user_type
	if (empty($_POST['type'])){
			$error = 'Select a user type.';
		}

		// check input errors before inserting in database
		if(empty($username_err)  && empty($pass_1d) && empty($pass_1sc) && empty($pass_ws) && empty($error)) {


			if($row = mysqli_fetch_array($checkresult))

			{
				$sql = "INSERT INTO account_details (username, password, user_type, lastname, firstname, middlename, suffix) VALUES ('$username','$password', '$user_type', '$lname', '$fname', '$mname', '$suffix')";
				$result = mysqli_query($con, $sql);
				if($result)
				{
					$entry_added = "You have been registered successfully. Please login to continue.";
				}
			}


	}
}
	// close connection
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/user_mgmt/assets/css/Registration-Form-Style.css"/>
	<link rel="stylesheet" href="/user_mgmt/assets/css/Body-Style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">

    <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
    </style>

	<title>Registration Form</title>
</head>
<body>
	<div class="row">
		<div class="lside">

		</div>

		<div class="rside">
			<hr class="line1">

			<form class="registration-form" method="post" name="login">
				<h1 class="registration-title">REGISTRATION FORM</h1>
				<p class = "reminder">Kindly fill in the form below and complete the required field/s.</p>
				<table>
						<tr>
							<div class="Icon-inside">
								<i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
								<td class="left-table"><input type="text" class="registration-input" name="lname" placeholder="Last Name" required/></td>
            	</div>

							<div class="Icon-inside1">
								<i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
								<td class="left-table"><input type="text" class="registration-input" name="fname" placeholder="First Name" required/></td>
							</div>
						</tr>
						<tr>
							<div class="Icon-inside2">
								<i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
								<td class="right-table"><input type="text" class="registration-input" name="mname" placeholder="Middle Name"/></td>
							</div>

							<div class="Icon-inside3">
								<i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
								<td class="right-table"><input type="text" class="registration-input" name="suffix" placeholder="Suffix"/></td>
							</div>
						</tr>

						<tr>
							<div class="Icon-inside4">
								<i class="fa fa-user fa-2x" aria-hidden="true"></i>
								<td class="left-table"><input type="text" class="registration-input" name="username" placeholder="Username" required/></td>
							</div>

							<div class="Icon-inside5">
								<i class="fa fa-lock fa-2x" aria-hidden="true"></i>
								<td class="right-table"><input type="password" class="registration-input" name="password" placeholder="Password" required/></td>
							</div>
						</tr>

					</table>
					<select name="type" class="options">
			        		<option value="" class="options">Account Type</option>
							<option value="student" class="options">Student</option>
							<option value="instructor" class="options">Instructor</option>
							<option value="admin" class="options">Admin</option>
							</select>

					<input type="submit" value="Register" name="btnRegister" class="register-button"/>
					<p style="color: #666" class="error"><i><?php echo $entry_added; ?></i></p>
					<p style="color: #666" class="error"><i><?php echo $entry_error; ?></i></p>

					<p style="color: #FF0000" class="error"><i><?php echo $username_err; ?></i></p>
					<p style="color: #FF0000" class="error"><i><?php echo $error; ?></i></p>

				    <p class="login">Already have an account? <a href="/user_mgmt/Access-Level.php">Log In.</a></p>
			</form>
			<hr class="line2">
		</div>
	</div>
</body>
</html>