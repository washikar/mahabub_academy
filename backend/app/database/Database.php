<?php
namespace App\database;
class Database{
    public static function dbCon(){
        $hostName='localhost';
        $userName='root';
        $passWord='';
        $dbName='mahabub_academy';
        $db_con=mysqli_connect($hostName,$userName,$passWord,$dbName);
        return $db_con;


    }
}

//class Database{
//    public static function dbCon(){
//        $hostName='localhost';
//        $userName='mahabubacademy_academy';
//        $passWord='@Ov{.kpT7BDQ';
//        $dbName='mahabubacademy_academy';
//        $db_con=mysqli_connect($hostName,$userName,$passWord,$dbName);
//        return $db_con;
//
//
//    }
//}
?>
