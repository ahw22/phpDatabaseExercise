<?php

$serverName = "localhost";
$username = "root";
$dbName = "users";

$conn = mysqli_connect('localhost', 'root', '', 'shop');

if (!$conn) {
    die("Connection failed: ");
}

$id = $_GET["pid"];
$sql = "SELECT id, productName, manufacturer, category, price FROM products WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo "Edit failed, product not found. Returning to products page.";
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

<body>
    <div class="box">
        <h1>Edit Product</h1>
        <form action="update.php" method="post">
            ID: <br> <input type="text" name="id" value="<?php echo $row["id"];?>" readonly> <br>
            Name: <br> <input type="text" name="productName" value="<?php echo $row["productName"];?>"> <br>
            Manufacturer: <br> <input type="text" name="manufacturer" value="<?php echo $row["manufacturer"];?>"> <br>
            Category: <br> <input type="text" name="category" value="<?php echo $row["category"];?>"> <br>
            Price: <br> <input type="text" name="price" value="<?php echo $row["price"];?>"> <br>
            <button type="submit">Save Edit</button>
        </form>
    </div>

</body>

</html>