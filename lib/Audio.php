<?php

class Audio{
    
    private $name = "String";
    private $source = "String";

    public function __construct($name,$source){
        $this -> name = $name;
        $this -> source = $source;
    }

    public function getName(){
        return $this->source;
    }   

    public function getHTML(){
        
        return '<audio controls> <source src="data:audio/mpeg;base64,'. $this -> source .'"></audio> ';
        
    }
}

