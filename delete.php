<?php
require("connection.php");

$students = mysqli_query($conn,"select * from users");
$j = mysqli_affected_rows($conn);

echo "
<table>
<tr>
    <th>ID</th>
    <th>First</th>
    <th>Middle</th>
    <th>Last</th>
    <th>Birthdate</th>
    <th>Email</th>
    <th>Student ID</th>
    <th>Course</th>

</tr>";
while($row = mysqli_fetch_assoc($students)){
    
    $id = $row['id'];
    $fname = $row["firstname"];
    $mname = $row["middlename"];
    $lname = $row["lastname"];
    $studentid = $row["studentid"];
    $email = $row["email"];
    $birthdate = $row["birthdate"];
    $course = $row["course"];

    echo "
        <tr>
            <td>$id</td>
            <td>$fname</td>
            <td>$mname</td>
            <td>$lname</td>
            <td>$birthdate</td>
            <td>$email</td>
            <td>$studentid</td>
            <td>$course</td>
        </tr>
    </table><br>";
}

echo "<form method=POST>
<p><b>Remove</b> a student.</p>
<label for=id>ID Number:</label><input type=text name=idnum id=id>
<input type=submit name=btnDelete value='Delete Record'>
</form>
";

if(isset($_POST['btnDelete'])){
    $id = $_POST['idnum'];

    $sql = "DELETE FROM users WHERE id = '$id'";
    mysqli_query($conn,$sql);

    echo "<br><b>Record has been deleted successfully!</b>";

    
}
?>