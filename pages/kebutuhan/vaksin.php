<?php
    require_once '../../core/init.php';

    $id_shelter = get('id-shelter');
    $result = mysqli_query($conn, "SELECT v.id_vaksin, v.nama_vaksin, (COALESCE(SUM(hv.jumlah), 0) + v.jumlah) AS total_jumlah, v.jumlah AS jumlah_tersisa, (100 - (((COALESCE(SUM(hv.jumlah), 0)+ v.jumlah) - v.jumlah) / v.jumlah) * 100) AS presentase, v.harga_satuan, jh.icon, jh.nama_jenis_hewan FROM vaksin v LEFT OUTER JOIN hewan_mendapatkan_vaksin hv ON v.id_vaksin = hv.id_vaksin INNER JOIN jenis_hewan jh ON v.id_jenis_hewan = jh.id_jenis_hewan WHERE v.id_shelter = '$id_shelter' GROUP BY hv.id_hewan");
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Vaksin</a></li>
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
                                <h4 class="card-title">Vaksin</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="pages/kebutuhan/tambah-vaksin.php" class="btn mb-1 btn-secondary">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th>Harga Satuan(Rp)</th>
                                        <th>Untuk Jenis Hewan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($result as $row){
                                ?>
                                    <tr>
                                        <td><?=$row['nama_vaksin']?></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-4 align-self-center">
                                                    <?=number_separator($row['jumlah_tersisa'])?>/<?=number_separator($row['total_jumlah'])?>
                                                </div>
                                                <div class="col-5 align-self-center mt-1">
                                                    <div>
                                                        <div class="progress" style="height: 6px">
                                                            <div class="progress-bar bg-warning" style="width: <?=$row['presentase']?>%"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?=number_separator($row['harga_satuan'])?></td>
                                        <td> <i class="<?=$row['icon']?> mr-1"></i> <?=$row['nama_jenis_hewan']?></td>
                                        <td>
                                            <div class="dropdown-button">
                                                <div class="text-center" role="group">
                                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="pages/kebutuhan/edit-vaksin.php?id=<?=$row['id_vaksin']?>"><i class="far fa-edit"></i> Edit</a>
                                                        <a class="dropdown-item" href="pages/kebutuhan/vaksin.php?id=<?=$row['id_vaksin']?>"><i class="far fa-trash-alt"></i> Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Jumlah</th>
                                        <th>Harga Satuan(Rp)</th>
                                        <th>Untuk Jenis Hewan</th>
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

<?php
    if(is_param_exist('id') && !is_param_exist('delete')){
        $id_vaksin = get('id');
        swal('confirmation', 'Perawatan(data vaksinasi) tentang hewan ini akan ikut terhapus', 'pages/kebutuhan/vaksin.php?id=' . $id_vaksin .'&delete');
    }else if(is_param_exist('id') && is_param_exist('delete')){
        $id_vaksin = get('id');

        $query = "DELETE FROM vaksin WHERE id_vaksin = $id_vaksin";
        $exe = mysqli_query($conn,$query);
    
        if ($exe) {
            swal('success', 'Vaksin berhasil dihapus!', 'pages/kebutuhan/vaksin.php');
        } else {
            swal('error', '', '');
        }
    }
?>