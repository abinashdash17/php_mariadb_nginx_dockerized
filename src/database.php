<?php
$db_server = 'mariadb';
$db_user = 'testdb';
$db_pass = 'testdb';
$db_name = 'testdb';
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
if ($conn) {
    echo "you are connected!";
} else {
    echo "could not connect";
}
