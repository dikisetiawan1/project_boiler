<?php include "template/header.php" ?>

<?php include "koneksi.php";


// mengambil data barang
$data_barang = mysqli_query($conn, "SELECT * FROM transaksi");

// menghitung data barang
$jumlah_barang = mysqli_num_rows($data_barang);


?>



<div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow mt-4 ">
                <div class="card-header bg-info text-white">

                    <p class="text-center " style="font-size:34px ;">Welcome to Admin <span class="fw-bold">Dashboard!</span> </p>
                </div>
                <div class="card-body ">
                    <img class="mx-auto d-flex" src=" https://tse4.mm.bing.net/th?id=OIP.hqc2IAHJwqtBluvLMzo1dgHaFo&pid=Api&P=0" alt="marketplace image" style="width: 500px ; height: 360px;">
                </div>

                <div class="card-body fs-5 fw-bold mb-3">


                    <table class=" mx-auto justify-content-center">

                        <thead class="text-center ">
                            <th class="muted"><a href="" style="text-decoration: none; color:red"> Stok <span style="color: black;">|</span> </a> </th>
                            <th> <a href="" style="text-decoration: none; color:green"> Penjualan <span style="color: black;">|</span> </a></th>
                            <th> <a href="" style="text-decoration: none; color:blue">Supplier</a> </th>

                        </thead>

                        <tbody class="text-center">
                            <td>67</td>
                            <td><?= $jumlah_barang; ?></td>
                            <td>78</td>
                        </tbody>
                    </table>

                </div>



            </div>
        </div>


    </div>

</div>


</div>


<?php include "template/footer.php" ?>