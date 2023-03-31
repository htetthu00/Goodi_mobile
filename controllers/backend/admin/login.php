<?php

use Core\Validator;

$email = $_POST['email'];
$password = bcrypt($_POST['password']);

if(!Validator::string($email)) {
    
}