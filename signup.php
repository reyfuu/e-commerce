<?php
session_start();
include "koneksi.php";
if(isset($_POST['proseslog'])){

    $username= $_POST["username"];
    $password= $_POST["password"];

    if(empty($username) || empty($password)){
        echo "<script>
        alert('Silahkan isi data yang diperlukan');
     </script>";
    }
    else{
        mysqli_query($koneksi,'INSERT INTO `login`(`username`,`password`) VALUES("'.$username.'","'.$password.'")');
        

        header("Location:masuk.php");
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

 <title>Signup  Form</title>


</head>

<body>




<div class="container mt-5 pt-5">

    <div class="row">

        <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card">
                <div class="card-body">
                <form id="login_form" class="form_class" method="post" action="signup.php">
                <h4>Signup</h4>
                <br>
                <label>Username:</label>
                <input class="form-control my-3 py-2" name="username" type="text" placeholder="username" autofocus>
                <label>Password:</label>
                <input id="pass" class="form-control my-3 py-2" name="password" type="password" placeholder="Password">
                <div class="text-center">
                <button class="btn btn-success" name="proseslog" value="Login" type="submit" form="login_form" onclick="return validarLogin()">Login</button>
                </div>
                </div>
      

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






















