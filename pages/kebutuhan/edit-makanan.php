<?php
    require_once '../../core/init.php';

    $id_makanan = get('id');
    $exe = mysqli_query($conn, "SELECT m.id_makanan, m.nama_makanan, (COALESCE(SUM(hm.jumlah), 0) + m.jumlah) AS total_jumlah, m.harga_satuan, jh.icon, jh.id_jenis_hewan FROM makanan m LEFT OUTER JOIN hewan_mendapatkan_makanan hm ON m.id_makanan = hm.id_makanan INNER JOIN jenis_hewan jh ON m.id_jenis_hewan = jh.id_jenis_hewan WHERE m.id_makanan = '$id_makanan' GROUP BY hm.id_makanan");
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
                <li class="breadcrumb-item active"><a href="pages/kebutuhan/makanan.php">Makanan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Makanan</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ubah Makanan</h4>
                        <div class="form-validation">
                            <form class="form-valide" name="jenis-kandang" action="" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-makanan">Nama<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-makanan" name="val-nama-makanan" placeholder="Masukan nama makanan..." value="<?=$result['nama_makanan']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jumlah-makanan">Jumlah<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="val-jumlah-makanan" name="val-jumlah-makanan" placeholder="Masukan jumlah makanan..." value="<?=$result['total_jumlah']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-biaya-makanan">Biaya<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                            <input type="text" id="val-biaya-makanan" class="form-control biaya" name="val-biaya-makanan" value="<?=$result['harga_satuan']?>">
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