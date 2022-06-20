<?php

include '../config/koneksi.php';
include "../config/cek_session1.php";
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
                              <input class="form-control" type="text" name="tanggal_input" value="<?= $data['jenis_penggantian'] == 1 ? "Perorangan" : "Tagihan Pihak Ketiga" ?>" required readonly>
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
                    <?php if ($data['jenis_penggantian'] == 2) { ?>
                         <div class="row">
                              <div class="col-md-12 marginku">
                                   <label>Nomor Rekening Pihak Ketiga</label>
                                   <input class="form-control" placeholder="Enter Text" type="number" value="<?= $data['rekening'] ?>" name="rekening" required readonly>
                              </div>
                         </div>
                    <?php } ?>
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
                              <th>Diagnosa</th>
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
                                   <td>
                                        <?php if ($data2['jenis_biaya'] == 1) {
                                             echo 'Biaya Pemeriksaan';
                                        } else if ($data2['jenis_biaya'] == 2) {
                                             echo 'Biaya Apotek';
                                        } elseif ($data2['jenis_biaya'] == 3) {
                                             echo 'Biaya Rawat Inap';
                                        } elseif ($data2['jenis_biaya'] == 4) {
                                             echo 'Biaya Resep Kacamata';
                                        } ?>
                                   </td>
                                   <td><?= $data2['tanggal_periksa'] ?></td>
                                   <td><?= $data2['nama_karyawan'] ?></td>
                                   <td><?= $data2['uraian'] ?></td>
                                   <td><?= $data2['diagnosa'] ?></td>
                                   <td>Rp. <?= number_format($data2['biaya'], 0, ",", ".") ?></td>
                                   <td>
                                        <a href="?menu=editPasien&id=<?= $data2['id_detail'] ?>">
                                             <i class="glyphicon glyphicon-edit"></i></a>
                                        <a href="" onclick="confirm_modal('../config/hapuspasien.php?id=<?= $data2['id_detail'] ?>&nomor=<?= $data2['nomor_pasien'] ?> ')" data-toggle="modal" data-target="#modalDelete">
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
                         <a class="btn btn-primary" href="?menu=resi&id=<?= $id ?>">Cetak Dokumen</a>
                         <a href="" class="btn btn-danger" onclick="confirm_modal1('../config/hapusdokumen.php?nomor=<?= $id ?>')" data-toggle="modal" data-target="#modalDelete1">Hapus Dokumen</a>
                         <a class="btn btn-success" href="?menu=pasien">Selesai</a>
                    </div>
               </div>

               <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                              <div class="modal-header">
                                   <h5 class="modal-title" id="deleteModalLabel">Hapus Data</h5>
                                   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                   </button>
                              </div>
                              <div class="modal-body">Apakah Anda yakin untuk menghapus data?</div>
                              <div class="modal-footer">
                                   <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                                   <a href="" id="delete_link" class="btn btn-danger">hapus</a>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="modal fade" id="modalDelete1" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                              <div class="modal-header">
                                   <h5 class="modal-title" id="deleteModalLabel">Hapus Dokumen</h5>
                                   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                   </button>
                              </div>
                              <div class="modal-body">Apakah Anda yakin untuk menghapus data?</div>
                              <div class="modal-footer">
                                   <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                                   <a href="" id="delete_link1" class="btn btn-danger">hapus</a>
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

<script type="text/javascript">
     function confirm_modal(delete_url) {
          console.log(delete_url);
          document.getElementById('delete_link').setAttribute('href', delete_url);
          // document.getElementById('delete_link').href = delete_url;

          $('#hapusModal').modal('show', {
               backdrop: 'static'
          });
     }

     function confirm_modal1(delete_url1) {
          console.log(delete_url1);
          document.getElementById('delete_link1').setAttribute('href', delete_url1);
          // document.getElementById('delete_link').href = delete_url;

          $('#hapusModal1').modal('show', {
               backdrop: 'static'
          });
     }
</script>

</body>

</html>