<?php

require_once "Database.php";

if(isset($_REQUEST['username'])){

    $success = Database::addNewUser(array(
        
        'email'     =>  $_REQUEST['email'],
        'password'  =>  $_REQUEST['password'],
        'username'  =>  $_REQUEST['username']
        ));
    
    if($success)header('Location: index.php');

}else{

    if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){

        if(Database::validateUser($_REQUEST['email'],$_REQUEST['password'])){

            session_start();
            $_SESSION['email'] = $_REQUEST['email'];
            header('Location: ../userspace.php');

        }else{

            header('Location: index.php');

        }
    }
}

if(isset($_FILES['file'])){
    session_start();
    Database::upload($_FILES['file'],$_SESSION['id']);
    header('Location: ../userspace.php');
}