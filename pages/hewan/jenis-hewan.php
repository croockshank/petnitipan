<?php
    require_once '../../core/init.php';

    $result = mysqli_query($conn,"SELECT * FROM jenis_hewan");
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Jenis Hewan</a></li>
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
                                <h4 class="card-title">Jenis Hewan</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="pages/hewan/tambah-jenis-hewan.php" class="btn mb-1 btn-primary">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($result as $row){
                                ?>
                                    <tr>
                                        <td><i class="rounded-circle mr-3 <?=$row['icon']?>" alt=""></i><?=$row['nama_jenis_hewan']?></td>
                                        <td>
                                            <div class="dropdown-button">
                                                <div class="text-center" role="group">
                                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="pages/hewan/edit-jenis-hewan.php?id=<?=$row['id_jenis_hewan']?>"><i class="far fa-edit"></i> Ubah</a>
                                                        <a class="dropdown-item" href="pages/hewan/jenis-hewan.php?id=<?=$row['id_jenis_hewan']?>"><i class="far fa-trash-alt"></i> Hapus</a>
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
        $id_jenis_hewan = get('id');
        swal('confirmation', 'Hewan dan kebutuhan yang terdaftar akan ikut terhapus', 'pages/hewan/jenis-hewan.php?id=' . $id_jenis_hewan .'&delete');
    }else if(is_param_exist('id') && is_param_exist('delete')){
        $id_jenis_hewan = get('id');

        $query = "DELETE FROM jenis_hewan WHERE id_jenis_hewan = $id_jenis_hewan";
        $exe = mysqli_query($conn,$query);
    
        if ($exe) {
            swal('success', 'Jenis Hewan berhasil dihapus!', 'pages/hewan/jenis-hewan.php');
        } else {
            swal('error', '', '');
        }
    }
?>