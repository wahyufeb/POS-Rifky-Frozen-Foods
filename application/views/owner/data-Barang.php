    <div class="container">
    <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron" style="padding:15px;">
                    <h1 class="display-4">Data Barang</h1>
                    <p class="lead">Daftar barang barang Rifky Frozen Foods</p>
                    <a class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target=".bd-example-modal-sm" id="input-barang" style="color:white;">Masukan Barang</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12" id="resultBarang">
                <table class="table table-hover table-bordered " bgcolor="white">
                    <thead class="thead-dark" style="text-align:center;">
                        <tr>
                            <th width="80px;">Kode</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th width="200px">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;?>
                        <?php foreach($barang as $row): ?>
                        <?php $i++; ?>
                            <tr>
                                <td align="center"><?=$i;?></td>
                                <td><?= $row['nama'] ?></td>
                                <td>Rp. <?= number_format($row['harga'],0,',','.') ?></td>
                                <td><?= number_format($row['stok']) ?></td>
                                <td align="center">
                                    <button class="btn btn-dark btn-edit" data-kode="<?=$row['kode']?>" role="button" data-toggle="modal" data-target=".bd-example-modal-sm">Edit</button>
                                    <a href="<?=base_url()?>Owner/hapusBarang/<?=$row['kode']?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



<!-- Modal -->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title text-center" id="exampleModalCenterTitle">Detail Transaksi</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <div class="row" style="padding:10px;">
            <div class="col-lg-12">
                <form action="<?=base_url()?>Owner/tambahBarang" method="post" id="form-barang">
                    <div class="form-group" id="kodeBarang">
                        <label for="kode">Kode Barang : </label>
                        <input type="text" class="form-control" name="kode" id="kode" placeholder="kode barang...">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama : </label>
                        <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="nama barang...">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga : </label>
                        <input type="number" class="form-control" name="harga" id="harga" placeholder="harga barang...">
                    </div>
                    <button class="btn btn-primary" type="submit">Tambah</button>
                </form>
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
        $('#input-barang').on('click', function(){
            $('#form-barang').attr('action', '<?=base_url()?>Owner/tambahBarang')
            $('#kodeBarang').css('display', 'block');
            $('input[name="kode"]').val("")
            $('input[name="nama_barang"]').val("")
            $('input[name="harga"]').val("")
            $('#exampleModalCenterTitle').text("Tambah Barang")
        })
        $('.btn-edit').on('click', function(){
            let kode = $(this).data('kode');
            $.ajax({
                url:"<?=base_url()?>Owner/getBarang",
                data:`kode=${kode}`,
                dataType:'json',
                type:'POST',
                success:function(data){
                    for (let i = 0; i < data.length; i++) {
                        const res = data[i];
                        $('#form-barang').attr('action', '<?=base_url()?>Owner/updateBarang')
                        $('#kodeBarang').css('display', 'none');
                        $('input[name="kode"]').val(res.kode)
                        $('input[name="nama_barang"]').val(res.nama)
                        $('input[name="harga"]').val(res.harga)
                        $('#exampleModalCenterTitle').text("Detail Barang")
                    }
                }
            });
    })
    })
</script>
</html>