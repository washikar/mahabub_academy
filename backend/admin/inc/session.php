<?php
include '../vendor/autoload.php';

use App\database\Database;
use App\classes\Login as login;

session_start();
ob_start();
if ($_SESSION['id']==null || $_SESSION['email']==null)
{
    header('location:../../index.php');
} ?>
