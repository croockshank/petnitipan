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
                                    <tr>
                                        <td> <img src="./images/avatar/1.jpg" class="rounded-circle mr-3" alt=""> Tiger Nixon</td>
                                        <td>Paw</td>
                                        <td>Cage A</td>
                                        <td><img src="./images/avatar/1.jpg" class="rounded-circle mr-3" alt=""> Male</td>
                                        <td>21 Desember 2020</td>
                                        <td><span class="label gradient-4 rounded">Rp 300.000,00</span></td>
                                        <td>
                                            <div class="text-center">
                                                <a href="#"><i class="fas fa-print"></i></a>

                                            </div>
                                        </td>
                                    </tr>
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