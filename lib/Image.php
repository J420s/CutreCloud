<?php

//https://stackoverflow.com/questions/6087569/php-imagemagick-image-display

class Image{
    private $source;

    public function __construct($source){
        $this->source = $source;
    }

    public function getSource(){
        return $this->source;
    }   

    public function getHTML(){
        return '<img src="' . $this->getSource(). '" width="33%" class="card-img-top preview-img">';
    }
}