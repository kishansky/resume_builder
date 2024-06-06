<?php
include('header.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 1;
}
?>
<div class="container">
    <div style="height: auto;margin-left:auto;" id="heading">
        <div class="row <?php echo $skelton; ?> mt-2 m-1 ">
            <div class="col-3 align-content-center ">
                <div style="height: 60px;width:60px;" class="placeholder border rounded  ">

                </div>
            </div>
            <div class=" col-9  ">
                <div class="row m-1 ">
                    <div style="height: 30px;" class="col-12 placeholder">

                    </div>
                    <div style="height: 18px;" class="my-1 offset-3 col-6 placeholder">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Image</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <p>Please Choose Passport size photo...</p>
                    <form action="<?php
                                    $_SERVER['PHP_SELF'];
                                    ?>" method="POST" enctype="multipart/form-data">
                        <input class="w-100 rounded-2 border border-1 form-control" type="file" name="photo" required>
                        <button type="submit" value="<?php echo $id; ?>" name="id" class="btn btn-info ">Upload</button>
                    </form>

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <?php
    session_start();
    if (isset($_POST['id'])) {
        if (isset($_FILES['photo'])) {
            $random = rand(1, 999);
            $file_name = $_FILES['photo']['name'];
            $file_size = $_FILES['photo']['size'];
            $file_tmp = $_FILES['photo']['tmp_name'];
            $file_type = $_FILES['photo']['type'];
            $exp = explode('.', $file_name);
            $file_ext = end($exp);
            $extension = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $extension) === false) {
                $error[] = "<script>alert('This extension file are not allowed, Please choose a JPG or PNG file.')</script>";
            }
            if ($file_size > 125829120) {
                $error[] = "<script>alert('File size must be 10mb or lower.')</script>";
            }
            $target = time() . "-" . $random . ".jpg";
            if (empty($error) == true) {
                if (move_uploaded_file($file_tmp, "photo/" . $target)) {
                    $_SESSION['photo'] = $target;
                    echo "<script>window.location.href='resume-form.php?id=" . $_POST['id'] . "'</script>";
                }
            }
        } else {
            echo "error ";
        }
    }


    ?>
    <div class="row">
        <div id="resume-form" class="col-sm-4 offset-sm-4 p-2">
            <div class="card <?php echo $skelton; ?>" aria-hidden="true">
                <div class="card-header ">
                    <div style="height: 25px;" class="placeholder col-4 offset-4 "></div>
                </div>
                <div class="card-body <?php echo $skelton; ?>">
                <div class="card-title h-100 d-flex flex-column  align-items-center justify-content-center">
                            <span class="placeholder " style="height:100px;width: 100px; align-content: center; margin:5px;"></span>
                            <div style="height: 25px;" class="placeholder col-12"></div>
                        </div>
                    <?php
                    for ($i = 0; $i < 9; $i++) {
                    ?>
                        <div class="card-title">
                            <span class="placeholder col-5"></span>
                            <div style="height: 25px;" class="placeholder col-12"></div>
                        </div>
                    <?php
                    }

                    ?>

                </div>
                <div class="card-footer ">
                    <div style="height: 35px;" class="placeholder col-12 bg-info "></div>
                </div>

            </div>
        </div>
    </div>
    <script src="./js/jquery.js"></script>
    <script>
        let id = '3';
        console.log(id);
        <?php
            if(isset($_GET['id'])){
                ?>
                id= '<?php
                 echo $_GET['id'];
                 ?>';
                <?php

            }
        ?>
        function saveImage() {
            let photo = document.getElementById('photo').files[0];
            // console.log(photo);

        }
        // let load_flag = 0;
        function loadMore() {
            console.log('ggnt');
            $.ajax({
                url: 'load/load-resume-form.php',
                // data: 'start=' + start,
                data: {id:id},
                type: 'POST',
                success: function(result) {
                    jQuery('#resume-form').html(result);
                    // load_flag += 1;
                }
            });
        }
        setTimeout(() => {
            $.ajax({
                url: "load/load-heading.php",
                type: "POST",
                success: function(data) {
                    $("#heading").html(data);
                }

            });
        }, 2000);
        setTimeout(() => {
            loadMore();
        }, 2300);
        //
    </script>
    <?php
    include('footer.php');
    ?>