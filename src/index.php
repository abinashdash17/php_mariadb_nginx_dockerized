<?php
include('database.php');
// $hashed_password = password_hash('test123', PASSWORD_DEFAULT);
// $query = "INSERT into users (user,password) VALUES ('Abinash','$hashed_password')";
// try {
//     mysqli_query($conn, $query);
//     echo "user created successfully";
// } catch (Exception $e) {
//     echo $e;
//     echo "can't create a new user";
// }

$query = "SELECT * from users WHERE 1 LIMIT 1";
$result = mysqli_query($conn, $query);
var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>test connection</h1>
</body>

</html>

<?php
mysqli_close($conn);
