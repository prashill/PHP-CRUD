

<?php 
  $stu_id = $_POST['sid'];
  $stu_name = $_POST['sname']; 
  $stu_address = $_POST['saddress'];
  $stu_class = $_POST['sclass'];
  $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or  die("Connection Failed"); $sql = "UPDATE students SET s_name = '{$stu_name}',s_country= '{$stu_address}', s_class= '{$stu_class}', s_phone= '{$stu_phone}' WHERE s_id='{$stu_id}'";
$result = mysqli_query ($conn, $sql) or die("Query Unsuccessful.");


header("Location: http://localhost/learn/crud/index.php");

mysqli_close($conn);

?>




