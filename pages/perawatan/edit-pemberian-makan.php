<?php
    require_once '../../core/init.php';

    $id_pemberian_makan = get('id');
    $exe = mysqli_query($conn, "SELECT hm.id_hewan_mendapatkan_makanan, h.id_hewan, h.id_jenis_hewan, h.nama_hewan, jh.nama_jenis_hewan, h.jenis_kelamin, m.id_makanan, m.nama_makanan, hm.jumlah, m.jumlah AS jumlah_makanan, hm.waktu FROM hewan_mendapatkan_makanan hm INNER JOIN makanan m ON m.id_makanan = hm.id_makanan INNER JOIN hewan h ON hm.id_hewan = h.id_hewan INNER JOIN jenis_hewan jh ON h.id_jenis_hewan = jh.id_jenis_hewan INNER JOIN kandang k ON h.id_kandang = k.id_kandang WHERE hm.id_hewan_mendapatkan_makanan = '$id_pemberian_makan'");
    $result = mysqli_fetch_assoc($exe);
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
                <li class="breadcrumb-item active"><a href="pages/perawatan/pemberian-makan.php">Perawatan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Pemberian Makan</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ubah Pemberian Makan</h4>
                        <div class="form-validation">
                            <form class="form-valide" action="" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-hewan-autocomplete">Nama Hewan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-hewan-autocomplete" name="val-nama-hewan" placeholder="Masukan nama hewan..." value="<?=$result['nama_hewan']?>">
                                        <input type="hidden" class="form-control" id="val-id-hewan-autocomplete" name="val-id-hewan" value="<?=$result['id_hewan']?>">
                                        <input type="hidden" class="form-control" id="val-id-jenis-hewan-autocomplete" name="val-id-jenis-hewan" value="<?=$result['id_jenis_hewan']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-makanan-autocomplete">Nama Makanan<span class="text-danger">*</span>
                                    <a type="button" class="ml-1" tabindex="0" role="button" data-toggle="popover" data-html="true" data-trigger="focus" data-content="Pastikan anda telah menambahkan makanan sesuai jenis hewan tersebut <a href='pages/kebutuhan/tambah-makanan.php' class='text-primary'>disini</a>"><i class="fas fa-question-circle"></i></a>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-makanan-autocomplete" name="val-nama-makanan" placeholder="Masukan nama makanan..." value="<?=$result['nama_makanan']?>">
                                        <input type="hidden" class="form-control" id="val-id-makanan" name="val-id-makanan" value="<?=$result['id_makanan']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jumlah-makanan-validated">Jumlah(gr)<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="val-jumlah-makanan-validated" name="val-jumlah-makanan-validated" placeholder="Masukan jumlah makanan..." value="<?=$result['jumlah']?>">
                                            <div class="input-group-append"><span class="input-group-text">dari &nbsp; <span id="val-label-jumlah-makanan"><?=$result['jumlah_makanan']?></span></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-tanggal">Waktu<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" id="date-format" class="form-control" placeholder="Masukkan waktu..." name="val-waktu" value="<?=format_date_prettier($result['waktu'])?>">
                                        </div>
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
    include '../../templates/footer.php';
?>

<?php
    if(is_clicked('ubah')){
        $id_hewan = get('val-id-hewan');
        $id_makanan = get('val-id-makanan');
        $jumlah = get('val-jumlah-makanan-validated');
        $waktu = format_date(get('val-waktu'));
    
        $query = "UPDATE hewan_mendapatkan_makanan SET id_hewan = '$id_hewan' , id_makanan = '$id_makanan' , jumlah = '$jumlah', waktu = '$waktu' WHERE id_hewan_mendapatkan_makanan = $id_pemberian_makan";
        $exe = mysqli_query($conn,$query);
    
        if ($exe) {
            swal('success', 'Makanan berhasil diubah!', 'pages/perawatan/pemberian-makan.php');
        } else {
            swal('error', '', '');
        }
    }
?>