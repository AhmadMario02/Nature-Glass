<?php
if (isset($_POST['submit'])) { 
    $target_dir = "./assets/"; 
    $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]); 
    $uploadOk = 1; 
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (file_exists($target_file)) { 
        echo "<script>alert('Maaf, file sudah ada.');</script>"; 
        $uploadOk = 0; 
    }
    if ($_FILES["fileUpload"]["size"] > 500000) { 
        echo "<script>alert('Maaf, ukuran file terlalu besar.');</script>"; 
        $uploadOk = 0; 
    } 
    if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif") { 
        echo "<script>alert('Maaf, hanya file JPG, JPEG, PNG, dan GIF yang diperbolehkan.');</script>"; 
        $uploadOk = 0; 
    }

    if($uploadOk == 0){
        echo "<script>alert('Maaf, file Anda tidak terunggah.');</script>";
    } else {
        if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)){
            echo "<script>alert('File " . htmlspecialchars(basename($_FILES["fileUpload"]["name"])) . " telah berhasil diunggah.');</script>";        
        } else {
            echo "<script>alert('Maaf, terjadi kesalahan saat mengunggah file Anda.');</script>";
        }
    }
}
?>
<style>
    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }

    /* Box gambar produk */
    .box {
        background-color: grey;
        width: 5rem;
        height: 5rem;
    }

    /* Pop up box */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
        padding-top: 60px;
    }

    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 50%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .star-rating {
        direction: rtl;
        display: inline-flex;
    }

    .star-rating input {
        display: none;
    }

    .star-rating label {
        font-size: 2em;
        color: #ddd;
        cursor: pointer;
    }

    .star-rating input:checked~label {
        color: #ffd700;
    }
</style>
<section class="container my-2">
    <div class="row p-2">
        <div class="col-3 rounded" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                    <img src="./assets/Dune Terrarium.jpg" width="75" height="75" style="border-radius: 50%;">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h4>Nama Pengguna</h4>
                    <p>email@pengguna.com</p>
                </div>
            </div>
            <a class="btn btn-outline-primary">Edit Profil</a>
            <div class="my-2">
                <h3>Alamat</h3>
                <p class="d-inline" id="name"><strong>Nama Penerima</strong></p>
                <p class="d-inline" id="phone">+62-123-4567-890</p>
                <p>Jalan, Nomor Rumah, Kelurahan, Kecamatan, Kota, Provinsi</p>
                <a class="btn btn-outline-primary">Tambah Alamat <i class="bi bi-plus"></i></a>
            </div>
        </div>
        <div class="col-9 rounded p-2" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <h1>Pesananmu</h1>
            <ul class="nav nav-tabs nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" onclick="openTab(event, 'tab1')">Upload Bukti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="openTab(event, 'tab2')">Menunggu Konfirmasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="openTab(event, 'tab3')">Dikonfirmasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="openTab(event, 'tab4')">Dikemas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="openTab(event, 'tab5')">Dikirim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="openTab(event, 'tab6')">Beri Penilaian</a>
                </li>
            </ul>

            <div id="tab1" class="tab-content active p-3">
                <h3>Pesanan</h3>
                <div class="row">
                    <div class="col">
                        <div class="d-flex gap-5">
                            <div class="d-inline">
                                <h5>Tanggal:</h5>
                                <p id="tanggal">12 Desember 2024</p>
                            </div>
                            <div class="d-inline">
                                <h5>Metode Pembayaran:</h5>
                                <p id="bayar">Transfer Bank BCA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <form action="?p=order" method="post" enctype="multipart/form-data">
                            <input type="file" name="fileUpload" id="fileUpload">
                            <button type="submit" name="submit" class="btn btn-warning">Unggah</button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="tab2" class="tab-content p-3">
                <h3>Pesanan</h3>
                <div class="row">
                    <div class="col">
                        <div class="d-flex gap-5">
                            <div class="d-inline">
                                <h5>Tanggal:</h5>
                                <p id="tanggal">12 Desember 2024</p>
                            </div>
                            <div class="d-inline">
                                <h5>Metode Pembayaran:</h5>
                                <p id="bayar">Transfer Bank BCA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p><i>Pesanan sedang dikonfirmasi</i></p>
                    </div>
                </div>
            </div>

            <div id="tab3" class="tab-content p-3">
                <h3>Pesanan</h3>
                <div class="row">
                    <div class="col">
                        <div class="d-flex gap-5">
                            <div class="d-inline">
                                <h5>Tanggal:</h5>
                                <p id="tanggal">12 Desember 2024</p>
                            </div>
                            <div class="d-inline">
                                <h5>Metode Pembayaran:</h5>
                                <p id="bayar">Transfer Bank BCA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p><i>Pesanan telah dikonfirmasi</i></p>
                    </div>
                </div>
            </div>

            <div id="tab4" class="tab-content p-3">
                <h3>Pesanan</h3>
                <div class="row">
                    <div class="col">
                        <div class="d-flex gap-5">
                            <div class="d-inline">
                                <h5>Tanggal:</h5>
                                <p id="tanggal">12 Desember 2024</p>
                            </div>
                            <div class="d-inline">
                                <h5>Metode Pembayaran:</h5>
                                <p id="bayar">Transfer Bank BCA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p><i>Pesanan sedang dikemas</i></p>
                    </div>
                </div>
            </div>

            <div id="tab5" class="tab-content p-3">
                <h3>Pesanan</h3>
                <div class="row">
                    <div class="col">
                        <div class="d-flex gap-5">
                            <div class="d-inline">
                                <h5>Tanggal:</h5>
                                <p id="tanggal">12 Desember 2024</p>
                            </div>
                            <div class="d-inline">
                                <h5>Metode Pembayaran:</h5>
                                <p id="bayar">Transfer Bank BCA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p><i>Pesanan sedang dikirim</i></p>
                        <button class="btn btn-warning" onclick="viewRate()">Pesanan diterima!</button>

                    </div>
                </div>
            </div>

            <div id="tab6" class="tab-content p-3">
                <h3>Pesanan</h3>
                <div class="row">
                    <div class="col">
                        <div class="d-flex gap-5">
                            <div class="d-inline">
                                <h5>Tanggal:</h5>
                                <p id="tanggal">12 Desember 2024</p>
                            </div>
                            <div class="d-inline">
                                <h5>Metode Pembayaran:</h5>
                                <p id="bayar">Transfer Bank BCA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h5>Rating:</h5>
                        <p id="ratingDisplay">Belum ada rating</p>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <h3>Alamat</h3>
                <p class="d-inline" id="name"><strong>Nama Penerima</strong></p>
                <p class="d-inline" id="phone">+62-123-4567-890</p>
                <p>Jalan, Nomor Rumah, Kelurahan, Kecamatan, Kota, Provinsi</p>
                <div class="row">
                    <div class="col-8">
                        <div class="d-flex justify-content-evenly">
                            <div class="box"></div>
                            <div class="">
                                <h4>Nama Produk</h4>
                                <p>ID Produk</p>
                                <p>Jumlah: 2</p>
                            </div>
                            <p class="fw-bold">Rp.120.000</p>
                        </div>
                        <div class="d-flex justify-content-evenly">
                            <div class="box"></div>
                            <div class="">
                                <h4>Nama Produk</h4>
                                <p>ID Produk</p>
                                <p>Jumlah: 2</p>
                            </div>
                            <p class="fw-bold">Rp.120.000</p>
                        </div>
                    </div>
                    <div class="col-4">
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
                                <h5 id="total">Rp.120.000</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div id="popUpConfirm" class="modal">
    <div class="modal-content">
        <p>Apakah anda yakin pesanan diterima?</p>
        <div class="d-flex justify-content-center gap-2">
            <button class="btn btn-success" onclick="confirmYes()">Iya</button>
            <button class="btn btn-danger" onclick="confirmNo()">Tidak</button>
        </div>
    </div>
</div>

<div id="ratingModal" class="modal">
    <div class="modal-content">
        <p>Berikan rating Anda:</p>
        <div class="star-rating">
            <input type="radio" id="5-stars" name="rating" value="5" /><label for="5-stars">&#9733;</label>
            <input type="radio" id="4-stars" name="rating" value="4" /><label for="4-stars">&#9733;</label>
            <input type="radio" id="3-stars" name="rating" value="3" /><label for="3-stars">&#9733;</label>
            <input type="radio" id="2-stars" name="rating" value="2" /><label for="2-stars">&#9733;</label>
            <input type="radio" id="1-star" name="rating" value="1" /><label for="1-star">&#9733;</label>
        </div>
    </div>
</div>

<script>
    function openTab(event, tabId) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.remove("active");
        }
        tablinks = document.getElementsByClassName("nav-link");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("active");
        }
        document.getElementById(tabId).classList.add("active");
        event.currentTarget.classList.add("active");
    }

    function viewRate() {
        var modal = document.getElementById("popUpConfirm");
        modal.style.display = "block";
    }
    window.onclick = function(event) {
        var modal = document.getElementById("popUpConfirm");
        if (event.target == modal) {
            modal.style.display = "none";
        }

        var rate = document.getElementById("ratingModal");
        if (event.target == rate) {
            rate.style.display = "none";
        }
    }

    function confirmYes() {
        var modal = document.getElementById("popUpConfirm");
        modal.style.display = "none";
        var ratingModal = document.getElementById("ratingModal");
        ratingModal.style.display = "block";
    }

    function confirmNo() {
        var modal = document.getElementById("popUpConfirm");
        modal.style.display = "none";
    }

    document.querySelectorAll('.star-rating input').forEach(radio => {
        radio.addEventListener('change', () => {
            const ratingValue = document.querySelector('.star-rating input:checked').value;
            document.getElementById('ratingDisplay').textContent = ratingValue + ' bintang';
            document.getElementById('ratingModal').style.display = 'none';
        });
    });
</script>