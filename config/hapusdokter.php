<?php

include 'koneksi.php';

$id = $_GET['id'];



if (isset($id)) {

    $sql2 = "UPDATE tb_dokter SET status = 0 WHERE id_dokter = '$id'";
    $hasil = mysqli_query($kon, $sql2);

    if ($hasil) {
        echo '<script language="javascript">
        alert ("Data Berhasil Dihapus");
        </script>';
        echo '<script type="text/javascript">
            window.location.href = "http://localhost/unair/admin/index.php?menu=dokter";
     </script>';
    } else {
        echo '<script language="javascript">
        alert ("Data gagal Dihapus");
        </script>';
    }
}
