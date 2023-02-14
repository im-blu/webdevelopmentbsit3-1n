<?php 

include "connection.php";

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
<body>
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
</body>
</html>