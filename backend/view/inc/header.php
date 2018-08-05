<?php
use App\classes\Search as search;
$ob_search=new search();

if (!empty($_POST)){
    $ob_search->search($_POST);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $_SESSION['lname']; ?></title>
    <link rel="shortcut icon" href="assets/image/title.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/dist/lazyframe.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<section id="navbar_part" class="navbarPart">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex justify-content-start">
                <a class="navbar-brand" href="index.php">
                    <img src="../../resource/assets/images/logo.png" class="img-fluid" alt="logo">
                    <span>Mahabub Academy</span>
                </a>

            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <?php if ($_SESSION['role'] != 1) {
                        ?>
                        <li class="nav-item d-flex align-items-center">
                            <a href="profile.php" class="nav-link">
                                <img src="../../resource/uploads/student/<?= $_SESSION['image']; ?>" class="img-fluid"
                                     alt="<?= $_SESSION['image']; ?>">

                                <strong><?= $_SESSION['fname']; ?></a></strong>
                        </li>
                        <?php
                    } ?>
                    <li class="nav-item">
                        <form action="search_result.php" method="post" class="form">
                            <div class="input-group">
                                <input type="text" class="form-control" id="search" name="search"
                                       placeholder="Username">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <button class="btn-custom" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"><i class="fa fa-user"
                                                                 aria-hidden="true"></i>
                                User</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../admin/inc/logout.php"><i class="fa fa-sign-out"
                                                                                       aria-hidden="true"></i>
                                Lougout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="clearfix"></div>
    </div>
</section>

