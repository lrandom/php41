<?php
session_start();
$fakeUsername = "root";
$fakePassword = "123456";
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $fakeUsername && $password == $fakePassword) {
        //đang nhap thanh cong
        //Chuyển người dùng sang trang profile.php
        $_SESSION['user'] = [
            'username' => $username
        ];
        header("Location:profile.php");

    } else {
        //đăng nhập thất bại;
        $error = "Đăng nhập thất bại";
    }
}
?>
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
<?php echo isset($error) ? $error : ''; ?>
<form method="post">
    <input type="text" name="username"/>
    <br>
    <input type="password" name="password"/>
    <br>
    <input type="submit" value="Login"/>
</form>
</body>
</html>