<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendapatan</title>
    <link rel="stylesheet" href="<?=base_url()?>/assets/custom/css/pendapatan.css">
</head>
<body>
    <div class="col-lg-11 rev">
        <div class="row">
            <div class="col-lg-12 top">
                <div class="data" id="tpendapatan">
                <p>Total Pendapatan Saat Ini</p>
                <?php foreach ($tPendapatan as $row) {
                        echo '<h1>Rp.'.number_format($row['total'], 0,',','.').'</h1>';
                }?>
                </div>
                <div class="data" id="terjual">
                <p>Total Barang Terjual</p>
                <?php foreach ($tTerjual as $row) {
                        echo '<h1>'.number_format($row['sold'], 0,',','.').' Pcs</h1>';
                }?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 main">
                <h3 class="text-center">Data Transaksi</h3>
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Uang</th>
                            <th>Total</th>
                            <th>Kembalian</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody id="barang">
                        <!-- Display Data -->
                        <?php if($transaksi == []){ ?>
                            <tr>
                                <td colspan="6" class="text-center"><h5 style="margin-top:100px;margin-bottom:100px;">Data Belum ada</h5></td>
                            </tr>
                        <?php }else{?>
                        <?php 
                            $i = 0;
                            foreach ($transaksi as $row): 
                            $i++;
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['date'] ?></td>
                                <td>Rp. <?= number_format($row['uang'],0,',','.') ?></td>
                                <td>Rp. <?= number_format($row['total'],0,',','.') ?></td>
                                <td>Rp. <?= number_format($row['kembalian'],0,',','.') ?></td>
                                <td> 
                                    <div class="btn btn-dark getDetails" data-toggle="modal" data-target="#exampleModalCenter" data-total="<?=$row['total']?>" data-id="<?=$row['id_invoice']?>">Detail</div> 
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title text-center" id="exampleModalCenterTitle">Detail Transaksi</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <div id="data-modal">
                <div id="resTable">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody id="res-detail">
                        </tbody>
                    </table>
                </div>
                <div id="footer-modal">
                </div>
            </div>
        </div>
    </div>
    </div>

</body>
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
        $('.getDetails').on('click', function(){
            let id = $(this).data('id')
            let dataTotal = $(this).data('total')
            $('#footer-modal').html(`<h4 class="dataTotal">Total : Rp. ${toRp(dataTotal)}</h4>`)
            // async get Invoices by Id
            $.ajax({
                url:`<?=base_url()?>Pendapatan/getInvoice`,
                data:`id=${id}`,
                dataType:`json`,
                type:`POST`,
                success:function(data){
                    let resData = '';
                    for (let i = 0; i < data.length; i++) {
                        let no = i+1;
                        const res = data[i];
                        const qty = res.qty;
                            resData += `
                            <tr>
                                <td>${no}</td>
                                <td>${res.kode}</td>
                                <td>${res.nama_barang}</td>
                                <td>${qty}</td>
                                <td>Rp. ${toRp(res.subtotal)}</td>
                            </tr>
                        `;
                    }
                    $('#res-detail').html(resData)
                }
            });
        })
    })
</script>
</html>