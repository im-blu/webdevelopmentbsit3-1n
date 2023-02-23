<?php
require("connection_student.php");

$students = mysqli_query($conn,"select * from student");
$j = mysqli_affected_rows($conn);

if(isset($_GET['id'])){

    $id = $_GET['id'];
    
    $sql = "DELETE FROM student WHERE student_id = '$id'";
    mysqli_query($conn,$sql);
    
    echo "<br><b>Record has been deleted successfully!</b>";
    
    header("Location: read_student.php");
    exit;
    }
?>

<!-- 
JAVASCRIPT DIALOG BOX TO CONFIRM DELETE

<script>
// JavaScript function to display confirmation dialog
function confirmDelete(id) {
    if (confirm("Are you sure you want to delete this record?")) {
        // if user confirms, redirect to PHP script to delete the record
        window.location.href = "delete_student.php?id=" + id;
    }
}
</script>

//The delete button must call the function
echo "<td><a onClick=confirmDelete($id) href=student.php>Delete</a>
    <a href=update_student.php?id=$id>Edit</a>
</td>";
 -->
