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
                                        <!-- Display Data -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 keranjang">
                        <h6 style="float:right;margin-top:10px;"><?=$this->cart->total_items()?> Barang</h6>
                        <img src="<?=base_url()?>assets/icon/icon.png" alt="shopping-cart" width="40" style="float:right;">
                            <h4 class="pink">Keranjang Belanja</h4>
                            <div id="coba"></div>
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
                                        <?php $i = 0;?>
                                        <?php foreach($this->cart->contents() as $row ): ?>
                                        <?php $i++ ?>
                                        <tr>
                                            <th scope="row">   
                                                <img src="<?=base_url()?>assets/icon/edit.png" id="editQty" class="editQty" width="16" data-toggle="modal" data-rowid="<?=$row['rowid']?>" data-target="#exampleModalCenter">
                                                <?=$i?>
                                            </th>
                                            <td><?= $row['name']?></td>
                                            <td>
                                                <a href="<?=base_url()?>Home/minQty/<?=$row['rowid']?>/<?=$row['qty']?>">
                                                <img src="<?=base_url()?>assets/icon/minus.png">
                                                </a>
                                                <?=$row['qty']?>
                                                <a href="<?=base_url()?>Home/addQty/<?=$row['rowid']?>/<?=$row['qty']?>">
                                                <img src="<?=base_url()?>assets/icon/plus.png">
                                                </a>
                                            </td>
                                            <td>Rp. <?= number_format($row['price'],0,',','.') ?></td>
                                            <td>Rp. <?= number_format($row['subtotal'], 0,',','.') ?></td>
                                            <td><a href="<?=base_url()?>Home/deleteItem/<?=$row['rowid']?>"> <img src="<?=base_url()?>assets/icon/delete.png" alt="delete-icon"> </a></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>                         
                                <div class="total">
                                    <div class="row justify-content-between">
                                        <div class="col-lg-4">
                                            <h3 id="total-belanja" data-total="<?=$this->cart->total();?>">Total </h3>
                                        </div>
                                        <div class="col-lg-4 text-center">
                                            <input type="hidden" id="total" value="<?=$this->cart->total()?>">
                                            <h3>Rp. <?= number_format($this->cart->total(), 0,',','.')?></h3>
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
                                        <div class="btn" style="background-color:#FF6A6A;color:white;"> <a href="<?= base_url() ?>Home/clearCart" style="color:white;">Hapus Semua</a> </div>
                                        <div class="btn" style="background-color:#3BC36D;color:white;" >Cetak</div>
                                        <div class="btn" style="background-color:#3BC0F9;color:white;" id="simpan">Simpan</div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="payment">
                                        <div class="row">
                                            <div class="col-lg-6" style="margin-top:-30px;">
                                            <label for="uang-pembeli">Uang Pembeli : <span id="uang" style="font-weight:bold;"></span></label>
                                                <div class="input-group" style="margin-top:-40px;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" style="background-color:#FFB4B4;color:white;">Rp</span>
                                                    </div>
                                                    <input type="number" class="form-control" placeholder="masukan uang pembeli" aria-label="uang_pembeli" aria-describedby="uang_pembeli" id="uang-pembeli" >
                                                    </div>
                                                </div>
                                            <div class="col-lg-6" style="margin-top:-30px;">
                                            <label for="kembalian">Kembalian :</label>
                                            <h2 id="kembalian" style="margin-top:-40px;"></h2>
                                                <!-- <div class="input-group" style="margin-top:-40px;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon1" style="background-color:#FFB4B4;color:white;">Rp</span>
                                                    </div>
                                                    <input type="text" class="form-control"  aria-label="kembalian" aria-describedby="kembalian" id="kembalian">
                                                    </div> -->
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Quantity</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div id="edit-modal">

            </div>
        </div>
    </div>
    </div>

    <script src="<?=base_url()?>assets/jquery/jquery.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            function toRp(uangAnda){
                let toRp =  uangAnda.toString().split('').reverse().join(''),
                uang = toRp.match(/\d{1,3}/g);
                uang = uang.join('.').split('').reverse().join('');
                return uang
            }
            // Async Get Barang
            $.ajax({
                url:'<?=base_url()?>Home/getBarang',
                type:'POST',
                dataType:'json',
                success:function(data){
                    let result = '';
                    for (let i = 0; i < data.length; i++) {
                        let price = data[i].harga;
                        result +=`<tr>
                                    <th scope="row">${i+1}</th>
                                    <td>${data[i].kode}</td>
                                    <td>${data[i].nama}</td>
                                    <td>Rp. ${toRp(price)}</td>
                                    <td>
                                        <a href="<?=base_url()?>Home/addToCart/${data[i].kode}"> 
                                            <img src="<?=base_url()?>assets/icon/cart-add.png" alt="add-to-cart" class="addBarang"> 
                                        </a>
                                    </td>
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
                                    <td>Rp. ${toRp(data[i].harga)}</td>
                                    <td><a href="<?=base_url()?>Home/addToCart/${data[i].kode}"> <img src="<?=base_url()?>assets/icon/cart-add.png" alt=""> </a></td>
                                </tr>`
                    }
                    $('#barang').html(result)
                    }
                });
            })

            // Edit Qty
            $('.editQty').on("click", function(){
                let rowid = $(this).data('rowid');
                $.ajax({
                    url:'<?=base_url()?>Home/getItem',
                    type:'POST',
                    data:`rowid=${rowid}`,
                    dataType:'json',
                    success:function(data){
                        let price = data.subtotal;
                        $('#edit-modal')
                        .html(`     
                        <form action="<?=base_url()?>Home/qtyUpdate" method="post">
                            <div class="modal-body">
                            <h3>${data.name}</h3>
                            <p id="subtotal">Rp. ${toRp(price)}<p>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quantity</label>
                                    <input type="number" class="form-control" id="qty" name="qty" aria-describedby="qty" placeholder="Enter quantity" value="${data.qty}">
                                    <input type="hidden" id="rowid" name="rowid" value="${data.rowid}">
                                    <input type="hidden" id="price" value="${data.price}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
                            </div>
                        </form>
                        `);
                        $('#qty').on("keyup", function(){
                            let qty = $('#qty').val();
                            let price = $('#price').val();                            
                            let result = qty * price;
                            $('#subtotal').text(`Rp.${toRp(result)}`);
                        })
                    }
                })
            })

            // Total Belanja
            $('#uang-pembeli').on("keyup", function(){
                let total = $('#total-belanja').data('total');
                // not coverted Rp
                let uangPembeli = $('#uang-pembeli').val();
                $('#uang').text(`Rp. ${toRp(uangPembeli)}`);
                $('#uang').attr('data-uang', `${uangPembeli}`)
                // let resultUang = parseInt(uang.replace(/,.*|[^0-9]/g, ''), 10);
                if(uangPembeli < total){
                    let uangKurang = total - uangPembeli
                    $('#kembalian').text(`Kurang Rp. ${toRp(uangKurang)} `);
                }else if(uangPembeli > total){
                    let jumKembalian = uangPembeli - total;
                    let kembalian = jumKembalian;
                    $('#kembalian').text(`Rp. ${toRp(kembalian)}`);
                    $('#kembalian').attr('data-kembalian', `${kembalian}`)
                }else{
                    $('#kembalian').text(`Uang Anda Pas :)`);
                }
            })

            // simpan transaksi
            $('#simpan').on("click", function(){
                let total = $('#total-belanja').data('total');
                let uang = $('#uang').data('uang');
                let kembalian = $('#kembalian').data('kembalian');
                $.ajax({
                    url:'<?=base_url()?>Home/saveTransaksi',
                    data:`total=${total}&&uang=${uang}&&kembalian=${kembalian}`,
                    type:'POST',
                    dataType:'json',
                    success:function(data){
                    }
                })
                document.location.href = '<?=base_url()?>'
            })
            
        })
    </script>
</body>
</html>