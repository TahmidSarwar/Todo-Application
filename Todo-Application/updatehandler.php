<?php

$conn = mysqli_connect("localhost:3306", "root", "password", "todo");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$t = $_POST['t1'];
$s = $_POST['s1'];


$sql4 = "UPDATE tasks SET status = '$s'
		 WHERE taskid = '$t'";

if (mysqli_query($conn, $sql4)) {
    echo "Successfully updated status of task <br/>";
} else {
    echo "Error updating task: " . mysqli_error($conn);
}
?>
<br/>
<a href="index2.php"><button>Home</button></a>