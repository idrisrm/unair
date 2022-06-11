<?php

include 'koneksi.php';

$id_detail = $_GET['id'];
$nomor_pasien = $_GET['nomor'];



if (isset($id_detail)) {

    $sql2 = "DELETE FROM detail_pasien WHERE id_detail = '$id_detail'";
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
