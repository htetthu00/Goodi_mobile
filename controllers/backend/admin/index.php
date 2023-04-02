<?php

use Core\Database;


if(false !== checkAuth('admin')) {

    // $config = require base_path("config.php");

    // $db = new Database($config['database']);

    // $users = $db->query('SELECT * FROM users')->get();


    view('backend/admin/index.view.php',['users' => $users]);
} else {
    view('backend/admin/login.view.php');
}