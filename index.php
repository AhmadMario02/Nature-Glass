<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    if (!isset($_SESSION["role"])) { //cek status session
        include("header.php"); //tidak login = guest
    } else {
        include("headerUser.php");//login = user
    }

    require("inc.connection.php")

?>
    <?php
    $pages_dir = 'pages';
    if(!empty($_GET['p'])){
    
    $pages = scandir($pages_dir, 0);
    unset($pages[0], $pages[1]);
    
    $p = $_GET['p'];
    if(in_array($p.'.php', $pages)){
    
    include($pages_dir.'/'.$p.'.php');
    
    } else {
    
    echo 'Halaman tidak ditemukan! :(';
    
    }
    } else {
        include "pages/home.php";
    }
    ?>
    </main>

<?php

    include("footer.php");

?>