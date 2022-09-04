<?php include "template/header.php" ?>


<link rel="stylesheet" href="./assets/css/main.css">


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card shadow mt-4 p-0">
                <div class="card-header text-white bg-success fs-5 text-center fw-bold">
                    Laporan transaksi penjualan
                </div>
                <div class="card-body">

                    <div class="row flex justify-content-center ">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="date" class="form-label">Tanggal awal <sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" id="date-awal" placeholder="Masukkan tanggal awal">
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="date" class="form-label">Tanggal akhir <sup class="text-danger">*</sup></label>
                                <input type="date" class="form-control" id="date-akhir" placeholder="Masukkan tanggal akhir">
                            </div>

                        </div>
                        <div class="col-2 mt-2">
                            <div class="mb-3 mt-4">

                                <a href="#" class="btn btn-primary w-50 fs-5 fw-bold "> cari</a>
                            </div>
                        </div>



                    </div>
                    <div class="row flex justify-content-center mb-2">
                        <div class="col-10">
                            <div class=" mt-4">
                                <div class="card-header bg-warning fs-5 fw-bold text-white text-center">
                                    Hasil pencarian transaksi penjualan
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

                                        </thead>

                                        <tbody>
                                            <td>1</td>
                                            <td>Diki setiawan</td>
                                            <td>Ayam Besar</td>
                                            <td>4</td>
                                            <td>Kg</td>
                                            <td>31000</td>
                                            <td>124000</td>

                                        </tbody>
                                        <tbody>
                                            <td>2</td>
                                            <td>Diki setiawan</td>
                                            <td>Ayam Besar</td>
                                            <td>4</td>
                                            <td>Kg</td>
                                            <td>31000</td>
                                            <td>124000</td>

                                        </tbody>
                                        <tbody>
                                            <td>3</td>
                                            <td>Diki setiawan</td>
                                            <td>Ayam Besar</td>
                                            <td>4</td>
                                            <td>Kg</td>
                                            <td>31000</td>
                                            <td>124000</td>

                                        </tbody>
                                        <tbody>
                                            <td>4</td>
                                            <td>Diki setiawan</td>
                                            <td>Ayam Besar</td>
                                            <td>4</td>
                                            <td>Kg</td>
                                            <td>31000</td>
                                            <td>124000</td>

                                        </tbody>
                                        <tbody>
                                            <td>5</td>
                                            <td>Diki setiawan</td>
                                            <td>Ayam Besar</td>
                                            <td>4</td>
                                            <td>Kg</td>
                                            <td>31000</td>
                                            <td>124000</td>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="row text-center mb-4">
                        <div class="col-12 ">
                            <a href="#" class=" cetak btn">Cetak</a>
                        </div>
                    </div>

                </div>




                <?php include "template/footer.php" ?>