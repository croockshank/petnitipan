<?php
    require_once '../../../core/init.php';
?>

<?php
    include '../../../templates/header.php';
?>

<!--**********************************
        Content body start
    ***********************************-->
<div>
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="pages/shelter/kandang/jenis-kandang.php">Jenis Kandang</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Jenis Kandang</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Jenis Kandang</h4>
                        <div class="form-validation">
                            <form class="form-valide" name="jenis-kandang" action="" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-luas">Luas(m<sup>2</sup>) <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="val-luas" name="val-luas" placeholder="Masukan luas kandang...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-secondary" name="tambah">Tambah</button>
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
    include '../../../templates/footer.php';

    if (is_clicked('tambah')) {
        $luas = get('val-luas');

        $query = "INSERT INTO jenis_kandang(luas) VALUES ('$luas')";
        $exe = mysqli_query($conn, $query);

        if ($exe) {
            swal('success', 'Jenis Kandang berhasil ditambahkan!', 'pages/shelter/kandang/jenis-kandang.php');
        } else {
            swal('error', '', '');
        }
    }
?>