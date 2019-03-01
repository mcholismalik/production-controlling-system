<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <h2>Data User</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title font-bold">
                    <h5>List Data User</h5>
                    <div class="ibox-tools">
                    <button class="btn btn-xs btn-danger" onclick="show_modal()"><i class="fa fa-plus"></i> Tambah Data</button>
                    </div>
                </div>
                <div class="ibox-content" style="overflow: auto;">
                    <table class="table table-responsive table-hovered table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Malik</td>
                                <td>malikcbro</td>
                                <td>Active</td>
                                <td><button onclick="show_modal()" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></button></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Ipin</td>
                                <td>ipincnrp</td>
                                <td>Active</td>
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
                        <h3 class="m-t-none m-b">Detail Data User</h3>
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