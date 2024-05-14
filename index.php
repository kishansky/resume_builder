<?php
include("header.php");
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
    <div class="row " id="resume-list">
        <?php
        for ($i = 0; $i < 8; $i++) {
            $rand1 = rand(6, 11);
            $rand2 = rand(8, 11);
            $rand3 = rand(4, 6);
            $rand4 = rand(3, 5);
            $rand5 = rand(6, 11);
            $rand6 = rand(8, 12);

            ?>
            <div class="col-sm-3 my-2">
                <div class="card <?php echo $skelton; ?>" aria-hidden="true">
                    <div style="height:200px;" class="placeholder card-img-top"></div>
                    <div class="card-body">
                        <h5 class="card-title <?php echo $skelton; ?>">
                            <span class="placeholder col-<?php echo $rand1; ?>"></span>
                        </h5>
                        <p class="card-text <?php echo $skelton; ?>">
                            <span class="placeholder col-<?php echo $rand2; ?>"></span>
                            <span class="placeholder col-<?php echo $rand3; ?>"></span>
                            <span class="placeholder col-<?php echo $rand4; ?>"></span>
                            <span class="placeholder col-<?php echo $rand5; ?>"></span>
                            <span class="placeholder col-<?php echo $rand6; ?>"></span>
                        </p>
                        <div class="<?php echo $skelton; ?>">

                            <div style="width:100%;height:35px;" class="rounded  placeholder col-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <script src="./js/jquery.js"></script>
    <script>
        function loadMore(start) {
            $.ajax({
                url: 'load/load-resume-list.php',
                type: 'POST',
                success: function (result) {
                    jQuery('#resume-list').html(result);
                }
            });
        }
        // function loadMore1(start) {
        //     $.ajax({
        //         url: 'load/load-resume-list.php',
        //         data: 'start=' + start,
        //         type: 'POST',
        //         success: function (result) {
        //             jQuery('#resume-list').append(result);
        //             load_flag += 2;
        //         }
        //     });
        // }
        setTimeout(() => {
            $.ajax({
                url: "load/load-heading.php",
                type: "POST",
                success: function (data) {
                    $("#heading").html(data);
                }

            });
        }, 2000);
        setTimeout(() => {
            loadMore();
        }, 2500);
        // jQuery(document).ready(function () {
        //     jQuery(window).scroll(function () {
        //         if (jQuery(window).scrollTop() >= jQuery(document).height() - jQuery(window).height() - 200) {
        //             loadMore1(load_flag);
        //         }
        //     });
        // });




    </script>
    <?php
    include("footer.php");
    ?>