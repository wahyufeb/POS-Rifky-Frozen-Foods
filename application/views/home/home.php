<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Rifky Frozen Foods</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/custom/css/main.css">
</head>
<body>
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-3 side-menu">
                SIDE MENU
            </div>
            <div class="col-lg-9 right-menu">
                <div class="title">
                    <div class="row justify-content-between">
                        <h1 class="col-lg-6 pink">RIFKY FROZEN FOODS</h1>
                        <div class="col-lg-3 datenow pink">
                            <?php
                            date_default_timezone_set("Asia/Bangkok");
                            echo date('D-M-Y')
                            ?>
                        </div>
                    </div>
                    <hr class="garis pink">
                </div>
                <div class="row" id="data">
                    <div class="col-lg-7">
                        <div class="data-barang">
                            <div class="cari-barang">
                                <div class="input-group flex-nowrap">
                                <input type="text" class="form-control" placeholder="Cari Barang..." aria-label="cari-barang" id="cari-barang">
                                </div>
                            </div><br>
                            <div class="daftar-barang">
                            <table class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Kode</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>SO1kg</td>
                                            <td>Sosis Okey 1KG </td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#">+</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>SB1kg</td>
                                            <td>Sosis Befoods 1KG</td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#">+</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>NOkey</td>
                                            <td>Nugget Okey</td>
                                            <td>Rp. 31.000</td>
                                            <td><a href="#">+</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>NOkey</td>
                                            <td>Nugget Okey</td>
                                            <td>Rp. 31.000</td>
                                            <td><a href="#">+</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>NOkey</td>
                                            <td>Nugget Okey</td>
                                            <td>Rp. 31.000</td>
                                            <td><a href="#">+</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>NOkey</td>
                                            <td>Nugget Okey</td>
                                            <td>Rp. 31.000</td>
                                            <td><a href="#">+</a></td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 keranjang">
                        <div class="keranjang">
                        keranjang
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>