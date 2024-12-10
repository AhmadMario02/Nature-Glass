<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["role"])) {
    echo "<script>alert('Silahkan Login untuk mengakses halaman ini!')</script>";
    echo '<script>window.location="index.php"</script>';
} else {
    if ($_SESSION["role"] != 'adm') {
        echo "<script>alert('Hanya Admin yang dapat mengakses halaman ini!')</script>";
        echo '<script>window.location="index.php"</script>';
    }
}
