<?php
require_once('./class/user.php');
if(isset($_POST['btnRegist'])){
    $inputemail=$_POST["email"];
    $objUser= new User();
    $objUser->ValidateEmail($inputemail);

    if($objUser->hasil){
    echo "<script>alert('Email sudah terdaftar'); </script>";
    }
    else {
        $objUser->username=$_POST["username"];
        $objUser->email=$_POST["email"];
        $password= $_POST['password'];
        $objUser->password= password_hash($password, PASSWORD_DEFAULT);
        // $objUser->role='usr';
        $objUser->AddUser();
        if($objUser->hasil){
            echo "<script> alert('Registrasi berhasil'); </script>";
            echo '<script> window.location="index.php?p=login"; </script>';
        }
    }
}
?>
<div class="container">
    <div class="row text-center mb-5">
        <div class="col">
            <img src="https://images.pexels.com/photos/4751987/pexels-photo-4751987.jpeg" class="rounded" style="width:100%;">
            <figcaption><a class="nav-link" href="https://www.pexels.com/id-id/foto/dedaunan-daun-daun-batu-bebatuan-4751987/">Foto oleh Photo By: Kaboompics.com dari Pexels</a></figcaption>
        </div>
        <div class="col">
            <h1>Daftar</h1>
            <form action="" method="post">
                <div class="mb-3 text-start">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" class="form-control" id="username" name="username" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-success" name="btnRegist">Daftar</button>
                <div class="form-text">Sudah punya akun? <a class="d-inline nav-link fw-bold" href="index.php?p=login">Login</a></div>
            </form>
        </div>
    </div>
</div>