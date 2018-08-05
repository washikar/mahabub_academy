<?php
include 'inc/session.php';
include 'inc/header.php';
include 'inc/sidebar.php';
include 'inc/navbar.php';
use App\classes\Video as Video;
use App\classes\VideoCatagory as VideoCatagory;

$ob_VideoCatagory = new VideoCatagory();
$ob_video = new Video();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ob_video->videoInsert();
}
?>
    <div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Video Upload</li>
        </ol>
        <!-- Icon Cards-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pl-0">
                    <div class="card">
                        <div class="card-body">
                            <form class="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="video_title">Video Title</label>
                                    <input type="text" name="video_title" class="form-control" id="Video_title"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="video_category">Video Catagories</label>
                                    <select class="custom-select" name="video_category" id="video_category">
                                        <option selected>Choose...</option>
                                        <?php
                                        $data = $ob_VideoCatagory->fatchVideoCatagory();

                                        foreach ($data as $data) {
                                            ?>
                                            <option value="<?= $data['video_categoris']; ?>"><?= $data['video_categoris']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="video_category">Sub Catagories</label>
                                    <select class="custom-select" name="sub_video_category" id="sub_video_category">
                                        <option selected>Choose...</option>
                                        <?php
                                        $row = $ob_VideoCatagory->fatchVideoSubCatagory();
                                        foreach ($row as $data) {
                                            ?>
                                            <option value="<?= $data['sub_video_category']; ?>"><?= $data['sub_video_category']; ?></option>
                                            <?php
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="Video_description">Video Description</label>
                                    <input type="text" name="video_description" class="form-control"
                                           id="Video_description" required>
                                </div>
                                <div class="form-group">
                                    <label for="Video_url">Video Url</label>
                                    <input type="text" name="video_url" class="form-control" id="Video_url" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Thumbnail Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php
include 'inc/footer.php';
?>