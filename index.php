<?php
class test{
    private $zmienna1;
    private $zmienna2;
    private $nowazmienna;
    
    function __construct() {
        $this->zmienna1 = "zmienna1";
        $this->zmienna2 = "zmienna2";
        $this->nowazmienna = "nowa zmienna";
    }
    
    function __toString() {
        return $this->zmienna1.' '.$this->zmienna2.'<br>';
    }
}

$obiekt = new test();

echo $obiekt;

?>
