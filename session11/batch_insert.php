<?php
$pdo = new PDO('mysql:host=localhost;dbname=fish_sauce_shop', 'root', 'koodinh');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES UTF8');

//bắt đầu một giao dịch theo lô (batch)
$pdo->beginTransaction();
try {
    //
    $stm = $pdo->prepare('INSERT INTO fish_sauce_product(name,salt_percent,volume,price,category_id,quantity,total)
     VALUES(:name,:salt_percent,:volume,:price,:category_id,:quantity,:total)');


    $stm->bindParam(':name', $name);
    $stm->bindParam(':salt_percent', $saltPercent);
    $stm->bindParam(':volume', $volume);
    $stm->bindParam(':price', $price);
    $stm->bindParam(':category_id', $categoryId);
    $stm->bindParam(':quantity', $quantity);
    $stm->bindParam(':total', $total);

    $name = 'Nước mắm Hạ Long';
    $saltPercent = 1;
    $volume = 100;
    $price = 10000;
    $categoryId = 1;
    $quantity = 1;
    $total = 1;

    $stm->execute();

    $name = 'Nước mắm Hạ Long';
    $saltPercent = 1;
    $volume = 100;
    $price = 1000;
    $categoryId = 1;
    $quantity = 1;
    $total = 1;

    $stm->execute();


    $name = 'Nước mắm Hạ Long 3';
    $saltPercent = 1;
    $volume = 100;
    $price = 10000;
    $categoryId = 1;
    $quantity = 1;
    $total = 1;

    $stm->execute();


    $name = 'Nước mắm Hạ Long 4';
    $saltPercent = 1;
    $volume = 100;
    $price = 10000;
    $categoryId = 1;
    $quantity = 1;
    $total = 1;

    $stm->execute();


    $name = 'Nước mắm Hạ Long 5';
    $saltPercent = 1;
    $volume = 100;
    $price = 10000;
    $categoryId = 1;
    $quantity = 1;
    $total = 1;

    $stm->execute();


    $name = 'Nước mắm Hạ Long 6';
    $saltPercent = 1;
    $volume = 100;
    $price = 10000;
    $categoryId = 1;
    $quantity = 1;
    $total = 1;

    $stm->execute();

    $name = 'Nước mắm Hạ Long 7';
    $saltPercent = 1;
    $volume = 100;
    $price = 10000;
    $categoryId = 1;
    $quantity = 1;
    $total = 1;

    $stm->execute();

    $name = 'Nước mắm Hạ Long 8';
    $saltPercent = 1;
    $volume = 100;
    $price = 10000;
    $categoryId = 1;
    $quantity = 1;
    $total = 1;

    $stm->execute();

    //khớp lệnh
    $pdo->commit();
} catch (PDOException $e) {
    echo "Insert theo lô bị lỗi";
    //huỷ gd
    $pdo->rollBack();
}

?>