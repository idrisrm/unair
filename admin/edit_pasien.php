<div class="row">
     <div class="col-lg-12">
          <h1 class="page-header">Halaman Edit Pasien</h1>
     </div>

</div>
<style type="text/css">
     .marginku {
          margin-bottom: 3px;
     }
</style>
<?php
include "../config/cek_session1.php";
$id = $_GET['id'];

$ambildata = mysqli_query($kon, "SELECT * FROM detail_pasien join tb_karyawan on tb_karyawan.id = detail_pasien.id_pasien join tb_dokter on tb_dokter.id_dokter = detail_pasien.id_dokter WHERE id_detail = '$id'");

$data1 = mysqli_fetch_array($ambildata);

?>

<div class="panel-body">
     <div class="row">
          <div class="col-lg-12">
               <form action="../config/editpasien.php" method="POST">
                    <div class="row">
                         <div class="col-md-6 marginku">
                              <label>Jenis Biaya</label>
                              <select name="jenis_biaya" class="form-control" required>
                                   <option value="" selected>-- Pilih Salah Satu --</option>
                                   <option value="1" <?= $data1['jenis_biaya'] == 1 ? "selected" : "" ?>>Biaya Pemeriksaan</option>
                                   <option value="2" <?= $data1['jenis_biaya'] == 2 ? "selected" : "" ?>>Biaya Apotek</option>
                                   <option value="3" <?= $data1['jenis_biaya'] == 3 ? "selected" : "" ?>>Biaya Rawat Inap</option>
                                   <option value="4" <?= $data1['jenis_biaya'] == 4 ? "selected" : "" ?>>Biaya Resep Kacamata</option>
                              </select>
                         </div>
                         <div class="col-md-6 marginku">
                              <label>Tanggal Terima</label>
                              <input class="form-control" type="date" value="<?= $data1['tanggal_terima'] ?>" name="tanggal_terima" required>
                              <input class="form-control" type="hidden" value="<?= $id ?>" name="id_detail" required>
                              <input class="form-control" type="hidden" value="<?= $data1['nomor_pasien'] ?>" name="nomor_pasien" required>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-4 marginku">
                              <label>Tanggal periksa</label>
                              <input class="form-control" type="date" value="<?= $data1['tanggal_periksa'] ?>" name="tanggal_periksa" required>
                         </div>
                         <div class="col-md-4 marginku">
                              <label>pasien</label>
                              <select name="id_pasien" id="id_pasien" class="form-control" onkeypress="isi_otomatis()" required>
                                   <option value="">-- Pilih Salah Satu --</option>
                                   <?php
                                   $ambildata = mysqli_query($kon, "SELECT * FROM tb_karyawan WHERE status = 1");
                                   while ($data = mysqli_fetch_array($ambildata)) { ?>
                                        <option value="<?= $data["id"] ?>" <?= $data1['id_pasien'] == $data['id'] ? "selected" : "" ?>><?= $data["nama_karyawan"] ?></option>
                                   <?php } ?>
                              </select>
                         </div>
                         <div class="col-md-4 marginku">
                              <label>Dokter</label>
                              <select name="id_dokter" id="id_dokter" class="form-control" onkeypress="isi_otomatis()" required>
                                   <option value="">-- Pilih Salah Satu --</option>
                                   <?php
                                   $ambildata = mysqli_query($kon, "SELECT * FROM tb_dokter WHERE status = 1");
                                   while ($data = mysqli_fetch_array($ambildata)) { ?>
                                        <option value="<?= $data["id_dokter"] ?>" <?= $data1['id_dokter'] == $data['id_dokter'] ? "selected" : "" ?>><?= $data["nama_dokter"] ?></option>
                                   <?php } ?>
                              </select>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-12 marginku">
                              <label>Uraian</label>
                              <input class="form-control" type="text" name="uraian_pasien" value="<?= $data1['uraian'] ?>" required>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-6 marginku">
                              <label>Penyakit</label>
                              <input class="form-control" type="text" name="penyakit" value="<?= $data1['penyakit'] ?>" required>
                         </div>
                         <div class="col-md-6 marginku">
                              <label>Biaya</label>
                              <input class="form-control" type="text" name="biaya" value="<?= $data1['biaya'] ?>" required>
                         </div>
                    </div>
                    <div class="row marginku">
                         <div class="col-lg-12">
                              <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
                         </div>
                    </div>

               </form>

          </div>
          <!-- /.col-lg-6 (nested) -->
     </div>
     <!-- /.row (nested) -->
</div>
<!-- /.panel-body -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<?php

include '../config/koneksi.php';

@$nama_dokter     = $_POST['nama_dokter'];
@$umur            = $_POST['umur'];
@$jk_dokter       = $_POST['jk_dokter'];
@$alamat_dokter          = $_POST['alamat_dokter'];
@$pengguna        = $_POST['pengguna'];
@$sandi           = $_POST['sandi'];

if (isset($_POST['kirim'])) {
     $sql3 = mysqli_query($kon, "SELECT max(id_dokter) as id_dokter FROM tb_dokter");
     $bc3  = mysqli_fetch_array($sql3);
     @$id_dokter = $bc3['id_dokter'] + 1;
     echo "$id_dokter";

     $sql1 = "INSERT INTO tb_dokter VALUES ('', '$nama_dokter', '$jk_dokter',  '$alamat_dokter', '$umur','1')";
     mysqli_query($kon, $sql1);

     $sql2 = "INSERT INTO tb_user VALUES ('', '$id_dokter', '$pengguna',  '$sandi', '2')";
     mysqli_query($kon, $sql2);

     echo '<script language="javascript">
alert ("Data Berhasil Disimpan");
</script>';


?>
     <script type="text/javascript">
          //window.location ="?menu=dokter" ;
     </script>
<?php
     //header('location:?menu=dokter');
}
?>
</body>

</html>