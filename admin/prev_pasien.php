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
				<th>Tanggal Periksa</th>
				<th>Penyakit</th>
				<th>Biaya</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<?php
		include '../config/koneksi.php';
		include "../config/cek_session1.php";
		$no = 0;
		$sql = mysqli_query($kon, "SELECT * FROM detail_pasien join tb_karyawan on tb_karyawan.id = detail_pasien.id_pasien join tb_dokter on tb_dokter.id_dokter = detail_pasien.id_dokter");
		while ($bc = mysqli_fetch_array($sql)) {
			$no++;
		?>
			<tbody>
				<tr>
					<td><?php echo "$no"; ?></td>
					<td><?php echo "$bc[nomor_pasien]"; ?></td>
					<td><?php echo "

				$bc[nama_karyawan]"; ?></td>
					<td><?php echo "$bc[tanggal_periksa]"; ?></td>
					<td><?php echo "$bc[penyakit]"; ?></td>
					<td>Rp. <?php echo "$bc[biaya]"; ?></td>
					<td>
						<a href="?menu=inputPasien2&id=<?php echo "$bc[nomor_pasien]"; ?>">
							<i class="glyphicon glyphicon-plus"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
						
						<!-- <a href="?menu=resi&id=<?php echo "$bc[nomor_pasien]"; ?>">
							<i class="glyphicon glyphicon-print" ></i></a> -->
					</td>
				</tr>
			</tbody>
		<?php
		}
		?>
	</table>
</body>

</html>