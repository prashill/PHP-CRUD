<?php

$stu_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM students WHERE s_id={$stu_id}";

$result = mysqli_query ($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/learn/crud/index.php");

mysqli_close($conn);

?>