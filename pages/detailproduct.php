<?php
include './class/product.php';
if (isset($_GET['id'])) {

    $product = new Product();
    $product->id_product = $_GET['id'];
    $product->SelectOneProduct();
    $productName = $product->__get('name');
    $productDescription = $product->__get('description');
    $productPrice = $product->__get('price');
} else {
    echo "Produk tidak ditemukan.";
    exit;
}
?>
<section class="mb-5" name="productDetail" style="height: 300px; font-family:'Poppins'">
    <div class="container">
        <div class="row">
            <div class="col">
                <p>Harga</p>
                <h2 class="fw-bold">Rp. <?php echo $productPrice ?></h2>
            </div>
            <div class="col">
                <h1 id="productName" name="productName"><?php echo $productName ?></h1>
                <p><?php echo $productDescription ?></p>
                <div class="d-inline">
                    <button type="button" class="btn btn-secondary" style="border-radius:50%;" onclick="decrement()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                        </svg>
                    </button>
                    <span id="counter">0</span>
                    <button type="button" class="btn btn-secondary" style="border-radius:50%;" onclick="increment()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                        </svg>
                    </button>
                </div>
                <div class="mt-3">
                    <form action="index.php?p=cart" method="POST">
                        <input type="hidden" name="id_product" value="<?php echo $_GET['id']?>">
                        <input type="hidden" name="qty" id="qty"value="1">
                        <button style="width:48%" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0" />
                            </svg> Add To Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container mb-5" style="font-family:'Poppins'">
    <h1 class="mb-3">Produk Kami Lainnya</h1>
    <?php
    $productObj = new Product();
    $produkList = $productObj->SelectAllProduct();
    ?>

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
<script>
    let count = 0;

    function increment() {
        count++;
        document.getElementById('counter').innerText = count;
        document.getElementById('qty').value = count;
    }
    
    function decrement() {
        if (count > 0) {
            count--;
            document.getElementById('counter').innerText = count;
            document.getElementById('qty').value = count;
        }
    }
</script>