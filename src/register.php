<?php

$serverName = "localhost";
$username = "root";
$dbName = "users";

//create db connection
$conn = mysqli_connect('localhost', 'root', '', 'shop');
//check connection
if (!$conn) {
    die("Connection failed: ");
}
echo "Connected sucessfully" . "<br>";
/*
$sql = "CREATE DATABASE users";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

//create table
$sql = "CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users creates successfully \n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}
*/

//get data from form
$name = htmlspecialchars($_POST["uName"]);
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);

$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully. Redirecting to login in 5 seconds.";
    header("refresh:5;url=signIn.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
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

<body>







</body>

</html>