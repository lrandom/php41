<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    //có dl đẩy len
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo $password;


}
header("Location:form.php");



?>