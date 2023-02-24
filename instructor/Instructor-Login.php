<?php
	session_start();
	// include connection file
	require dirname(__DIR__). "/templates/connection.php";

	// login the instructor
	if (isset($_POST['btnLogin'])) {

		// variable declaration
		$username = $_POST['username'];
		$password = $_POST['password'];

		// get students' details from database
		$sql = "SELECT * FROM `account_details` WHERE `username` = '$username' AND `password` = '$password'";
		$result = mysqli_query($con, $sql);

		// if result matched, table row should be 1
		if($row = mysqli_fetch_array($result))
	{

		if ($row['user_type'] == "instructor")
		{
			$_SESSION["username"]=$username;
			header("Location: ../index.php");
		}
		else
		{
			$error = "Invalid credentials. Please try again.";

		}

	}else
		{
			$error = "Invalid credentials. Please try again.";

		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/user_mgmt//assets/css/Login-Style.css"/>
	<link rel="stylesheet" href="/user_mgmt//assets/css/Body-Style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">

    <style>
    body {
      font-family: 'Montserrat', sans-serif !important;
    }
    </style>


	<title>Instructor-Login</title>
</head>
<body>
	<div class="row">
		<div class="lside">

		</div>

		<div class="rside">
			<hr class="line1">
			<form class="login-form" method="post" name="login">
							<h1 class="login-title">INSTRUCTOR LOG IN FORM</h1>
							<p class = "reminder">Kindly login according to your registered credentials.</p>
				<table>
					<tr>
						<div class="Icon-inside">
							<i class="fa fa-user fa-2x" aria-hidden="true"></i>
							<td><input type="text" class="login-input" name="username" placeholder="Username" required/></td>
						</div>
					</tr>
					<tr>
						<div class="Icon-inside1">
							<i class="fa fa-lock fa-2x" aria-hidden="true"></i>
							<td><input type="password" class="login-input" name="password" placeholder="Password" required/></td>
						</div>
					</tr>
				</table>
				<input type="submit" value="Log in" name="btnLogin" class="login-button"/>
				<p class="error"><i><?php echo $error; ?></i></p>
			</form>
			<hr class="line2">
		</div>
	</div>
</body>
</html>