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
$arr = [
    "Toyota" => [
        "Camry",
        "Vios"
    ],
    "Vinfast" => [
        "LuxA",
        "LuxSA"
    ]
];

/*
 *
[
          “Camry”,
          “Vios”,
          “LuxA”,
         “LuxSA”
]

 * */


$newArr = [];
foreach ($arr as $item) {
    foreach ($item as $k => $v) {
        array_push($newArr, $v);
    }
}

foreach ($newArr as $r) {
    echo $r.'</br>';
}
?>


</body>
</html>