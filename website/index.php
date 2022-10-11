<html>

<head>
    <title>Docker website</title>
</head>

<body>
    <h1>My Products</h1>
    <?php
    $json = file_get_contents("http://172.30.112.1:5001/");
    $obj = json_decode($json);

    $products = $obj->products;
    foreach ($products as $product) {
    ?>
        <li><?php echo $product; ?></li>
    <?
    }
    ?>
    <ul>


    </ul>

</body>

</html>