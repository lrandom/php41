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
//Mã PHP nằm ở đây
//camelCase, nen dung
$myName = "Luan";
//under_score , dung cũng đc
$my_name = "Luan";
//Pascal, ko nen dung
$MyName = "Luan";

//Định nghĩa hằng
define("MY_NAME", "Luân");

echo $myName;
echo $my_name;
echo MY_NAME;


$weather = "Trời mưa";
if ($weather == "Trời mưa") {
    echo "Đi nghỉ";
}

if ($weather == "Trời nắng") {
    echo "Đi chơi";
} else {
    echo "Ở nhà";
}

$age = 10;

if ($age <= 10) {
    echo "Bạn là nhi đồng";
} elseif ($age <= 16 && $age > 10) {
    echo "Bạn là thiếu niên";
} elseif ($age > 16) {
    echo "Bạn là thanh niên";
}

$age = 10;
switch ($age) {
    case 10:
        echo "Bạn là nhi đồng";
        break;

    case 16:
        echo "Bạn là thiếu niên";
        break;

    case 18:
        echo "Bạn là thanh niên";
        break;

    default:
        echo "Tôi ko biết";
}
?>
</body>
</html>