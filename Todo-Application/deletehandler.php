<?php

$conn = mysqli_connect("localhost:3306", "root", "password", "todo");

if (!$conn) {
    die("Could not connect to database: " . mysqli_connect_error());
}

$t = $_POST['t1'];

$sql4 = "DELETE FROM tasks  
		 WHERE taskid = '$t'";

if (mysqli_query($conn, $sql4)) {
    echo "Successfully deleted task <br/>";
} else {
    echo "Error deleting task: " . mysqli_error($conn);
}
?>
<br/>
<a href="index2.php"><button>Home</button></a>