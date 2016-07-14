<?php

class Atribute
{
    var $atributes;
    
    function __construct($atribute)
    {
        
        $this->atributes = $atribute;       
    }
    
    function getAtribute()
    {
        return $this->atributes;
    }
    
}