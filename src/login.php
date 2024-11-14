<?php

$serverName = "localhost";
$username = "root";
$dbName = "users";

$conn = mysqli_connect('localhost', 'root', '', 'users');

if (!$conn) {
    die("Connection failed: ");
}

$name = htmlspecialchars($_POST["uName"]);
$password = htmlspecialchars($_POST["password"]);

$sql = "SELECT name, password FROM users WHERE name = '$name' AND password = '$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    echo "Login Sucessful. Welcome " . $row["name"] . ".<br>";
    echo "name " . $row["name"] . " - Password: " . $row["password"] . "<br>";
} else {
    echo "Login failed, user not found.";
}

?>



<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
</head>

</html>