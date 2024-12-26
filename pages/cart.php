<?php
    require_once("pages/auth_login.php"); //Menu keranjang hanya bisa diakses setelah login
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
                <tr>
                    <td>Produk</td>
                    <td>Rp.55.000</td>
                    <td class="d-flex justify-content-start gap-2">
                    <button class="btn btn-secondary" onclick="decrementAmount()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                          <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
                        </svg>
                    </button>    
                    <p id="amount" class="align-items-center">0</p>
                    <button class="btn btn-secondary" onclick="incrementAmount()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                        </svg>
                    </button>    
                    </td>
                    <td>Rp.110.000</td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <button class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>
    <section class="container mb-5 rounded p-3" id="alamat" style="background-color:rgb(172, 220, 179); box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="row">
            <div class="col">
                <h5>Alamat</h5>
                <p class="d-inline" id="name"><strong>Nama Penerima</strong></p>
                <p class="d-inline" id="phone">+62-123-4567-890</p>
                <p>Jalan, Nomor Rumah, Kelurahan, Kecamatan, Kota, Provinsi</p>
                <!-- Dropdown-->
                <button class="btn btn-outline-primary">Pilih Alamat <i class="bi bi-chevron-down"></i></button>
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
                        <b>Total:</b>
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

    let amount = 0; 
    function incrementAmount() { 
        amount++; 
        document.getElementById('amount').innerText = amount; 
    } 
    function decrementAmount() { 
        if (amount > 0) { 
            amount--; 
            document.getElementById('amount').innerText = amount; 
        } 
    }
</script>