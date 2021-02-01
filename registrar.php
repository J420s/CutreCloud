<?php

require_once "./lib/db.php";

$success = addUser (array(
    'email'     =>  $_REQUEST['email'],
    'password'  =>  $_REQUEST['password'],
    'username'  =>  $_REQUEST['username']
    ));

if($success)header('Location: index.php');