<?php
    require_once '../../core/init.php';

    $id_shelter = get('id-shelter');
    $result = mysqli_query($conn, "SELECT hm.id_hewan_mendapatkan_makanan, h.foto, h.nama_hewan, jh.nama_jenis_hewan, h.jenis_kelamin, jh.icon, k.nama_kandang, m.nama_makanan, hm.jumlah, hm.waktu FROM hewan_mendapatkan_makanan hm INNER JOIN makanan m ON m.id_makanan = hm.id_makanan INNER JOIN hewan h ON hm.id_hewan = h.id_hewan INNER JOIN jenis_hewan jh ON h.id_jenis_hewan = jh.id_jenis_hewan INNER JOIN kandang k ON h.id_kandang = k.id_kandang WHERE h.id_shelter = '$id_shelter' AND h.status = 1");
?>

<?php
    include '../../templates/header.php';
    include '../../templates/sidebar.php';
?>

<!--**********************************
        Content body start
    ***********************************-->
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Pemberian Makan</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 align-self-center">
                                <h4 class="card-title">Pemberian Makan</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a href="pages/perawatan/tambah-pemberian-makan.php" class="btn mb-1 btn-primary">Tambah <span class="btn-icon-right"><i class="fa fa-plus"></i></span></a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover zero-configuration" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Nama Hewan</th>
                                        <th>Jenis</th>
                                        <th>Kandang</th>
                                        <th>Nama Makanan</th>
                                        <th>Jumlah</th>
                                        <td>Waktu</td>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    foreach($result as $row){
                                ?>                                    
                                    <tr>
                                        <td> <img src="<?=$row['foto']?>" class="rounded-circle mr-3" alt=""> <?=$row['nama_hewan']?> </td>
                                        <td><i class="<?=$row['icon']?> mr-1"></i><?=$row['nama_jenis_hewan']?></td>
                                        <td><?=$row['nama_kandang']?></td>
                                        <td><?=$row['jenis_kelamin']?></td>
                                        <td><span class="label gradient-3 rounded"><?=$row['jumlah']?></span></td>
                                        <td><?=format_date_prettier($row['waktu'])?></td>
                                        <td>
                                        <div class="dropdown-button">
                                        <div class="text-center" role="group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="pages/perawatan/edit-pemberian-makan.php?id=<?=$row['id_hewan_mendapatkan_makanan']?>"><i class="far fa-edit"></i> Ubah</a>
                                                <a class="dropdown-item" href="pages/perawatan/pemberian-makan.php?id=<?=$row['id_hewan_mendapatkan_makanan']?>"><i class="far fa-trash-alt"></i> Hapus</a>
                                            </div>
                                        </div>
                                        </div>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>                                      
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Hewan</th>
                                        <th>Jenis</th>
                                        <th>Kandang</th>
                                        <th>Nama Makanan</th>
                                        <th>Jumlah</th>
                                        <td>Waktu</td>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
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
    if(is_param_exist('id') && !is_param_exist('delete')){
        $id_pemberian_makan = get('id');
        swal('confirmation', 'Pemberian makan akan terhapus', 'pages/perawatan/pemberian-makan.php?id=' . $id_pemberian_makan .'&delete');
    }else if(is_param_exist('id') && is_param_exist('delete')){
        $id_pemberian_makan = get('id');

        $query = "DELETE FROM hewan_mendapatkan_makanan WHERE id_hewan_mendapatkan_makanan = $id_pemberian_makan";
        $exe = mysqli_query($conn,$query);
    
        if ($exe) {
            swal('success', 'Pemberian makan berhasil dihapus!', 'pages/perawatan/pemberian-makan.php');
        } else {
            swal('error', '', '');
        }
    }
?>