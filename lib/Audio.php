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

        return '<div class="col-sm-6 col-md-4 col-lg-3 item">
                    <a href="data:image/jpeg;base64,' . $this -> source . '" data-toggle="lightbox">
                        <audio controls> <source src="data:audio/mpeg;base64,'. $this -> source .'"></audio>
                    </a>
                </div>';
        
    }
}

