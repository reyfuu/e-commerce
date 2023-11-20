
<?php
session_start();
include "koneksi.php";
?>
<html>
<link rel="stylesheet" href="assets/css/login.css">
<form class="login-form">
  <p class="login-text">
    <span class="fa-stack fa-lg">
      <i class="fa fa-circle fa-stack-2x"></i>
      <i class="fa fa-lock fa-stack-1x"></i>
    </span>
  </p>
  <input type="text" name="NamaPengguna" placeholder="Username" class="login-username" />
  <input type="password" name="KataKunci" placeholder="Password" class="login-password" />
  <input type="submit" name="proseslog" value="Login" class="login-submit" />
</form>



<?php
if(isset($_POST['proseslog'])){
    $result = mysqli_query($koneksi, "select * from tb_pengguna where NamaPengguna='$_POST[NamaPengguna]' and KataKunci='$_POST[KataKunci]'");
    
    $cek = mysqli_num_rows($result);
    if($cek > 0){
        $_SESSION['NamaPengguna'] = ['NamaPengguna'];

        header("location:index2.html");

    }else{
        echo "<p align=center><b> Nama Pengguna dan Password Anda Salah !</b></p>";
        echo "<meta http-equiv=refresh conttent=2;URL:'login.php'>";

    }
    
}

?>

