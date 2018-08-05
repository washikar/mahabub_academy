<?php
include_once '../admin/inc/session.php';

use App\classes\Video as Video;
use App\classes\VideoCatagory as VideoCatagory;

$ob_VideoCatagory = new VideoCatagory();
//show all video
$ob_Video = new Video();
$datas = $ob_Video->fatchAllVideo();
//search all

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ob_Video->student_upload();

}
include_once 'inc/header.php';
?>
    <section id="body_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 leftbar margin_top">
                    <div class="row">
                        <div class="col-lg-12 col-4">
                            <div class="profilepic">
                                <img src="<?php if ($_SESSION['role'] == 1) {
                                    echo "../admin/assets/images/admin/";
                                } else {
                                    echo "../../resource/uploads/student";
                                } ?>/<?= $_SESSION['image']; ?>" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-8">
                            <div class="profile">
                                <h4><?= $_SESSION['fname']; ?></h4>
                                <p>@<?= $_SESSION['lname']; ?></p>
                                <span class="fa fa-envelope-o"></span><i><?= $_SESSION['email']; ?></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 margin_top">
                    <div class="card mt-3">
                        <div class="card-body">
                            <form class="form_class" method="post" enctype="multipart/form-data">
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
                                <a href="javascript: history.go(-1)" class="btn btn-danger">Back</a>
                            </form>
                        </div>
                    </div>
                </div>

                </div>
                <div class="col-lg-3">
                    <img src="download.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
<?php
include_once 'inc/footer.php';
?>