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
	<br>
	<!-- <a href="?menu=inputDokter" class="btn btn-success">Tambah Data Dokter</a> -->
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Dokter</th>
				<th>No. STR</th>
				<th>Jenis Kelamin</th>
				<th>Spesialis</th>
				<th>Tempat Praktik</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "../config/cek_session1.php";
			$ambildata2 = mysqli_query($kon, "SELECT * FROM tb_dokter WHERE status = 1");
			$no = 1;
			while ($data = mysqli_fetch_array($ambildata2)) { ?>
				<tr>
					<td><?= $no?></td>
					<td><?= $data['nama_dokter']?></td>
					<td><?= $data['str']?></td>
					<td><?= $data['jk_dokter']?></td>
					<td><?= $data['specialis']?></td>
					<td><?= $data['tempat_praktik']?></td>
					<!-- <td>
						<a href="?menu=editDokter&id=<?php echo "$bc[id_dokter]"; ?>">
							<i class="glyphicon glyphicon-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="del_dokter.php?id=<?php echo "$bc[id_dokter]"; ?>">
							<i class="glyphicon glyphicon-remove" style="color:#FF0000"></i></a>
					</td> -->
				</tr>
			<?php $no++; } ?>
		</tbody>
	</table>
</body>

</html>