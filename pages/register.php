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
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    Register
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-block my-3" name="btnRegist">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>