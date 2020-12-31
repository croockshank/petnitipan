<?php
    require_once '../../core/init.php';

    $id_hewan = get('id');
    $exe = mysqli_query($conn,"SELECT h.id_hewan, h.nama_hewan, jh.id_jenis_hewan, k.id_kandang, h.jenis_kelamin, h.panjang, h.berat, h.tanggal_masuk FROM hewan h INNER JOIN jenis_hewan jh ON jh.id_jenis_hewan = h.id_jenis_hewan INNER JOIN kandang k ON k.id_kandang = h.id_kandang WHERE h.id_hewan = '$id_hewan'");
    $result = mysqli_fetch_assoc($exe);

    $query_jenis_hewan = "SELECT * FROM jenis_hewan ORDER BY nama_jenis_hewan";
    $query_kandang = "SELECT * FROM kandang ORDER BY nama_kandang";
    $jenis_hewan = mysqli_query($conn, $query_jenis_hewan);
    $kandang = mysqli_query($conn, $query_kandang);
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
                <li class="breadcrumb-item active"><a href="pages/hewan/hewan.php">Hewan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Hewan</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ubah Hewan</h4>
                        <div class="form-validation">
                            <form class="form-valide" name="jenis-kandang" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-hewan">Nama<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-hewan" name="val-nama-hewan" placeholder="Masukan nama..." value="<?=$result['nama_hewan']?>">
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
                                    <label class="col-lg-2 col-form-label" for="val-kandang">Kandang<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <select class="form-control" id="val-kandang" name="val-kandang">
                                            <option value="">Pilih Kandang</option>
                                            <?php
                                                foreach($kandang as $row){
                                            ?>
                                                <option value="<?= $row['id_kandang'] ?>" <?=$result['id_kandang'] == $row['id_kandang'] ? 'selected="selected"' : '';?>><?= $row['nama_kandang'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jenis-kelamin">Jenis Kelamin<span class="text-danger">*</span>
                                    </label>
                                    <label class="radio-inline mr-3 ml-3">
                                        <input type="radio" name="val-jenis-kelamin" <?=$result['jenis_kelamin'] == 'Laki Laki' ? 'checked="checked"' : '';?>> Laki-laki</label>
                                    <label class="radio-inline mr-3">
                                        <input type="radio" name="val-jenis-kelamin" <?=$result['jenis_kelamin'] == 'Perempuan' ? 'checked="checked"' : '';?>> Perempuan</label>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-panjang-hewan">Panjang<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="val-panjang-hewan" name="val-panjang-hewan" placeholder="Masukan panjang..." value="<?=$result['panjang']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-berat-hewan">Berat<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="val-berat-hewan" name="val-berat-hewan" placeholder="Masukan berat..." value="<?=$result['berat']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-tanggal">Tanggal<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" id="date-only" class="form-control" placeholder="Masukkan tanggal..." name="val-waktu" value="<?=format_date_only_pretier($result['tanggal_masuk'])?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-gambar-hewan">Gambar
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="file" id="val-gambar-hewan" name="val-gambar-hewan" placeholder="Masukan gambar hewan..." accept="image/*">
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
    require_once '../../lib/bulletproof/bulletproof.php';

    if(is_clicked('ubah')){
        $image = new Bulletproof\Image($_FILES);
        $image->setLocation('../../uploads/images');

        $id_shelter = get('id-shelter');
        $nama_hewan = get('val-nama-hewan');
        $id_jenis_hewan = get('val-jenis-hewan');
        $id_kandang = get('val-kandang');
        $jenis_kelamin = get('jenis-kelamin') == 'Laki-laki' ? 'Laki Laki' : 'Perempuan';
        $panjang = get('val-panjang-hewan');
        $berat = get('val-berat-hewan');
        $tanggal_masuk = format_date_only(get('val-waktu'));

        if($_FILES['val-gambar-hewan']['size'] > 0){
            if($image['val-gambar-hewan']){
                if($image->upload()){
                    $foto = url() . 'uploads/images/' . $image->getName() . '.' . $image->getMime();
    
                    $query = "UPDATE hewan SET nama_hewan = '$nama_hewan', jenis_kelamin = '$jenis_kelamin', panjang = '$panjang', berat = $berat, id_jenis_hewan = '$id_jenis_hewan', tanggal_masuk = '$tanggal_masuk', id_kandang = '$id_kandang', foto = '$foto' WHERE id_hewan = '$id_hewan'";
                    $exe = mysqli_query($conn,$query);
                    
                    if ($exe) {
                        swal('success', 'Hewan berhasil diubah!', 'pages/hewan/hewan.php');
                    } else {
                        swal('error', '', '');
                    }
                }else{
                    die($image->getError());
                    swal('error', '', '');
                }
            }else{
                swal('error', '', '');
            }
        }else{
            $query = "UPDATE hewan SET nama_hewan = '$nama_hewan', jenis_kelamin = '$jenis_kelamin', panjang = '$panjang', berat = '$berat', id_jenis_hewan = '$id_jenis_hewan', tanggal_masuk = '$tanggal_masuk', id_kandang = '$id_kandang' WHERE id_hewan = '$id_hewan'";
            $exe = mysqli_query($conn,$query);
            
            if ($exe) {
                swal('success', 'Hewan berhasil diubah!', 'pages/hewan/hewan.php');
            } else {
                swal('error', '', '');
            }
        }
    }
?>