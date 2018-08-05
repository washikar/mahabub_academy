<?php
include_once '../admin/inc/session.php';

use App\classes\Video as Video;
use App\classes\VideoCatagory as VideoCatagory;
use App\classes\Search as search;

//search all
if (!empty($_POST['search'])) {
    $search = $_POST['search'];
    $ob_search = new search();
//search
    $datas = $ob_search->search($search);

}

include_once 'inc/header.php';
?>
    <section id="body_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 table-info>">
                    <div class="table-responsive">
                        <table class="table margin_top table-bordered table-info">
                            <?php
                            if (!empty($datas)) {
                                echo "<h5 class='text-danger'>","Search Result is",$search,"</h5>";
                                foreach ($datas as $data) {

                                    ?>

                                    <tr>
                                        <td class="text-center" colspan="2"><img
                                                    src="../../resource/uploads/student/<?= $data['image']; ?>"
                                                    alt="<?= $data['image']; ?>" class="img-fluid" width="200"></td>
                                    <tr>
                                        <td>First Name</td>
                                        <td><?= $data['fname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td><?= $data['lname']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td><?= $data['gender']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mail</td>
                                        <td><?= $data['email']; ?></td>
                                    </tr>

                                    </tr>
                                    <?php
                                }
                            }
                            else{
                                echo "<h5 class='text-danger'>","Search Result Not Found","</h5>";
                            }?>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
<?php
include_once 'inc/footer.php';
?>