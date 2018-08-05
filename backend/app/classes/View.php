<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Ikbal
 * Date: 05-Jun-18
 * Time: 10:27 AM
 */

namespace App\classes;
use App\Database\Database;


class View
{
    public function ShowAllVideo(){
        $sql='SELECT * FROM `video_list`';
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)){
                $array[]=$row;
            }
            return $array;



        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }

}