<?php
session_start();
$serverName = "localhost";
$username = "root";
$dbName = "users";

$conn = mysqli_connect('localhost', 'root', '', 'shop');

if (!$conn) {
    die("Connection failed: ");
}

$id = $_GET["pid"];
$sql = "SELECT id, productName, manufacturer, category, price FROM products WHERE id='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $entry = mysqli_fetch_assoc($result);
} else {
    echo "Edit failed, product not found. Returning to products page.";
    header("refresh:5;url=products.php");
}

?>


<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="box">
        <table>
            <tr>
                <td rowspan="4"><img src="img/blank-image.jpg" width="250px"></img></td>
                <td>Name:</td>
                <td><?php echo $entry['productName'] ?></td>
            </tr>
            <tr>
                <td>Manufacturer:</td>
                <td><?php echo $entry['manufacturer'] ?></td>
            </tr>
            <tr>
                <td>Category:</td>
                <td><?php echo $entry['category'] ?></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><?php echo $entry['price'] ?></td>
            </tr>
        </table>
        <br>
        <a href="products.php"><button>Back</button></a> 
    </div>




</body>