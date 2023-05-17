<?php

declare(strict_types=1);

# [START cloud_sql_mysql_pdo_connect_unix]
namespace Google\Cloud\Samples\CloudSQL\MySQL;

use PDO;

            // Note: Saving credentials in environment variables is convenient, but not
            // secure - consider a more secure solution such as
            // Cloud Secret Manager (https://cloud.google.com/secret-manager) to help
            // keep secrets safe.
            $username = getenv('root'); // e.g. 'your_db_user'
            $password = getenv('qawsed22'); // e.g. 'your_db_password'
            $dbName = getenv('testdb'); // e.g. 'your_db_name'
            $instanceUnixSocket = getenv('/cloudsql/extreme-arch-384104:asia-east1:coffee-test'); // e.g. '/cloudsql/project:region:instance'

            // Connect using UNIX sockets
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
                # [START_EXCLUDE]
                // Here we set the connection timeout to five seconds and ask PDO to
                // throw an exception if any errors occur.
                [
                    PDO::ATTR_TIMEOUT => 5,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                ]
                # [END_EXCLUDE]
            );
$result=$conn->query("select * from customer");
echo $result;
?>