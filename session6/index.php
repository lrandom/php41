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
require 'Human.php';
require 'Student.php';
//$luan = new Human(); //tạo cho chúng ta một đối tượng từ lớp Human -> đúc đối tượng từ bản tk Human
//$manh = new Human();

//$nam = new Human("xanh", "đỏ", "Nam", 1.80);


/*$luan->name = "Luan";
$luan->eyeColor = "Nâu";
$luan->hairColor = "Đen";
$luan->height = 1.72;
$luan->eat();
echo '<br>';
$manh->name = "Manh";
$manh->eyeColor = "Đen";
$manh->hairColor = "vàng";
$luan->height = 1.75;
$manh->sleep();*/
echo '<br>';
//$nam->eat();

//unset($nam);

$linh = new Student("xanh", "đỏ", "Linh", 1.80);
$linh->id = "001";
$linh->learning();
?>
</body>
</html>