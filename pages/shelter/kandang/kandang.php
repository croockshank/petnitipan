<?php
    require_once '../../../core/init.php';

    $result = mysqli_query($conn, "SELECT k.id_kandang, k.nama_kandang, jk.luas FROM kandang k INNER JOIN jenis_kandang jk ON k.id_jenis_kandang = jk.id_jenis_kandang");
?>

<?php
    include '../../../templates/header.php';
    include '../../../templates/sidebar.php';
?>

<!--**********************************
        Content body start
    ***********************************-->
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Kandang</a></li>
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
                                <h4 class="card-title">Kandang</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="pages/shelter/kandang/tambah-kandang.php" class="btn mb-1 btn-primary">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Luas(m<sup>2</sup>)</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($result as $row){
                                ?>
                                        <tr>
                                            <td><?= $row['nama_kandang'] ?></td>
                                            <td><?= $row['luas'] ?></td>
                                            <td>
                                            <div class="dropdown-button">
                                            <div class="text-center" role="group">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="pages/shelter/kandang/edit-kandang.php?id=<?=$row['id_kandang']?>"><i class="far fa-edit"></i> Ubah</a>
                                                    <a class="dropdown-item" href="pages/shelter/kandang/kandang.php?id=<?=$row['id_kandang']?>"><i class="far fa-trash-alt"></i> Hapus</a>
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
                                        <th>Luas(m<sup>2</sup>)</th>
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
    include '../../../templates/footer.php';
?>

<?php
    if(is_param_exist('id') && !is_param_exist('delete')){
        $id_kandang = get('id');
        swal('confirmation', 'Semua hewan yang tercatat dalam kandang ini akan ikut terhapus', 'pages/shelter/kandang/kandang.php?id=' . $id_kandang .'&delete');
    }else if(is_param_exist('id') && is_param_exist('delete')){
        $id_kandang = get('id');

        $query = "DELETE FROM kandang WHERE id_kandang = $id_kandang";
        $exe = mysqli_query($conn,$query);
    
        if ($exe) {
            swal('success', 'Kandang berhasil dihapus!', 'pages/shelter/kandang/kandang.php');
        } else {
            swal('error', '', '');
        }
    }
?>