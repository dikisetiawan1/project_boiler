<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem penjualan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">


</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- top navbar -->
            <nav class="navbar navbar-expand-lg bg-primary sticky-top ">
                <div class="container  ">
                    <div class="row">
                        <div class="col">

                            <a class="navbar-brand text-white fw-bold fs-3 text-uppercase" href="#">broilers</a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="col-5">
                            <div class="collapse navbar-collapse fs-5 " id="navbarNavDropdown">
                                <ul class="navbar-nav float-end  ">
                                    <li class="nav-item ">
                                        <a class="nav-link text-white active fw-semibold" aria-current="page" href="index.php">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="penjualan.php">Penjualan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="laporan.php">Laporan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="stok.php">Stok</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Bipot
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="supplier.php">Supplier</a></li>
                                            <li><a class="dropdown-item" href="incoming.php">Incoming</a></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>

                    <div class="row fs-4 text-white text-end">
                        <div class="col">

                            <i class="fa-solid fa-fw fa-circle-user">

                            </i>

                        </div>
                        <div class="col-3">
                            <i class="fa-solid fa-fw fa-right-from-bracket"></i>

                        </div>
                    </div>

            </nav>

            <!-- end navbar -->
        </div>
        <!-- start footer -->


    </div>




    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <script src="../assets/js/main.js"></script>
</body>