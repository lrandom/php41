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
//Định nghĩa mảng
//indexed array
$arr = array(1, 2, 3, 4);

$arr2 = [
    0, 2, 3, 4, 5
];

$arr3 = [];
$arr3[] = 1;
$arr3[] = 2;
$arr3[] = 4;

for ($i = 0; $i < count($arr); $i++) {
    echo $arr[$i].'<br>';
}

foreach ($arr as $item) {
    echo $item.'</br>';
}

//ĐN mảng liên hợp
$assocArr = [
    "FullName" => "Nguyen Thanh Luan",
    "Age" => 29,
    "Address" => "Quang Ninh"
];

foreach ($assocArr as $k => $v) {
    echo $k.$v;
    echo $assocArr[$k];
}

$arr3D = [
    "info" => [
        [
            "FullName" => "Nguyen Thanh Luan",
            "Age" => 29,
            "Address" => "Quang Ninh"
        ]
    ],
    "job" => "Developer",
    "bio" => [
        "Rap",
        "Boxing",
        "Coding"
    ]
];
echo '<br>';
echo $arr3D["info"][0]["FullName"];//NguyeN Thanh Luan
echo $arr3D["job"];

$arr4D = [
    [
        [
            [
                "Name" => "Nam",
                "Age" => 12,
                "Skill" => [
                    "English",
                    "Japanese",
                    "Chinese"
                ]
            ]
        ]
    ]
];
foreach ($arr4D as $value1) {
    foreach ($value1 as $value2) {
        foreach ($value2 as $value3) {
            foreach ($value3 as $k => $v) {
                if ($k == "Skill") {
                    foreach ($v as $item) {
                        echo $item.'</br>';
                    }
                }
            }
        }
    }
}


echo '</br>';
echo $arr4D[0][0][0]["Skill"][0];//English
?>
</body>
</html>
</body>
</html>