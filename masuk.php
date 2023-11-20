<?php
session_start();
include "koneksi.php";
if(isset($_POST['proseslog'])){


    $result = mysqli_query($koneksi, "select * from login where username='$_POST[NamaPengguna]' and password='$_POST[KataKunci]'");
    
    $cek = mysqli_num_rows($result);
    if($cek > 0){
        $_SESSION['NamaPengguna'] = ['NamaPengguna'];

        header("Location:index2.html");
        

    }else{
        echo "<p align=center><b>  Username dan Password Anda Salah !</b></p>";
        echo "<meta http-equiv=refresh conttent=2;URL:'masuk.php'>";

    }
    
}
?>


<html>
<link rel="icon" href="assets/img/AMS.png" style="width:5px;height:5px;">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

<head>

    <title>Alkhaw Music Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="assets/img/AMS.png" style="width:5px;height:5px;">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/login.js">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    

    

   
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >


 <title>Login Form</title>

</head>

<body>




<div class="container mt-5 pt-5">

    <div class="row">

        <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card">
                <div class="card-body">
                <form id="login_form" class="form_class" method="post">
                <h4>Login</h4>
                <br>
                <label>Username:</label>
                <input class="form-control my-3 py-2" name="NamaPengguna" type="text" placeholder="Username" autofocus>
                <label>Password:</label>
                <input id="pass" class="form-control my-3 py-2" name="KataKunci" type="password" placeholder="Password">
                <div class="text-center">
                <button class="btn btn-success" name="proseslog" value="Login" type="submit" form="login_form" onclick="return validarLogin()">Login</button>
                </div>
                </div>
      
                <p>Belum Punya Akun? <a href="signup.php"> Silahkan Daftar!</a></p>

                </form>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
<br>


<br>
<br>
<br>

</html>


    




















