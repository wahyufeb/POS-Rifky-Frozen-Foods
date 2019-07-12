<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendapatan</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/custom/css/pendapatan.css">
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
                    <thead class="thead-light">
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>