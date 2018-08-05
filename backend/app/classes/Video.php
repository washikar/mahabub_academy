<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Ikbal
 * Date: 28-May-18
 * Time: 10:09 PM
 */

namespace App\classes;

use App\database\Database;


class Video
{
    public function createAdmin()
    {
        $role = 2;
        $image = $_FILES['image'];
        $filename = 'MahabubAcademy' . '_' . rand(1, 1000) . '_' . time() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
        $email = $_POST['email'];
        $fname = $_POST['fname'];
        $role = 1;
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $gender = $_POST['gender'];
        $pass = md5($_POST['pass']);
        $date = (date("d-m-y", time()));

        $directory = 'assets/images/admin/';
        $imageUrl = $directory . $filename;
        $fileType = pathinfo($filename, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['image']['tmp_name']);

        if ($check) {
            if (file_exists($imageUrl)) {
                echo "<script> alert('This image already exist. Please select another one. Try Agin');</script>";
            } else {
                if ($_FILES['image']['size'] > 2000000) {

                    echo "<script> alert('Sorry, Your image size is to large. Try Agin')</script>";
                } else {
                    if ($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'png') {
                        echo "<script> alert('Image tye is not supported. Please Use jpg of png. Try Agin');</script>";
                    } else {
                        $sql = "INSERT INTO `users`(`id`, `username`, `email`, `role`, `image`, `fname`, `lname`, `gender`, `date`, `password`) VALUES ('','$uname','$email','$role','$filename','$fname','$lname','$gender','$date','$pass')";
                        if (mysqli_query(Database::dbCon(), $sql)) {

                            move_uploaded_file($image['tmp_name'], $directory . $filename);


                            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";

                        }

                    }
                }
            }
        }

    }

    public function videoInsert()
    {
        $image = $_FILES['image'];
        $filename = 'MahabubAcademy' . '_thumbnail_image' . '_' . rand(1, 1000) . '_' . time() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
        $video_title = $_POST['video_title'];
        $video_category = $_POST['video_category'];
        $sub_video_category = $_POST['sub_video_category'];
        $video_description = $_POST['video_description'];
        $url = $_POST['video_url'];

        $onwer_name = $_SESSION['email'];
        $onwer_image = $_SESSION['image'];
        $time = (date("d-m-y", time()));


        $directory = 'assets/images/thumbnail_image/';
        $imageUrl = $directory . $filename;
        $fileType = pathinfo($filename, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check) {
            if (file_exists($imageUrl)) {
                echo "<script> alert('This image already exist. Please select another one. Try Agin');</script>";
            } else {
                if ($_FILES['image']['size'] > 2000000) {

                    echo "<script> alert('Sorry, Your image size is to large. Try Agin')</script>";
                } else {
                    if ($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'png') {
                        echo "<script> alert('Image tye is not supported. Please Use jpg of png. Try Agin');</script>";
                    } else {
                        $sql = "INSERT INTO `video_list`(`id`, `video_title`,`video_category`, `sub_video_category`, `video_description`, `video_url`, `onwer_name`,`onwer_image`,`thumbnail_image`,`time`) VALUES ('','$video_title','$video_category','$sub_video_category','$video_description','$url','$onwer_name','$onwer_image','$filename','$time')";
                        if (mysqli_query(Database::dbCon(), $sql)) {
                            move_uploaded_file($image['tmp_name'], $directory . $filename);
                            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";

                        }

                    }
                }
            }
        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }


    }

    public function fatchAllVideo()
    {
        $sql = 'SELECT * FROM `video_list`';
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $array[] = $row;
            }
            return $array;

        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }

    public function fatchVideo($video_category, $sub_video_category)
    {

        $sql = "SELECT * FROM `video_list` WHERE video_category='$video_category' and sub_video_category='$sub_video_category'";

        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $data[] = $row;
            }
            return $data;
        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }
    }

//    delete video row
    public function deletedata($id)
    {
        $sql = "DELETE FROM `video_list` WHERE id='$id'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            echo "<script> alert('Your Information Delete Successfuly');
                            window.history.back();
                 </script>";
        }
    }

//    count the row
    public function countRow($tableName)
    {
        $count = 0;

        $sql = "SELECT * FROM `$tableName`";
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $count++;
            }
            return $count;

        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }

    }

    public function student_upload()
    {
        $image = $_FILES['image'];
        $filename = 'MahabubAcademy' . '_thumbnail_image' . '_' . rand(1, 1000) . '_' . time() . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
        $video_title = $_POST['video_title'];
        $video_category = $_POST['video_category'];
        $sub_video_category = $_POST['sub_video_category'];
        $video_description = $_POST['video_description'];
        $url = $_POST['video_url'];

        $onwer_name = $_SESSION['lname'];
        $onwer_image = $_SESSION['image'];
        $time = (date("d-m-y", time()));


        $directory = 'assets/image/thumbnail_image/';
        $imageUrl = $directory . $filename;
        $fileType = pathinfo($filename, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['image']['tmp_name']);
        if ($check) {
            if (file_exists($imageUrl)) {
                echo "<script> alert('This image already exist. Please select another one. Try Agin');</script>";
            } else {
                if ($_FILES['image']['size'] > 2000000) {

                    echo "<script> alert('Sorry, Your image size is to large. Try Agin')</script>";
                } else {
                    if ($fileType != 'jpg' && $fileType != 'jpeg' && $fileType != 'png') {
                        echo "<script> alert('Image tye is not supported. Please Use jpg of png. Try Agin');</script>";
                    } else {
                        $sql = "INSERT INTO `student_upload`(`id`, `video_title`,`video_category`, `sub_video_category`, `video_description`, `video_url`, `onwer_name`,`onwer_image`,`thumbnail_image`,`time`) VALUES ('','$video_title','$video_category','$sub_video_category','$video_description','$url','$onwer_name','$onwer_image','$filename','$time')";
                        if (mysqli_query(Database::dbCon(), $sql)) {
                            move_uploaded_file($image['tmp_name'], $directory . $filename);
                            echo "<script> alert('Your Information Upload Successfuly');
                            window.history.back();
                 </script>";

                        }

                    }
                }
            }
        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }

    }

    public function student_upload_video()
    {
        $sql = 'SELECT * FROM `student_upload`';
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            while ($row = mysqli_fetch_assoc($queryResult)) {
                $array[] = $row;
            }
            return $array;

        } else {
            die('Query Problem' . mysqli_error(Database::dbCon()));
        }

    }


}

