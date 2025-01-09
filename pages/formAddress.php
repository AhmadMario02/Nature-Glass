<?php
include './class/address.php';
if (isset($_GET['id'])) {

    $address = new Address();
    $address->id_address = $_GET['id'];
    $address->SelectOneAddress();
    $username = $address->__get('username');
    $phone = $address->__get('phone');
    $provinsi = $address->__get('provinsi');
    $kota = $address->__get('kota');
    $kecamatan = $address->__get('kecamatan');
    $postcode = $address->__get('postcode');
    $detailAddress = $address->__get('detailAddress');
} else {
    echo "Alamat tidak ditemukan.";
    exit;
}
?>
<div class="container rounded mb-5 p-3" style="font-family:'Poppins';box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
    <h1 class="fw-bold text-center mb-3">Alamat</h1>
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <div class="mb-3 text-start">
                    <label for="username" class="form-label">Nama Penerima</label>
                    <input type="text" class="form-control" id="username" name="username" required value="<?php echo $username?>">
                </div>
                <div class="mb-3 text-start">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $phone?>">
                </div>
                <div class="mb-3 text-start">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select id="provinsi" class="form-select" aria-label="Default select example">
                        <option selected>Pilih provinsi</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 text-start">
                    <label for="kota" class="form-label">Kota/Kabupaten</label>
                    <select id="kota" class="form-select" aria-label="Default select example">
                        <option selected>Pilih provinsi terlebih dahulu</option>
                    </select>
                </div>
                <div class="mb-3 text-start">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <select id="kecamatan" class="form-select" aria-label="Default select example">
                        <option selected>Pilih kota/kabupaten terlebih dahulu</option>
                    </select>
                </div>
                <div class="mb-3 text-start">
                    <label for="postcode" class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" id="postcode" name="postcode" required value="<?php echo $postcode?>">
                </div>
                <div class="mb-3 text-start">
                    <label for="detailAddress" class="form-label">Detail Alamat</label>
                    <input type="text" class="form-control" id="detailAddress" name="detailAddress" required style="height: 150px;">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="btnSubmit" style="width: 100%;">Submit</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
        $(document).ready(function(){
            var urlprov = "http://dev.farizdotid.com/api/daerahindonesia/provinsi"
            $.get(urlprov, function(data, status){
                for(i=0;i<data.provinsi.length;i++){
                    var menu = "<option value =" + data.provinsi[i].id + ">" + data.provinsi[i].nama + "</option>"
                    $('#provinsi').append(menu)
                }
            })

            $('#provinsi').change(function(){
                var idprov = $('#provinsi').val();
                var kab = "http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=" + idprov
                $('#kota').empty()
                $.get(kab, function(data, status){
                    for(i=0;i<data.kota_kabupaten.length;i++){
                        var menukota = "<option value =" + data.kota_kabupaten[i].id + ">" + data.kota_kabupaten[i].nama + "</option>"
                        $('#kota').append(menukota)
                    }
                })    
            })

            $('#kota').change(function(){
                var idkot = $('#kota').val();
                var kota = "http://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=" + idkot
                $('#kecamatan').empty();
                $.get(kota, function(data, status){
                    for(i=0; i<data.kecamatan.length;i++){
                        var kec = "<option value =" + data.kecamatan[i].id + ">" + data.kecamatan[i].nama + "</option>"
                        $('#kecamatan').append(kec)
                    }
                })
            })

            $('#kecamatan').change(function(){
                var idkot = $('#kota').val();
                var kota = "http://dev.farizdotid.com/api/daerahindonesia/kelurahanid_kecamatan=" + iddes
                $('#desa').empty();
                $.get(kota, function(data, status){
                    for(i=0; i<data.kecamatan.length;i++){
                        var kec = "<option value =" + data.kecamatan[i].id + ">" + data.kecamatan[i].nama + "</option>"
                        $('#desa').append(kec)
                    }
                })
            })

        });
    </script>