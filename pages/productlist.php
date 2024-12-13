<div class="container">
    <h4 class="title">
        <span class="text">
            <strong>Product List</strong>
        </span>
    </h4>
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>ID Product</th>
            <th>Nama Produk</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <!-- <th>Aksi</th> -->
        </tr>
        <?php
        require_once('./class/product.php');
        $objProduct = new Product();
        $arrayResult = $objProduct->SelectAllProduct();
        if (count($arrayResult) == 0) {
            echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
        } else {
            $no = 1;
            foreach ($arrayResult as $dataProduct) {
                echo '<tr>';
                echo '<td>' . $no . '</td>';
                echo '<td>' . $dataProduct->id_product . '</td>';
                echo '<td>' . $dataProduct->name . '</td>';
                echo '<td class="text-justify">' . $dataProduct->description . '</td>';
                echo '<td>Rp.' . $dataProduct->price . '</td>';
                // echo '<td><a class="btn btn-warning" href="index.php?p=employee&ssn='.$dataEmployee->ssn.'"> Edit </a> | <a class="btn btn-danger" href="index.php?p=deleteemployee&ssn='.$dataEmployee->ssn.'"onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete </a> </td>';
                echo '</tr>';
                $no++;
            }
        }
        ?>
    </table>
</div>