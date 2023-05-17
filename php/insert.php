<?php
include_once('conn.php');

$name= $_POST['name'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$sql=sprintf("INSERT INTO customer(name,phone,date) VALUES('$name','$phone','$date')");


$result=$conn->query($sql);
// if (!$result){
//     die($conn->error);
//     echo "none";
// }

header("Location:form.php");
?>