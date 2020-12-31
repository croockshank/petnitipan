<?php
    require_once '../../core/init.php';

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
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Vaksin</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Vaksin</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-vaksin">Nama<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-vaksin" name="val-nama-vaksin" placeholder="Masukan nama vaksin...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jumlah-vaksin">Jumlah<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="val-jumlah-vaksin" name="val-jumlah-vaksin" placeholder="Masukan jumlah vaksin...">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-biaya-vaksin">Biaya<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                            <input type="text" id="val-biaya-vaksin" class="form-control biaya" name="val-biaya-vaksin">
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
                                                    <option value="<?= $row['id_jenis_hewan'] ?>"><?= $row['nama_jenis_hewan'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
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
    include '../../templates/footer.php';
?>

<?php
    if(is_clicked('tambah')){
        $nama_vaksin = get('val-nama-vaksin');
        $harga_satuan = replace_price_separator(get('val-biaya-vaksin'));
        $jumlah = get('val-jumlah-vaksin');
        $id_jenis_hewan = get('val-jenis-hewan');
        $id_shelter = get('id-shelter');
      
       $query = "INSERT INTO vaksin(nama_vaksin, harga_satuan, jumlah, id_jenis_hewan, id_shelter) VALUES ('$nama_vaksin','$harga_satuan','$jumlah','$id_jenis_hewan','$id_shelter')";
       $exe = mysqli_query($conn,$query);
   
       if ($exe) {
           swal('success', 'Vaksin berhasil ditambahkan!', 'pages/kebutuhan/vaksin.php');
       } else {
           swal('error', '', '');
       }
    }
?>