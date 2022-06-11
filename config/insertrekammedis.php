<?php

include 'koneksi.php';

$tanggal_periksa       = $_POST['tanggal_periksa'];
$id_pasien          = $_POST['id_pasien'];
$id_dokter        = $_POST['id_dokter'];
$diagnosa           = $_POST['diagnosa'];
$umur           = $_POST['umur'];
$terapi           = $_POST['terapi'];
$tanggal = date("Ymd");


if (isset($_POST['kirim'])) {
    // $sql3 = mysqli_query($kon, "SELECT max(id_dokter) as id_dokter FROM tb_dokter");
    // $bc3  = mysqli_fetch_array($sql3);
    // @$id_dokter = $bc3['id_dokter'] + 1;
    // echo "$id_dokter";

    $sql1 = "INSERT INTO tb_rekam_medis VALUES ('', '$id_pasien', '$id_dokter',  '$tanggal_periksa', $tanggal, '$umur', '$terapi', '$diagnosa', 1)";
    $hasil = mysqli_query($kon, $sql1);


    if ($hasil) {
        echo '<script language="javascript">
        alert ("Data Berhasil Disimpan");
        </script>';
        echo '<script type="text/javascript">
            window.location.href = "http://localhost/unair/admin/index.php?menu=rekam_medis";
     </script>';
    } else {
        echo '<script language="javascript">
        alert ("Data gagal Disimpan");
        </script>';
        echo '<script type="text/javascript">
            window.location.href = "http://localhost/unair/admin/index.php?menu=inputRekam";
     </script>';
    }
}
