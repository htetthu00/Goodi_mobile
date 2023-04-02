<?php

use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = bcrypt($_POST['password']);
//dd($password);
if(!Validator::string($email)) {
    setError('Email field is required!');
}

if(!Validator::string($password)) {
    setError('Password field is required!');
}

// if(!Validator::email($email)) {
//     setError('Enter a valid email!');
// }

// if(!Validator::string($password,8,20)) {
//     setError('Password must be at least characters long!');
// }

$config = require base_path("config.php");

$db = new Database($config['database']);

$admin = $db->query('SELECT * FROM admins WHERE email = :email AND password = :password ',[
                        'email' => $email,
                        'password' => $password,
                    ])->find();//dd($admin);
if(false !== $admin) {
    $_SESSION['admin'] = $admin;
    redirectTo('admin');
}

setError('These credential does not match our  records');
redirectTo('admin');