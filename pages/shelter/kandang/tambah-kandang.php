<?php
    require_once '../../../core/init.php';

    $query = "SELECT * FROM jenis_kandang ORDER BY luas";
    $jenis_kandang = mysqli_query($conn, $query);
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
                <li class="breadcrumb-item active"><a href="pages/shelter/kandang/kandang.php">Kandang</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Kandang</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Kandang</h4>
                        <div class="form-validation">
                            <form class="form-valide" name="jenis-kandang" action="" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-kandang">Nama<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-kandang" name="val-nama-kandang" placeholder="Masukan nama kandang...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jenis-kandang">Jenis(m<sup>2</sup>)<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <select class="form-control" id="val-jenis-kandang" name="val-jenis-kandang">
                                        <option value="">Pilih Jenis Kandang</option>
                                            <?php
                                            foreach ($jenis_kandang as $row) {
                                            ?>
                                                <option value="<?=$row['id_jenis_kandang']?>"><?=$row['luas']?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
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
include '../../../templates/footer.php';
?>

<?php
    if(is_clicked('tambah')){
        $nama_kandang = get('val-nama-kandang');
        $id_shelter = get('id-shelter');
        $id_jenis_kandang = get('val-jenis-kandang');
      
        $query = "INSERT INTO kandang(nama_kandang , id_shelter , id_jenis_kandang) VALUES ('$nama_kandang','$id_shelter','$id_jenis_kandang')";
        $exe = mysqli_query($conn,$query);
      
        if ($exe) {
            swal('success', 'Kandang berhasil ditambahkan!', 'pages/shelter/kandang/kandang.php');
        } else {
            swal('error', '', '');
        }
    }
?>