<div class="row">
     <div class="col-lg-12">
          <h1 class="page-header">Halaman Input Data Dokter</h1>
     </div>

</div>
<style type="text/css">
     .marginku {
          margin-bottom: 3px;
     }
</style>

<div class="panel-body">
     <div class="row">
          <div class="col-lg-12">
               <form>
                    <div class="row">
                         <div class="col-md-4 marginku">
                              <label>Nama Dokter</label>
                              <input class="form-control" placeholder="Enter text" name="nama_dokter" required>
                         </div>
                         <div class="col-md-4 marginku">
                              <label>No. STR </label>
                              <input class="form-control" type="number" placeholder="Enter Number" name="str" required>
                         </div>
                         <div class="col-md-4 marginku">
                              <label>Jenis Kelamin</label>
                              <select name="jk_dokter" class="form-control" required>
                                   <option value="">-- Pilih Salah Satu --</option>
                                   <option value="Laki-laki">Laki-Laki</option>
                                   <option value="Perempuan">Perempuan</option>
                              </select>
                         </div>

                    </div>
                    <div class="row">
                         <div class="col-md-6 marginku">
                              <label>Specialist</label>
                              <select name="jk_dokter" class="form-control" required>
                                   <option value="">-- Pilih Salah Satu --</option>
                                   <option value="">Dokter Umum</option>
                                   <option value="">Dokter Bedah</option>
                                   <option value="">Psikiater</option>
                              </select>
                         </div>
                         <div class="col-md-6 marginku">
                              <label>Tempat Praktik</label>
                              <input class="form-control" placeholder="Enter text" name="umur" required>
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