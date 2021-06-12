<?php
function getConnect ()
{
    $conn = mysqli_connect('localhost', 'root', 'koodinh', 'fish_sauce_shop');
    if (!$conn) {
        die('Cannot connect to Mysql server '.mysqli_connect_error());
    }
    mysqli_query($conn, 'SET NAMES UTF8');
    return $conn;
}

?>