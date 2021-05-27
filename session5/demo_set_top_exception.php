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
function catchAllException ($e)
{
    echo 'có lỗi xảy ra'.$e->getMessage();
}

set_exception_handler('catchAllException');

throw new Exception("Lỗi 1");

throw new Exception("Lỗi 2");
?>
</body>
</html>