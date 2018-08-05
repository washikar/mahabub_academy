<?php
include_once '../admin/inc/session.php';
use App\classes\Video as Video;

$ob_Video = new Video();
$datas = $ob_Video->fatchAllVideo();
$student_datas = $ob_Video->student_upload_video();
include_once 'inc/header.php';
?>

    <section id="body_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 leftbar">
                </div>
                <div class="col-lg-6 margin_top">
                    <?php
                    foreach ($datas as $data) {
                        ?>
                        <div class="custom-card">

                            <div class="d-flex justify-content-start d-flex align-items-start">
                                <figure class="title_image">
                                    <img src="../admin/assets/images/admin/<?= $data['onwer_image']; ?>"
                                         class="img-fluid" alt="User Image">
                                </figure>
                                <div class="title_name">
                                    <h4>Admin</h4>
                                    <p><?= $data['time']; ?></p>
                                    <p><?= $data['video_title']; ?></p>
                                    <span><?= $data['video_category'];?></span>
                                    <i><?=$data['sub_video_category'];?></i>
                                </div>
                            </div>
                            <div class="video">
                                <div
                                        class="lazyframe"
                                        data-src="<?=$data['video_url'];?>"
                                        data-vendor="youtube"
                                        data-title="<?= $data['video_title']; ?>"
                                        data-thumbnail="../admin/assets/images/thumbnail_image/<?=$data['thumbnail_image'];?>">
                                </div>
                            </div>

                        </div>
                        <?php
                    }
                    ?>

                    <?php
                    foreach ($student_datas as $student_data) {
                        ?>
                        <div class="custom-card">

                            <div class="d-flex justify-content-start d-flex align-items-start">
                                <figure class="title_image">
                                    <img src="../../resource/uploads/student/<?= $student_data['onwer_image'];?>" class="img-fluid" alt="">
                                </figure>
                                <div class="title_name">
                                    <h4><?= $student_data['onwer_name']; ?></h4>
                                    <p><?= $student_data['time']; ?></p>
                                    <p><?= $student_data['video_title']; ?></p>
                                    <span><?= $student_data['video_category']; ?></span>
                                    <i><?= $student_data['sub_video_category']; ?></i>
                                </div>
                            </div>
                            <div class="video">
                                <div
                                        class="lazyframe"
                                        data-src="<?=$student_data['video_url'];?>"
                                        data-vendor="youtube"
                                        data-title="<?=$student_data['video_title'];?>"
                                        data-thumbnail="assets/image/thumbnail_image/<?=$student_data['thumbnail_image'];?>">
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>
<?php
include_once 'inc/footer.php';
?>