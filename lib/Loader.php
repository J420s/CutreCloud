<?php

require_once "./lib/App.php";
require_once "./lib/Audio.php";
require_once "./lib/Image.php";
require_once "./lib/Database.php";

class Loader{

    public $userID = 0;
    public $username = "String";

    public function __construct($email){

        $this -> userID = Database::getUserID($email);

        $this -> username = Database::getUsername( $this -> userID );

    }

    public function printSection($section){
        echo call_user_func(array($this, 'print' . $section),);
    }

    public function printAudio(){
        $allAudio = Database::getAllAudio($this -> userID);

        $cont = 0;
        $result = "";

        while($music = $allAudio->fetch_assoc()) {
            
            if($cont == 0) $result .= "<div class='row justify-content-center pb-4'>";

            $audio = new Audio($music['nombre'],$music['contenido']);

           
            $result .= $audio -> getHTML();

            $cont ++;

            if($cont == 5) {
                $result .= "</div>";
                $cont = 0;
            }
        }
        if($cont > 0) $result .= "</div>";
        
       return $result;
    }
    public function printImages(){

        $allImages = Database::getAllImages($this -> userID);
 
        $result = "";

        while($img = $allImages->fetch_assoc()) {

            $image = new Image($img['nombre'],$img['contenido']);
    
            $result .= $image -> getHTML();

        }
        
       return $result;
    }

    private function printVideos(){}

    private function printAudios(){}
}