<?php
session_start();
if (isset($_SESSION['photo'])) {
    $photo = $_SESSION['photo'];
} else {
    $photo = "default.jpg";
}
// include "config.php";
// if(!isset($_SESSION["user_name"])){
//     header("Location:{$hostname}/admin/index.php");
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <link rel="shortcut icon" href="resume.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        @page {
            margin: 2px 6px;
        }

        .patient-label {
            color: #000;
            font-size: 13px;
            padding-left: 20px;
        }

        .patient-data {
            color: #000;
            font-size: 13px;
        }
    </style>
</head>

<body>

    <!--startprint-->
    <div id="printarea" style="width: 210mm; height: 276mm;">
        <div id="header" class="mx-5 my-4 ">
            <div class="row my-4">
                <div class="col-4" style="height: 50mm;">
                    <img src="photo/<?php echo $photo; ?>" alt="" style="height: 100%; width:auto;" class="rounded-circle ">

                </div>
                <div class="col-8">
                    <h3 class="text-info fw-bold "><?php echo ucwords($_POST['name']); ?></h3>
                    <p class="p-0 m-0 fs-5"><span class="material-icons md-18">email</span> <?php echo $_POST['email']; ?></p>
                    <p class="p-0 m-0 fs-5"><span class="material-icons md-18">call</span> <?php echo $_POST['phone']; ?></p>
                    <p class="p-0 m-0 fs-5"><span class="material-icons md-18">home</span> <?php echo ucfirst($_POST['address']); ?></p>
                    <p class="p-0 m-0 fs-5"><span class="material-icons md-18">event</span> <?php echo $_POST['dob']; ?></p>
                </div>

            </div>
            <hr class="border-info  p-0 m-1" />
            <div class="row">
                <div class="col-12 ">
                    <h4 class="text-info fw-bold p-0 m-0 text-center "><span class="material-icons md-18">work</span> Professional Experience</h4>
                </div>
            </div>
            <hr class="border-info p-0 m-1" />
            <div class="row my-4">
                <div class="col-12 ">
                    <p class="p-0 m-0 fs-5"><?php echo $_POST['professional_details']; ?></p>
                </div>
            </div>
            <hr class="border-info  p-0 m-1" />
            <div class="row">
                <div class="col-12 ">
                    <h4 class="text-info fw-bold p-0 m-0 text-center "><span class="material-icons md-18">school</span> Education</h4>
                </div>
            </div>
            <hr class="border-info p-0 m-1" />
            <div class="row my-4">
                <ul>
                    <li><?php echo $_POST['eduction1']; ?></li>
                    <li><?php echo $_POST['eduction2']; ?></li>
                    <li><?php echo $_POST['eduction3']; ?></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-6 py-1">
                    <hr class="border-info  p-0 m-1" />
                    <div class="row">
                        <div class="col-12 ">
                            <h4 class="text-info fw-bold p-0 m-0 text-center "><span class="material-icons md-18">language</span> Languages</h4>
                        </div>
                    </div>
                    <hr class="border-info p-0 m-1" />
                </div>
                <div class="col-6 py-1">
                    <hr class="border-info  p-0 m-1" />
                    <div class="row">
                        <div class="col-12 ">
                            <h4 class="text-info fw-bold p-0 m-0 text-center "><span class="material-icons md-18">work</span> Skills</h4>
                        </div>
                    </div>
                    <hr class="border-info p-0 m-1" />
                </div>
            </div>
            <div class="row">
                <div class="col-6 py-1">
                    <p class="p-0 m-0 fs-5"><?php echo $_POST['language']; ?></p>

                </div>
                <div class="col-6 py-1">
                    <p class="p-0 m-0 fs-5"><?php echo $_POST['others']; ?></p>

                </div>
            </div>

        </div>
        <hr class="border-info  p-0 m-1" />
        <div class="row">
            <div class="col-12 ">
                <h4 class="text-info fw-bold p-0 m-0 text-center "><span class="material-icons md-18"></span> Others</h4>
            </div>
        </div>
        <hr class="border-info p-0 m-1" />
        <div class="row my-4">
            <div class="col-12 ">
                <p class="p-0 m-0 fs-5"><?php echo $_POST['professional_details']; ?></p>
            </div>
        </div>


    </div>

    <!--endprint-->
    <div class="row">
        <div class="col-6 mt-5">
            <button style="float: right;" class="btn btn-info" type="submit" onclick="doPrint()">Print</button>

        </div>
    </div>
    <script>
        function doPrint() {
            bdhtml = window.document.body.innerHTML;
            sprnstr = "<!--startprint-->";
            eprnstr = "<!--endprint-->";
            prnhtml = bdhtml.substr(bdhtml.indexOf(sprnstr) + 17);
            prnhtml = prnhtml.substring(0, prnhtml.indexOf(eprnstr));
            window.document.body.innerHTML = prnhtml;
            window.print();
            window.document.body.innerHTML = bdhtml;
        }
    </script>


</body>

</html>