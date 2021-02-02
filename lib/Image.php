<?php

//https://stackoverflow.com/questions/6087569/php-imagemagick-image-display

//<img src="data:image/jpeg;base64,' . $result['image'] . '"/>

class Image{

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
        
        return '<img src="data:image/jpeg;base64,' . $this -> source . '" width="33%" class="card-img-top preview-img">';
        
    }
}