<?php
//include 'Human.php';

//tính kế thừa - inheritance
//Đơn kế thừa - 1 con 1 cha
class Student extends Human
{
    var $id;

    function learning ()
    {
        echo $this->name.'- mã hs'.$this->id.' learning';
    }
}

?>