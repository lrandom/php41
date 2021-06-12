<?php
require_once './../connect.php';
$conn = getConnect();
$query = 'SELECT * from province';
$provinceRs = mysqli_query($conn, $query);
$id = $_GET['id'];
$rsUser = mysqli_query($conn, 'SELECT * FROM users WHERE id='.$id);
$user = mysqli_fetch_assoc($rsUser);
if (isset($_POST['user_name'])) {
    //echo 'test';
    $username = $_POST['user_name'];
    $fullname = $_POST['full_name'];
    $pwd = md5($_POST['pwd']);
    $provinceId = $_POST['province_id'];
    $sql = "UPDATE users SET username='$username',fullname='$fullname', pwd='$pwd',province_id=$provinceId WHERE id=".$id;
    echo $sql;
    $flag = mysqli_query($conn, $sql);
    echo mysqli_error();
    if ($flag) {
        //thành công thì chuyển về index
        header('Location: /php41/session8/users/index.php');

    } else {
        //thông báo thất bại
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
    <title>Add User</title>
</head>
<body>
<form method="post">
    <input type="text" name="user_name" value="<?php echo $user['username']; ?>" placeholder="username"><br>
    <input type="text" name="full_name" value="<?php echo $user['fullname']; ?>" placeholder="fullname"><br>
    <input type="password" name="pwd" placeholder="password"><br>
    <select name="province_id">
        <?php
        while ($r = mysqli_fetch_assoc($provinceRs)) {
            ?>
            <option <?php if ($r['id'] == $user['province_id']) {
                echo 'selected="selected"';
            } ?> value="<?php echo $r['id']; ?>"><?php echo $r['name'];
                ?></option>
            <?php
        }
        ?>
    </select><br>
    <button>Cập nhật</button>
</form>
</body>
</html>