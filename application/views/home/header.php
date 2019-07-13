<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Rifky Frozen Foods</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/custom/css/main.css">
    <script src="https://kit.fontawesome.com/74cb3aad0c.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-1 side-menu">
                <div class="profile">
                    <div class="photo">
                        <img src="<?=base_url()?>assets/photo/photo.jpg" alt="photo-profile" width="80" height="78"></div>
                    <div class="name">
                        <h4>Kasir 1</h4>
                        <h6>Pasar Mandiraja</h6>
                    </div>
                    <div class="menu">
                        <ul>                            
                            <li>
                                <a href="<?=base_url()?>Home">
                                    <i class="fas fa-cash-register"></i><br>
                                    Kasir
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>Pendapatan">
                                    <i class="fas fa-hand-holding-usd"></i>
                                    Pendapatan
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="out">
                        <a href="<?=base_url()?>Home/logout">
                        <div class="btn btn-dark" id="keluar">
                            <img src="<?=base_url()?>assets/icon/logout.png" alt="Logout" width="25">keluar
                        </div>
                        </a>
                    </div>
                </div>
            </div>