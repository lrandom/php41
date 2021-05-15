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
$arr = [1, 3, 2, 1, 5, 6, 4, 7];
//Hãy sử dụng thuật toán sắp xếp sủi bọt để sắp xếp mảng trên theo chiều từ nhỏ đến lớn
//$arr = [1,1,2,3,4,5,6,7];
/*for ($i = 0; $i < count($arr) - 1; $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$i] > $arr[$j]) {
            //swap - đổi vị trí
            $tmp = $arr[$j]; //tmp = temporary = tạm
            $arr[$j] = $arr[$i];
            $arr[$i] = $tmp;
            $isSwap = true;
        }
    }
}*/

$arr = [1, 3, 2, 1, 5, 6, 4, 7, 4, 5, 6, 7, 6, 2, 3];
$len = count($arr);
for ($i = 0; $i < $len; $i++) {
    $swap = false;
    for ($j = 0; $j < $len - 1 - $i; $j++) {
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
            $swap = true;
        }
    }
    if ($swap == false) {
        break;
    }
}
foreach ($arr as $val) {
    echo $val.' ';
}

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i].'</br>';
}
?>
</body>
</html>