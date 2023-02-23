<?php 

include "connection_student.php";

  if (isset($_POST['submit'])) {
    
    $student_id = $_POST['student_id'];
    $rank= $_POST['rank'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $suffix = $_POST['suffix'];
    $office_name = $_POST['office_name'];
    $sql = "INSERT INTO `students`(`student_id`, `rank` ,`lastname`, `firsttname`,`middlename` ,`suffix`, `office_name`) VALUES ('$student_id','$rank','$lastname','$firstname','$middlename','$suffix','$office_name')";
    $result = $conn->query($sql);
   

    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->connect_error;
    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TITLEEEE</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style= "background-color: #681A1A;">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#portfolio-nav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="portfolio-nav">
			<ul class="navbar-nav me-auto">
				<li>
					<a class="nav-link" href="#landing">HOME</a>
				</li>
				<li>
					<a class="nav-link" href="read_student.php">STUDENT</a>
				</li>
        <li>
          <a class="nav-link" href="#hobbies">COURSE</a>
        </li>
				<li>
					<a class="nav-link" href="#projects">INSTRUCTORS</a>
				</li>
				<li>
					<a class="nav-link" href="#profile">PROFILE</a>
				</li>
			</ul>
		</div>
	</nav>
<h2>Student Information </h2>

<form action="" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br>
    Student ID:<br>
    <input type="text" name="student_id">
    <br>
    Course & Section:<br>
    <input type="text" name="course_sec">
    <br>
    <input type="Submit" name="Submit" value="Submit">
  </fieldset>

</form>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>
