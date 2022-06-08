<div class="row">
     <div class="col-lg-12">
          <h1 class="page-header">Halaman Input Data Pasien</h1>
     </div>
</div>
<style type="text/css">
     .marginku {
          margin-bottom: 0px;
     }
</style>

<div class="panel-body" style="background-color: #f5f5f5;">
     <div class="row">
          <div class="col-lg-12">
               <form>
                    <div class="row">
                         <div class="col-md-1 marginku">
                              <label>Nomor</label>
                              <input class="form-control" type="text" value="JPP799" name="nomor" required readonly>
                         </div>
                         <div class="col-md-2 marginku">
                              <label>Tanggal</label>
                              <input class="form-control" type="date" name="tanggal_input" required>
                         </div>
                         <div class="col-md-3 marginku">
                              <label>Jenis Penggantian</label>
                              <select name="jenis" class="form-control" required>
                                   <option value="" selected>-- Pilih Salah Satu --</option>
                                   <option value="">Perorangan</option>
                                   <option value="">Fasilitas Kantor</option>
                              </select>
                         </div>
                         <div class="col-md-2 marginku">
                              <label>Unit Sub</label>
                              <input class="form-control" type="text" value="Keuangan" name="unit" required readonly>
                         </div>
                         <div class="col-md-4 marginku">
                              <label>Penerima</label>
                              <select name="jk_dokter" class="form-control" required>
                                   <option value="">-- Pilih Salah Satu --</option>
                                   <option value="">Hofidatul</option>
                                   <option value="">Nova Ayu</option>
                              </select>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-11 marginku">
                              <label>Uraian</label>
                              <input class="form-control" placeholder="Enter Text" type="text" name="uraian" required>
                         </div>
                         <div class="col-md-1 marginku">
                              <label>Jumlah Item</label>
                              <input class="form-control" placeholder="Enter Number" type="number" name="jumlah_item" required>
                         </div>
                    </div>
               </form>

               <div class="row">
                    <div class="col-lg-12">
                         <h4 class="page-header">Data Item Biaya Kesehatan</h4>
                         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                              Tambah
                         </button>
                    </div>
               </div>
               <table class="table">
                    <thead>
                         <tr>
                              <th>No.</th>
                              <th>Jenis Biaya</th>
                              <th>Tanggal</th>
                              <th>Pasien</th>
                              <th>Uraian</th>
                              <th>Biaya</th>
                              <th>Aksi</th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                              <td>1</td>
                              <td>Penggantian</td>
                              <td>25 Mei 2022</td>
                              <td>Hofidatul</td>
                              <td>sakit demam</td>
                              <td>Rp. 4.000.000</td>
                              <td> Edit | hapus</td>
                         </tr>
                    </tbody>
               </table>

               <div class="row">
                    <div class="col-lg-12">
                         <a class="btn btn-primary" href="?menu=resi">Selesai</a>
                    </div>
               </div>

               <!-- Modal -->
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                              <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   <h4 class="modal-title" id="myModalLabel">Tambah Item Biaya Kesehatan</h4>
                              </div>
                              <div class="modal-body">
                                   <form>
                                        <div class="row">
                                             <div class="col-md-2 marginku">
                                                  <label>No Item</label>
                                                  <input class="form-control" type="number" name="noitem" required value="1" readonly>
                                             </div>
                                             <div class="col-md-5 marginku">
                                                  <label>Jenis Biaya</label>
                                                  <select name="jenis" class="form-control" required>
                                                       <option value="" selected>-- Pilih Salah Satu --</option>
                                                       <option value="">Biaya Pemeriksaan</option>
                                                       <option value="">Biaya Inap</option>
                                                  </select>
                                             </div>
                                             <div class="col-md-5 marginku">
                                                  <label>Tanggal Terima</label>
                                                  <input class="form-control" type="date" name="tanggal_periksa" required>
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 marginku">
                                                  <label>Tanggal periksa</label>
                                                  <input class="form-control" type="date" name="tanggal_periksa" required>
                                             </div>
                                             <div class="col-md-4 marginku">
                                                  <label>pasien</label>
                                                  <select name="jenis" class="form-control" required>
                                                       <option value="" selected>-- Pilih Salah Satu --</option>
                                                       <option value="">Hofidatul</option>
                                                       <option value="">Nova Ayu</option>
                                                  </select>
                                             </div>
                                             <div class="col-md-4 marginku">
                                                  <label>Dokter</label>
                                                  <select name="jenis" class="form-control" required>
                                                       <option value="" selected>-- Pilih Salah Satu --</option>
                                                       <option value="">Armani</option>
                                                       <option value="">Sung</option>
                                                  </select>
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-12 marginku">
                                                  <label>Uraian</label>
                                                  <input class="form-control" type="text" name="uraian" required>
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-6 marginku">
                                                  <label>Penyakit</label>
                                                  <input class="form-control" type="text" name="penyakit" required>
                                             </div>
                                             <div class="col-md-6 marginku">
                                                  <label>Biaya</label>
                                                  <input class="form-control" type="text" name="biaya" required>
                                             </div>
                                        </div>
                                   </form>
                              </div>
                              <div class="modal-footer">
                                   <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                   <button type="button" class="btn btn-primary">Tambah</button>
                              </div>
                         </div>
                    </div>
               </div>

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