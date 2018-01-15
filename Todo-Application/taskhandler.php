<?php

$conn = mysqli_connect("localhost:3306", "root", "password", "todo");

if (!$conn) {
    die("Could not connect to database: " . mysqli_connect_error());
}

$t = $_POST['t1'];
$s = $_POST['s1'];
$d = $_POST['d1'];

$sql4 = "INSERT INTO tasks (task, status, due) 
		 VALUES ('$t', '$s', '$d')";

if (mysqli_query($conn, $sql4)) {
    echo "Successfully inserted task <br/>";
} else {
    echo "Error inserting task: " . mysqli_error($conn);
}
?>
<br/>
<a href="index2.php"><button>Home</button></a>