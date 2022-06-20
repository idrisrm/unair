<div class="row">
     <div class="col-lg-12">
          <h1 class="page-header">Halaman Input Diagnosa Rekam Medis</h1>
     </div>

</div>
<style type="text/css">
     .marginku {
          margin-bottom: 3px;
     }
</style>

<?php
include '../config/koneksi.php';
$id = $_GET['id'];

$sql = mysqli_query($kon, "SELECT * FROM detail_pasien join tb_pasien on tb_pasien.nomor_pasien = detail_pasien.nomor_pasien WHERE id_detail = '$id'");
$data = mysqli_fetch_array($sql);
?>

<div class="panel-body" style="background-color: #f5f5f5; border-radius: 10px;">
     <div class="row">
          <div class="col-lg-12">
               <form method="POST" action="../config/updatediagnosapasien.php">

                    <div class="row">
                         <div class="col-md-12 marginku">
                              <a href="../img/pasien/<?= $data['foto']?>"><img src="../img/pasien/<?= $data['foto']?>" width="200px" alt=""></a>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-12 marginku">
                              <label>Diagnosa</label>
                              <input type="hidden" name="id" value="<?= $id?>">
                              <textarea class="form-control" name="diagnosa" cols="30" rows="10" required><?= $data['diagnosa']?></textarea>
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