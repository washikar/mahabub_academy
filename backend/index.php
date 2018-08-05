<?php
require_once __DIR__ . '/vendor/autoload.php';

$login=new App\classes\Login();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $tname='users';
    $massage=$login->adminLoginCheck($_POST,$tname);
}

