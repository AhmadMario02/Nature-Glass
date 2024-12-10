<?php
require_once('./class/user.php');
if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $objUser = new User();
    $objUser->hasil = true;
    $objUser->ValidateEmail($email);

    if ($objUser->hasil) {
        $ismatch = true; //password_verify($password, $objUser->password) //untuk hashing;
        if ($ismatch) {
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION["id"] = $objUser->id;
            $_SESSION["username"] = $objUser->username;
            $_SESSION["email"] = $objUser->email;
            $_SESSION["role"] = $objUser->role;
            echo "<script>alert('Login sukses " . $_SESSION["username"] . "');</script>";
            echo '<script>window.location = "dashboardAdmin.php";</script>';
        } else {
            echo "<script>alert('Password tidak sesuai');</script>";
        }
    } else {
        echo "<script>alert('Email tidak terdaftar');</script>";
    }
}
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    Login
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="btnLogin">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>