<?php
class Cart extends Connection {
    public $id_cart;
    public $id;
    public $id_product;
    public $qty;

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

    public function addProductToCart($id, $id_product, $qty) {
        $sql = "INSERT INTO cart (id, id_product, qty)
                VALUES ('$id', '$id_product', '$qty')";
        if (mysqli_query($this->connection, $sql)) {
            echo "<script>alert('Produk berhasil ditambahkan ke keranjang!')</script>";
        } else {
            return "Gagal menambahkan produk ke keranjang: " . mysqli_error($this->connection);
        }
    }

    public function getCartProducts($id) {
        $sql = "SELECT cart.*, product.p_name, product.p_price FROM cart
                JOIN product ON cart.id_product = product.id_product
                WHERE cart.id = '$id'";
        $result = mysqli_query($this->connection, $sql);
        $cartProducts = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $cartProducts[] = $row;
            }
        }
        return $cartProducts;
    }
    

    public function updateProductqty($id_cart, $qty) {
        $sql = "UPDATE cart SET qty = '$qty' WHERE id_cart = '$id_cart'";
        if (mysqli_query($this->connection, $sql)) {
            return "Kuantitas produk berhasil diperbarui!";
        } else {
            return "Gagal memperbarui kuantitas produk: " . mysqli_error($this->connection);
        }
    }

    public function removeProductFromCart($id_cart) {
        $sql = "DELETE FROM cart WHERE id_cart = '$id_cart'";
        if (mysqli_query($this->connection, $sql)) {
            return "Produk berhasil dihapus dari keranjang!";
        } else {
            return "Gagal menghapus produk dari keranjang: " . mysqli_error($this->connection);
        }
    }
}
?>