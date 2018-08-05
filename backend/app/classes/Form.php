<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Ikbal
 * Date: 30-May-18
 * Time: 11:07 AM
 */

namespace App\classes;
use App\database\Database;


class Form
{
    public function formInsert(){
        $role=2;
        $image=$_FILES['image'];
        $email=$_POST['email'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $gender=$_POST['gender'];
        $date=$_POST['date'];
        $pass=md5($_POST['pass']);

        $filename='MahabubAcademy'.'_'.rand(1,1000).'_'.time().'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
        $percent = 0.5;
        $directory='uploads/student/';
        $imageUrl=$directory.$filename;
        $fileType=pathinfo($filename,PATHINFO_EXTENSION);
        $check=getimagesize($_FILES['image']['tmp_name']);

        if ($check){
            if (file_exists($imageUrl)){
                echo "<script> alert('This image already exist. Please select another one. Try Agin');</script>";
            }
            else{
                if ($_FILES['image']['size']>2000000){

                    echo "<script> alert('Sorry, Your image size is to large. Try Agin')</script>";
                }
                else{
                    if ($fileType !='jpg' && $fileType!='png'){
                        echo "<script> alert('Image tye is not supported. Please Use jpg of png. Try Agin');</script>";
                    }
                    else{
                        $sql = "INSERT INTO `student`(`id`, `role`, `image`, `email`, `fname`, `lname`, `gender`, `date`, `password`) VALUES ('','$role','$filename','$email','$fname','$lname','$gender','$date','$pass')";
                        if (mysqli_query(Database::dbCon(), $sql)) {

                            move_uploaded_file($image['tmp_name'],$directory.$filename);


//                            header('Location:sign.php?massage="Your Account Open Successfuly"');
                            echo "<script>alert('Your Account Open Successfuly')</script>";

                        }

                    }
                }
            }
        }


    }

}