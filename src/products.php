<?php
session_start();
$serverName = "localhost";
$username = "root";
$dbName = "users";

$conn = mysqli_connect('localhost', 'root', '', 'shop');

if (!$conn) {
    die("Connection failed: ");
}

$sql = "SELECT id, productName, manufacturer, category, price FROM products";
$result = mysqli_query($conn, $sql);
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
        <h1>Our Products</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
            <th>Manufacturer</th>
            <th>Category</th>
            <th>Price</th>
            <?php
            if ($_SESSION["role"] == "admin") {
                echo "<th>Action</th>";
            } ?>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr class='hover'>";
                foreach ($row as $column) {
                    echo "<td>" . $column . "</td>";
                }
                //add edit and delete buttons if admin
                if ($_SESSION["role"] == "admin") {
                    echo "<td><a href='edit.php?pid=" . $row['id'] . "'>Edit</a> <a href='delete.php?pid=" . $row['id'] . "'>Delete</a></td>";
                }
                echo "</tr>";
            } 

        }
        ?>
    </table> <br>
    <?php
    //add add product button if role is admin
    if ($_SESSION["role"] == "admin") {
        echo "<a href='add.php'><button>Add Product</button></a>";
    }?>
</div>
</body>

</html>