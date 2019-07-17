    <div class="container">
    <div class="row mt-4 mb-3">
        <div class="col-lg-12">
            <h2>Data Transaksi</h2>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6"><div class="btn btn-lg btn-success" id="pendapatan">Pendapatan : Rp. <?= number_format($pendapatan[0]['total'],0,',','.');?></div></div>
                <div class="col-lg-6"><div class="btn btn-lg btn-success" id="terjual">Terjual : <?= number_format($terjual[0]['tQty'],0,',','.'); ?> Pcs</div></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="btn btn-md btn-primary"><i class="fas fa-print"></i> Print</div>
                </div>
                <div class="col-lg-4">
                    <div class="btn btn-md btn-success"><i class="far fa-file-excel"></i> Excel</div>
                </div>
            </div>
        </div>
    </div>
        <div class="data-transaksi">
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
                        <td><?php 
                                $res = $row['date'];
                                echo substr($res, 0, 10);
                            ?></td>
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
                        <thead class="thead-dark">
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
            let id = $(this).data('id');
            let dataTotal = $(this).data('total');
            $.ajax({
                url:'<?=base_url()?>Owner/getQty',
                data:`id=${id}`,
                dataType:'json',
                type:'POST',
                success:function(result){
                    let tQty = result[0].totalQty
            $('#footer-modal').html(`<div class="row" id="res">
                                        <div class="col-md-6 offset-md-1"><h5>Total : Rp. ${toRp(dataTotal)}</h5></div>
                                        <div class="col-md-4"><h5>Total Qty : ${tQty}</h5></div>
                                    </div>`)
                }
            })
            // async get Invoices by Id
            $.ajax({
                url:`<?=base_url()?>Owner/getInvoice`,
                data:`id=${id}`,
                dataType:`json`,
                type:`POST`,
                success:function(data){
                    let resData = '';
                    for (let i = 0; i < data.length; i++) {
                        let no = i+1;
                        const res = data[i];
                        resData += `
                            <tr>
                                <td>${no}</td>
                                <td>${res.kode}</td>
                                <td>${res.nama_barang}</td>
                                <td>${res.qty}</td>
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