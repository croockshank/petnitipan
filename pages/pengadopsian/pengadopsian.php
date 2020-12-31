<?php
    require_once '../../core/init.php';

    $id_shelter = get('id-shelter');
    $result = mysqli_query($conn, "SELECT ph.id_pengadopsi_mengadopsi_hewan, p.nama_pengadopsi, p.email, p.no_telepon, h.foto, h.nama_hewan, ph.tanggal, ph.biaya FROM pengadopsi_mengadopsi_hewan ph INNER JOIN pengadopsi p ON ph.id_pengadopsi = p.id_pengadopsi INNER JOIN hewan h ON ph.id_hewan = h.id_hewan WHERE h.id_shelter = '$id_shelter'");
?>

<?php
    include '../../templates/header.php';
    include '../../templates/sidebar.php';
?>

<!--**********************************
        Content body start
    ***********************************-->
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Pengadopsian</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 align-self-center">
                                <h4 class="card-title">Pengadopsian</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="pages/pengadopsian/tambah-pengadopsian.php" class="btn mb-1 btn-primary">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>
                            </div>
                        </div>
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
                                    foreach($result as $row){
                                ?>                                       
                                    <tr>
                                        <td><?=$row['nama_pengadopsi']?></td>
                                        <td><?=$row['email']?></td>
                                        <td><?=$row['no_telepon']?></td>
                                        <td><img src="<?=$row['foto']?>" class="rounded-circle mr-3" alt=""><?=$row['nama_hewan']?></td>
                                        <td><?=format_date_only_pretier($row['tanggal'])?></td>
                                        <td><span class="label gradient-4 rounded"><?=format_rupiah($row['biaya'])?></span></td>
                                        <td>
                                            <div class="text-center">
                                                <a href="#"><i class="fas fa-print"></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>                                     
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Pengadopsi</th>
                                        <th>Email</th>
                                        <th>No Telepon</th>
                                        <th>Nama Hewan</th>
                                        <th>Tanggal</th>
                                        <th>Biaya</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************
        Content body end
    ***********************************-->

<?php
    include '../../templates/footer.php';
?>