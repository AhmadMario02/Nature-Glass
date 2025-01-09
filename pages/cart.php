<?php
require_once("pages/auth_login.php");
include './class/cart.php';

$id = $_SESSION['id'];
$cart = new Cart();
$cart->getCartProducts($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_product = $_POST['id_product'];
    $qty = $_POST['qty'];
    $message = $cart->addProductToCart($id, $id_product, $qty);
    echo $message;
}
$cartProducts = $cart->getCartProducts($id);
?>
<div style="font-family: 'Poppins';">
    <section class="container mb-5" id="tabel">
        <h1 class="fw-bold">Keranjang Belanja</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th colspan="2">Total</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($cartProducts as $cartProduct): ?>
                <tr>
                    <td><?php echo $cartProduct['p_name']; ?></td>
                    <td>Rp. <?php echo $cartProduct['p_price']; ?></td>
                    <td class="d-flex justify-content-start gap-2">
                        <p id="amount" class="align-items-center"><?php echo $cartProduct['qty']; ?></p>
                    </td>
                    <td>Rp. <?php echo $cartProduct['p_price']*$cartProduct['qty']; ?></td>
                    <td>
                        <div class="form-check">
                                <button class="btn btn-danger" name="deleteProduct">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                    </svg>
                                </button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
    <section class="container mb-5 rounded p-3" id="alamat" style="background-color:rgb(172, 220, 179); box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="row">
            <div class="col">
                <h5>Alamat</h5>
                <p class="d-inline" id="name"><strong><?php echo $_SESSION['username']?></strong></p>
                <p class="d-inline" id="phone">+62-123-4567-890</p>
                <p>Jalan, Nomor Rumah, Kelurahan, Kecamatan, Kota, Provinsi</p>
                <!-- Dropdown-->
                <a class="btn btn-outline-primary" href="index.php?p=formAddress&id=<?php echo $_SESSION['id']?>">Pilih Alamat <i class="bi bi-chevron-down"></i></a>
            </div>
            <div class="col">
                <h5>Opsi Pengiriman</h5>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="pickup">
                    <label class="form-check-label" for="pickup">
                        Ambil Sendiri
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="delivery">
                    <label class="form-check-label" for="delivery">
                        Pengiriman (dikenakan biaya tambahan)
                    </label>
                </div>
            </div>
            <div class="col">
                <h5>Metode Pembayaran</h5>
                <!-- Dropdown-->
                <button class="btn btn-outline-success my-2">Pilih pembayaran <i class="bi bi-chevron-down"></i></button>
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <b>Subtotal:</b>
                    </div>
                    <div class="col">
                        <p id="subtotal">Rp.110.000</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <b>Layanan:</b>
                    </div>
                    <div class="col">
                        <p id="layanan">-</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col">
                        <b>Total Checkout:</b>
                    </div>
                    <div class="col">
                        <p id="total">Rp.120.000</p>
                    </div>
                </div>
                <button class="btn btn-success">Checkout <i class="bi bi-bag-check-fill"></i></button>
            </div>
        </div>
    </section>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const pickupRadio = document.getElementById('pickup');
        const deliveryRadio = document.getElementById('delivery');
        const layanan = document.getElementById('layanan');
        pickupRadio.addEventListener('change', function() {
            if (pickupRadio.checked) {
                layanan.textContent = '-';
            }
        });
        deliveryRadio.addEventListener('change', function() {
            if (deliveryRadio.checked) {
                layanan.textContent = 'Rp.10.000';
            }
        });
    });
</script>