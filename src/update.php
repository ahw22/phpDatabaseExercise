<?php

$serverName = "localhost";
$username = "root";
$dbName = "users";

$conn = mysqli_connect('localhost', 'root', '', 'shop');

if (!$conn) {
    die("Connection failed: ");
}

$id = $_POST["id"];
$productName = $_POST["productName"];
$manufacturer = $_POST["manufacturer"];
$category = $_POST["category"];
$price = $_POST["price"];


$sql = "UPDATE products SET productName='$productName', manufacturer='$manufacturer', category='$category', price='$price' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Product updated sucessfully. Redirecting to Products Page";
    header("refresh:3;url=products.php");
} else {
    echo "Error updating product: " . mysqli_error($conn);
    echo "Redirecting to editing page.";
    header("refresh:5;url=edit.php?pid=" . $id);

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
