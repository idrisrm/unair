<?php

include 'koneksi.php';

if (isset($_POST['log'])) {
  $nama_user  = @$_POST['user'];
  $pswd       = @$_POST['pass'];

  //$enkrip     = md5($pswd);

  $sql  = mysqli_query($kon, "SELECT * FROM tb_user WHERE pengguna='$nama_user' and sandi='$pswd'");
  $row  = mysqli_fetch_row($sql);
  $bc    = mysqli_fetch_array($sql);

  if ($row > 0) {
    // var_dump($row);die;
    session_start();
    $_SESSION['user']  = $nama_user;
    $_SESSION['pass']  = $pswd;
    $_SESSION['akses']  = $row[4];
    header('Location:../admin/');
  } else {
    echo '<script language="javascript">
	           alert ("USERNAME ATAU PASSWORD YANG ANDA MASUKAN SALAH");
	           </script>';

?>
    <script type="text/javascript">
      window.location = "../index.php?indek=login";
    </script>
<?php
  }
}
?>