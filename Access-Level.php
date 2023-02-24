
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/user_mgmt/assets/css/Access-Level-Style.css"/>
	<link rel="stylesheet" href="/user_mgmt/assets/css/Body-Style2.css"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">

    <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
    </style>

	<title>Access Level</title>
</head>
<body>
	<div class="row">
			<form class="access-form" method="post" name="login">
				<table>
					<tr>
						<td><h1 class="access-title">WELCOME!</h1></td>
					</tr>
					<tr>
						<td><h5 class="access-title">Choose your destination based on your access level.</h5></td>
					</tr>

					<tr>
						<td><input type="submit" value="Student" name="btnStudent" class="access-button1"
								   formaction="/user_mgmt/student/Student-Login.php"/></td>
					</tr>
					<tr>
						<td><input type="submit" value="Instructor" name="btnInstructor" class="access-button2"
							 	   formaction="/user_mgmt/instructor/Instructor-Login.php"/></td>
					</tr>
					<tr>
						<td><input type="submit" value="Administrator" name="btnInstructor" class="access-button3"
							 	   formaction="/user_mgmt/admin/Admin-Login.php"/></td>
					</tr>
				</table>
				<p class="register">Create an account? <a href="/user_mgmt/user_registration/Registration-Form.php">Register here.</a></p>
			</form>
		</div>
	</div>
</body>
</html>