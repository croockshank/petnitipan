<?php
require_once '../../constants/constants.php';
?>

<?php
include '../../templates/header.php';
?>

<!--**********************************
        Content body start
    ***********************************-->
<div>
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="pages/perawatan/pemberian-makan.php">Perawatan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Pengdopsian</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Pengdopsian</h4>
                        <!-- Nav tabs -->
                        <div class="default-tab">
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#pelanggan-lama">Pelanggan Lama</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#pelanggan-baru">Pelanggan Baru</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pelanggan-lama" role="tabpanel">
                                    <div class="form-validation">
                                        <form class="form-valide" action="" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="val-pengadopsi">Nama Pengadopsi<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="val-pengadopsi" name="val-pengadopsi" placeholder="Masukan nama pengadopsi...">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="val-hewan">Nama Hewan<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="val-hewan" name="val-hewan" placeholder="Masukan nama hewan...">
                                                </div>
                                            </div>
                                            <fieldset disabled="disabled">
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="val-biaya-adopsi">Biaya<span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-10">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                            <input type="text" class="form-control" id="val-biaya-adopsi" name="val-biaya-adopsi">
                                                            <div class="input-group-append"><span class="input-group-text">,00</span></div>
                                                        </div>
                                                        <div class="text-info mt-1">Biaya adopsi dihitung dari biaya pemberian makanan dan pemberian vaksin yang sudah dilakukan</div>
                                                    </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-10">
                                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pelanggan-baru" role="tabpanel">
                                    <div class="form-validation">
                                        <form class="form-valide" action="" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="val-nama-pengadopsi">Nama Pengadopsi<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="val-nama-pengadopsi" name="val-nama-pengadopsi" placeholder="Masukan nama pengadopsi...">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="val-email-pengadopsi">Email Pengadopsi<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-10">
                                                    <input type="email" class="form-control" id="val-email-pengadopsi" name="val-email-pengadopsi" placeholder="Masukan email pengadopsi...">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="val-alamat-pengadopsi">Alamat Pengadopsi<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="val-alamat-pengadopsi" name="val-alamat-pengadopsi" placeholder="Masukan alamat pengadopsi...">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="val-no-telepon-pengadopsi">No Telepon<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-10">
                                                    <input type="tel" class="form-control" id="val-no-telepon-pengadopsi" name="val-no-telepon-pengadopsi" placeholder="Masukan nomor telepon pengadopsi...">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label" for="val-nama-hewan">Nama Hewan<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="val-nama-hewan" name="val-nama-hewan" placeholder="Masukan nama hewan...">
                                                </div>
                                            </div>
                                            <fieldset disabled="disabled">
                                                <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label" for="val-biaya-adopsi">Biaya<span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-10">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                            <input type="text" class="form-control" id="val-biaya-adopsi" name="val-biaya-adopsi">
                                                            <div class="input-group-append"><span class="input-group-text">,00</span></div>
                                                        </div>
                                                        <div class="text-info mt-1">Biaya adopsi dihitung dari biaya pemberian makanan dan pemberian vaksin yang sudah dilakukan</div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-10">
                                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                                </div>
                                            </div>
                                        </form>
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