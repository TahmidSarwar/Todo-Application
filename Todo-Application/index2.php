<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<style type="text/css">
		table{
			padding: 3px;
			border: 4px white;
			background-color: #F6F2E8;
		}
		th{
			border-bottom: 4px solid black;
		}
		td{
			border-bottom: 2px solid gray;
		}
		tr:hover{
			background-color: #e4d5b7;
		}
		ul{
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #464;
		}
		li{
			float: left;
		}
		li a{
			display: inline-block;
			color: white;
			text-align: center;
			padding: 14px 20px;
			text-decoration: none;
		}
		li a:hover{
			background-color: #469;
		}
		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="index2.php">Home</a></li>
			<li><a href="viewtasks.php">View Tasks</a></li>
			<li><a href="deletetask.php">Delete Task</a></li>
			<li><a href="updatetask.php">Update Task Status</a></li>
		</ul>
	</nav>
<br/>	
<form method="post" action="taskhandler.php">
	<fieldset>
		<legend>New Task</legend>
		<label>Task: <input type="text" name="t1"></label>
		<label>Status: <input type="text" name="s1"></label>
		<label>Due: <input type="date" name="d1"></label>
	</fieldset>
	<br/>
	<input type="submit" name="add task">
</form>
<br/>

<?php

$conn = mysqli_connect("localhost:3306", "root", "password", "todo");

if (!$conn) {
    die("Could not connect to database: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) AS TOTAL FROM tasks";
$result = mysqli_query($conn, $sql);
$sum = mysqli_fetch_assoc($result);
$view = "viewtasks.php";

echo "<h3><a href='$view'>Total number of tasks in the system: ". $sum["TOTAL"] . "</a></h3>";

$sql2 = "SELECT COUNT(*) AS TOTAL FROM tasks where status = 'pending'";
$result2 = mysqli_query($conn, $sql2);
$sum2 = mysqli_fetch_assoc($result2);
$viewp = "viewpending.php";

echo "<h3><a href='$viewp'>Pending tasks in the system: ". $sum2["TOTAL"] . "</a></h3>";

$sql3 = "SELECT COUNT(*) AS TOTAL FROM tasks where status = 'started'";
$result3 = mysqli_query($conn, $sql3);
$sum3 = mysqli_fetch_assoc($result3);
$views = "viewstarted.php";

echo "<h3><a href='$views'>Started tasks in the system: ". $sum3["TOTAL"] . "</a></h3>";

$sql4 = "SELECT COUNT(*) AS TOTAL FROM tasks where status = 'Completed'";
$result4 = mysqli_query($conn, $sql4);
$sum4 = mysqli_fetch_assoc($result4);
$viewc = "viewcompleted.php";

echo "<h3><a href='$viewc'>Completed tasks in the system: ". $sum4["TOTAL"] . "</a></h3>";

$sql5 = "SELECT COUNT(*) AS TOTAL FROM tasks where status = 'late'";
$result5 = mysqli_query($conn, $sql5);
$sum5 = mysqli_fetch_assoc($result5);
$viewl = "viewlate.php";

echo "<h3><a href='$viewl'>Late tasks in the system: ". $sum5["TOTAL"] . "</a></h3>";

?>

</body>
</html>
