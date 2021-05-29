<?php

//tính bao đóng - encapsulation
class Car
{
    //access modifier/ access specifier
    private $engine;

    //setter /validator
    public function setEngine ($engine)
    {
        $this->engine = $engine;
    }

    //getter / filter ->filter
    public function getEngine ()
    {
        return $this->engine;
    }
}

$vinfast = new Car();
$vinfast->setEngine("BMW");
echo $vinfast->getEngine();
?>