<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-2">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-success pull-right">Harian</span>
                    <h5>Total Produksi</h5>
                </div>
                <div class="ibox-content text-center">
                    <h1 class="no-margins">1,200</h1>
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
                    <h1 class="no-margins">2,800</h1>
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
                            <h1 class="no-margins">100,042</h1>
                            <div class="font-bold"><small>SIP Pagi</small></div>
                        </div>
                        <div class="col-md-6 text-center">
                            <h1 class="no-margins">100,012</h1>
                            <div class="font-bold"><small>SIP Sore</small></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Total Produksi Bulanan</h5>
                    <div class="ibox-tools pull-right">
                        <span class="label label-primary">Update On - <?php echo date('M Y'); ?></span>
                    </div>
                </div>
                <div class="ibox-content no-padding">
                    <div class="flot-chart m-t-lg" style="height: 55px;">
                        <div class="flot-chart-content" id="flot-chart1"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
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
                                        <h2 class="no-margins">2,346</h2>
                                        <small>Total Produksi Tahun 2019</small>
                                        <div class="progress progress-mini">
                                            <div class="progress-bar" style="width: 48%;"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <h2 class="no-margins ">4,422</h2>
                                        <small>Total Produksi Tahun 2018</small>
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
        <div class="col-lg-4">
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
        </div>

    </div>

</div>

<script>
    $(document).ready(function() {


        var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
        var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

        var data1 = [
            { label: "Data 1", data: d1, color: '#17a084'},
            { label: "Data 2", data: d2, color: '#127e68' }
        ];
        $.plot($("#flot-chart1"), data1, {
            xaxis: {
                tickDecimals: 0
            },
            series: {
                lines: {
                    show: true,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 1
                        }, {
                            opacity: 1
                        }]
                    },
                },
                points: {
                    width: 0.1,
                    show: false
                },
            },
            grid: {
                show: false,
                borderWidth: 0
            },
            legend: {
                show: false,
            }
        });

        var lineData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "2019",
                    backgroundColor: "rgba(26,179,148,0.5)",
                    borderColor: "rgba(26,179,148,0.7)",
                    pointBackgroundColor: "rgba(26,179,148,1)",
                    pointBorderColor: "#fff",
                    data: [48, 48, 60, 39, 56, 37, 30]
                },
                {
                    label: "2018",
                    backgroundColor: "rgba(220,220,220,0.5)",
                    borderColor: "rgba(220,220,220,1)",
                    pointBackgroundColor: "rgba(220,220,220,1)",
                    pointBorderColor: "#fff",
                    data: [65, 59, 40, 51, 36, 25, 40]
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