<?php


if (isset($_FILES['image']) && $_FILES['image']['name'] != null) {
    //xử lý upload
    /*$name = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmpName, './uploads/'.time().$name);*/

    //mk_dir
    $name = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $date = date('Y-m', time()); //2021-05
    $newFolder = './uploads/'.$date;//uploads/2021-05;
    if (!file_exists($newFolder) || is_file($newFolder)) {
        //tạo mới một folder
        mkdir($newFolder, 0777);
    }
    move_uploaded_file($tmpName, $newFolder.'/'.time().$name);
}
?>