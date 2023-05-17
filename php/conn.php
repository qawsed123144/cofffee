<?php
$username='root';
$password='qawsed22';
$dbname='testdb';
$cloud_sql_name = getenv('extreme-arch-384104:asia-east1:coffee-test');
$socket_dir=getenv('DB_SOCKET_DIR') ?: '/cloudsql';

$dsn = sprintf(
    'mysql:dbname=%s;unix_socket=%s',
    $dbname,
    $socket_dir,
    $cloud_sql_name,

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

