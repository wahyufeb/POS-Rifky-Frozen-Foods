    <div class="container">
    <br>
    <?php 
        foreach ($chartRevenue as $row) {
            $tgl[] = substr($row['date'],0,10);
            $total[] = $row['total'];
        }
    ?>
        <?php if($this->session->flashdata('halloowner')){?>
            <div class="alert alert-success mess-login" role="alert">
                <span>Selamat Datang <b><?= $sayHello[0]['nama'];?></b></span>
            </div>
        <?php } ?>
        <div class="row res-chart">
            <div class="col-lg-12">
                <div class="row">
                    <div class="text-center col-md-3 data">
                        <div class="content totalPendapatan">
                            <div class="row">
                                <div class="col-md-12" style="font-size:40px;">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="tPendapatan">Rp. <?= number_format($tPendapatan[0]['total'],0,',','.'); ?></h3>
                                    <span><i>Jumlah total pendapatan</i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center col-md-3 data">
                        <div class="content totalHariIni">
                            <div class="row">
                                <div class="col-md-12" style="font-size:40px;">
                                    <i class="fas fa-hand-holding-usd"></i>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="tPendapatan">Rp.1.200.000</h3>
                                    <span><i>Pendapatan hari ini</i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center col-md-3 data">
                        <div class="content totalBarang">
                            <div class="row">
                                <div class="col-md-12" style="font-size:40px;">
                                    <i class="fas fa-boxes"></i>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="tPendapatan"><?php print_r($tBrang); ?> Pcs</h3>
                                    <span><i>Total barang</i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center col-md-3 data">
                        <div class="content totalTerjual">
                            <div class="row">
                                <div class="col-md-12" style="font-size:40px;">
                                    <i class="fas fa-people-carry"></i>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="tPendapatan"><?= number_format($terjual[0]['tQty'],0,',','.'); ?> Pcs</h3>
                                    <span><i>Barang terjual</i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row res-chart">
            <div class="col-lg-12">
            <br>
            <h1 class="text-muted">Grafik Transaksi</h1>
                <canvas id="myChart"></canvas>
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
</html>