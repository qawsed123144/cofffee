<?php
$username='root';
$password='qawsed22';
$dbname='testdb';
$instanceUnixSocket = getenv('extreme-arch-384104:asia-east1:coffee-test');

$dsn = sprintf(
    'mysql:dbname=%s;unix_socket=%s',
    $dbname,
    $instanceUnixSocket
);

$conn = new PDO(
    $dsn,
    $username,
    $password,
);

// if(!empty($conn->connect_error)){
//     die('資料庫連線錯誤:' . $conn->connect_error);
// }
?>

