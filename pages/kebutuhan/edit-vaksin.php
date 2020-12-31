<?php
    require_once '../../core/init.php';

    $id_vaksin = get('id');
    $exe = mysqli_query($conn, "SELECT v.id_vaksin, v.nama_vaksin, (COALESCE(SUM(hv.jumlah), 0) + v.jumlah) AS total_jumlah, v.harga_satuan, jh.icon, jh.id_jenis_hewan FROM vaksin v LEFT OUTER JOIN hewan_mendapatkan_vaksin hv ON v.id_vaksin = hv.id_vaksin INNER JOIN jenis_hewan jh ON v.id_jenis_hewan = jh.id_jenis_hewan WHERE v.id_vaksin = '$id_vaksin' GROUP BY hv.id_hewan");
    $result = mysqli_fetch_assoc($exe);

    $query = "SELECT * FROM jenis_hewan ORDER BY nama_jenis_hewan";
    $jenis_hewan = mysqli_query($conn, $query);
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
                <li class="breadcrumb-item active"><a href="pages/kebutuhan/vaksin.php">Vaksin</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Vaksin</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ubah Vaksin</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-vaksin">Nama<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-vaksin" name="val-nama-vaksin" placeholder="Masukan nama vaksin..." value="<?=$result['nama_vaksin']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jumlah-vaksin">Jumlah<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="val-jumlah-vaksin" name="val-jumlah-vaksin" placeholder="Masukan jumlah vaksin..." value="<?=$result['total_jumlah']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-biaya-vaksin">Biaya<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                            <input type="text" id="val-biaya-vaksin" class="form-control biaya" name="val-biaya-vaksin" value="<?=$result['harga_satuan']?>">
                                            <div class="input-group-append"><span class="input-group-text">,00</span></div>
                                        </div>
                                        <div class="text-info mt-1">Biaya per satuan vaksin(misalnya Rp 100.000,00/pcs)</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jenis-hewan">Jenis<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <select class="form-control" id="val-jenis-hewan" name="val-jenis-hewan">
                                            <option value="">Pilih Jenis Hewan</option>
                                            <?php
                                                foreach($jenis_hewan as $row){
                                            ?>
                                                    <option value="<?= $row['id_jenis_hewan'] ?>" <?=$result['id_jenis_hewan'] == $row['id_jenis_hewan'] ? 'selected="selected"' : '';?>><?= $row['nama_jenis_hewan'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
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