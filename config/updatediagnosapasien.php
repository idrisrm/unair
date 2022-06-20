<?php

include 'koneksi.php';

$diagnosa = $_POST['diagnosa'];
$id = $_POST['id'];



if (isset($_POST['kirim'])) {

    $sql2 = "UPDATE detail_pasien SET diagnosa = '$diagnosa' WHERE id_detail = '$id'";
    $hasil = mysqli_query($kon, $sql2);

    if ($hasil) {
        echo '<script language="javascript">
        alert ("Data Berhasil Diubah");
        </script>';
        echo '<script type="text/javascript">
            window.location.href = "http://localhost/unair/admin/index.php?menu=diagnosapasien";
     </script>';
    } else {
        echo '<script language="javascript">
        alert ("Data gagal Diubah");
        </script>';
    }
}
