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

function checkNumber ($number)
{
    if ($number > 1) {
        throw new Exception("The number cannot be larger than 1");
    }
}

try {
    //lệnh có thể nhả ra exception
    checkNumber(10);
} catch (Exception $e) {
    echo $e->getTrace();
    //lệnh xử lý khi exception được nhả ra
    echo 'Số nhập vào phải nhỏ hơn 1';
}

echo 'Hello world';


class gridSize1Exception extends Exception
{

}

class  gridSize2Exception extends Exception
{

}

function throwStone ($stoneSize)
{
    if ($stoneSize <= 2 && $stoneSize > 1) {
        //nếu stone size lớn hơn 1 cm && <=2
        throw new gridSize2Exception();
    }

    if ($stoneSize <= 1) {
        //nếu stone size lớn hơn 1 cm
        throw new gridSize1Exception();
    }


}

try {
    throwStone(1);
} catch (gridSize2Exception $e) {
    echo "Bắt được hòn đá size 2";
} catch (gridSize1Exception $e) {
    echo "Bắt được hòn đá size 1";
}


?>
</body>
</html>