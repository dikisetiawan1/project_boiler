<?php include "template/header.php" ?>
<?php include "koneksi.php" ?>


<div class="container ">
    <div class="row">
        <div class="col-4">
            <div class="card shadow mt-4 p-0">
                <div class="card-header text-white bg-info fs-5 text-center fw-bold">
                    Transaksi penjualan
                </div>
                <div class="card-body">


                    <div class="mb-3">
                        <label for="" class="form-label">Nama <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan nama">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Jenis ayam<sup class="text-danger">*</sup></label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih jenis ayam</option>
                            <option value="Besar">Besar</option>
                            <option value="sedang">Sedang</option>
                            <option value="kecil">kecil</option>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tgl<sup class="text-danger">*</sup></label>
                        <input type="date" class="form-control" id="" placeholder="Masukkan Jumlah pembelian">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Qty<sup class="text-danger">*</sup></label>
                        <input type="number" class="form-control" id="" placeholder="Masukkan Jumlah pembelian per kg">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Harga<sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control" id="" placeholder="Masukkan Harga per kg">
                    </div>


                    <div class="btn btn-primary d-flex justify-content-around fs-5">Submit</div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="card shadow mt-4">
                <div class="card-header bg-info fs-5 fw-bold text-white text-center">
                    Data penjualan
                </div>
                <div class="card-body p-3">

                    <table class="table ">
                        <thead>
                            <th>#</th>
                            <th>Nama </th>
                            <th>Jenis</th>
                            <th>Qty</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </thead>

                        <tbody>
                            <td>1</td>
                            <td>Diki setiawan</td>
                            <td>Ayam Besar</td>
                            <td>4</td>
                            <td>Kg</td>
                            <td>31000</td>
                            <td>124000</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square fa-fw" style="color:blue ;"></i></a> | <a href=""><i class="fa-solid fa-trash-can fa-fw" style="color:red ;"></i></a> | <a href=""> <i class="fa-solid fa-print fa-fw" style="color:grey ;"></i>|<i class="fa-solid fa-fw fa-circle-info"></i></a> </td>
                        </tbody>
                        <tbody>
                            <td>2</td>
                            <td>Diki setiawan</td>
                            <td>Ayam Besar</td>
                            <td>4</td>
                            <td>Kg</td>
                            <td>31000</td>
                            <td>124000</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square fa-fw" style="color:blue ;"></i></a> | <a href=""><i class="fa-solid fa-trash-can fa-fw" style="color:red ;"></i></a> | <a href=""> <i class="fa-solid fa-print fa-fw" style="color:grey ;"></i></a> </td>
                        </tbody>
                        <tbody>
                            <td>3</td>
                            <td>Diki setiawan</td>
                            <td>Ayam Besar</td>
                            <td>4</td>
                            <td>Kg</td>
                            <td>31000</td>
                            <td>124000</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square fa-fw" style="color:blue ;"></i></a> | <a href=""><i class="fa-solid fa-trash-can fa-fw" style="color:red ;"></i></a> | <a href=""> <i class="fa-solid fa-print fa-fw" style="color:grey ;"></i></a> </td>
                        </tbody>
                        <tbody>
                            <td>4</td>
                            <td>Diki setiawan</td>
                            <td>Ayam Besar</td>
                            <td>4</td>
                            <td>Kg</td>
                            <td>31000</td>
                            <td>124000</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square fa-fw" style="color:blue ;"></i></a> | <a href=""><i class="fa-solid fa-trash-can fa-fw" style="color:red ;"></i></a> | <a href=""> <i class="fa-solid fa-print fa-fw" style="color:grey ;"></i></a> </td>
                        </tbody>
                        <tbody>
                            <td>5</td>
                            <td>Diki setiawan</td>
                            <td>Ayam Besar</td>
                            <td>4</td>
                            <td>Kg</td>
                            <td>31000</td>
                            <td>124000</td>
                            <td><a href=""><i class="fa-solid fa-pen-to-square fa-fw" style="color:blue ;"></i></a> | <a href=""><i class="fa-solid fa-trash-can fa-fw" style="color:red ;"></i></a> | <a href=""> <i class="fa-solid fa-print fa-fw" style="color:grey ;"></i></a> </td>
                        </tbody>
                    </table>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination  d-flex justify-content-end">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>

            <a class="mt-3 btn btn-success" onclick="sembunyi()">Sembunyikan pembayaran</a>
            <a class="mt-3 btn btn-primary" onclick="tampil()">Tampilkan pembayaran</a>
            <br>

            <div class="card shadow mt-2 mb-5 " id="pembayaran">
                <div class="card-header bg-danger text-white fs-5 fw-bold text-center">
                    Transaksi pembayaran
                </div>
                <div class="card-body fs-5 fw-bold">
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="" class="form-label">Pembayaran <i class="fa-solid fa-cash-register fa-fw " style="color: blue;"></i></label>
                                <input type="text" class="form-control mt-3" id="" placeholder="Masukkan Jumlah pembayaran">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="" class="form-label">Kembalian <i class="fa-solid fa-money-bill fa-fw" style="color:green ;"></i></label>
                                <input type="text" class="form-control mt-3" id="" value="" placeholder="kembalian" readonly>
                            </div>
                        </div>
                        <div class="col-2  ">
                            <div class="mb-3 mt-5">
                                <div class="btn btn-primary">Hitung</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>


    </div>
</div>

<script src="./assets/js/main.js">

</script>


<?php include "template/footer.php" ?>