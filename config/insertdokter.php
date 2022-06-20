<?php

include 'koneksi.php';

$nama       = $_POST['nama'];
$jk          = $_POST['jk'];
$alamat        = $_POST['alamat'];
$praktik           = $_POST['praktik'];
$str           = $_POST['str'];
$specialis           = $_POST['specialis'];


if (isset($_POST['kirim'])) {
    $sql1 = "INSERT INTO tb_dokter VALUES ('', '$str', 1,  '$nama', '$specialis', '$praktik', '$jk', '$alamat', 0, 1)";
    $hasil = mysqli_query($kon, $sql1);


    if ($hasil) {
        echo '<script language="javascript">
            alert ("Data Berhasil Disimpan");
            </script>';
        echo '<script type="text/javascript">
                    window.location.href = "http://localhost/unair/admin/index.php?menu=dokter";
             </script>';
    } else {
        echo '<script language="javascript">
            alert ("Data gagal Disimpan");
            </script>';
        echo '<script type="text/javascript">
                window.location.href = "http://localhost/unair/admin/index.php?menu=dokter";
         </script>';
    }
}
