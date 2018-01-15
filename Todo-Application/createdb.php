<?php

$conn = mysqli_connect("localhost:3306", "root", "password");

if (!$conn) {
    die("Could not connect to database: " . mysqli_connect_error());
}

// Drop DB if priorly exists
$sql = "DROP DATABASE todo";
mysqli_query($conn, $sql);

$sql1 = "CREATE DATABASE todo";
if (mysqli_query($conn, $sql1)) {
    echo "Database created successfully <br/>";
} else {
    echo "Could not create database: " . mysqli_error($conn);
}

$sql2 = "USE todo";
if (!mysqli_query($conn, $sql2)) {
    echo "Error connecting to database: " . mysqli_error($conn);
} 

$sql3 = "CREATE TABLE tasks (
		 taskid int NOT NULL AUTO_increment, 
		 task VARCHAR(100),
		 status VARCHAR(10),
		 due DATE,
		 PRIMARY KEY (taskid)
		)";
if (!mysqli_query($conn, $sql3)) {
    echo "Could not create table: " . mysqli_error($conn);
} 

?>
<br/>
<a href="index2.php"><button>Home</button></a>