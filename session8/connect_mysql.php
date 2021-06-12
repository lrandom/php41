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
$conn = mysqli_connect('localhost', 'root', 'koodinh', 'fish_sauce_shop');
if (!$conn) {
    die('Cannot connect to Mysql server '.mysqli_connect_error());
}
//chọn CSDL để thao tác
//mysqli_query('use fish_sauce_shop');
//lấy thông tin dưới dạng tiếng Việt (unicode)
mysqli_query($conn, 'SET NAMES UTF8');
$query = 'SELECT * FROM fish_sauce_product';
//thực thi cậu lệnh sql thông qua mysqli extension
$resultSet = mysqli_query($conn, $query); //tập kết quả
/*while ($row = mysqli_fetch_assoc($resultSet)) {
    echo 'Id: '.$row['id'];
    echo 'Name: '.$row['name'];
    echo 'Price'.$row['price'];
    echo '<br>';
}*/
/*while ($row = mysqli_fetch_array($resultSet)) {
    echo 'Id: '.$row[0];
    echo 'Name: '.$row[1];
    echo 'Price'.$row[4];
    echo '<br>';
}*/
while ($row = mysqli_fetch_object($resultSet)) {
    echo 'Id: '.$row->id;
    echo 'Name: '.$row->name;
    echo 'Price'.$row->price;
    echo '<br>';
}

//xoá dữ liệu
$query = 'DELETE from fish_sauce_product WHERE id=8';
mysqli_query($conn, $query);

//cập nhật dữ liệu
$query = 'UPDATE fish_sauce_product SET salt_percent=50 WHERE id != 7';
mysqli_query($conn, $query);

$query = 'INSERT INTO fish_sauce_product(id,name,salt_percent,volume,price,category_id,quantity,total) 
VALUE (10,"nước mắm xịn đét",10,100,500000,1,10,10000000);';

mysqli_query($conn, $query);
?>
</body>
</html>
