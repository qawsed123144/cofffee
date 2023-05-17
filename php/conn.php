<?php

declare(strict_types=1);

# [START cloud_sql_mysql_pdo_connect_unix]
namespace Google\Cloud\Samples\CloudSQL\MySQL;

use PDO;
use PDOException;
use RuntimeException;
use TypeError;
$username = getenv('root'); // e.g. 'your_db_user'
$password = getenv('qawsed22'); // e.g. 'your_db_password'
$dbName = getenv('testdb'); // e.g. 'your_db_name'
$instanceUnixSocket = getenv('/cloudsql/extreme-arch-384104:asia-east1:coffee-test'); 
// e.g. '/cloudsql/project:region:instance'

$dsn = sprintf(
                'mysql:dbname=%s;unix_socket=%s',
                $dbName,
                $instanceUnixSocket
            );

            // Connect to the database.
$conn = new PDO(
                $dsn,
                $username,
                $password,
            );
?>