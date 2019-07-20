<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/custom/css/owner.css">
    <!-- Chart JS-->
    <link rel="stylesheet" href="<?=base_url()?>assets/chartjs/Chart.min.css">
    <script src="<?=base_url()?>assets/chartjs/Chart.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>assets/fontawesome/all.min.css">
    <script src="<?=base_url()?>assets/fontawesome/all.min.js"></script>
    <title>Halaman Owner</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?=base_url()?>Owner">Rifky Frozen Foods</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>Owner">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>Owner/dataTransaksi">Transaksi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>Owner/dataBarang">Barang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>Owner/dataAkun">Akun</a>
        </li>
        </ul>
        <span class="navbar-text">
            <a style="text-decoration:none;" href="<?=base_url()?>Owner/logout">Logout</a>
        </span>
    </div>
    </nav>
