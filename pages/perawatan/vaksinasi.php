<?php
    require_once '../../constants/constants.php';
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Vaksinasi</a></li>
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
                                <h4 class="card-title">Vaksinasi</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="pages/perawatan/tambah-vaksinasi.php" class="btn mb-1 btn-primary">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover zero-configuration" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama Hewan</th>
                                        <th>Jenis</th>
                                        <th>Kandang</th>
                                        <th>Nama Vaksin</th>
                                        <th>Jumlah</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> <img src="./images/avatar/1.jpg" class="rounded-circle mr-3" alt=""> Tiger Nixon</td>
                                        <td><i class="fas fa-paw mr-1"></i>Paw</td>
                                        <td>Cage A</td>
                                        <td>Male</td>
                                        <td><span class="label gradient-3 rounded">3</span></td>
                                        <td>
                                        <div class="dropdown-button">
                                        <div class="text-center" role="group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="pages/perawatan/edit-vaksinasi.php"><i class="far fa-edit"></i> Ubah</a>
                                                <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Hapus</a>
                                            </div>
                                        </div>
                                        </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Hewan</th>
                                        <th>Jenis</th>
                                        <th>Kandang</th>
                                        <th>Nama Vaksin</th>
                                        <th>Jumlah</th>
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