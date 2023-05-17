<?php
/*
 * Copyright 2020 Google LLC.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

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
class DatabaseUnix
{
    public static function initUnixDatabaseConnection(): PDO
    {
        try {
            // Note: Saving credentials in environment variables is convenient, but not
            // secure - consider a more secure solution such as
            // Cloud Secret Manager (https://cloud.google.com/secret-manager) to help
            // keep secrets safe.
            
        } catch (TypeError $e) {
            throw new RuntimeException(
                sprintf(
                    'Invalid or missing configuration! Make sure you have set ' .
                        '$username, $password, $dbName, ' .
                        'and $instanceUnixSocket (for UNIX socket mode). ' .
                        'The PHP error was %s',
                    $e->getMessage()
                ),
                (int) $e->getCode(),
                $e
            );
        } catch (PDOException $e) {
            throw new RuntimeException(
                sprintf(
                    'Could not connect to the Cloud SQL Database. Check that ' .
                        'your username and password are correct, that the Cloud SQL ' .
                        'proxy is running, and that the database exists and is ready ' .
                        'for use. For more assistance, refer to %s. The PDO error was %s',
                    'https://cloud.google.com/sql/docs/mysql/connect-external-app',
                    $e->getMessage()
                ),
                (int) $e->getCode(),
                $e
            );
        }

        return $conn;
    }
}
# [END cloud_sql_mysql_pdo_connect_unix]