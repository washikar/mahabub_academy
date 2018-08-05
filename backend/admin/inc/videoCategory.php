<?php
use App\classes\VideoCatagory as VideoCatagory;
$ob_video=new VideoCatagory();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $ob_video->insertVideoCatagory();
}
$showData=$ob_video->fatchVideoCatagory();
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Video Catagory</li>
        </ol>
        <!-- Icon Cards-->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pl-0">
                    <div class="card">
                        <div class="card-body">
                            <form class="" method="post">
                                <div class="form-group">
                                    <label for="vedio_title">Video Catagory</label>
                                    <input type="text" name="video_categoris" class="form-control" id="video_categoris"
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
            <h4>Video Catagory List:</h4>
        </div>
        <div class="col-lg-12 p-0">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>NO</th>
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
                            </tr>
                            <?php
                        }
                        ?>
                    </table>

                </div>

        </div>
    </div>