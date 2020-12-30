<?php
    require_once "../../core/init.php";

    $requestedUsername  = get('val-username');

    $query = "SELECT * FROM administrator WHERE username = '$requestedUsername'";

    if(mysqli_num_rows(mysqli_query($conn, $query)) > 0){
        echo "false";
    }else{
        echo "true";
    }
