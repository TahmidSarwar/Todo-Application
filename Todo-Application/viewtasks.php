<!DOCTYPE html>
<html>
<head>
	<title>View Tasks</title>
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

<?php

$conn = mysqli_connect("localhost:3306", "root", "password", "todo");

if (!$conn) {
    die("Could not connect to database: " . mysqli_connect_error());
}

$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);

echo "<table>";
echo "<tr> <th>ID</th>  <th>Task</th>  <th>Status</th>  
	  <th>Due Date</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>";
        echo $row["taskid"];
        echo "</td><td>";
        echo $row["task"];
        echo "</td><td>";
        echo $row["status"];
        echo "</td><td>";
        echo $row["due"]; 
        echo "</td></tr>";
    }

echo "</table>";

?>

</body>
</html>
