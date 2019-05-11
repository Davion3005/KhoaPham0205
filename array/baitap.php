<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập Array</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> -->
</head>
<body>
    <?php
    include ('lib/products.php');
    include_once ('lib/products.php');
    // require ('lib/products.php');
    require_once ('lib/products.php');
    ?>

    <div class="container">
        <?php 
        foreach($arrProduct as $product){
        ?>
        <div class="product">
            <div class="image">
                <img src="<?=$link.$product['image']?>">
            </div>
            <div class="info">
                <div class="name">
                <?php echo $product['name']?>
                </div>
                <ul class="detail">
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li>Giảm ngay 1 triệu (đã trừ vào giá)</li>
                    <li class="promotion">Khuyến mãi: </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                    <li>Đổi máy cũ lên đời iPhone </li>
                </ul>
            </div>
            <div class="product-bottom">
                <p class="name">
                <?= $product['name']?>
                </p>
                <p class="price">
                    <?=number_format(
                        $product['price'],0, ',', '.'
                    )?>
                    VND
                </p>
            </div>
        </div>
        <?php }?>
    </div>
</body>
</html>