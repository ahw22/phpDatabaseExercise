<?php

$serverName = "localhost";
$username = "root";
$dbName = "users";

$conn = mysqli_connect('localhost', 'root', '', 'shop');

if (!$conn) {
    die("Connection failed: ");
}

$productName = $_POST["productName"];
$manufacturer = $_POST["manufacturer"];
$category = $_POST["category"];
$price = $_POST["price"];


$sql = "INSERT INTO products (productName, manufacturer, category, price) VALUES ('$productName', '$manufacturer', '$category', '$price')";

if (mysqli_query($conn, $sql)) {
    echo "Product sucessfuly added to Database.";
    header("refresh:3;url=products.php");
} else {
    echo "Something went wrong: " . mysqli_error($conn);
}

?>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Updating Product</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
</head>

</html>