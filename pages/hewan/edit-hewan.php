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
                <li class="breadcrumb-item active"><a href="pages/hewan/hewan.php">Hewan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Hewan</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ubah Hewan</h4>
                        <div class="form-validation">
                            <form class="form-valide" name="jenis-kandang" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-hewan">Nama<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-hewan" name="val-nama-hewan" placeholder="Masukan nama...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jenis-hewan">Jenis<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <select class="form-control" id="val-jenis-hewan" name="val-jenis-hewan">
                                            <option value="">Pilih Jenis Hewan</option>
                                            <option value="html">HTML</option>
                                            <option value="css">CSS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-kandang">Kandang<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <select class="form-control" id="val-kandang" name="val-kandang">
                                            <option value="">Pilih Kandang</option>
                                            <option value="html">HTML</option>
                                            <option value="css">CSS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jenis-kelamin">Jenis Kelamin<span class="text-danger">*</span>
                                    </label>
                                    <label class="radio-inline mr-3 ml-3">
                                        <input type="radio" name="val-jenis-kelamin" checked> Laki-laki</label>
                                    <label class="radio-inline mr-3">
                                        <input type="radio" name="val-jenis-kelamin"> Perempuan</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-panjang-hewan">Panjang<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="val-panjang-hewan" name="val-panjang-hewan" placeholder="Masukan panjang...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-berat-hewan">Berat<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="val-berat-hewan" name="val-berat-hewan" placeholder="Masukan berat...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-gambar-hewan">Gambar
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="file" id="val-gambar-hewan" name="val-gambar-hewan" placeholder="Masukan gambar hewan...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                    </div>
                                </div>
                            </form>
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