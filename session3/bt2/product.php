<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$products = [
    [
        'id' => 1,
        'thumbnail' => 'https://kfcvietnam.com.vn/uploads/combo/b09860e31866521c22705711916cc402.jpg',
        'name' => 'Gà rán truyền thống',
        'price' => 5
    ],
    [
        'id' => 2,
        'thumbnail' => 'https://kfcvietnam.com.vn/uploads/combo/b09860e31866521c22705711916cc402.jpg',
        'name' => 'Gà rán giòn cay',
        'price' => 14
    ],
    [
        'id' => 3,
        'thumbnail' => 'https://kfcvietnam.com.vn/uploads/combo/b09860e31866521c22705711916cc402.jpg',
        'name' => 'Gà bát bảo',
        'price' => 12
    ],
    [
        'id' => 4,
        'thumbnail' => 'https://kfcvietnam.com.vn/uploads/combo/b09860e31866521c22705711916cc402.jpg',
        'name' => 'Gà tần',
        'price' => 15
    ]
]

?>

<div class="wrapper">
    <div class="products">
        <?php
        foreach ($products as $r) {
            ?>

            <div class="product-item">
                <img src="<?php echo $r['thumbnail']; ?>" alt="">
                <h4><?php echo $r['name']; ?></h4>
                <div>Giá:<strong><?php echo $r['price']; ?> usd</strong></div>
                <a href="cart.php?action=add&id=<?php echo $r['id']; ?>">Thêm vào giỏ hàng</a>
            </div>

            <?php
        }
        ?>
    </div>
</div>

<style type="text/css">
    .wrapper {
        width: 899px;
        margin: 0px auto;
    }

    .products {
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .products .product-item {
        width: 45%;
        position: relative;
        overflow: hidden;
    }
</style>
</body>
</html>