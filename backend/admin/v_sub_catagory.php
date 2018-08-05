<?php
include 'inc/session.php';
include 'inc/header.php';
include 'inc/sidebar.php';
include 'inc/navbar.php';

use App\classes\VideoCatagory as Video;

$ob_video = new Video();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ob_video->insertVideoSubCatagory();
}

$showData = $ob_video->fatchVideoSubCatagory();
?>
    <div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Sub Categories of Video</li>
        </ol>
        <!-- Icon Cards-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pl-0">
                    <div class="card">
                        <div class="card-body">
                            <form class="" method="post">
                                <div class="form-group">
                                    <label for="category_no">Video Catagory</label>
                                    <select class="custom-select" name="category_no" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <?php
                                        $data = $ob_video->fatchVideoCatagory();

                                        foreach ($data as $data) {
                                            ?>
                                            <option value="<?= $data['id']; ?>"><?= $data['video_categoris']; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="sub_video_category"> Sub Video Category</label>
                                    <input type="text" name="sub_video_category" class="form-control"
                                           id="video_categoris"
                                           required>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center text-info mt-3">
            <h4>Video Sub-Catagory List:</h4>
        </div>
        <div class="table-responsive mt-3">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>Video</th>
                    <th>Video Sub-Catagory</th>
                </tr>
                </thead>
                <?php
                $i = 0;
                foreach ($showData as $data) {
                    $i++;

                    ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data['video_categoris']; ?></td>
                        <td><?= $data['sub_video_category']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>


<?php
include 'inc/footer.php';
?>