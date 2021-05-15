<?php
/*$x = 1;
echo $x++;
echo $x;

$y = 1;
echo ++$y;*/

$flag = true;
if (!$flag) {
    echo "Phủ định";
} else {
    echo "Khẳng định";
}

$chuoi1 = "Hello";
$chuoi2 = "World";
echo $chuoi1.$chuoi2;// HelloWorld;

$num = 10;
echo 'My age is '.$num;
echo "My age is $num";

$index = 0;
while ($index < 10) {
    echo $index;
    $index++;
}

$index2 = 0;
do {
    echo $index2;
    $index2++;
} while ($index2 < 10);

for ($i = 0; $i < 10; $i++) {
    echo $i;
}


?>