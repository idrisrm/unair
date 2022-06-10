<?php

include '../config/koneksi.php';

$id = $_GET['id'];

// if ($id) {
//      echo '<script language="javascript">
// alert ("ada ' . $id . '");
// </script>';
// } else {
//      echo '<script language="javascript">
// alert ("tidak ada");
// </script>';
// }

$ambildata = mysqli_query($kon, "SELECT * FROM tb_pasien join tb_karyawan on tb_karyawan.id = tb_pasien.id_karyawan join unit_sub on unit_sub.id = tb_pasien.id_sub WHERE nomor_pasien = '$id'");
$data = mysqli_fetch_array($ambildata);


// var_dump($data2);die;

?>


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

<div class="panel-body" style="background-color: #f5f5f5; border-radius: 10px;">
     <div class="row">
          <div class="col-lg-12">
               <form action="../config/insertpasien2.php" method="POST">
                    <div class="row">
                         <div class="col-md-1 marginku">
                              <label>Nomor</label>
                              <input class="form-control" type="text" value="<?= $data['nomor_pasien'] ?>" name="nomor" required readonly>
                         </div>
                         <div class="col-md-2 marginku">
                              <label>Tanggal</label>
                              <input class="form-control" type="date" name="tanggal_input" value="<?= $data['tanggal_daftar'] ?>" required readonly>
                         </div>
                         <div class="col-md-3 marginku">
                              <label>Jenis Penggantian</label>
                              <input class="form-control" type="text" name="tanggal_input" value="<?= $data['jenis_penggantian'] == 1 ? "Perorangan" : "Fasilitas Kantor" ?>" required readonly>
                         </div>
                         <div class="col-md-2 marginku">
                              <label>Unit Sub</label>
                              <input class="form-control" type="text" value="<?= $data['nama_sub'] ?>" name="id_sub" required readonly>
                         </div>
                         <div class="col-md-4 marginku">
                              <label>Penerima</label>
                              <input class="form-control" type="text" value="<?= $data['nama_karyawan'] ?>" name="id_sub" required readonly>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-11 marginku">
                              <label>Uraian</label>
                              <input class="form-control" placeholder="Enter Text" type="text" name="uraian" value="<?= $data['uraian'] ?>" required readonly>
                         </div>
                         <div class="col-md-1 marginku">
                              <label>Jumlah Item</label>
                              <input class="form-control" placeholder="Enter Number" value="<?= $data['jumlah_item'] ?>" type="number" name="jumlah_item" required readonly>
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
                                                       <option value="2">Biaya Inap</option>
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
                                                  <input class="form-control" type="text" name="uraian_pasien" required>
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
                         <?php
                         $ambildata2 = mysqli_query($kon, "SELECT * FROM detail_pasien join tb_karyawan on tb_karyawan.id = detail_pasien.id_pasien join tb_dokter on tb_dokter.id_dokter = detail_pasien.id_dokter WHERE nomor_pasien = '$id'");
                         $no = 1;
                         while ($data2 = mysqli_fetch_array($ambildata2)) { ?>
                              <tr>
                                   <td><?= $no ?></td>
                                   <td><?= $data2['jenis_biaya'] == 1 ? "Periksa" : "Rawat Inap" ?></td>
                                   <td><?= $data2['tanggal_periksa'] ?></td>
                                   <td><?= $data2['nama_karyawan'] ?></td>
                                   <td><?= $data2['uraian'] ?></td>
                                   <td>Rp. <?= $data2['biaya'] ?></td>
                                   <td>
                                        <a href="?menu=editPasien&id=">
                                             <i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="del_pasien.php?id=">
                                             <i class="glyphicon glyphicon-trash" style="color:#FF0000"></i></a>
                                   </td>
                              </tr>
                         <?php $no++;
                         } ?>
                    </tbody>
               </table>

               <div class="row">
                    <div class="col-lg-12">
                         <!-- <a class="btn btn-primary" href="">Simpan</a> -->
                         <a class="btn btn-primary" href="?menu=resi">Selesai</a>
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

</body>

</html>