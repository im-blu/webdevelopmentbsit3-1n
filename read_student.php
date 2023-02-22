<?php 

    require_once("connection.php");
    $query = " select * from students_info ";
    $result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" a href="bootstrap.min.css"/>
	<title></title>
</head>
<body>
	 <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> First Name </td>
                                <td> Middle Name </td>
                                <td> Last Name </td>
                                <td> Student ID </td>
                                <td> Email  </td>
                                <td> Birthdate </td>
                                <td> Course </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $first = $row['firstName'];
                                        $middle = $row['middleName'];
                                        $last = $row['lastName'];
                                        $id = $row['studentId'];
                                        $email = $row['email'];
                                        $birthdate = $row['birthdate'];
                                        $course = $row['course'];
                            ?>
                                    <tr>
                                        <td><?php echo $first ?></td>
                                        <td><?php echo $middle ?></td>
                                        <td><?php echo $last ?></td>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $birthdate ?></td>
                                        <td><?php echo $course ?></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
