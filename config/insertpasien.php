<?php

include 'koneksi.php';

$nomor_pasien     = $_POST['nomor'];
$id_sub            = $_POST['id_sub'];
$jenis_penggantian = $_POST['jenis_penggantian'];
$id_karyawan       = $_POST['karyawan'];
$tanggal_daftar          = $_POST['tanggal_input'];
$uraian        = $_POST['uraian'];
$jumlah_item           = $_POST['jumlah_item'];
$rekening           = $_POST['rekening'];
$status           = "1";

$jenis_biaya     = $_POST['jenis_biaya'];
$tanggal_terima            = $_POST['tanggal_terima'];
$tanggal_periksa       = $_POST['tanggal_periksa'];
$id_pasien          = $_POST['id_pasien'];
$id_dokter        = $_POST['id_dokter'];
$uraian           = $_POST['uraian_pasien'];
$penyakit           = $_POST['penyakit'];
$biaya           = $_POST['biaya'];



if (isset($_POST['kirim'])) {
    $str = 'abcdefghij1234567890';
    $shuffled = str_shuffle($str);
    $namafile = $_FILES['kwitansi']['name'];
    // Check if file already exists
    $target_dir = "../img/pasien/";
    $target_file1 = $target_dir . $namafile;
    if (file_exists($target_file1)) {
        $namafile = $shuffled . $_FILES['kwitansi']['name'];
    }
    $target_file = $target_dir . $namafile;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["kirim"])) {
        $check = getimagesize($_FILES["kwitansi"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
            // echo $namafile;die;

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                die;
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["kwitansi"]["tmp_name"], $target_file)) {
                    echo "The file " . htmlspecialchars($namafile) . " has been uploaded.";
                } else {
                    $uploadOk = 0;
                }
            }
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // $sql3 = mysqli_query($kon, "SELECT max(id_dokter) as id_dokter FROM tb_dokter");
    // $bc3  = mysqli_fetch_array($sql3);
    // @$id_dokter = $bc3['id_dokter'] + 1;
    // echo "$id_dokter";

    $sql1 = "INSERT INTO tb_pasien VALUES ('', '$nomor_pasien', '$id_sub',  '$id_karyawan', '$jenis_penggantian', '$tanggal_daftar', '$uraian', '$jumlah_item', '$rekening', '$namafile', '1')";
    $hasil = mysqli_query($kon, $sql1);

    $sql2 = "INSERT INTO detail_pasien VALUES ('', '$nomor_pasien', '$jenis_biaya',  '$tanggal_terima', '$tanggal_periksa', '$id_pasien', '$id_dokter', '$uraian', '$penyakit', '', '$biaya')";
    mysqli_query($kon, $sql2);

    if ($hasil) {
        echo '<script language="javascript">
        alert ("Data Berhasil Disimpan");
        </script>';
        echo '<script type="text/javascript">
            window.location.href = "http://localhost/unair/admin/index.php?menu=inputPasien2&id=' . $nomor_pasien . '";
     </script>';
    } else {
        echo '<script language="javascript">
        alert ("Data gagal Disimpan");
        </script>';
        echo $penyakit;
        echo '<script type="text/javascript">
            window.location.href = "http://localhost/unair/admin/index.php?menu=inputPasien";
     </script>';
    }
}
