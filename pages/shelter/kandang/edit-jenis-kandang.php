<?php
    require_once '../../../core/init.php';

    $id_jenis_kandang = get('id');
    $exe = mysqli_query($conn,"SELECT * FROM jenis_kandang WHERE id_jenis_kandang ='$id_jenis_kandang'");
    $result = mysqli_fetch_assoc($exe);
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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Jenis Kandang</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ubah Jenis Kandang</h4>
                        <div class="form-validation">
                            <form class="form-valide" name="jenis-kandang" action="" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-luas">Luas(m<sup>2</sup>) <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="val-luas" name="val-luas" placeholder="Masukan luas kandang..." value="<?=$result['luas']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-secondary" name="ubah">Ubah</button>
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
    if(is_clicked('ubah')){
        $luas = get('val-luas');
    
    
        $query = "UPDATE jenis_kandang SET luas = '$luas' WHERE id_jenis_kandang = $id_jenis_kandang";
        $exe = mysqli_query($conn,$query);
        
        if ($exe) {
            swal('success', 'Jenis Kandang berhasil diubah!', 'pages/shelter/kandang/jenis-kandang.php');
        } else {
            swal('error', '', '');
        }
    }

?>