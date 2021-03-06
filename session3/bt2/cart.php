<?php
session_start();
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
];

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'delete':
            //xoá sp
            $id = $_GET['id'];
            if (is_numeric($id)) {
                //id là số mình ms xo
                if (isset($_SESSION['cart'])) {
                    $cartItems = $_SESSION['cart'];
                    for ($i = 0; $i < count($cartItems); $i++) {
                        if ($cartItems[$i]['id'] == $id) {
                            array_splice($cartItems, $i);
                            break;
                        }
                    }
                    $_SESSION['cart'] = $cartItems;
                }
            }
            break;

        case 'add':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $product = null;
                for ($i = 0; $i < count($products); $i++) {
                    if ($products[$i]['id'] == $id) {
                        $product = $products[$i];
                        break;
                    }
                }
                if ($product != null) {
                    $cartItems = [];
                    //add vào trong giỏ hàng
                    if (isset($_SESSION['cart'])) {
                        //nếu đã tồn tại giỏ hàng
                        //1. đã có sp trong giỏ
                        //2. chưa có sp trong giỏ
                        $cartItems = $_SESSION['cart'];
                        $found = false;
                        for ($i = 0; $i < count($cartItems); $i++) {
                            if ($cartItems[$i]['id'] == $product['id']) {
                                //tăng số lương lên
                                $cartItems[$i]['quantity'] = ((int) $cartItems[$i]['quantity']) + 1;
                                $found = true;
                                break;
                            }
                        }
                        if (!$found) {
                            $newItem = [
                                'id' => $product['id'],
                                'thumbnail' => $product['thumbnail'],
                                'name' => $product['name'],
                                'price' => $product['price'],
                                'quantity' => 1
                            ];
                            array_push($cartItems, $newItem);
                        }
                        $_SESSION['cart'] = $cartItems;
                    } else {
                        //chưa có giỏ hàng
                        $newItem = [
                            'id' => $product['id'],
                            'thumbnail' => $product['thumbnail'],
                            'name' => $product['name'],
                            'price' => $product['price'],
                            'quantity' => 1
                        ];
                        array_push($cartItems, $newItem);
                        $_SESSION['cart'] = $cartItems;
                    }
                }
            }
            break;

        case 'changeQuantity':
            if (isset($_GET['id']) && isset($_SESSION['cart'])) {
                //cập nhật số lượng sp
                $id = $_GET['id'];
                $cartItems = $_SESSION['cart'];
                for ($i = 0; $i < count($cartItems); $i++) {
                    if ($cartItems[$i]['id'] == $id) {
                        if ($_GET['unit'] == -1 && $cartItems[$i]['quantity'] == 1) {
                            break;
                        }
                        $cartItems[$i]['quantity'] = $cartItems[$i]['quantity'] + (int) $_GET['unit'];
                        break;
                    }
                }
                $_SESSION['cart'] = $cartItems;
            }
            break;;

    }
}


?>
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
<div class="wrapper">
    <div class="products">
        <?php
        if ($_SESSION['cart']) {
            $cartItems = $_SESSION['cart'];
            foreach ($cartItems as $r) {
                ?>
                <div class="product-item">
                    <div class="right">
                        <img style="width:100px" src="<?php echo $r['thumbnail']; ?>" alt="">

                        <div>
                            <h4><?php echo $r['name']; ?></h4>
                            <div>Giá:<strong><?php echo $r['price']; ?> usd x <?php echo $r['quantity']; ?></strong>
                                <a href="?action=changeQuantity&unit=1&id=<?php echo $r['id']; ?>">+</a>
                                <a href="?action=changeQuantity&unit=-1&id=<?php echo $r['id']; ?>">-</a>
                            </div>
                        </div>


                    </div>

                    <a href="?action=delete&id=<?php echo $r['id']; ?>">Xoá</a>
                </div>

                <?php
            }
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
        align-items: center;
    }

    .products .product-item {
        width: 100%;
        position: relative;
        overflow: hidden;
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }

    .products .product-item .right {
        display: flex;
        justify-content: space-between;
    }
</style>
</body>
</html>
