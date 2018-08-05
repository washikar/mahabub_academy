<?php
include('inc/header.php');
include('inc/navbar.php'); ?>
<section id="sign_in">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 text-center col-xs-12">
                <h2>Log in</h2>
                <div class="alartmassage pt-2 pb-2" style="position: absolute; top: 40%; right: 50%; transform: translateY(-50%) translateX(50%); ">
                    <p class="text-danger">
                        <?php

                        if(isset($_GET['massage'])){
                            $massage= $_GET['massage'];
                            echo $massage;
                        }
                        ?>
                    </p>

                </div>
                <form action="../backend/index.php" method="post" enctype="multipart/form-datas">
<!--                    <div class="form-group">-->
<!--                        <label class="radio-inline"><input type="radio" name="t_name" value="users" required>Admin</label>-->
<!--                        <label class="radio-inline"><input type="radio" name="t_name" value="student">Student</label>-->
<!--                    </div>-->
                    <div class="form-group">
                        <input type="email" name="email" class="sign_fields" id="email" placeholder="E-mail">
                        <p class="text-danger" id="emailtext"></p>
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="sign_fields" id="password" placeholder="Password">
                    </div>

            </div>
            <div class="form-group">
                <input type="submit" value="Sign in" class="send" onclick="return validation()">
            </div>
            </form>
            <div class="caccnt">
                <a href="#`">Forgot password?</a>
            </div>
            <div>
                <a href="sign_up.php">Create a new account.</a>
            </div>
        </div>
    </div>
    </div>
</section>
<?php
include 'inc/footer.php' ?>


<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js//slick.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/custom.js"></script>

</body>
</html>