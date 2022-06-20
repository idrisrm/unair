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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
     $(document).ready(function() {
          $('#karyawan').change(function() {
               var id = $(this).val();
               console.log(id);
               // $('#id_sub').val(id);
               $.ajax({
                    url: "http://localhost/unair/config/sub.php",
                    method: "POST",
                    data: {
                         id: id
                    },
                    success: function(data) {
                         var json = data,
                              obj = JSON.parse(json);
                         $('#nama_sub').val(obj.nama);
                         $('#id_sub').val(obj.id_sub);
                         $('#nid').val(obj.nid);
                         console.log(obj.nama);
                    }
               });
          });
     });
</script>
<script type="text/javascript">
     $(document).ready(function() {
          $('#jenispenggantian').change(function() {
               var id = $(this).val();
               console.log(id);
               if (id == 1) {
                    $("#rekening").remove();
                    $("#rek").append("<input id='rekening' class='form-control' placeholder='Enter Text' type='hidden' name='rekening' value='-' required>");
               } else if (id == 2) {
                    $("#rekening").remove();
                    $("#rek").append("<div id='rekening' class='col-md-12 marginku'><label>Nomor Rekening Pihak Ketiga</label><input id='rekening' class='form-control' placeholder='Enter Number' type='number' name='rekening' required></div>");
               }
          });
     });
</script>
<!-- <script>
     function tampilkan() {

          var nama_kota = document.getElementById("jenispenggantian").value;
          var p_kontainer = document.getElementById("rek");
          console.log(nama_kota);
          if (nama_kota == "1") {
               p_kontainer.innerHTML = "Jakarta Ibu kota Republik Indonesia";
               console.log("hehe");
          } else if (nama_kota == "2") {
               p_kontainer.innerHTML = "Bandung kota kembang";
               console.log("huhu");
          }
     }
</script> -->

<div class="panel-body" style="background-color: #f5f5f5; border-radius: 10px;">
     <div class="row">
          <div class="col-lg-12">
               <form action="../config/insertpasien.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                         <div class="col-md-1 marginku">
                              <label>Nomor</label>
                              <?php $ambildata = mysqli_query($kon, "SELECT * FROM tb_pasien WHERE stts = 1 ORDER BY id_pasien DESC LIMIT 1");
                              $data = mysqli_fetch_array($ambildata);
                              ?>
                              <?php if ($data) { ?>
                                   <input class="form-control" type="text" value="JPP<?= $data['id_pasien'] + 1 ?>" name="nomor" required readonly>
                              <?php } else { ?>
                                   <input class="form-control" type="text" value="JPP1" name="nomor" required readonly>
                              <?php } ?>
                         </div>
                         <div class="col-md-2 marginku">
                              <label>Tanggal</label>
                              <input class="form-control" type="date" name="tanggal_input" required>
                         </div>
                         <div class="col-md-3 marginku">
                              <label>Jenis Penggantian</label>
                              <select name="jenis_penggantian" id="jenispenggantian" class="form-control" required>
                                   <option value="" selected>-- Pilih Salah Satu --</option>
                                   <option value="1">Perorangan</option>
                                   <option value="2">Tagihan Pihak Ketiga</option>
                              </select>
                         </div>
                         <div class="col-md-2 marginku">
                              <label>Unit Sub</label>
                              <input class="form-control" type="text" id="nama_sub" required readonly>
                              <input class="form-control" type="hidden" id="id_sub" name="id_sub" required readonly>
                         </div>
                         <div class="col-md-2 marginku">
                              <label>NID</label>
                              <input class="form-control" type="text" id="nid" required readonly>
                         </div>
                         <div class="col-md-2 marginku">
                              <label>Penerima</label>
                              <select name="karyawan" id="karyawan" class="form-control" onkeypress="isi_otomatis()" required>
                                   <option value="">-- Pilih Salah Satu --</option>
                                   <?php
                                   include "../config/cek_session1.php";
                                   $ambildata = mysqli_query($kon, "SELECT * FROM tb_karyawan WHERE status = 1");
                                   while ($data = mysqli_fetch_array($ambildata)) { ?>
                                        <option value="<?= $data["id"] ?>"><?= $data["nama_karyawan"] ?></option>
                                   <?php } ?>
                              </select>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-5 marginku">
                              <label>Uraian</label>
                              <input class="form-control" placeholder="Enter Text" type="text" name="uraian" required>
                         </div>
                         <div class="col-md-5 marginku">
                              <label>Kwitansi</label>
                              <input class="form-control" placeholder="Enter Text" type="file" name="kwitansi" required>
                         </div>
                         <div class="col-md-2 marginku">
                              <label>Jumlah Item</label>
                              <input class="form-control" placeholder="Enter Number" type="number" name="jumlah_item" required>
                         </div>
                    </div>
                    <div class="row" id="rek">
                         <!-- tempat rekening pihak ketiga -->
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
                                        <div class="row">
                                             <!-- <div class="col-md-2 marginku">
                                                  <label>No Item</label>
                                                  <input class="form-control" type="number" name="noitem" required value="1" readonly>
                                             </div> -->
                                             <div class="col-md-6 marginku">
                                                  <label>Jenis Biaya</label>
                                                  <select name="jenis_biaya" class="form-control" required>
                                                       <option value="" selected>-- Pilih Salah Satu --</option>
                                                       <option value="1">Biaya Pemeriksaan</option>
                                                       <option value="2">Biaya Apotek</option>
                                                       <option value="3">Biaya Rawat Inap</option>
                                                       <option value="4">Biaya Resep Kacamata</option>
                                                  </select>
                                             </div>
                                             <div class="col-md-6 marginku">
                                                  <label>Tanggal Terima</label>
                                                  <input class="form-control" type="date" name="tanggal_terima" required>
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4 marginku">
                                                  <label>Tanggal periksa</label>
                                                  <input class="form-control" type="date" name="tanggal_periksa" required>
                                             </div>
                                             <div class="col-md-4 marginku">
                                                  <label>pasien</label>
                                                  <select name="id_pasien" id="id_pasien" class="form-control" onkeypress="isi_otomatis()" required>
                                                       <option value="">-- Pilih Salah Satu --</option>
                                                       <?php
                                                       $ambildata = mysqli_query($kon, "SELECT * FROM tb_karyawan WHERE status = 1");
                                                       while ($data = mysqli_fetch_array($ambildata)) { ?>
                                                            <option value="<?= $data["id"] ?>"><?= $data["nama_karyawan"] ?></option>
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
                                                            <option value="<?= $data["id_dokter"] ?>"><?= $data["nama_dokter"] ?></option>
                                                       <?php } ?>
                                                  </select>
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-12 marginku">
                                                  <label>Uraian</label>
                                                  <input class="form-control" placeholder="Enter Text" type="text" name="uraian_pasien" required>
                                             </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-6 marginku">
                                                  <label>Penyakit</label>
                                                  <input class="form-control" placeholder="Enter Text" type="text" name="penyakit" required>
                                             </div>
                                             <div class="col-md-6 marginku">
                                                  <label>Biaya</label>
                                                  <input class="form-control" placeholder="Enter Number" type="number" name="biaya" required>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="submit" name="kirim" class="btn btn-primary">Tambah</button>
                                   </div>
                              </div>
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
                              <!-- <td>1</td>
                              <td>Penggantian</td>
                              <td>25 Mei 2022</td>
                              <td>Hofidatul</td>
                              <td>sakit demam</td>
                              <td>Rp. 4.000.000</td>
                              <td> Edit | hapus</td> -->
                         </tr>
                    </tbody>
               </table>

               <!-- <div class="row">
                    <div class="col-lg-12">
                         <a class="btn btn-primary" href="">Simpan</a>
                         <a class="btn btn-default" href="?menu=resi">Selesai</a>
                    </div>
               </div> -->



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

@$nomor_pasien     = $_POST['nomor'];
@$id_sub            = $_POST['id_sub'];
@$id_karyawan       = $_POST['karyawan'];
@$tanggal_daftar          = $_POST['tanggal_input'];
@$uraian        = $_POST['uraian'];
@$jumlah_item           = $_POST['jumlah_item'];
@$status           = "1";

@$jenis_biaya     = $_POST['jenis_biaya'];
@$tanggal_terima            = $_POST['tanggal_terima'];
@$tanggal_periksa       = $_POST['tanggal_periksa'];
@$id_pasien          = $_POST['id_pasien'];
@$id_dokter        = $_POST['id_dokter'];
@$uraian           = $_POST['uraian_pasien'];
@$penyakit           = $_POST['penyakit'];
@$biaya           = $_POST['biaya'];



if (isset($_POST['kirim'])) {
     // $sql3 = mysqli_query($kon, "SELECT max(id_dokter) as id_dokter FROM tb_dokter");
     // $bc3  = mysqli_fetch_array($sql3);
     // @$id_dokter = $bc3['id_dokter'] + 1;
     // echo "$id_dokter";

     $sql1 = "INSERT INTO tb_pasien VALUES ('', '$nomor_pasien', '$id_sub',  '$id_karyawan', '$tanggal_daftar', '$uraian', '$jumlah_item', '1')";
     mysqli_query($kon, $sql1);

     $sql2 = "INSERT INTO detail_pasien VALUES ('', '$nomor_pasien', '$jenis_biaya',  '$tanggal_terima', '$tanggal_periksa', '$id_pasien', '$id_dokter', '$uraian', $penyakit, $biaya)";
     mysqli_query($kon, $sql2);

     echo '<script language="javascript">
alert ("Data Berhasil Disimpan");
</script>';


?>
     <script type="text/javascript">
          //window.location ="?menu=dokter" ;
     </script>
<?php
     // header('location:?menu=dokter');
}
?>
</body>

</html>