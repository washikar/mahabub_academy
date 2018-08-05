<style>
    .active_page{
        background: #fefefe;
        border: 1px solid #343A40;
    }
</style>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><?=$_SESSION['username'];?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">

                <a <?php
                if($pagename == 'index.php')
                {echo 'class="active_page nav-link"';}
                else{
                    echo 'class="nav-link"';
                }?> href="index.php">
                    <i class="fa fa-fw fa-dashboard"></i>
                <span class="nav-link-text">Dashboard</span>
                </a>

            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a <?php

                if($pagename == 'createadmin.php')
                {echo 'class="active_page nav-link"';;}
                else{
                    echo 'class="nav-link"';
                }?>
                        class="nav-link" href="createadmin.php">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Create Admin</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a <?php

                if($pagename == 'v_catagory.php')
                {echo 'class="active_page nav-link"';;}
                else{
                    echo 'class="nav-link"';
                }?>
                        class="nav-link" href="v_catagory.php">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Upload Video Catagory</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a <?php
                if($pagename == 'v_sub_catagory.php')
                {echo 'class="active_page nav-link"';}
                else{
                    echo 'class="nav-link"';
                }?> class="nav-link" href="v_sub_catagory.php">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Upload Sub Catagory</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a <?php
                if($pagename == 'video.php')
                {echo 'class="active_page nav-link"';}
                else{
                    echo 'class="nav-link"';
                }?> class="nav-link" href="video.php">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Video Upload</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="../view/index.php">
                    <i class="fa fa-window-maximize"></i>
                    <span class="nav-link-text">Live View</span>
                </a>
            </li>


        </ul>