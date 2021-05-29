<?php
//polymorphic -> đa hình -> tiếng hy lạp
//overriding (ghi đè) / dynamic polymorphic/ đa hình động
//overloading( nạp chồng) static polymorphic/đa hình tĩnh /trong PHP ko có trick ->
//nhiều phương thức trong 1 lớp mà có cùng tên, # số lượng tham số hoặc kiểu dl của tham số



//tính trừu tưọng - abstraction
require 'IMobile.php';

class Iphone implements IMobile, IOS
{

    public function ring ()
    {
        // TODO: Implement ring() method.
        echo "ringing";
    }

    public function turnOff ()
    {
        // TODO: Implement turnOff() method.
        echo "turn off";
    }

    public function setOS ()
    {
        // TODO: Implement setOS() method.
    }


}

$iphoneX = new Iphone();
?>