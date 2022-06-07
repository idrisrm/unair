<?php

	mysqli_connect("localhost", "root", "", "rekam_medis");
	// mysqli_select_db("rekam_medis");

  if(isset($_POST['log'])) {
    $nama_user  = @$_POST['user'];
    $pswd       = @$_POST['pass'];

    //$enkrip     = md5($pswd);

    $sql  = mysqli_query($kon, "SELECT * FROM user WHERE pengguna='$nama_user' and sandi='$pswd'");
    $row  = mysqli_fetch_row($sql);
	  $bc		= mysqli_fetch_array($sql);

      if($row > 0){
        session_start();
        $_SESSION['user']	= $nama_user;
        $_SESSION['pass']	= $pswd;
		//$_SESSION['akses']	= '$bc[akses]';
            if ($row[4]==1) {
              header('Location:admin/');
            }elseif ($row[4]==2) {
              header('Location:user/');
      }

  }
}
 ?>
