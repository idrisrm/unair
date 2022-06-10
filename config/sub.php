<?php

include 'koneksi.php';

$id = $_POST['id'];
$sql = mysqli_query($kon, "SELECT * FROM tb_karyawan join unit_sub on unit_sub.id = tb_karyawan.id_sub WHERE tb_karyawan.id = '$id'");
$data = mysqli_fetch_array($sql);

$data = array(
    'nama' =>  $data['nama_sub'],
    'id_sub' => $data['id_sub']
    );

//tampil data
echo json_encode($data);