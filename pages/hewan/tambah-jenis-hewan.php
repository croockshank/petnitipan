<?php
    require_once '../../core/init.php';
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
                <li class="breadcrumb-item active"><a href="pages/hewan/jenis-hewan.php">Jenis Hewan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Jenis Hewan</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Jenis Hewan</h4>
                        <div class="form-validation">
                            <form class="form-valide" name="jenis-kandang" action="" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-jenis-hewan">Nama<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-jenis-hewan" name="val-nama-jenis-hewan" placeholder="Masukan nama...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
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

<?php
    if(is_clicked('tambah')){
        $nama_jenis_hewan = get('val-nama-jenis-hewan');
        $icon = "fas fa-paw";
    
        $query = "INSERT INTO jenis_hewan(nama_jenis_hewan, icon) VALUES ('$nama_jenis_hewan', '$icon')";
        $exe = mysqli_query($conn,$query);
        if ($exe) {
            swal('success', 'Jenis hewan berhasil ditambahkan!', 'pages/hewan/jenis-hewan.php');
        } else {
            swal('error', '', '');
        }
    }
?>