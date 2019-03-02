
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-2">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-success pull-right">Harian</span>
                    <h5>Total Produksi</h5>
                </div>
                <div class="ibox-content text-center">
                    <h1 class="no-margins"><?php echo $ttl_shift_pagi; ?></h1>
                    <div class="font-bold"><small>SIP Pagi</small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-info pull-right">Harian</span>
                    <h5>Total Produksi</h5>
                </div>
                <div class="ibox-content text-center">
                    <h1 class="no-margins"><?php echo $ttl_shift_sore; ?></h1>
                    <div class="font-bold"><small>SIP Sore</small></div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-primary pull-right">Tahunan</span>
                    <h5>Total Produksi</h5>
                </div>
                <div class="ibox-content">

                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h1 class="no-margins"><?php echo $ttl_thn_pagi; ?></h1>
                            <div class="font-bold"><small>SIP Pagi</small></div>
                        </div>
                        <div class="col-md-6 text-center">
                            <h1 class="no-margins"><?php echo $ttl_thn_sore; ?></h1>
                            <div class="font-bold"><small>SIP Sore</small></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-warning pull-right">Bulanan</span>
                    <h5>Total Produksi</h5>
                </div>
                <div class="ibox-content">

                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h1 class="no-margins"><?php echo $ttl_bln_pagi; ?></h1>
                            <div class="font-bold"><small>SIP Pagi</small></div>
                        </div>
                        <div class="col-md-6 text-center">
                            <h1 class="no-margins"><?php echo $ttl_bln_sore; ?></h1>
                            <div class="font-bold"><small>SIP Sore</small></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div>
                        <span class="pull-right text-right">
                        <small>Produksi <strong>Indonesia</strong></small>
                            <br/>
                            Total Semua Produksi: 1062,862
                        </span>
                        <h3 class="font-bold no-margins">
                            Grafik Perkembangan Produksi
                        </h3>
                        <!-- <small>.</small> -->
                    </div>

                    <div class="m-t-sm">

                        <div class="row">
                            <div class="col-md-8">
                                <div>
                                    <canvas id="lineChart" height="114"></canvas>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <ul class="stat-list m-t-lg">
                                    <li>
                                        <h2 class="no-margins"><?php echo $ttl_all_now; ?></h2>
                                        <small>Total Produksi Tahun <?php echo date('Y'); ?></small>
                                        <div class="progress progress-mini">
                                            <div class="progress-bar" style="width: 48%;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="no-margins "><?php echo $ttl_all_ysterday; ?></h2>
                                        <small>Total Produksi Tahun <?php echo date('Y', strtotime('-1 year')); ?></small>
                                        <div class="progress progress-mini">
                                            <div class="progress-bar" style="width: 60%;"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="m-t-md">
                        <small class="pull-right">
                            <i class="fa fa-clock-o"> </i>
                            Update On - <?php echo date('D d M Y'); ?>
                        </small>
                        <small>
                            <strong>Perkembangan Produksi</strong>
                        </small>
                    </div>

                </div>
            </div>
        </div>
        <!-- <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-info pull-right">Up To Date</span>
                    <h5>Aktivitas Produksi</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <small class="stats-label">PT Perusahaan</small>
                            <h4>1121</h4>
                        </div>

                        <div class="col-xs-4 text-center">
                            <small class="stats-label">SIP Pagi</small>
                            <h4>500</h4>
                        </div>
                        <div class="col-xs-4 text-center">
                            <small class="stats-label">SIP Sore</small>
                            <h4>621</h4>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <small class="stats-label">PT Sinar Jaya</small>
                            <h4>1121</h4>
                        </div>

                        <div class="col-xs-4 text-center">
                            <small class="stats-label">SIP Pagi</small>
                            <h4>500</h4>
                        </div>
                        <div class="col-xs-4 text-center">
                            <small class="stats-label">SIP Sore</small>
                            <h4>621</h4>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <small class="stats-label">PT Sido</small>
                            <h4>1121</h4>
                        </div>

                        <div class="col-xs-4 text-center">
                            <small class="stats-label">SIP Pagi</small>
                            <h4>500</h4>
                        </div>
                        <div class="col-xs-4 text-center">
                            <small class="stats-label">SIP Sore</small>
                            <h4>621</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    </div>

</div>

<script>
    $(document).ready(function() {
        var lineData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "2019",
                    backgroundColor: "rgba(26,179,148,0.5)",
                    borderColor: "rgba(26,179,148,0.7)",
                    pointBackgroundColor: "rgba(26,179,148,1)",
                    pointBorderColor: "#fff",
                    data: [<?php foreach($list_year as $ls){ echo $ls['jml_produksi_all'].', '; } ?>]
                },
                {
                    label: "2018",
                    backgroundColor: "rgba(220,220,220,0.5)",
                    borderColor: "rgba(220,220,220,1)",
                    pointBackgroundColor: "rgba(220,220,220,1)",
                    pointBorderColor: "#fff",
                    data: [<?php foreach($list_year_ys as $lsy){ echo $lsy['jml_produksi_all'].', '; } ?> ]
                }
            ]
        };

        var lineOptions = {
            responsive: true
        };


        var ctx = document.getElementById("lineChart").getContext("2d");
        new Chart(ctx, {type: 'line', data: lineData, options:lineOptions});


    });
</script>