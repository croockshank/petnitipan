<?php
    require_once "../../core/init.php";

    $id_shelter = get('id-shelter');
    $query = "SELECT id_hewan, id_jenis_hewan, nama_hewan, ROUND(SUM(biaya), -4) AS biaya_adopsi FROM ((SELECT h.id_hewan, h.id_jenis_hewan, h.nama_hewan, (SUM(hm.jumlah) * m.harga_satuan) AS biaya FROM hewan_mendapatkan_makanan hm INNER JOIN hewan h ON hm.id_hewan = h.id_hewan INNER JOIN makanan m ON hm.id_makanan = m.id_makanan WHERE h.id_shelter = '$id_shelter' AND h.status = 1) UNION (SELECT h.id_hewan, h.id_jenis_hewan, h.nama_hewan, (SUM(hv.jumlah) * v.harga_satuan) AS biaya FROM hewan_mendapatkan_vaksin hv INNER JOIN hewan h ON hv.id_hewan = h.id_hewan INNER JOIN vaksin v ON hv.id_vaksin = v.id_vaksin WHERE h.id_shelter = '$id_shelter' AND h.status = 1)) u";
    $result = mysqli_query($conn, $query);

    $hewan = array();

    foreach($result as $row){
        array_push($hewan, array(
                "id" => $row['id_hewan'],
                "id_jenis_hewan" => $row['id_jenis_hewan'],
                "biaya_adopsi" => $row['biaya_adopsi'],
                "label" => $row['nama_hewan']
            )
        );
    }

    echo json_encode($hewan);
?>