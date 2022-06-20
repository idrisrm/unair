<?php
include "../config/koneksi.php";
include "../config/cek_session1.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Selamat Datang di RESY</title>

  <!-- Bootstrap Core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color: white;">

  <div id="wrapper" >

    <?php include "navbar.php"; ?>
    <?php include "sidemenu.php"; ?>

    <!-- Page Content -->
    <div id="page-wrapper" >
      <div class="container-fluid">
        
        <div class="row">

          <?php
          switch (@$_GET['menu']) {
              //pasien
            case 'pasien':
              include 'prev_pasien.php';
              break;
            case 'inputPasien':
              include 'input_pasien.php';
              break;
            case 'inputPasien2':
              include 'input_pasien2.php';
              break;
            case 'editPasien':
              include 'edit_pasien.php';
              break;
            case 'inputRekam':
              include 'input_rekam.php';
              break;
              //dokter
            case 'dokter':
              include 'prev_dokter.php';
              break;
            case 'inputPasien':
              include 'input_pasien.php';
              break;
            case 'inputDokter':
              include 'input_dokter.php';
              break;
            case 'editDokter':
              include 'edit_dokter.php';
              break;
              //pendaftaran periksa
            case 'pendaftaran':
              include 'prev_pendaftaran.php';
              break;
            case 'inputPendaftaran':
              include 'input_pendaftaran.php';
              break;
            case 'editPendaftaran':
              include 'update_pendaftaran.php';
              break;
              //rekam medis
            case 'rekam_medis':
              include 'prev_rekam_medis.php';
              break;
            case 'inputRekamMedis':
              include 'input_rekam_medis.php';
              break;
            case 'editRekamMedis':
              include 'update_rekam_medis.php';
              break;
              //user
            case 'user':
              include 'prev_user.php';
              break;
            case 'inputUser':
              include 'input_user.php';
              break;
            case 'editUser':
              include 'update_user.php';
              break;
              //laporan
            case 'laporan_pasien':
              include 'laporan_pasien.php';
              break;
            case 'laporan_dokter':
              include 'laporan_dokter.php';
              break;
            case 'laporan_pendaftaran':
              include 'laporan_pendaftaran.php';
              break;
            case 'laporan_rekam_medis':
              include 'laporan_rekam_medis.php';
              break;
            case 'telah_diperiksa':
              include 'prev_telah_diperiksa.php';
              break;
            case 'laporan_user':
              include 'laporan_user.php';
              break;

            case 'laporan':
              include 'laporan.php';
              break;
            case 'laporanrekam':
              include 'laporan_rekam.php';
              break;

              //resi 
            case 'resi':
              include 'resi.php';
              break;

              //Diagnosa
              case 'diagnosarekammedis':
                include 'list_rekam_medis_dok.php';
                break;
              case 'diagnosapasien':
                include 'list_pasien_dok.php';
                break;
              case 'diagnosarekam':
                include 'diagnosa_rekam.php';
                break;
              case 'diagnosapas':
                include 'diagnosa_pasien.php';
                break;

            default:
          ?>
              <div class="col-lg-12" >
                <h1 class="page-header">Home</h1>
                <div align="center">
                  <img src="../img/LOGOUNAIR.jpeg" width="250px">
                  <h2>RESY (Reimbursement System)</h2>
                </div>
              </div>
              

          <?php
              break;
          }
          ?>
          


          <!-- /.col-lg-12 -->
        </div>
        
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="../vendor/metisMenu/metisMenu.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<?php
//}
//else{
//  header("Location: login.php");
//}
?>