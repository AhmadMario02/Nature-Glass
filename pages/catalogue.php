<?php
include './class/product.php';
?>
<div class="container">
    <h1 class="text-center" style="font-family: Montserrat;">Katalog Produk</h1>
    <h1 class="text-center mb-5" style="font-family: Montserrat; color:#123411;">Terrarium Package</h1>
    <div class="row mb-5">
        <div class="col-4">
            <img src="assets/Barren Desert Terrarium.jpg" class="img-fluid rounded">
        </div>
        <div class="col-8">
            <?php 
                $barren = new Product();
                $barren->id_product = 3;
                $barren->SelectOneProduct();
                $barrenName = $barren->__get('name');
                $barrenDescription = $barren->__get('description');
                $barrenPrice = $barren->__get('price');
            ?>
            <h2><?php echo $barrenName?></h2>
            <hr class="border border-1">
            <p><?php echo $barrenDescription?></p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-8 text-end">
            <?php 
                $forest = new Product();
                $forest->id_product = 2;
                $forest->SelectOneProduct();
                $forestName = $forest->__get('name');
                $forestDescription = $forest->__get('description');
                $forestPrice = $forest->__get('price');
            ?>
            <h2><?php echo $forestName?></h2>
            <hr class="border border-1">
            <p>><?php echo $forestDescription?></p>
        </div>
        <div class="col-4">
            <img src="assets/Forest Terrarium.jpg" class="img-fluid rounded">
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-4">
            <img src="assets/Dune Terrarium.jpg" class="img-fluid rounded">
        </div>
        <div class="col-8">
            <?php 
                $dune = new Product();
                $dune->id_product = 1;
                $dune->SelectOneProduct();
                $duneName = $dune->__get('name');
                $duneDescription = $dune->__get('description');
                $dunePrice = $dune->__get('price');
            ?>
            <h2><?php echo $duneName?></h2>
            <hr class="border border-1">
            <p><?php echo $duneDescription?></p>
        </div>
    </div>
</div>