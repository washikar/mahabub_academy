<?php

namespace App\classes;

use App\database\Database;

class Login
{
    public function adminLoginCheck($data)
    {


        $tablename = $data['tname'];

        if ($tablename == 'users') {
            $role = 1;

        } elseif ($tablename == 'student') {
            $role = 2;

        }else{
            echo "No more";
            die();
        }
        $email = $data['email'];
        $password = md5($data['password']);
        if ($sql = "SELECT * FROM `$tablename` WHERE email='$email' AND password='$password' AND role='$role'") {
            if (mysqli_query(Database::dbCon(), $sql)) {
                $queryResult = mysqli_query(Database::dbCon(), $sql);
                $user = mysqli_fetch_assoc($queryResult);

                if ($user) {
                    try {
                        session_start();
                        //ob_start();
                        $_SESSION['id'] = $user['id'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['role'] = $user['role'];
                        $_SESSION['image'] = $user['image'];
                        $_SESSION['fname'] = $user['fname'];
                        $_SESSION['lname'] = $user['lname'];
                        $_SESSION['email'] = $user['email'];
                        $_SESSION['image'] = $user['image'];


                        if ($role == 1) {
                            $_SESSION['username'] = $user['username'];
                            header('Location:admin/index.php');

                        } else {
                            header('Location:view/index.php');
                        }
                    } catch (\Exception $e) {
                        print_r($e);
                        die('error');
                    }


                } else {
                    header('Location:../resource/sign.php?massage= "Enter the valid Mail and Password"');
                }
            } else {
                die('Query Problem' . mysqli_error(Database::dbCon()));
            }
        }


    }

    public function validUserCheck($data)
    {
        $sql = "SELECT * FROM users WHERE email='$data'";
        if (mysqli_query(Database::dbCon(), $sql)) {
            $queryResult = mysqli_query(Database::dbCon(), $sql);
            $user = mysqli_fetch_assoc($queryResult);
            $login_user = $user['username'];
            if (isset($_SESSION['login_user'])) {
                header('location:../index.php');
            }
        } else {
            header("Location:../../../index.php");
        }

    }

}


