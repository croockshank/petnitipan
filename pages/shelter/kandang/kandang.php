<?php
    require_once '../../../core/init.php';
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
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>2</td>
                                        <td>
                                        <div class="dropdown-button">
                                        <div class="text-center" role="group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="pages/shelter/kandang/edit-kandang.php"><i class="far fa-edit"></i> Ubah</a>
                                                <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Hapus</a>
                                            </div>
                                        </div>
                                        </div>
                                        </td>
                                    </tr>
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