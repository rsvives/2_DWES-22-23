<?php

class Test{
    private $otraProp;
    private  $data=[];

    function __construct($otra, $array)
    {
        $this->otraProp = $otra;
        $this->data = $array;
    }
}

 ;
$test = new Test("otra prop",['una cosa', 'otra cosa','otra cosa más']);