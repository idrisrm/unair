<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Untitled Document</title>
</head>

<body>
	<h1>Data Pasien Karyawan</h1>
	<a href="?menu=inputPasien" class="btn btn-success">
		Tambah Pasien
	</a>

	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nomor Pasien</th>
				<th>Nama Pasien</th>
				<th>Tanggal Daftar</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<?php
		include '../config/koneksi.php';
		$no = 0;
		$sql = mysqli_query($kon, "SELECT * FROM tb_pasien WHERE stts='1'  ORDER BY id_pasien desc ");
		while ($bc = mysqli_fetch_array($sql)) {
			$no++;
		?>
			<tbody>
				<tr>
					<td><?php echo "$no"; ?></td>
					<td><?php echo "$bc[nomer_pasien]"; ?></td>
					<td><?php echo "

				$bc[nama_pasien]"; ?></td>
					<td><?php echo "$bc[tgl_daftar]"; ?></td>
					<td>
						<a href="?menu=editPasien&id=<?php echo "$bc[id_pasien]"; ?>">
							<i class="glyphicon glyphicon-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="del_pasien.php?id=<?php echo "$bc[id_pasien]"; ?>">
							<i class="glyphicon glyphicon-remove" style="color:#FF0000"></i></a>
					</td>
				</tr>
			</tbody>
		<?php
		}
		?>
	</table>
</body>

</html>