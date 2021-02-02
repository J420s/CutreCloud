<?php

require_once "./lib/App.php";
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

    private function printImages(){
        $directorio = App::$imageFolder;
        $ficheros = array_diff(scandir($directorio), array('..', '.'));

        $cont = 0;
        $result = "";

        foreach ($ficheros as $fichero) {

            if($cont == 0) $result .= "<div class='row justify-content-center pb-4'>";

            $img = new Image($directorio.'/'.$fichero);

            ob_start();
            include "./components/card-img.php";
            $result .= ob_get_clean();

            $cont ++;

            if($cont == 5) $result .= "</div>";
        }

       return $result;
    }

    private function printVideos(){}

    private function printAudios(){}
}