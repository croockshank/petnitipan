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
                <li class="breadcrumb-item active"><a href="pages/kebutuhan/makanan.php">Makanan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Makanan</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Makanan</h4>
                        <div class="form-validation">
                            <form class="form-valide" name="jenis-kandang" action="" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-makanan">Nama<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="val-nama-makanan" name="val-nama-makanan" placeholder="Masukan nama makanan...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jumlah-makanan">Jumlah<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="val-jumlah-makanan" name="val-jumlah-makanan" placeholder="Masukan jumlah makanan...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-biaya-makanan">Biaya<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                            <input type="number" id="val-biaya-makanan" class="form-control" name="val-biaya-makanan">
                                            <div class="input-group-append"><span class="input-group-text">,00</span></div>
                                        </div>
                                        <div class="text-info mt-1">Biaya per satuan makanan(misalnya Rp 5.000,00/gram)</div>
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
                                            <option value="javascript">JavaScript</option>
                                            <option value="angular">Angular</option>
                                            <option value="angular">React</option>
                                            <option value="vuejs">Vue.js</option>
                                            <option value="ruby">Ruby</option>
                                            <option value="php">PHP</option>
                                            <option value="asp">ASP.NET</option>
                                            <option value="python">Python</option>
                                            <option value="mysql">MySQL</option>
                                        </select>
                                    </div>
                                </div>
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
    <!-- #/ container -->
</div>

<!--**********************************
        Content body end
    ***********************************-->
<?php
include '../../templates/footer.php';
?>