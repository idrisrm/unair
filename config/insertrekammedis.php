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
    $str = 'abcdefghij1234567890';
    $shuffled = str_shuffle($str);
    $namafile = $_FILES['kwitansi']['name'];
    // Check if file already exists
    $target_dir = "../img/rekammedis/";
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
    if ($uploadOk = 1) {
        $sql1 = "INSERT INTO tb_rekam_medis VALUES ('', '$id_pasien', '$id_dokter',  '$tanggal_periksa', $tanggal, '$umur', '$terapi', '', '$namafile', 1)";
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
    } else {
        echo '<script language="javascript">
        alert ("Gambar gagal diupload, silahkan cek kembali file tersebut");
        </script>';
        echo '<script type="text/javascript">
            window.location.href = "http://localhost/unair/admin/index.php?menu=inputRekam";
     </script>';
    }
}
