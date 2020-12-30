<?php
    require_once "../../core/init.php";

    $requestedNama  = get('val-nama-jenis-hewan');

    $query = "SELECT * FROM jenis_hewan WHERE nama_jenis_hewan = '$requestedNama'";

    if(mysqli_num_rows(mysqli_query($conn, $query)) > 0){
        echo "false";
    }else{
        echo "true";
    }
