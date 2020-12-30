<?php
    require_once "../../core/init.php";

    $id_shelter = get('id-shelter');
    $id_jenis_hewan = get('id-jenis-hewan');
    $query = "SELECT * FROM vaksin WHERE id_shelter = '$id_shelter' AND id_jenis_hewan = '$id_jenis_hewan'";
    $result = mysqli_query($conn, $query);

    $vaksin = array();

    foreach($result as $row){
        array_push($vaksin, array(
                "id" => $row['id_vaksin'],
                "label" => $row['nama_vaksin'],
                "jumlah" => $row['jumlah']
            )
        );
    }

    echo json_encode($vaksin);
?>