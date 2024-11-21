<?php

$serverName = "localhost";
$username = "root";
$dbName = "users";

$conn = mysqli_connect('localhost', 'root', '', 'shop');

if (!$conn) {
    die("Connection failed: ");
}

$id = $_GET["pid"];
$sql = "DELETE FROM products WHERE id = '$id'";

if (mysqli_query($conn, $sql) == 1) {
    echo "Sucessfully deleted product.";
    header("refresh:3;url=products.php");
} else {
    echo "Delete failed, product not found. Returning to products page." . mysqli_error($conn);
    header("refresh:5;url=products.php");
}

?>


<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Product</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
</head>
</html>