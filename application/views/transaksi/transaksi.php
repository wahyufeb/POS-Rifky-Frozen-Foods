<div class="col-lg-11 right-menu">
                <div class="title">
                    <div class="row justify-content-between">
                        <h1 class="col-lg-6 pink">Pendapatan Hari Ini   </h1>
                        <div class="col-lg-3 datenow pink">
                            <div id="today"></div>
                            <?php
                            date_default_timezone_set("Asia/Bangkok");
                            
                            $hari = date('D');
                            $bulan = date('M');
                            switch ($hari) {
                                case 'Sun':
                                    echo "Minggu, ";
                                    break;
                                case 'Mon':
                                    echo "Senin, ";
                                    break;
                                case 'Tue':
                                    echo "Selasa, ";
                                    break;
                                case 'Wed':
                                    echo "Rabu, ";
                                    break;
                                case 'Thu':
                                    echo "Kamis, ";
                                    break;
                                case 'Fri':
                                    echo "Jumat, ";
                                    break;
                                case 'Sat':
                                    echo "Sabtu, ";
                                    break;
                                default:
                                    echo "Hari Tidak diketahui";
                                    break;
                            }
                            echo date('d ');
                            switch ($bulan) {
                                case 'Jan':
                                    echo "Januari ";
                                    break;
                                case 'Feb':
                                    echo "Februari ";
                                    break;
                                case 'Apr':
                                    echo "April ";
                                    break;
                                case 'May':
                                    echo "Mei ";
                                    break;
                                case 'Jun':
                                    echo "Juni ";
                                    break;
                                case 'Jul':
                                    echo "Juli ";
                                    break;
                                case 'Aug':
                                    echo "Agustus ";
                                    break;
                                case 'Sep':
                                    echo "September ";
                                    break;
                                case 'Oct':
                                    echo "Oktober ";
                                    break;
                                case 'Nov':
                                    echo "November ";
                                    break;
                                case 'Dec':
                                    echo "Desember ";
                                    break;
                                default:
                                    echo "Bulan Tidak diketahui";
                                    break;
                            }
                            echo date('Y');
                            ?>
                        </div>
                    </div>
                    <hr class="garis pink">
                </div>
                <div class="row" id="data">
                    <div class="col-lg-5">
                        <div class="data-barang">
                            satu
                        </div>
                    </div>
                    <div class="col-lg-7 keranjang">
                            <div class="data-keranjang">
                                a
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom">
                            <div class="row">
                                asda                                                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>assets/jquery/jquery.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            waktu();
            function waktu(){
                let today = new Date();
                let h = today.getHours();
                let m = today.getMinutes();
                let s = today.getSeconds();
                
                m = checkTime(m);
                s = checkTime(s);

                $('#today').html(`<h5>${h}:${m}:${s}</h5>`);
                let t = setTimeout(() => {
                    waktu();
                }, 500);
            }
            function checkTime(i){
                if(i<10){
                    i = "0" + 1
                }
                return i;
            }
            function toRp(uangAnda){
                let toRp =  uangAnda.toString().split('').reverse().join(''),
                uang = toRp.match(/\d{1,3}/g);
                uang = uang.join('.').split('').reverse().join('');
                return uang
            }
        })
    </script>