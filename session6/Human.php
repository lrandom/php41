<?php

class Human
{
    //chứa code định nghĩa thuộc tính và phương thức
    var $eyeColor; //màu mắt
    var $hairColor; //màu tóc
    var $height; //chiều cao
    var $name; //tên

    //phương thức ăn
    function eat ()
    {
        echo $this->name." eating";
    }

    //phương thức ngủ
    function sleep ()
    {
        echo $this->name." sleep";
    }
}
