<?php
    require_once '../../core/init.php';

    $id_administrator = get('id');
    $exe = mysqli_query($conn,"SELECT * FROM administrator WHERE id_administrator = '$id_administrator'");
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
                <li class="breadcrumb-item active"><a href="pages/shelter/administrator.php">Administrator</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Administrator</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ubah Administrator</h4>
                        <div class="form-validation">
                            <form class="form-valide" name="jenis-kandang" action="" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-nama-administrator">Nama<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-nama-administrator" name="val-nama-administrator" placeholder="Masukan nama..." value="<?=$result['nama']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-username">Username<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="val-username" name="val-username" disabled placeholder="Masukan username..." value="<?=$result['username']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="val-password">Password
                                    </label>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Masukan password...">
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
        $nama = get('val-nama-administrator');
        $password = get('val-password');
        
        if(empty(trim($password))){
            $query = "UPDATE administrator SET nama = '$nama' WHERE id_administrator = $id_administrator";
            $exe = mysqli_query($conn,$query);
        
            if ($exe) {
                swal('success', 'Administrator berhasil diubah!', 'pages/shelter/administrator.php');
            } else {
                swal('error', '', '');
            }
        }else{
            $password_enc = password_hash($password,PASSWORD_DEFAULT);
            $query = "UPDATE administrator SET nama = '$nama', password = '$password_enc' WHERE id_administrator = $id_administrator";
            $exe = mysqli_query($conn,$query);
    
            if ($exe) {
                swal('success', 'Administrator berhasil diubah!', 'pages/shelter/administrator.php');
            } else {
                swal('error', '', '');
            }
        }
    }
?>