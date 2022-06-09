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
				<th>No</th>
				<th>Nama Dokter</th>
				<th>No. STR</th>
				<th>Jenis Kelamin</th>
				<th>Spesialis</th>
				<th>Tempat Praktik</th>
			</tr>
		</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Dr. Sung</td>
					<td>0361788889</td>
					<td>laki-Laki</td>
					<td>Dokter Umum</td>
					<td>RSU Probolinggo</td>
					<!-- <td>
						<a href="?menu=editDokter&id=<?php echo "$bc[id_dokter]"; ?>">
							<i class="glyphicon glyphicon-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="del_dokter.php?id=<?php echo "$bc[id_dokter]"; ?>">
							<i class="glyphicon glyphicon-remove" style="color:#FF0000"></i></a>
					</td> -->
				</tr>
			</tbody>
	</table>
</body>

</html>