<div class="row">
     <div class="col-lg-12">
          <h1 class="page-header">Halaman Input Data Pasien</h1>
     </div>

</div>
<style type="text/css">
     .marginku {
          margin-bottom: 10px;
     }
</style>

<div class="panel-body">
     <div class="row">
          <div class="col-lg-12">
               <form>
                    <div class="row">
                         <div class="col-md-6 marginku">
                              <label>Nama Pasien</label>
                              <input class="form-control" placeholder="Enter text" name="nama_dokter" required>
                         </div>
                         <div class="col-md-6 marginku">
                              <label>Status</label>
                              <select name="jk_dokter" class="form-control" required>
                                   <option value="">Pilih Salah Satu</option>
                                   <option value="Laki-laki">menikah</option>
                                   <option value="Perempuan">Belum menikah</option>
                              </select>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-6 marginku">
                              <label>Tanggal Lahir </label>
                              <input class="form-control" type="date" name="tgl_lahir" required>
                         </div>
                         <div class="col-md-6 marginku">
                              <label>Diagnoasa </label>
                              <input class="form-control" type="text" placeholder="Enter text" name="tgl_lahir" required>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-6 marginku">
                              <label>Jenis Kelamin</label>
                              <select name="jk_dokter" class="form-control" required>
                                   <option value="">Pilih Salah Satu</option>
                                   <option value="Laki-laki">Laki-laki</option>
                                   <option value="Perempuan">Perempuan</option>
                              </select>
                         </div>
                         <div class="col-md-6 marginku">
                              <label>Rawat Inap</label>
                              <input class="form-control" placeholder="Enter text" name="umur" required>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-6 marginku">
                              <label>Pekerjaan</label>
                              <input class="form-control" placeholder="Enter text" name="umur" required>
                         </div>
                         <div class="col-md-6 marginku">
                              <label>Komplikasi</label>
                              <input class="form-control" placeholder="Enter text" name="umur" required>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-6 marginku">
                              <label>No Telepon</label>
                              <input class="form-control" placeholder="Enter text" name="umur" type="number" required>
                         </div>
                         <div class="col-md-6 marginku">
                              <label>Tindakan</label>
                              <input class="form-control" placeholder="Enter text" name="umur" required>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-6 marginku">
                              <label>Alamat</label>
                              <textarea class="form-control" placeholder="Enter text" name="alamat_dokter" required>
                         </textarea>
                         </div>
                         <div class="col-md-6 marginku">
                              <label>Keadaan</label>
                              <select name="jk_dokter" class="form-control" required>
                                   <option value="">Pilih Salah Satu</option>
                                   <option value="Laki-laki">Laki-laki</option>
                                   <option value="Perempuan">Perempuan</option>
                              </select>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-12 marginku">
                              <a href="?menu=resi" class="btn btn-primary">Submit</a>
                         </div>
                    </div>

               </form>
               <!-- <form role="form" enctype="multipart/form-data" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                         <label>Nama Pasien</label>
                         <input class="form-control" placeholder="Enter text" name="nama_dokter" required>
                    </div>

                    <div class="form-group">
                         <label>Tanggal Lahir </label>
                         <input class="form-control" type="date" name="tgl_lahir" required>
                         <p class="help-block">Masukkan Tanggal Lahir</p>
                    </div>

                    <div class="form-group">
                         <label>Jenis Kelamin</label>
                         <select name="jk_dokter" class="form-control" required>
                              <option value="">Pilih Salah Satu</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                         </select>
                    </div>
                    <div class="form-group">
                         <label>Pekerjaan</label>
                         <input class="form-control" placeholder="Enter text" name="umur" required>
                    </div>

                    <div class="form-group">
                         <label>No. Tlp</label>
                         <input class="form-control" placeholder="Enter text" name="umur" required>
                    </div>

                    <div class="form-group">
                         <label>Alamat</label>
                         <textarea class="form-control" placeholder="Enter text" name="alamat_dokter" required>
                   </textarea>
                    </div>

                    <button type="submit" class="btn btn-outline btn-info" name="kirim">Simpan <i class="fa fa-save fa-fw"></i></button>


          </div>

          
          <div class="col-lg-6">

               <div class="form-group">
                    <label>Status</label>
                    <select name="jk_dokter" class="form-control" required>
                         <option value="">Pilih Salah Satu</option>
                         <option value="Laki-laki">1. Suami / Istri</option>
                         <option value="Perempuan">2. Anak</option>
                    </select>
               </div>

               <div class="form-group">
                    <label>Diagnosa</label>
                    <input class="form-control" placeholder="Enter text" name="umur" required>
               </div>
               <div class="form-group">
                    <label>Rawat Inap</label>
                    <input class="form-control" placeholder="Enter text" name="umur" required>
               </div>
               <div class="form-group">
                    <label>Komplikasi</label>
                    <input class="form-control" placeholder="Enter text" name="umur" required>
               </div>
               <div class="form-group">
                    <label>Tindakan/Operasi</label>
                    <input class="form-control" placeholder="Enter text" name="umur" required>
               </div>

               <div class="form-group">
                    <label>Keadaan</label>
                    <select name="jk_dokter" class="form-control" required>
                         <option value="">Pilih Salah Satu</option>
                         <option value="Laki-laki">1. Sembuh</option>
                         <option value="Perempuan">2. Membaik</option>
                         <option value="Perempuan">3. Belum Sembuh</option>
                         <option value="Perempuan">4. Meninggal</option>
                    </select>
               </div>

               </form> -->

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