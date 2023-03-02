<?php 
    session_start();
    if (isset($_SESSION["login"])==""){
        header("location: index.php");
    }
    $nama   = $_SESSION['nama'];
    $level  = $_SESSION['level'];
    if($level == '1'){
        $jabatan = 'Petugas Penerima Tamu';
    }
    if($level == '2'){
        $jabatan = 'Petugas Operator';
    }
    if($level == '3'){
        $jabatan = 'Petugas Pengarsipan';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="assets/logo.png" width="70px" alt="">
                    <span class="fs-4">Sistem Informasi Pengarsipan</span>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Beranda</a></li>
                <!-- <li><a href="#" class="nav-link px-2 link-dark">Data Tamu</a></li> -->
                <!-- <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li> -->
                <!-- <li><a href="#" class="nav-link px-2 link-dark">Products</a></li> -->
                </ul>

                <!-- <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                </form> -->

                <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                    <!-- <li><a class="dropdown-item" href="#">New project...</a></li> -->
                    <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                    <!-- <li><a class="dropdown-item" href="#">Profile</a></li> -->
                    <!-- <li><hr class="dropdown-divider"></li> -->
                    <li><a class="dropdown-item" href="logout.php">Keluar</a></li>
                </ul>
                </div>
            </div>
        </div>
    </header>
 

    <div class="container-fluid">
        <div class="row justify-content-center pt-4">
            <div class="col-11">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Selamat Datang <?= $nama ?></h4>
                    <hr>
                    <p class="mb-0">Anda Login Sebagai <?= $jabatan ?></p>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>