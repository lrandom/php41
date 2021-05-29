<?php

class Human
{
    function __construct ($eyeColor, $hairColor, $name, $height)
    {
        $this->eyeColor = $eyeColor;
        $this->hairColor = $hairColor;
        $this->name = $name;
        $this->height = $height;
    }

    function __destruct ()
    {
        // TODO: Implement __destruct() method.
        echo "Huỷ đối tượng";
    }

//chứa code định nghĩa thuộc tính và phương thức
    var
        $eyeColor; //màu mắt
    var
        $hairColor; //màu tóc
    var
        $height; //chiều cao
    var
        $name; //tên

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
