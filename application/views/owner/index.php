    <div class="container">
    <br>
    <?php 
        foreach ($chartRevenue as $row) {
            $tgl[] = substr($row['date'],0,10);
            $total[] = $row['total'];
        }
        ?>
    <?php 
        foreach ($chartBarangLaku as $row) {
            $nama[] =$row['nama_barang'];
            $qty[] = $row['qty'];
            $color[] =['rgba(153, 102, 255, 0.2)'];
            $brColor[] =['rgba(153, 102, 255, 1)'];
        }
    ?>
    
        <div class="jumbotron" style="padding:15px;">
            <h3 class="display-4">Selamat Datang</h3>
            <p class="lead">Daftar barang barang Rifky Frozen Foods</p>
        </div>
        <div class="row res-chart">
            <div class="col-lg-12">
            <br>
            <h1 class="text-muted">Grafik Transaksi</h1>
                <canvas id="myChart"></canvas>
            </div>
        </div>

        <div class="row res-chart">
        <div class="col-lg-12">
            <br>
            <h1 class="text-muted">Grafik Penjualan</h1>
                <canvas id="myChart2"></canvas>
            </div>
        </div>
    </div>
</body>
<script src="<?=base_url()?>assets/jquery/jquery.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<script>
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels:<?php echo json_encode($tgl);?>,
        datasets: [{
            label: 'Pendapatan',
            data: <?= json_encode($total); ?>,
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 2,
            hoverBackgroundColor:'rgba(75, 192, 192, 1)'
        }]
    },
    options: {
        elements: {
            line: {
                tension: 0 // disables bezier curves
            }
        }
        
    }
});
</script>
<script>
var ctx = document.getElementById('myChart2');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels:<?= json_encode($nama);?>,
        datasets: [{
            label: 'Barang Terjual',
            data: <?= json_encode($qty); ?>,
            backgroundColor: <?= json_encode($color);?>,
            borderColor: <?= json_encode($brColor);?>,
            borderWidth: 1,
            hoverBackgroundColor:<?= json_encode($brColor);?>,  
            hoverBorderColor:<?= json_encode($color);?>
        }]
    }
});
</script>
</html>