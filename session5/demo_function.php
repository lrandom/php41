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
function getTotal ($a, $b = 10)
{
    return $a + $b;
}

?>


<?php
echo getTotal(10, 20).'</br>';
echo getTotal(3, 3).'</br>';
echo getTotal(4, 4).'</br>';
echo getTotal(10).'</br>'; //20


//truyền tham biến
/*$a = 10;
$b = 20;
function multiple (&$a, &$b)
{
    $a = 50;
    $b = 60;
    return $a * $b;
}

multiple($a, $b);

echo $a; //50
echo $b; //60

//truyền tham trị
function multiple ($a, $b)
{
    $a = 50;
    $b = 60;
    return $a*$b;
}

multiple($a, $b);

echo $a; //10
echo $b; //20*/


//Closures
//7.4 hàm nặc danh (anounymous function)
/*$getSub = function () {
    echo 'sub tv';
};
//callback function - higher order function
getSub();*/

//7.4 arrow function = hàm mũi tên
/*$getSub = fn($a, $b) =>{
    return $a - $b;
}*/
?></body>
</html>