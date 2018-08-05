<?php
$pagename=basename($_SERVER['PHP_SELF']);
if($_SESSION['role']==2){
    session_start();
    ob_start();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['role']);
    session_destroy();
    header('location:../../index.php');

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mahabub Academy</title>
    <link rel="shourtcut icon" href="assets/images/title.png">
    <!-- Bootstrap core CSS-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link href="assets/css/style.css">
</head>