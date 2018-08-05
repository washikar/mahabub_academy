<?php
include 'inc/session.php';
include 'inc/header.php';
include 'inc/sidebar.php';
include 'inc/navbar.php';
use App\classes\Video as Video;
use App\classes\VideoCatagory as VideoCatagory;

$ob = new Video();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ob->createAdmin();
}
?>
    <div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Create Admin</li>
        </ol>
        <!-- Icon Cards-->
        <div class="container">
            <div class="row">
                <div id="sign_up">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="crt_ac">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Your Image</label>
                                            <input type="file" name="image" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter your E-mail</label>
                                            <input type="email" name="email" class="text_fields form-control" id="em" placeholder="Your E-mail">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter your first name</label>
                                            <input type="text" name="fname" class="text_fields form-control" id="first_name" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter your last name</label>
                                            <input type="text" name="lname" class="text_fields form-control" id="last_name" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Enter your Username</label>
                                            <input type="text" name="uname" class="text_fields form-control" id="last_name" placeholder="Last Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <input  type="radio" id="ml" value="male" name="gender">Male
                                            <input type="radio" id="fml" value="female" name="gender">Female
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="pass" class="text_fields form-control" id="">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm password</label>
                                            <input type="password" name="conf_pass" class="text_fields form-control" id="">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-info" onclick="return validation()">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include 'inc/footer.php';
?>