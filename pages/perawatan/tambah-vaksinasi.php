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
                <li class="breadcrumb-item active"><a href="pages/perawatan/pemberian-makan.php">Perawatan</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Vaksinasi</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Vaksinasi</h4>
                        <div class="form-validation">
                            <form class="form-valide" name="jenis-kandang" action="" method="post">
                            <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-hewan-autocomplete">Nama Hewan<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-hewan-autocomplete" name="val-nama-hewan" placeholder="Masukan nama hewan...">
                                        <input type="hidden" class="form-control" id="val-id-hewan-autocomplete" name="val-id-hewan">
                                        <input type="hidden" class="form-control" id="val-id-jenis-hewan-autocomplete" name="val-id-jenis-hewan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-vaksin-autocomplete">Nama Vaksin<span class="text-danger">*</span>
                                    <a type="button" class="ml-1" tabindex="0" role="button" data-toggle="popover" data-html="true" data-trigger="focus" data-content="Pastikan anda telah menambahkan vaksin sesuai jenis hewan tersebut <a href='pages/kebutuhan/tambah-vaksin.php' class='text-primary'>disini</a>"><i class="fas fa-question-circle"></i></a>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-vaksin-autocomplete" name="val-nama-vaksin" disabled placeholder="Masukan nama vaksin...">
                                        <input type="hidden" class="form-control" id="val-id-vaksin" name="val-id-vaksin">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-jumlah-vaksin-validated">Jumlah<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="val-jumlah-vaksin-validated" name="val-jumlah-vaksin-validated" disabled placeholder="Masukan jumlah makanan...">
                                            <div class="input-group-append"><span class="input-group-text">dari &nbsp; <span id="val-label-jumlah-vaksin">-</span></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-tanggal">Waktu<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" id="date-format" class="form-control" placeholder="Masukkan waktu..." name="val-waktu">
                                        </div>
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
        $id_hewan = get('val-id-hewan');
        $id_vaksin = get('val-id-vaksin');
        $jumlah = get('val-jumlah-vaksin-validated');
        $waktu = format_date(get('val-waktu'));
     
    
        $query = "INSERT INTO hewan_mendapatkan_vaksin(id_hewan , id_vaksin , jumlah , waktu) VALUES ('$id_hewan','$id_vaksin','$jumlah','$waktu')";
        $exe = mysqli_query($conn,$query);
    
        if ($exe) {
            swal('success', 'Vaksinasi berhasil ditambahkan!', 'pages/perawatan/vaksinasi.php');
        } else {
            swal('error', '', '');
        }
    }
?>