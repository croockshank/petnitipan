<?php
    require_once '../../core/init.php';

    $id_shelter = get('id-shelter');
    $result = mysqli_query($conn,"SELECT * FROM administrator WHERE id_shelter = '$id_shelter'");
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Administrator</a></li>
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
                                <h4 class="card-title">Administrator</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="pages/shelter/tambah-administrator.php" class="btn mb-1 btn-primary">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($result as $row){
                                ?>
                                    <tr>
                                        <td><?=$row['nama']?></td>
                                        <td><?=$row['username']?></td>
                                        <td>
                                        <div class="dropdown-button">
                                        <div class="text-center" role="group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="pages/shelter/edit-administrator.php?id=<?=$row['id_administrator']?>"><i class="far fa-edit"></i> Edit</a>
                                                <a class="dropdown-item" href="pages/shelter/administrator.php?id=<?=$row['id_administrator']?>"><i class="far fa-trash-alt"></i> Hapus</a>
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
                                        <th>Username</th>
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
        $id_administrator = get('id');
        swal('confirmation', 'Administrator ini akan terhapus', 'pages/shelter/administrator.php?id=' . $id_administrator .'&delete');
    }else if(is_param_exist('id') && is_param_exist('delete')){
        $id_administrator = get('id');

        $query = "DELETE FROM administrator WHERE id_administrator = $id_administrator";
        $exe = mysqli_query($conn,$query);
    
        if ($exe) {
            swal('success', 'Administrator berhasil dihapus!', 'pages/shelter/administrator.php');
        } else {
            swal('error', '', '');
        }
    }
?>