<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$str = $_POST['str'];
$specialis = $_POST['specialis'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$praktik = $_POST['praktik'];

if (isset($_POST['kirim'])) {

    $sql2 = "UPDATE tb_dokter SET nomor_str = '$str', nama_dokter = '$nama', specialis = '$specialis', jk_dokter = '$jk', alamat_dokter = '$alamat', tempat_praktik = '$praktik' WHERE id_dokter = '$id'";
    $hasil = mysqli_query($kon, $sql2);

    if ($hasil) {
        echo '<script language="javascript">
        alert ("Data Berhasil Diubah");
        </script>';
        echo '<script type="text/javascript">
            window.location.href = "http://localhost/unair/admin/index.php?menu=dokter";
     </script>';
    } else {
        echo '<script language="javascript">
        alert ("Data gagal Diubah");
        </script>';
        echo '<script type="text/javascript">
            window.location.href = "http://localhost/unair/admin/index.php?menu=dokter";
     </script>';
    }
}
