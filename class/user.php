<?php
class User extends Connection
{
    private $id = 0;
    private $email = '';
    private $password = '';
    private $username = '';
    private $role = 'usr';//khusus tambah user, kalau admin ditambah manual aja

    private $hasil = false;

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

    public function AddUser()
    {
        $sql = "INSERT INTO user(email, password, username, role)
                values( '$this->email',
                        '$this->password',
                        '$this->username',
                        '$this->role')"; //khusus tambah user, kalau admin ditambah manual aja
        $this->hasil = mysqli_query($this->connection, $sql);

        if ($this->hasil)
            $this->message = 'Akun berhasil ditambahkan!';
        else
            $this->message = 'Akun gagal ditambahkan!';
    }

    public function ValidateEmail($inputemail)
    {
        $sql = "SELECT * FROM user_account
                WHERE email = '$inputemail'";
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) == 1) {
            $this->hasil = true;
            $data = mysqli_fetch_assoc($result);
            $this->id = $data['id'];
            $this->email = $data['email'];
            $this->password = $data['password'];
            $this->username = $data['username'];
            $this->role = $data['role'];
        }
    }
}
