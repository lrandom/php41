<!doctype html>
<html lang="en">[
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
//setcookie("school", "NIIT", time() + (60*60*24));
if (isset($_COOKIE['school'])) {
    echo $_COOKIE['school']; //in ra gía trị của coookie
    //xoá cookie
    setcookie("school", "NIIT", time() - (60*60*24));
} else {
    echo "Cookie chưa được set";
}

phpinfo();
?>
</body>
</html>