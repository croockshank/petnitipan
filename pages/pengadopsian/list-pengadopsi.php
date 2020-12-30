<?php
    require_once "../../core/init.php";

    $query = "SELECT * FROM pengadopsi";
    $result = mysqli_query($conn, $query);

    $pengadopsi = array();

    foreach($result as $row){
        array_push($pengadopsi, array(
                "id" => $row['id_pengadopsi'],
                "label" => $row['nama_pengadopsi']
            )
        );
    }

    echo json_encode($pengadopsi);
?>