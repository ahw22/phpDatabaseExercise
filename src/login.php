<?php

$serverName = "localhost";
$username = "root";
$dbName = "users";

$conn = mysqli_connect('localhost', 'root', '', 'shop');

if (!$conn) {
    die("Connection failed: ");
}

$name = htmlspecialchars($_POST["uName"]);
$password = htmlspecialchars($_POST["password"]);

$sql = "SELECT name, password, role FROM users WHERE name = '$name' AND password = '$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $entry = mysqli_fetch_assoc($result);
    echo "Login Sucessful. Welcome " . $entry["name"] . ".<br>";
    session_start();
    $_SESSION["role"] = $entry["role"];
    header("refresh:5;url=products.php");
} else {
    echo "Login failed, user not found. Returning to register page.";
    header("refresh:5;url=index.php");
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