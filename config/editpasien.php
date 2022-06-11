<?php

include 'koneksi.php';

$nomor_pasien     = $_POST['nomor_pasien'];
// $id_sub            = $_POST['id_sub'];
// $jenis_penggantian = $_POST['jenis_penggantian'];
// $id_karyawan       = $_POST['karyawan'];
// $tanggal_daftar          = $_POST['tanggal_input'];
// $uraian        = $_POST['uraian'];
// $jumlah_item           = $_POST['jumlah_item'];
// $status           = "1";

$id_detail = $_POST['id_detail'];
$jenis_biaya     = $_POST['jenis_biaya'];
$tanggal_terima  = $_POST['tanggal_terima'];
$tanggal_periksa       = $_POST['tanggal_periksa'];
$id_pasien          = $_POST['id_pasien'];
$id_dokter        = $_POST['id_dokter'];
$uraian           = $_POST['uraian_pasien'];
$penyakit           = $_POST['penyakit'];
$biaya           = $_POST['biaya'];



if (isset($_POST['kirim'])) {
    // $sql3 = mysqli_query($kon, "SELECT max(id_dokter) as id_dokter FROM tb_dokter");
    // $bc3  = mysqli_fetch_array($sql3);
    // @$id_dokter = $bc3['id_dokter'] + 1;
    // echo "$id_dokter";

    // $sql1 = "INSERT INTO tb_pasien VALUES ('', '$nomor_pasien', '$id_sub',  '$id_karyawan', '$jenis_penggantian', '$tanggal_daftar', '$uraian', '$jumlah_item', '1')";
    // $hasil = mysqli_query($kon, $sql1);

    $sql2 = "UPDATE detail_pasien SET jenis_biaya = '$jenis_biaya', tanggal_terima = '$tanggal_terima', tanggal_periksa = '$tanggal_periksa', id_pasien = '$id_pasien', id_dokter = '$id_dokter', uraian = '$uraian', penyakit = '$penyakit', biaya = '$biaya' WHERE id_detail = '$id_detail'";
    $hasil = mysqli_query($kon, $sql2);

    if ($hasil) {
        echo '<script language="javascript">
        alert ("Data Berhasil Diubah");
        </script>';
        echo '<script type="text/javascript">
            window.location.href = "http://localhost/unair/admin/index.php?menu=inputPasien2&id=' . $nomor_pasien . '";
     </script>';
    } else {
        echo '<script language="javascript">
        alert ("Data gagal Diubah");
        </script>';
    }
}
