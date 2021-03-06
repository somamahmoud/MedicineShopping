<?php
    include_once "controllers/ProductController.php";
    include_once "header.php";
    $search = new ProductController();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "stylesheet/products.css">
    <title>
        Search - Results
    </title>
</head>
<body>
    <?php if(isset($_GET['submitName'])) { ?>
            <?php foreach($search->viewSearchedProducts($_GET['value']) as $product) { ?>
                <a href = "View.php?id=<?php echo $product['id'] ?>"><div class = "products" >
                <h3><?php echo $product['name'] ?></h3>
                <img src = "data:image/jpeg;base64,<?php echo base64_encode($product['picture']) ?>" width = "399px" height= "250px">
                <h2><?php echo $product['price'] ?><b>$</b></h2>
                <p><?php echo $product['description'] ?></p>
                </div></a>
            <?php } ?>
    <?php } ?>
</body>
</html>