<?php
require_once('./class/user.php');
if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $objUser = new User();
    $objUser->ValidateEmail($email);

    if ($objUser->hasil) {
        $ismatch = password_verify($password, $objUser->password);
        if ($ismatch) {
            if (!isset($_SESSION)) {
                session_start();
            }
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
<div class="container">
    <div class="row text-center mb-5">
        <div class="col">
            <h1>Masuk</h1>
            <form action="" method="post">
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Username/Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-success" name="btnLogin">Login</button>
                <div class="form-text">Belum punya akun? <a class="d-inline nav-link fw-bold" href="index.php?p=register">Daftar</a></div>
            </form>
        </div>
        <div class="col">
            <img src="https://images.pexels.com/photos/2100238/pexels-photo-2100238.jpeg" class="rounded" style="width:100%;">
            <figcaption><a class="nav-link" href="https://www.pexels.com/id-id/foto/dekorasi-meja-kaca-bening-2100238/">Foto oleh Isabel Araújo dari Pexels</a></figcaption>
        </div>
    </div>
</div>