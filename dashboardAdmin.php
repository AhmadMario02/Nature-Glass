<?php

require_once('pages/auth_adm.php');
require "inc.connection.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #91C499; font-family: Montserrat;">
            <div class="container-fluid">
                <a class="navbar-brand">Admin Dashboard</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="dashboardadmin.php">Homepage</a>
                        <a class="nav-link" href="pages/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container">
        <?php
        if (!isset($_SESSION)) {
            session_start();
        }
        echo "Welcome, <b>" . $_SESSION["username"] . "</b><br>";

        ?>
        <hr>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@523distjsbootstrapbundleminjs" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>