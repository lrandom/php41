<?php
try {
    //mở kết nối đến mysql server
    $pdo = new PDO('mysql:host=localhost;dbname=fish_sauce_shop', 'root', 'koodinh');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES UTF8');
    /*$products = $pdo->query('SELECT * FROM fish_sauce_product');
     foreach ($products as $r) {
         echo $r['id'].$r['name'];
     }*/

    $products = $pdo->query('SELECT * FROM fish_sauce_product');
    $products->setFetchMode(PDO::FETCH_OBJ);
    while ($obj = $products->fetch()) {
        echo $obj->id;
    }


    $products->setFetchMode(PDO::FETCH_ASSOC);
    while ($obj = $products->fetch()) {
        echo $obj['id'];
    }

    $products->setFetchMode(PDO::FETCH_NUM);
    while ($obj = $products->fetch()) {
        echo $obj[0];
    }

    //chèn dữ liệu
    //tạo prepared statement

        $stm = $pdo->prepare('INSERT INTO fish_sauce_product(name,salt_percent,volume,price,category_id,quantity,total)
     VALUES(:name,:salt_percent,:volume,:price,:category_id,:quantity,:total)');


    $stm->bindParam(':name', $name);
    $stm->bindParam(':salt_percent', $saltPercent);
    $stm->bindParam(':volume', $volume);
    $stm->bindParam(':price', $price);
    $stm->bindParam(':category_id', $categoryId);
    $stm->bindParam(':quantity', $quantity);
    $stm->bindParam(':total', $total);

    $name = 'Nước mắm Thái';
    $saltPercent = 1;
    $volume = 100;
    $price = 10000;
    $categoryId = 1;
    $quantity = 1;
    $total = 1;

    $stm->execute();
    echo $pdo->lastInsertId(); //lấy về id của bản ghi vừa được chèn vào
    echo $stm->rowCount();

    $name = 'Nước mắm Việt Nam xịn hơn Thái';
    $saltPercent = 2;
    $volume = 120;
    $price = 120000;
    $categoryId = 100;
    $quantity = 100;
    $total = 10000;
    $stm->execute();


} catch (PDOException $e) {
    //nếu ko kết nối đc trả về lỗi
    //echo 'Kết nối đến mysql server thất bại, vui lòng thử lại';
    //echo $e->getMessage();
    var_dump($e);
}

?>