<?php
include './class/product.php';

// Inisialisasi objek Product
$productObj = new Product();
$produkList = $productObj->SelectAllProduct();
?>

<section>
  <div class="row">
    <?php if (!empty($produkList)) { 
      foreach ($produkList as $product) { ?>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="card" style="width: 75%;">
            <img src="./assets/<?php echo $product->__get('name'); ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->__get('name'); ?></h5>
              <a href="index.php?p=detailproduct&id=<?php echo $product->__get('id_product'); ?>" class="btn btn-primary">Rp. <?php echo $product->__get('price'); ?></a>
            </div>
          </div>
        </div>
    <?php } 
    } else { ?>
      <p class="text-center">Tidak ada produk yang tersedia.</p>
    <?php } ?>
  </div>
</section>
