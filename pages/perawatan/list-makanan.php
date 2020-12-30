<?php
    require_once "../../core/init.php";

    $id_shelter = get('id-shelter');
    $id_jenis_hewan = get('id-jenis-hewan');
    $query = "SELECT * FROM makanan WHERE id_shelter = '$id_shelter' AND id_jenis_hewan = '$id_jenis_hewan'";
    $result = mysqli_query($conn, $query);

    $makanan = array();

    foreach($result as $row){
        array_push($makanan, array(
                "id" => $row['id_makanan'],
                "label" => $row['nama_makanan'],
                "jumlah" => $row['jumlah']
            )
        );
    }

    echo json_encode($makanan);
?>