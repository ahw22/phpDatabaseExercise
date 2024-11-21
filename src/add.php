<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Product</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="box">
        <h1>Add Product</h1>
        <form action="createProduct.php" method="post">
            Name: <br> <input type="text" name="productName" placeholder="Product name" require> <br>
            Manufacturer: <br> <input type="text" name="manufacturer" placeholder="Manufacturer" require> <br>
            Category: <br> <input type="text" name="category" placeholder="Category" require> <br>
            Price: <br> <input type="text" name="price" placeholder="*.**€" require> <br>
            <button type="submit">Add Product</button>
        </form>
    </div>
</body>

</html>