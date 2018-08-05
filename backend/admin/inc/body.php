<?php
use App\classes\Video as Video;


$ob_Video = new Video();
$tableName = 'video_list';
$datas = $ob_Video->fatchAllVideo();

if (!empty($_GET['info'])) {
    $id = $_GET['info'];
    $ob_Video->deletedata($id);
}
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5">
                            Total Video: <b><?php
                                $tableName = 'video_list';
                                $count = $ob_Video->countRow($tableName);
                                echo($count);
                                ?> </b></div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5">
                            <div class="mr-5">
                                Total Video Catagory: <b><?php
                                    $tableName = 'video_category';
                                    $count = $ob_Video->countRow($tableName);
                                    echo($count);
                                    ?> </b></div>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">
                            Total Student: <b><?php
                                $tableName = 'student';
                                $count = $ob_Video->countRow($tableName);
                                echo($count);
                                ?> </b>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-support"></i>
                        </div>
                        <div class="mr-5">
                            Total User: <b><?php
                                $tableName = 'student';
                                $count = $ob_Video->countRow($tableName);
                                echo($count);
                                ?> </b>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data Table Example
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Video Title</th>
                            <th>Video Catagory</th>
                            <th>Url</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($datas

                        as $data)
                        {
                        ?>
                        <tr>
                            <td><?= $data['video_title'] ?></td>
                            <td><?= $data['video_category'] ?></td>
                            <td class="text-center"><?php echo '<iframe class="embed-responsive-item" width="200" height="100" src="https://www.youtube.com/embed/' . $data['video_url'] . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>' ?></td>
                            <td>
                                <a class="btn btn-info" data-toggle="modal"
                                   data-target="#<?= $data['id'] ?>" style="color: #fff">
                                    Show
                                </a>
                                <a onclick='javascript:confirmationDelete($(this));return false;'
                                   href="index.php?info=<?= $data['id']; ?>" class="btn btn-danger"> Delete</a>
                            </td>
                            <div class="modal" id="<?= $data['id'] ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal Heading</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body text-center pl-0">
                                            <ul style="list-style-type: none">
                                                <li>  <?php echo '<iframe class="embed-responsive-item" width="350" height="auto" src="https://www.youtube.com/embed/' . $data['video_url'] . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>' ?></li>
                                                <li><p><?= $data['video_title'] ?></p></li>
                                                <li><p><?= $data['video_category'] ?></p></li>
                                                <li><p><?= $data['sub_video_category'] ?></p></li>
                                                <li><p> <?= $data['video_description'] ?></p></li>
                                            </ul>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- The Modal -->
                            <?php
                            }
                            ?>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->