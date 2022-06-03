<?php

	mysql_connect("localhost", "root", "");
	mysql_select_db("rekam_medis");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Klinik UNAIR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">

.style2 {
	color: #FFFFFF;
	font-size: 18px;
}
.style3 {color: #FFFFFF}

  </style>
</head>
<body>
<!--header-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Klinik UNAIR</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <!--<li><a href="?indek=profil">Profil</a></li> -->
      <li><a href="?indek=vdm">Visi dan Misi</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

	  <!--login-->
      <li><a href="?indek=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<!--/header-->

<div class="container">
  <?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("rekam_medis");

	 			switch(@$_GET['indek']){
	  			default:
	 			 echo"<div align='center'><p><img src='img/1.png' width='250'></p>
  <p><h2><b>Pusat Layanan Kesehatan</b></h2></p>
  <p><h2><b>Universitas AirLangga </b></h2></p>
  </div>";
	   				  break;
				//profil
				case'profil';
	 			 include"profil.php";
	   				  break;
				//visi&misi
				case'vdm';
	 			 include"vdm.php";
	   				  break;
				//struktur
				case'struktur';
	 			 include"struktur.php";
	   				  break;
				//login
				case'login';
	 			 include"login.php";
	   				  break;
				 //pencarian
				 case'prev_rekm_medis';
	 			 include"prev_rekam_medis.php";
	   				  break;
				 case'cari';
	 			 include"hasil_pencarian.php";
	   				  break;
				 case'tampilA';
	 			 include"all_data.php";
	   				  break;
					  }
	?>
</div>
<p></p>
<!--footer-->

<!--/footer-->
</body>
</html>
