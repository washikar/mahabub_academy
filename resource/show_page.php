<?php
include 'inc/header.php';
include_once 'inc/navbar.php';
use App\classes\Video as Video;

$info=explode(',',$_GET['info']);
//$video_category='Art';
$video_category=$info[0];
$sub_video_category=$info[1];
$page_title=$info[2];

?>


<!-- ==========  Header Part HTML ends ========== -->
<section id="prim">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
<!--                <h2>অঙ্কন</h2>-->
                <h2><?=$page_title?></h2>
            </div>
            <?php
            $ob_video=new Video();
            $data=$ob_video->fatchVideo($video_category,$sub_video_category);
            ?>
            <div class="col-md-6 sub_left">              
                <ul >
                    <li class="embed-responsive embed-responsive-16by9">
                        <?php
                        if(is_null($data)){
                            echo "Video is not upload but Don't worry as soon as possible Video is coming soon.";
                            die();
                        }
                        else{
                        foreach ($data as $data) {


                            ?>
                            <div
                                    class="lazyframe"
                                    data-src="<?=$data['video_url'];?>"
                                    data-vendor="youtube"
                                    data-title="<?=$data['video_title'];?>"
                                    data-thumbnail="../backend/admin/assets/images/thumbnail_image/<?=$data['thumbnail_image'];?>">
                            </div>
                            <?php
                        }
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
include 'inc/footer.php';
?>
