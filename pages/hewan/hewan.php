<?php
    require_once '../../core/init.php';

    $result_belum_teradopsi = mysqli_query($conn, "SELECT h.id_hewan, h.foto, h.nama_hewan, jh.nama_jenis_hewan, jh.icon, k.nama_kandang, h.jenis_kelamin, h.panjang, h.berat, h.status FROM hewan h INNER JOIN jenis_hewan jh ON jh.id_jenis_hewan = h.id_jenis_hewan INNER JOIN kandang k ON k.id_kandang = h.id_kandang WHERE h.status = 1");
    $result_teradopsi = mysqli_query($conn, "SELECT h.id_hewan, h.foto, h.nama_hewan, jh.nama_jenis_hewan, jh.icon, k.nama_kandang, h.jenis_kelamin, h.panjang, h.berat, h.status FROM hewan h INNER JOIN jenis_hewan jh ON jh.id_jenis_hewan = h.id_jenis_hewan INNER JOIN kandang k ON k.id_kandang = h.id_kandang WHERE h.status = 2");
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Hewan</a></li>
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
                                <h4 class="card-title">Hewan</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="pages/hewan/tambah-hewan.php" class="btn mb-1 btn-secondary">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <div class="default-tab">
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Belum Teradopsi</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Teradopsi</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="home" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Jenis</th>
                                                    <th>Kandang</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Panjang(cm)</th>
                                                    <th>Berat(kg)</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                foreach($result_belum_teradopsi as $row){
                                            ?>
                                                    <tr>
                                                        <td> <img src="<?=$row['foto']?>" class="rounded-circle img-icon mr-3" alt=""><?=$row['nama_hewan']?></td>
                                                        <td><i class="<?=$row['icon']?> mr-3"></i><?=$row['nama_jenis_hewan']?></td>
                                                        <td><?=$row['nama_kandang']?></td>
                                                        <td><?=$row['jenis_kelamin']?></td>
                                                        <td><?=$row['panjang']?></td>
                                                        <td><?=$row['berat']?></td>
                                                        <td><span class="label gradient-1 rounded">Belum Teradopsi</span></td>
                                                        <td>
                                                            <div class="dropdown-button">
                                                                <div class="text-center" role="group">
                                                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="pages/hewan/edit-hewan.php?id=<?=$row['id_hewan']?>"><i class="far fa-edit"></i> Ubah</a>
                                                                        <a class="dropdown-item" href="pages/hewan/hewan.php?id=<?=$row['id_hewan']?>"><i class="far fa-trash-alt"></i> Hapus</a>
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
                                                    <th>Jenis</th>
                                                    <th>Kandang</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Panjang(cm)</th>
                                                    <th>Berat(kg)</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile">
                                    <div class="table-responsive">
                                        <table class="table table-hover zero-configuration" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Jenis</th>
                                                    <th>Kandang</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Panjang(cm)</th>
                                                    <th>Berat(kg)</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                foreach($result_teradopsi as $row){
                                            ?>
                                                    <tr>
                                                        <td> <img src="<?=$row['foto']?>" class="rounded-circle img-icon mr-3" alt=""><?=$row['nama_hewan']?></td>
                                                        <td><i class="<?=$row['icon']?> mr-3"></i><?=$row['nama_jenis_hewan']?></td>
                                                        <td><?=$row['nama_kandang']?></td>
                                                        <td><?=$row['jenis_kelamin']?></td>
                                                        <td><?=$row['panjang']?></td>
                                                        <td><?=$row['berat']?></td>
                                                        <td><span class="label gradient-2 rounded">Teradopsi</span></td>
                                                        <td>
                                                            <div class="dropdown-button">
                                                                <div class="text-center" role="group">
                                                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="pages/hewan/edit-hewan.php?id=<?=$row['id_hewan']?>"><i class="far fa-edit"></i> Ubah</a>
                                                                    <a class="dropdown-item" href="pages/hewan/hewan.php?id=<?=$row['id_hewan']?>"><i class="far fa-trash-alt"></i> Hapus</a>
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
                                                    <th>Jenis</th>
                                                    <th>Kandang</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Panjang(cm)</th>
                                                    <th>Berat(kg)</th>
                                                    <th>Status</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
        $id_hewan = get('id');
        swal('confirmation', 'Kebutuhan, perawatan, dan pengadopsian tentang hewan ini akan ikut terhapus', 'pages/hewan/hewan.php?id=' . $id_hewan .'&delete');
    }else if(is_param_exist('id') && is_param_exist('delete')){
        $id_hewan = get('id');

        $query = "DELETE FROM hewan WHERE id_hewan = $id_hewan";
        $exe = mysqli_query($conn,$query);
    
        if ($exe) {
            swal('success', 'Hewan berhasil dihapus!', 'pages/hewan/hewan.php');
        } else {
            swal('error', '', '');
        }
    }
?>