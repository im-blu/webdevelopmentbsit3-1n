<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update</title>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		h1 {
			margin-left: 50px;
			text-align: center;
		}

		.labels {
			/*border: 1px solid blue;*/
			display: flex;
			flex-direction: column;
			flex-wrap: wrap;
			text-align: right;
			width: 150px;
		}

		.inputs {
			/*border: 1px solid blue;*/
			display: flex;
			flex-direction: column;
			flex-wrap: wrap;
			text-align: left;
			width: 250px;
		}

		.flex-container {
			/*border: 1px solid blue;*/
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			flex-direction: row;
			padding: 10px;
		}
	</style>
</head>

<body>
	<?php
	$table = "tblstudent";
	include("connection.php");

	echo "<h1>STUDENT RECORDS</h1><br>";

	$students = $mysqli->query("SELECT * FROM $table");

	while ($row = mysqli_fetch_assoc($students)) {
		//`id`, `studentno`, `studentname`, `year_sec`
		//acts like result.next()
		$id = $row["studid"];;
		$sno = $row["studno"];
		$sname = $row["studname"];
		$ys = $row["year_sec"];


		echo "<form method=post>
		<div class='flex-container'>
			<div class='labels'>
				<label for='id'><b>ID:&nbsp;</b></label>
				<label for='sno'>Student Number:&nbsp;</label>
				<label for='sname'>Student Name:&nbsp;</label>
				<label for='ys'>Year and Section:&nbsp;</label>
			</div>
			<div class='inputs'>
				<input type=text name=id value='$id' readonly>
				<input type=text name=sno value='$sno'>
				<input type=text name=sname value='$sname'>
				<input type=text name=ys value='$ys'>
			</div>
			<input type=submit name=btnUpdate value=Update>
		</div>
		</form>";
	}

	if (isset($_POST['btnUpdate'])) {
		$mysqli->query("UPDATE $table SET studno= '$_POST[sno]', 
			studname= '$_POST[sname]', year_sec= '$_POST[ys]' WHERE studid= '$_POST[id]'");
		header("refresh: 2");
	}
	?>
</body>

</html>