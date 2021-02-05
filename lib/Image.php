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
        
        
        return '<div class="col-sm-6 col-md-4 col-lg-3 item">
        <a href="data:image/jpeg;base64,' . $this -> source . '" data-toggle="lightbox">
        <img class="img-fluid" src="data:image/jpeg;base64,' . $this -> source . '">
    </a>';
        
    }
}