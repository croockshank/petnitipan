<?php
    require_once "../../core/init.php";

    $requestedIdMakanan  = get('val-id-makanan');

    $query = "SELECT jumlah FROM makanan WHERE id_makanan = '$requestedIdMakanan'";

    if(mysqli_num_rows(mysqli_query($conn, $query)) > 0){
        echo "false";
    }else{
        echo "true";
    }
