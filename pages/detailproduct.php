<section class="mb-5" name="productDetail" style="height: 300px; font-family:'Poppins'">
    <div class="container">
        <div class="row">
            <div class="col">
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/Barren Desert Terrarium.jpg" class="d-block w-100" alt="..." style="width:fit-content; height: 200px;">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/Forest Terrarium.jpg" class="d-block w-100" alt="..." style="width:fit-content; height: 200px;">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/Dune Terrarium.jpg" class="d-block w-100" alt="..." style="width:fit-content; height: 200px;">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p>Harga</p>
                <h2 class="fw-bold">Rp.55.000</h2>
            </div>
            <div class="col">
                <h1 id="productName" name="productName">Nama Produk</h1>
                <p>Deskripsi produk secara singkat</p>
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
                <div class="mt-3 d-flex justify-content-between">
                    <button style="width:48%" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0" />
                        </svg>  Add To Cart</button>
                    <button style="width:48%" class="btn btn-success">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container mb-5" name="review" style="font-family:'Poppins'">
    <h1 class="mb-3">Ulasan</h1>
    <div name="user" class="mb-3">
        <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0">
                <img src="./assets/Dune Terrarium.jpg" width="75" height="75" style="border-radius: 50%;">
            </div>
            <div class="flex-grow-1 ms-3">
                <h3>Nama Pengguna</h3>
                <p>Tanggal</p>
            </div>
            <!-- Star -->
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </span>
            <!-- Star -->
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </span>
            <!-- Star -->
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </span>
            <!-- Star -->
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </span>
            <!-- Star -->
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </span>
        </div>
        <div>
            <p>Komentar, ulasan, dan saran dari pengguna.</p>
        </div>
    </div>
    <div name="user" class="mb-3">
        <div class="d-flex align-items-center mb-3">
            <div class="flex-shrink-0">
                <img src="./assets/Forest Terrarium.jpg" width="75" height="75" style="border-radius: 50%;">
            </div>
            <div class="flex-grow-1 ms-3">
                <h3>Nama Pengguna</h3>
                <p>Tanggal</p>
            </div>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </span>
        </div>
        <div>
            <p>Komentar, ulasan, dan saran dari pengguna.</p>
        </div>
    </div>
    <button class="btn btn-outline-success">Lihat ulasan lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
        </svg></button>
</section>
<section class="container mb-5" style="font-family:'Poppins'">
    <h1 class="mb-3">Produk Kami Lainnya</h1>
    <div class="row">
        <div class="col d-flex gap-3">
            <div class="card" style="width: 20%;">
                <img src="./assets/Dune Terrarium.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dune Terrarrium</h5>
                    <a href="#" class="btn btn-primary">Rp. 55.000</a>
                </div>
            </div>
            <div class="card" style="width: 20%;">
                <img src="./assets/Forest Terrarium.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Forest Terrarrium</h5>
                    <a href="#" class="btn btn-primary">Rp. 55.000</a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    let count = 0;

    function increment() {
        count++;
        document.getElementById('counter').innerText = count;
    }

    function decrement() {
        if (count > 0) {
            count--;
            document.getElementById('counter').innerText = count;
        }
    }
</script>