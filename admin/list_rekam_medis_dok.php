<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Untitled Document</title>
</head>

<body>
	<div class="col-md-9">
		<h1>Data Rekam Medis</h1>
	</div>
	<div class="col-md-3">
		<form class="navbar-form navbar-left" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" style="margin-top: 25px;">
			<div class="form-group">
				<input type="text" class="form-control" name="pencarian" placeholder="Masukan Nama">
			</div>
			<button type="submit" name="cari" class="btn btn-default" value="CARI">Submit</button>
		</form>
	</div>

	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nama Pasien</th>
				<th>Dokter</th>
				<th>Tanggal Periksa</th>
				<th>Terapi</th>
				<th>Diagnosa</th>
				<th>Pilihan</th>
			</tr>
		</thead>
		<?php
		include '../config/koneksi.php';
		include "../config/cek_session1.php";
		$no = 0;
		$ke = -1;
		if (!isset($_POST['cari']) && empty($_POST['pencarian'])) {
			$sql = mysqli_query($kon, "SELECT * FROM tb_rekam_medis join tb_karyawan on tb_karyawan.id = tb_rekam_medis.id_pasien join tb_dokter on tb_dokter.id_dokter = tb_rekam_medis.id_dokter where diagnosa = ''");
			// var_dump(mysqli_fetch_array($sql));die;
			while ($bc = mysqli_fetch_array($sql)) {
				$no++;
				$ke++; ?>
				<tbody>
					<tr>
						<td><?php echo "$no"; ?></td>
						<td><?php echo "$bc[nama_karyawan]"; ?></td>
						<td><?php echo "$bc[nama_dokter]"; ?></td>
						<td><?php echo "$bc[tgl_periksa]"; ?></td>
						<td><?php echo "$bc[terapi]"; ?></td>
						<td><?php echo "$bc[diagnosa]"; ?></td>
						<td>
							<a href="?menu=diagnosarekam&id=<?php echo "$bc[id_rekam]"; ?>">
								<i class="glyphicon glyphicon-plus"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

							<!-- <a href="?menu=resi&id=<?php echo "$bc[nomor_pasien]"; ?>">
							<i class="glyphicon glyphicon-print" ></i></a> -->
						</td>
					</tr>
				</tbody>
			<?php
			}
		} else {
			$sql4	=	mysqli_query($kon, "SELECT * FROM tb_karyawan WHERE nama_karyawan LIKE '%$_POST[pencarian]%'");
			$bc4	=	mysqli_fetch_array($sql4);

			$sql = mysqli_query($kon, "SELECT * FROM tb_rekam_medis WHERE id_pasien='$bc4[id]' && diagnosa = '' ORDER BY id_rekam desc ");
			while ($bc = mysqli_fetch_array($sql)) {

				// $sql2	=	mysqli_query($kon, "SELECT * FROM tb_pasien WHERE id_pasien='$bc[id_pasien]'");
				// $bc2	=	mysqli_fetch_array($sql2);

				// $sql3	=	mysqli_query($kon, "SELECT * FROM tb_dokter WHERE id_dokter='$bc[id_dokter]'");
				// $bc3	=	mysqli_fetch_array($sql3);

				$sql2 = mysqli_query($kon, "SELECT * FROM tb_rekam_medis join tb_karyawan on tb_karyawan.id = tb_rekam_medis.id_pasien join tb_dokter on tb_dokter.id_dokter = tb_rekam_medis.id_dokter WHERE tb_rekam_medis.id_pasien='$bc[id_pasien]'");
				$bc2	=	mysqli_fetch_array($sql2);

				$no++;
			?>
				<tbody>
					<tr>
						<td><?php echo "$no"; ?></td>
						<td><?php echo "$bc2[nama_karyawan]"; ?></td>
						<td><?php echo "$bc2[nama_dokter]"; ?></td>
						<td><?php echo "$bc2[tgl_periksa]"; ?></td>
						<td><?php echo "$bc2[terapi]"; ?></td>
						<td><?php echo "$bc2[diagnosa]"; ?></td>



					</tr>
				</tbody>
		<?php
			}
		}
		?>
	</table>
</body>

</html>