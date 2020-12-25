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
                                <a href="pages/hewan/tambah-hewan.php" class="btn mb-1 btn-primary">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>
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
                                                <tr>
                                                    <td> <img src="./images/avatar/1.jpg" class="rounded-circle mr-3" alt=""> Tiger Nixon</td>
                                                    <td><i class="fas fa-paw mr-1"></i>Paw</td>
                                                    <td>Cage A</td>
                                                    <td>Male</td>
                                                    <td>80</td>
                                                    <td>3</td>
                                                    <td><span class="label gradient-1 rounded">Baru</span></td>
                                                    <td>
                                                        <div class="dropdown-button">
                                                            <div class="text-center" role="group">
                                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="pages/hewan/edit-hewan.php"><i class="far fa-edit"></i> Ubah</a>
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
                                                <tr>
                                                    <td><img src="./images/avatar/2.jpg" class="rounded-circle mr-3" alt=""> Tiger Nixon</td>
                                                    <td> <i class="fas fa-paw mr-1"></i> Paw</td>
                                                    <td>Cage A</td>
                                                    <td>Male</td>
                                                    <td>80</td>
                                                    <td>3</td>
                                                    <td><span class="label gradient-2 rounded">Teradopsi</span></td>
                                                </tr>
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