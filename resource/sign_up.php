<?php
include 'inc/header.php';
use App\classes\Form as Form;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ob_form=new Form();
    $ob_form->formInsert();
}
include 'inc/navbar.php';?>
    <section id="sign_up">
        <div class="container">
            <div class="row">
                <div class="col-md-6 sn_up">
                    <ul>
                        <li class="sn_act"><a href="sign_up.php">Students</a></li>
                        <li><a href="#">Teachers</a></li>
                        <li><a href="#">Parents</a></li>
                    </ul>
                    <h2>Get started as a student on Mahabub Academy</h2>
                    <p>Mahabub Academy will never share your information or post on your behalf without your permission.</p>
                </div>
                <div class="col-md-6">
                    <div class="crt_ac">
                        <h1>Create your account</h1>
                        <form action="" method="post" enctype="multipart/form-data">
                            <h3>Your Image</h3>
                             <input type="file" name="image">
                            <p id="c"></p>
                            <h3>Enter your E-mail</h3>
                            <input type="email" name="email" class="text_fields" id="em" placeholder="Your E-mail">
                            <p id="c"></p>

                            <h3>Enter your first name</h3>
                            <input type="text" name="fname" class="text_fields" id="first_name" placeholder="First Name">
                            <p id="a"></p>

                            <h3>Enter your last name</h3>
                            <input type="text" name="lname" class="text_fields" id="last_name" placeholder="Last Name">
                            <p id="b"></p>


                            <h3>Gender</h3>
                            <label class="gender">
                                <input  type="radio" id="ml" value="male" name="gender"> Male</label>

                            <label>
                                <input type="radio" id="fml" value="female" name="gender"> Female</label><br>
                            <p id="e"></p>

                            <h3>Your date of Birth</h3>
                            <input type="date" name="date" class="text_fields">

                            <h3>Create a password</h3>
                            <input type="password" name="pass" class="text_fields" id="">
                            <p id="e"></p>

                            <h3>Confirm password</h3>
                            <input type="password" name="conf_pass" class="text_fields" id="">
                            <p id="f"></p>

                            <label class="agree"><input type="checkbox" id="" name="" required> I agree with your <a href="#">Terms of Service</a> and <a href="#">Privacy Policy.</a></label>
                            
                            <input type="submit" value="Create new account" class="send" onclick="return validation()">
                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include 'inc/footer.php';?>