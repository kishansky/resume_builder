<?php
include("../config.php");
$html = null;


$sql = "SELECT * FROM titles ORDER BY id DESC";
$result = mysqli_query($conn, $sql) or die("Query Failed");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $des = substr($row['description'], 0, 100);
        $html .= "<div class='col-sm-3 my-2'>
                        <div class='card' aria-hidden='true'>
                            <div style='height:200px;' class='card-img-top'>
                                <img src='resume-photo/".$row['photo']."' style='height: 100%; width:100%;'/>                            
                            </div>
                            <div class='card-body'>
                                <h5 class='card-title'>
                                    <span class='col-6'>".$row['title']."</span>
                                </h5>
                                <p class='card-text'>
                                    "
                                    .substr($row['description'],0,150).
                                    "
                                </p>
                                <div class='placeholder-glow'>

                                    <a href='resume-form.php?id=".$row['id']."' style='width:100%;' class='btn btn-primary '>Create</a>
                                </div>
                            </div>
                        </div>
                    </div>";
    }
}
echo $html;

