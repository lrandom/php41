<?php

//lớp trừu tượng
abstract class AbMobile
{
    public function ring ()
    {
        echo "I am ringing";
    }

    public abstract function turnOff ();

}

?>