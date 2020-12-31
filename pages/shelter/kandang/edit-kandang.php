<?php
    require_once '../../../core/init.php';

    $id_kandang = get('id');
    $exe = mysqli_query($conn,"SELECT * FROM kandang WHERE id_kandang ='$id_kandang'");
    $result = mysqli_fetch_assoc($exe);

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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Kandang</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ubah Kandang</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-kandang">Nama<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-kandang" name="val-nama-kandang" placeholder="Masukan nama kandang..." value="<?=$result['nama_kandang']?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jenis-kandang">Jenis<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                    <select class="form-control" id="val-jenis-kandang" name="val-jenis-kandang">
                                        <option value="">Pilih Jenis Kandang</option>
                                        <?php
                                        foreach ($jenis_kandang as $row) {
                                        ?>
                                            <option value="<?=$row['id_jenis_kandang']?>" <?=$result['id_jenis_kandang'] == $row['id_jenis_kandang'] ? 'selected="selected"' : '';?>><?=$row['luas']?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-10">
                                        <button type="submit" class="btn btn-secondary">Ubah</button>
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