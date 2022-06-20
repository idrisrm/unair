<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Rekam Medis</title>
</head>

<body>
	<div class="row">
		<div class="col-md-12">
			<h1>Data Dokter</h1>
		</div>
		<?php
		if ($_SESSION['akses'] == 1) {
		?>
			<div class="col-md-12">
				<a href="?menu=inputDokter" class="btn btn-success">Tambah Dokter</a>
			</div>
		<?php } ?>
	</div>
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
				<th>Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "../config/cek_session1.php";
			$ambildata2 = mysqli_query($kon, "SELECT * FROM tb_dokter WHERE status = 1");
			$no = 1;
			while ($data = mysqli_fetch_array($ambildata2)) { ?>
				<tr>
					<td><?= $no ?></td>
					<td><?= $data['nama_dokter'] ?></td>
					<td><?= $data['nomor_str'] ?></td>
					<td><?= $data['jk_dokter'] ?></td>
					<td><?= $data['specialis'] ?></td>
					<td><?= $data['tempat_praktik'] ?></td>
					<td>
						<a href="?menu=editDokter&id=<?php echo "$data[id_dokter]"; ?>">
							<i class="glyphicon glyphicon-edit"></i></a>
						<a href="" onclick="confirm_modal('../config/hapusdokter.php?id=<?= $data['id_dokter'] ?>')" data-toggle="modal" data-target="#modalDelete"><i style="color:#FF0000" class="glyphicon glyphicon-trash"></i></a>
					</td>
				</tr>
			<?php $no++;
			} ?>
		</tbody>
	</table>
</body>
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="deleteModalLabel">Hapus Data</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Apakah Anda yakin untuk menghapus data?</div>
			<div class="modal-footer">
				<button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
				<a href="" id="delete_link" class="btn btn-danger">hapus</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function confirm_modal(delete_url) {
		console.log(delete_url);
		document.getElementById('delete_link').setAttribute('href', delete_url);

		$('#hapusModal').modal('show', {
			backdrop: 'static'
		});
	}
</script>

</html>