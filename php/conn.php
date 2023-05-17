<?php
$server="34.81.211.175";
$username='root';
$password='qawsed22';
$dbname='testdb';

$conn=new mysqli($server,$username,$password,$dbname);

if(!empty($conn->connect_error)){
    die('資料庫連線錯誤:' . $conn->connect_error);
}
?>

