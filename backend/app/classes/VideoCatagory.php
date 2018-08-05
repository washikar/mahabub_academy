<?php

namespace App\classes;

use App\database\Database;

class VideoCatagory
{
    public function insertVideoCatagory()
    {
        $video_categoris=$_POST['video_categoris'];

        $sql="INSERT INTO `video_category`(`id`, `video_categoris`) VALUES ('','$video_categoris')";
        if (mysqli_query(Database::dbCon(), $sql)) {

            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";

        }

    }
    public function insertVideoSubCatagory(){

        $sub_video_category=$_POST['sub_video_category'];
        $category_no=$_POST['category_no'];
        $sql="INSERT INTO `sub_category`(`id`,`sub_video_category`,`category_no`) VALUES ('','$sub_video_category','$category_no')";
        if (mysqli_query(Database::dbCon(), $sql)) {

            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";

        }

    }

    public function fatchVideoCatagory(){
        $sql='SELECT * FROM `video_category`';
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
    public function fatchVideoSubCatagory(){
        $sql='SELECT * FROM `sub_category` INNER JOIN video_category ON sub_category.category_no = video_category.id';
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)){
                $sub_category[]=$row;
            }
            return $sub_category;



        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }
}