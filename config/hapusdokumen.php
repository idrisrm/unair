<?php

include 'koneksi.php';

$nomor_pasien = $_GET['nomor'];



if (isset($nomor_pasien)) {

    $sql2 = "DELETE FROM detail_pasien WHERE nomor_pasien = '$nomor_pasien'";
    $hasil = mysqli_query($kon, $sql2);
    $sql3 = "DELETE FROM tb_pasien WHERE nomor_pasien = '$nomor_pasien'";
    $hasil2 = mysqli_query($kon, $sql3);

    if ($hasil && $hasil2) {
        echo '<script language="javascript">
        alert ("Data Berhasil Dihapus");
        </script>';
        echo '<script type="text/javascript">
            window.location.href = "http://localhost/unair/admin/index.php?menu=pasien";
     </script>';
    } else {
        echo '<script language="javascript">
        alert ("Data gagal Dihapus");
        </script>';
    }
}
