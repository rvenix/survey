<?php

class nowyObiekt{
    private $tablica = array();
    
    public function __construct() {
        $this->tablica[] = 'nowy element1';
    }
}

class test{
    private $zmienna1;
    private $zmienna2;
    private $nowazmienna;
    private $nowy;
    
    function __construct() {
        $this->zmienna1 = "zmienna1";
        $this->zmienna2 = "zmienna2";
        $this->nowazmienna = "nowa zmienna";
        $this->nowy = new nowyObiekt();
    }
    
    function __toString() {
        return $this->zmienna1.' '.$this->zmienna2.'<br>';
    }
}



$obiekt = new test();

echo $obiekt;

?>
