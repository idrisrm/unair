<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Rekam Medis</title>
</head>

<body>
	<table>
		<tr>
			<td widht="10%">
				<h1>Data Dokter</h1>
			</td>
		</tr>
	</table>
	<a href="?menu=inputDokter" class="btn btn-success">Tambah Data Dokter</a>
	<table class="table">
		<thead>
			<tr>
				<th>Nama Pasien</th>
				<th>Tanggal Lahir</th>
				<th>Pekerjaan</th>
				<th>Alamat</th>
				<th>No. Telepon</th>
				<th>Status</th>
				<th>Diagnosa</th>
				<th>Rawat</th>
				<th>Komplikasi</th>
				<th>Tindakan</th>
				<th>Keadaan</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<?php
		include '../config/koneksi.php';
		$no = 0;
		$sql = mysqli_query($kon, "SELECT * FROM tb_dokter WHERE stts='1'  ORDER BY id_dokter desc ");
		while ($bc = mysqli_fetch_array($sql)) {
			$sql2 = mysqli_query($kon, "SELECT * FROM tb_user WHERE id_dokter='$bc[id_dokter]'");
			$bc2  = mysqli_fetch_array($sql2);
			$no++;
		?>
			<tbody>
				<tr>
					<td><?php echo "$no"; ?></td>
					<td><?php echo "$bc[id_dokter]"; ?></td>
					<td><?php echo "$bc[nama_dokter]"; ?></td>
					<td><?php echo "$bc[jk_dokter]"; ?></td>
					<td><?php echo "$bc[umur]"; ?></td>
					<td><?php echo "$bc[alamat_dokter]"; ?></td>
					<td><?php echo "$bc2[pengguna]"; ?></td>
					<td><?php echo "$bc2[sandi]"; ?></td>
					<td>
						<a href="?menu=editDokter&id=<?php echo "$bc[id_dokter]"; ?>">
							<i class="glyphicon glyphicon-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="del_dokter.php?id=<?php echo "$bc[id_dokter]"; ?>">
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