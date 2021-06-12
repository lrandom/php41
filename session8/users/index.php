<?php
require_once './../connect.php';
$conn = getConnect();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (is_numeric($id)) {
        //thao tác xoá sửa
        $action = $_GET['action'];
        if ($action == 'delete') {
            //xoá
            mysqli_query($conn, 'DELETE FROM users WHERE id ='.$id);
        } elseif ($action == 'update') {
            //chuyển sang trang edit.php
            header('Location: /php41/session8/users/update.php?id='.$id);
        }
    }
}
$query = 'SELECT *,users.id as user_id,province.name as province_name FROM users LEFT JOIN province ON users.province_id = province.id';
$rs = mysqli_query($conn, $query);
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
<div class="container">
    <a href="/php41/session8/users/add.php">Thêm người dùng</a>
    <div>
        <table>
            <thead>
            <tr>
                <td>Id</td>
                <td>Username</td>
                <td>FullName</td>
                <td>Tỉnh</td>
                <td>Thao tác</td>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($r = mysqli_fetch_assoc($rs)) {
                ?>
                <tr>
                    <td><?php echo $r['user_id']; ?></td>
                    <td><?php echo $r['username']; ?></td>
                    <td><?php echo $r['fullname']; ?></td>
                    <td><?php echo $r['province_name']; ?></td>
                    <td>
                        <a href="?id=<?php echo $r['user_id']; ?>&action=update">Sửa</a>
                        <a href="?id=<?php echo $r['user_id']; ?>&action=delete"
                           onclick="return confirm('Bạn có muốn xoá hay không')">Xoá</a>
                    </td>
                </tr>

                <?php
            }
            ?>
            </tbody>

        </table>
    </div>
</div>

<style>
    table {
        width: 100%;
    }

    table tr, table td {
        border: 1px solid
    }
</style>
</body>
</html>