<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Ikbal
 * Date: 31-Jul-18
 * Time: 10:53 PM
 */

namespace App\classes;

use App\database\Database;

class Search
{
    public static $array;

    public function search($data)
    {
        $search = $data;
        $sql = "SELECT * FROM student WHERE fname LIKE '%$search%' or lname LIKE '%$search%'";
        if (mysqli_query(Database::dbCon(),$sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $array[] = $row;
            }
            return $array;
        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }


    }
    public function showData()
    {

    }


}