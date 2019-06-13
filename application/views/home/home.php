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
            <div class="col-lg-1 side-menu">
                <div class="profile">
                    <div class="photo">
                        <img src="<?=base_url()?>assets/photo/photo.jpg" alt="photo-profile" width="80" height="78"></div>
                    <div class="name">
                        <h6>Kasir 1</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-11 right-menu">
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
                    <div class="col-lg-5">
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
                                    <tbody id="barang">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 keranjang">
                        <img src="<?=base_url()?>assets/icon/icon.png" alt="shopping-cart" width="40" style="float:right;">
                            <h4 class="pink">Keranjang Belanja</h4>
                            <div class="data-keranjang">
                            <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Subtotal</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Sosis Okey 1KG </td>
                                            <td>1</td>
                                            <td>Rp. 32.000</td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#"> <img src="<?=base_url()?>assets/icon/delete.png" alt="delete-icon"> </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Sosis Befoods 1KG</td>
                                            <td>1</td>
                                            <td>Rp. 32.000</td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#"> <img src="<?=base_url()?>assets/icon/delete.png" alt="delete-icon"> </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Sosis Befoods 1KG</td>
                                            <td>1</td>
                                            <td>Rp. 32.000</td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#"> <img src="<?=base_url()?>assets/icon/delete.png" alt="delete-icon"> </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Sosis Befoods 1KG</td>
                                            <td>1</td>
                                            <td>Rp. 32.000</td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#"> <img src="<?=base_url()?>assets/icon/delete.png" alt="delete-icon"> </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Sosis Befoods 1KG</td>
                                            <td>1</td>
                                            <td>Rp. 32.000</td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#"> <img src="<?=base_url()?>assets/icon/delete.png" alt="delete-icon"> </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Sosis Befoods 1KG</td>
                                            <td>1</td>
                                            <td>Rp. 32.000</td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#"> <img src="<?=base_url()?>assets/icon/delete.png" alt="delete-icon"> </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Sosis Befoods 1KG</td>
                                            <td>1</td>
                                            <td>Rp. 32.000</td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#"> <img src="<?=base_url()?>assets/icon/delete.png" alt="delete-icon"> </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Sosis Befoods 1KG</td>
                                            <td>1</td>
                                            <td>Rp. 32.000</td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#"> <img src="<?=base_url()?>assets/icon/delete.png" alt="delete-icon"> </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Sosis Befoods 1KG</td>
                                            <td>1</td>
                                            <td>Rp. 32.000</td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#"> <img src="<?=base_url()?>assets/icon/delete.png" alt="delete-icon"> </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Sosis Befoods 1KG</td>
                                            <td>1</td>
                                            <td>Rp. 32.000</td>
                                            <td>Rp. 32.000</td>
                                            <td><a href="#"> <img src="<?=base_url()?>assets/icon/delete.png" alt="delete-icon"> </a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>                         
                                <div class="total">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4">
                                            <h3>Total </h3>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <h3>Rp. 64.000</h3>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="button-action">
                                        <div class="btn" style="background-color:#FF6A6A;color:white;">Hapus Semua</div>
                                        <div class="btn" style="background-color:#3BC36D;color:white;">Cetak</div>
                                        <div class="btn" style="background-color:#3BC0F9;color:white;">Simpan</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="payment">
                                        <div class="row">
                                            <div class="col-lg-6" style="margin-top:-30px;">
                                            <label for="uang-pembeli">Uang Pembeli</label>
                                                <div class="input-group" style="margin-top:-40px;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" style="background-color:#FFB4B4;color:white;">Rp</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="masukan uang pembeli" aria-label="uang_pembeli" aria-describedby="uang_pembeli" >
                                                    </div>
                                                </div>
                                            <div class="col-lg-6" style="margin-top:-30px;">
                                            <label for="kembalian">Kembalian</label>
                                                <div class="input-group" style="margin-top:-40px;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" style="background-color:#FFB4B4;color:white;">Rp</span>
                                                    </div>
                                                    <input type="text" class="form-control"  aria-label="kembalian" aria-describedby="kembalian" >
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/jquery/jquery.js"></script>
    <script>
        $(document).ready(function(){
            // Async Get Barang
            $.ajax({
                url:'<?=base_url()?>Home/getBarang',
                type:'POST',
                dataType:'json',
                success:function(data){
                    let result = '';
                    for (let i = 0; i < data.length; i++) {
                        result +=`<tr>
                                    <th scope="row">${i+1}</th>
                                    <td>${data[i].kode}</td>
                                    <td>${data[i].nama}</td>
                                    <td>Rp. ${data[i].harga}</td>
                                    <td><a href="<?=base_url()?>Home/addToCart/${data[i].kode}"> <img src="<?=base_url()?>assets/icon/cart-add.png" alt=""> </a></td>
                                </tr>`
                    }
                    $('#barang').html(result)
                }
            })
            // Cari Barang
            $('#cari-barang').on('keyup', function(){
                let keyword = $('#cari-barang').val();
                // Async Search Barang
                $.ajax({
                    url:'<?=base_url()?>Home/cariBarang',
                    data:`key=${keyword}`,
                    dataType:'json',
                    type:'POST',
                    success:function(data){
                    let result = '';
                    for (let i = 0; i < data.length; i++) {
                        result +=`<tr>
                                    <th scope="row">${i+1}</th>
                                    <td>${data[i].kode}</td>
                                    <td>${data[i].nama}</td>
                                    <td>Rp. ${data[i].harga}</td>
                                    <td><a href="<?=base_url()?>Home/addToCart/${data[i].kode}"> <img src="<?=base_url()?>assets/icon/cart-add.png" alt=""> </a></td>
                                </tr>`
                    }
                    $('#barang').html(result)
                    }
                });
            })
        })
    </script>
</body>
</html>