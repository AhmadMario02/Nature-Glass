<?php
include './class/product.php';

// Ambil id_product dari URL
$id_product = isset($_GET['id']) ? $_GET['id'] : '';

if ($id_product) {
    // Inisialisasi objek Product
    $productObj = new Product();
    $productObj->__set('id_product', $id_product);

    // Ambil detail produk
    $productObj->SelectOneProduct();

    // Tampilkan detail produk
    $productName = $productObj->__get('name');
    $productDescription = $productObj->__get('description');
    $productPrice = $productObj->__get('price');
} else {
    echo "Produk tidak ditemukan.";
    exit;
}
?>
