<?php
class Product extends Connection {
    public $id_product= '';
    public $name= '';
    public $description= '';
    public $price= '';

    private $hasil = false;
    public $message = '';

    public function __get($atribute)
    {
        if(property_exists($this, $atribute)){
            return $this->$atribute;
        }
    }

    public function __set($atribut, $value)
    {
        if(property_exists($this, $atribut)){
            return $this->$atribut;
        }
    }

    public function AddProduct(){
        $sql = "INSERT INTO product (p_name, p_description, p_price)
                VALUES ('$this->name',
                        '$this->description',
                        '$this->price')";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Produk berhasil ditambahkan!';
        else
            $this->message ='Produk gagal ditambahkan!';
    }

    public function UpdateProduct(){
        $sql = "UPDATE product
                SET p_name = '$this->name',
                    p_description = '$this->description',
                    p_price = '$this->price'
                WHERE p_name = '$this->name'";

        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Produk berhasil diubah!';
        else
            $this->message ='Produk gagal diubah!';
    }

    public function DeleteProduct(){
        $sql = "DELETE FROM product WHERE p_name = '$this->name'";
        $this->hasil = mysqli_query($this->connection, $sql);
        if($this->hasil)
            $this->message ='Produk berhasil dihapus!';
        else
            $this->message ='Produk gagal dihapus!';
    }

    public function SelectAllProduct(){
        $sql = "SELECT * FROM product";
        $result = mysqli_query($this->connection, $sql);
        $arrResult = Array();
        $count=0;
        if(mysqli_num_rows($result) > 0){
            while ($data = mysqli_fetch_array($result))
            {
                $product = new Product();
                $product->id_product=$data['id_product'];
                $product->name=$data['p_name'];
                $product->description=$data['p_description'];
                $product->price=$data['p_price'];
                $arrResult[$count] = $product;
                $count++;
            }
        }
        return $arrResult;
    }

    public function SelectOneProduct(){
        $sql = "SELECT * FROM product WHERE id_product = '$this->id_product'";
        $result = mysqli_query($this->connection, $sql);
        if(mysqli_num_rows($result) == 1){
            $this->hasil = true;
            $data = mysqli_fetch_assoc($result);
            $this->id_product=$data['id_product'];
            $this->name=$data['p_name'];
            $this->description=$data['p_description'];
            $this->price=$data['p_price'];
            
        }
    }
}
?>