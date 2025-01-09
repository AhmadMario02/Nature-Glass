<?php
class Address extends Connection{
    public $id_address;
    public $id;
    public $username;
    public $phone;
    public $provinsi;
    public $kota;
    public $kecamatan;
    public $postcode;
    public $detailAddress;

    public function __get($atribute)
    {
        if (property_exists($this, $atribute)) {
            return $this->$atribute;
        }
    }

    public function __set($atribut, $value)
    {
        if (property_exists($this, $atribut)) {
            return $this->$atribut = $value;
        }
    }

    public function __construct() { parent::__construct();}

    public function addAddress($id_address, $id, $username, $phone, $provinsi, $kota, $kecamatan, $postcode, $detailAddress){
        $sql = "INSERT INTO address (id_address, id, username, phone, provinsi, kota, kecamatan, postcode, detailAddress)
                VALUES ($id_address, $id, $username, $phone, $provinsi, $kota, $kecamatan, $postcode, $detailAddress)";
        if (mysqli_query($this->connection, $sql)) {
            echo "<script>alert('Alamat berhasil ditambahkan')</script>";
        } else {
            return "Gagal menambahkan alamat: " . mysqli_error($this->connection);
        }
    }

    public function SelectAllAddress($id){
        $sql = "SELECT address.* 
                FROM address JOIN user_account 
                ON address.id = user_account.id
                WHERE address.id = '$id'";
        $result = mysqli_query($this->connection, $sql);
        $addresses = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $addresses[] = $row;
            }
        }
        return $addresses;
    }

    public function SelectOneAddress(){
        $sql = "SELECT * FROM address WHERE id_address = '$this->id_address'";
        $result = mysqli_query($this->connection, $sql);
        if(mysqli_num_rows($result) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($result);
            $this->id_address=$data['id_address'];
            $this->id=$data['id'];
            $this->username=$data['username'];
            $this->phone=$data['phone'];
            $this->provinsi=$data['provinsi'];
            $this->kota=$data['kota'];
            $this->kecamatan=$data['kecamatan'];
            $this->postcode=$data['postcode'];
            $this->detailAddress=$data['detailAddress'];
        }
    }
}
?>