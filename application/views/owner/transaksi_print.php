<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Transaksi</title>
    <!-- Bootstrap -->
    <?php $a =  $_SERVER["DOCUMENT_ROOT"]."/POS-Rifky-Frozen-Foods/assets/"?>
    <script src="<?=$a?>jquery/jquery.js"></script>
    <link rel="stylesheet" href="<?= $a ?>bootstrap/css/bootstrap.min.css">
    <script src="<?=$a?>bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Jquery -->
    <style>
    @page { 
        margin: 100px 25px; 
    }
    header { 
        position: absolute;
        top: -80px; 
        left: 0px; 
        right: 0px;
        height: 50px; 
        text-align: center;
        border-bottom: 3px solid #333;
        font-family: sans-serif;
    }

    header i {
        font-size: 13px;
    }

    footer { 
        position: fixed; 
        bottom: -60px; 
        left: 0px; 
        right: 0px; 
        height: 50px;
        text-align: right;
        font-family: arial;
    }
    p { 
        page-break-after: always;
    }
    p:last-child { 
        page-break-after: never;
    }
    </style>
</head>
<body>
    <div id="header">
        <!-- <img src="<?=$_SERVER["DOCUMENT_ROOT"]."/rework/assets/img/images.png"?>" 
        style="position:absolute;left:-15px;top:-90px;width:85px;height:70px;"> -->
    </div>      
<header>
    <h5><?=$judul?></h5>
    <i>RIFKY FROZEN FOODS</i>
</header>
<div class="alert alert-secondary" role="alert" style="font-weight:400;">
    <table>
        <tr>
            <td>Tanggal</td>
            <td>&nbsp;:&nbsp;</td>
            <td><?=date("d-M-Y")?></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>&nbsp;:&nbsp;</td>
            <td><?=$judul?></td>
        </tr>
        <tr>
            <td>Pendapatan</td>
            <td>&nbsp;:&nbsp;</td>
            <td>Rp. <?= number_format($pendapatan[0]['total'],0,',','.'); ?></td>
        </tr>
        <tr>
            <td>Total Transaksi</td>
            <td>&nbsp;:&nbsp;</td>
            <td><?= number_format($totalTransaksi,0,',','.'); ?></td>
        </tr>
    </table>
</div>
<footer>
    <i>Rifky Frozen Foods</i>
</footer>
    <table class="table table-bordered" id="table" style="margin-top:20px;">
    <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
    <tbody>
    <?php 
        $i = 0;
        foreach ($transaksi as $row): 
        $i++;
    ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['date'];?></td>
            <td><?=$row['kode'];?></td>
            <td><?= $row['nama_barang'] ?></td>
            <td><?= number_format($row['qty'],0,',','.') ?></td>
            <td>Rp. <?= number_format($row['subtotal'],0,',','.');?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
    <h5 style="text-align:right;">Total : Rp. <?= number_format($pendapatan[0]['total'],0,',','.'); ?></h5>
</body>
<!-- bootstrap -->
</html>

