<?php
    require_once "../../core/init.php";

    $id_shelter = get('id-shelter');
    $query = "SELECT COALESCE(dt.jumlah, 0) AS jumlah, MONTHNAME(am.date) AS bulan FROM( SELECT COUNT(ph.id_pengadopsi_mengadopsi_hewan) AS jumlah, ph.tanggal FROM pengadopsi_mengadopsi_hewan ph INNER JOIN hewan h ON ph.id_hewan = h.id_hewan INNER JOIN shelter s ON h.id_shelter = s.id_shelter WHERE s.id_shelter = '$id_shelter' ) dt RIGHT JOIN all_months am ON MONTH(am.date) = MONTH(dt.tanggal) WHERE am.date BETWEEN CURDATE() - INTERVAL 6 MONTH AND CURDATE() ORDER BY am.date DESC";
    $result = mysqli_query($conn, $query);

    $aktivitas = array();
    $bulan = array();
    $jumlah = array();

    foreach($result as $row){
        array_push($bulan, $row['bulan']);
        array_push($jumlah, $row['jumlah']);
    }

    $aktivitas = array(
        "bulan" => $bulan,
        "jumlah" => $jumlah,
    );

    echo json_encode($aktivitas);
?>