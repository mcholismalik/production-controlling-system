<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <h2>Data Produksi</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title font-bold">
                    <h5>Filter</h5>
                    <div class="ibox-tools">
                    </div>
                </div>
                <div class="ibox-content" style="overflow: auto;">
                    <div class="col-md-12">
                        <div class="form-group"><label class="col-sm-2 control-label">Pabrik</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="id_factory">
                                    <option>option 1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><label class="col-sm-2 control-label">Shift</label>
                            <div class="col-sm-10">
                                <select class="form-control m-b" name="id_shift">
                                    <option>option 1</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><label class="col-sm-2 control-label">Range Tanggal</label>
                            <div class="col-sm-10">
                                <div class="input-daterange input-group m-b" id="datepicker">
                                    <input type="text" class="input-sm form-control" name="date_start" value="01/03/2019">
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="input-sm form-control" name="date_end" value="03/03/2019">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><label class="col-sm-2 control-label">Min Total Produksi</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control m-b" name="min_total">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-sm-12 text-right">
                                <button class="btn btn-xs btn-warning"><i class="fa fa-search"></i> Filter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title font-bold">
                    <h5>List Data Produksi</h5>
                    <div class="ibox-tools">
                    <button class="btn btn-xs btn-primary" onclick="show_modal()"><i class="fa fa-file-excel-o"></i> Export Excel</button>
                    <button class="btn btn-xs btn-danger" onclick="show_modal()"><i class="fa fa-plus"></i> Tambah Data</button>
                    </div>
                </div>
                <div class="ibox-content" style="overflow: auto;">
                    <table class="table table-responsive table-hovered table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pabrik</th>
                                <th>Tgl Produksi</th>
                                <th>Shift</th>
                                <th>Total Produksi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Pabrik Cikarang</td>
                                <td>28/01/2019</td>
                                <td>1</td>
                                <td>20</td>
                                <td><button onclick="show_modal()" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Pabrik Cikarang</td>
                                <td>28/01/2019</td>
                                <td>1</td>
                                <td>20</td>
                                <td><button onclick="show_modal()" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="m-t-none m-b">Detail Data Produksi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function show_modal() {
        $('#modal-form').modal('show');
    }
</script>