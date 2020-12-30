<?php
    require_once "../../../core/init.php";

    $requestedLuas  = get('val-luas');

    $query = "SELECT * FROM jenis_kandang WHERE luas = '$requestedLuas'";

    if(mysqli_num_rows(mysqli_query($conn, $query)) > 0){
        echo "false";
    }else{
        echo "true";
    }
