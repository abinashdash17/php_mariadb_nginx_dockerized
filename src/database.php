<?php
$db_server = 'mariadb';
$db_user = 'testdb';
$db_pass = 'testdb';
$db_name = 'testdb';
$conn = "";
try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    echo "connected";
} catch (Exception $e) {
    echo "error in connection";
}
