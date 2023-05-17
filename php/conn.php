<?php
use PDO;
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
    # [START_EXCLUDE]
    // Here we set the connection timeout to five seconds and ask PDO to
    // throw an exception if any errors occur.
    [
        PDO::ATTR_TIMEOUT => 5,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]
    # [END_EXCLUDE]
);

// if(!empty($conn->connect_error)){
//     die('資料庫連線錯誤:' . $conn->connect_error);
// }
?>

