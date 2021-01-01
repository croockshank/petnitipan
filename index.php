<?php
require_once 'core/init.php';

$id_shelter = get('id-shelter');

$jumlah_kandang = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS jumlah_kandang FROM kandang WHERE id_shelter = '$id_shelter'"))['jumlah_kandang'];
$jumlah_hewan = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS jumlah_hewan FROM hewan WHERE id_shelter = '$id_shelter'"))['jumlah_hewan'];
$jumlah_teradopsi = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS jumlah_teradopsi FROM hewan WHERE status = 1 AND id_shelter = '$id_shelter'"))['jumlah_teradopsi'];
$jumlah_belum_teradopsi = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS jumlah_belum_teradopsi FROM hewan WHERE status = 2 AND id_shelter = '$id_shelter'"))['jumlah_belum_teradopsi'];

$pengadopsian = mysqli_query($conn, "SELECT ph.id_pengadopsi_mengadopsi_hewan, p.nama_pengadopsi, p.email, p.no_telepon, h.foto, h.nama_hewan, ph.tanggal, ph.biaya FROM pengadopsi_mengadopsi_hewan ph INNER JOIN pengadopsi p ON ph.id_pengadopsi = p.id_pengadopsi INNER JOIN hewan h ON ph.id_hewan = h.id_hewan WHERE h.id_shelter = '$id_shelter'");
$aktivitas_perawatan = mysqli_query($conn, "(SELECT h.foto, 'Diberikan makan' AS pesan, CONCAT(m.nama_makanan, ' - ', hm.jumlah, 'gr') AS jumlah, hm.waktu FROM hewan_mendapatkan_makanan hm INNER JOIN hewan h ON hm.id_hewan = h.id_hewan INNER JOIN makanan m ON hm.id_makanan = m.id_makanan WHERE h.status = 1 AND h.id_shelter = '$id_shelter' ORDER BY hm.waktu DESC) UNION (SELECT h.foto, 'Divaksin' AS pesan, CONCAT(v.nama_vaksin, ' - ', hv.jumlah, 'pcs') AS jumlah, hv.waktu FROM hewan_mendapatkan_vaksin hv INNER JOIN hewan h ON hv.id_hewan = h.id_hewan INNER JOIN vaksin v ON hv.id_vaksin = v.id_vaksin WHERE h.status = 1 AND h.id_shelter = '$id_shelter' ORDER BY hv.waktu DESC)");
?>

<?php
include 'templates/header.php';
include 'templates/sidebar.php';
?>

<!--**********************************
        Content body start
    ***********************************-->
<div class="content-body">
    <!-- #/ container -->

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-8">
                        <div class="media">
                            <span class="card-widget__icon"><i class="fas fa-box menu-icon"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title"><?= $jumlah_kandang ?></h2>
                                <h5 class="card-widget__subtitle">Jumlah Kandang</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-2">
                        <div class="media">
                            <span class="card-widget__icon"><i class="fas fa-paw menu-icon"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title"><?= $jumlah_hewan ?></h2>
                                <h5 class="card-widget__subtitle">Jumlah Hewan</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-7">
                        <div class="media">
                            <span class="card-widget__icon"><i class="fas fa-hands menu-icon"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title"><?= $jumlah_teradopsi ?></h2>
                                <h5 class="card-widget__subtitle">Teradopsi</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card card-widget">
                    <div class="card-body gradient-5">
                        <div class="media">
                            <span class="card-widget__icon"><i class="icon-ghost"></i></span>
                            <div class="media-body">
                                <h2 class="card-widget__title"><?= $jumlah_belum_teradopsi ?></h2>
                                <h5 class="card-widget__subtitle">Belum Teradopsi</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title">Pengadopsian</h4>
                        <div class="active-member">
                            <div class="table-responsive">
                                <table class="table table-hover zero-configuration" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Nama Pengadopsi</th>
                                            <th>Email</th>
                                            <th>No Telepon</th>
                                            <th>Nama Hewan</th>
                                            <th>Tanggal</th>
                                            <th>Biaya</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($pengadopsian as $row) {
                                        ?>
                                            <tr>
                                                <td><?= $row['nama_pengadopsi'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td><?= $row['no_telepon'] ?></td>
                                                <td><img src="<?= $row['foto'] ?>" class="rounded-circle img-icon mr-3" alt=""><?= $row['nama_hewan'] ?></td>
                                                <td><?= format_date_only_pretier($row['tanggal']) ?></td>
                                                <td><span class="label gradient-4 rounded"><?= format_rupiah($row['biaya']) ?></span></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-sm-6 col-xxl-6 row">
                <div class="card w-100 h-50">
                    <div class="chart-wrapper mb-4">
                        <div class="px-4 pt-4 d-flex justify-content-between">
                            <div>
                                <h4>Aktivitas Pengadopsian</h4>
                                <p>6 Bulan Terakhir</p>
                            </div>
                        </div>
                        <div class="border-bottom">
                            <canvas id="chart_widget_3"></canvas>
                        </div>
                        <div class="card-body border-top pt-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div>
                                        <h5>Total Pengadopsian</h5>
                                        <h3 id="total-pengadopsian"></h3>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div id="chart_widget_3_1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-100 h-50 mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Aktivitas Perawatan</h4>
                        <div id="activity">
                            <?php
                            foreach ($aktivitas_perawatan as $row) {

                            ?>
                                <div class="media border-bottom-1 pt-3 pb-3">
                                    <img width="36" src="<?= $row['foto'] ?>" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5><?= $row['pesan'] ?></h5>
                                        <p class="mb-0"><?= $row['jumlah'] ?></p>
                                    </div><span class="text-muted "><?= format_date_prettier($row['waktu']) ?></span>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

    <?php
    include 'templates/footer.php'
    ?>