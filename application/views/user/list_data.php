<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <h2>Data User</h2>
        </div>
    </div>
    <?php 
        if(!empty($_GET['msg'])) { 
            $msg = $_GET['msg']; 
            if($msg == 'error') {
                $msg_code = 'danger';
                $msg_text = 'Data gagal di proses !';                
            } else {
                $msg_code = 'success';
                $msg_text = 'Data berhasil di proses !';                
            }
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-<?php echo $msg_code;?> alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <?php echo $msg_text;?>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title font-bold">
                    <h5>List Data User</h5>
                    <div class="ibox-tools">
                        <button class="btn btn-xs btn-primary" onclick="show_modal('add')"><i class="fa fa-plus"></i> Tambah Data</button>
                    </div>
                </div>
                <div class="ibox-content" style="overflow: auto;">
                    <table class="table table-responsive table-hovered table-bordered datatables-user">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Role</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Status</th>
                                <th>Created Date</th>
                                <th>Created By</th>
                                <th>Modified Date</th>
                                <th>Modified By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=1;foreach($user as $v) { ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo $v['name'];?></td>
                                <td><?php echo $v['role'];?></td>
                                <td><?php echo $v['username'];?></td>
                                <td><?php echo $this->encryption->decrypt($v['password']);?></td>
                                <td>
                                    <?php 
                                        if($v['status'] == 1) {
                                            $label = 'info';
                                            $text = 'Aktif';
                                        } else {
                                            $label = 'danger';
                                            $text = 'Tidak Aktif';
                                        }
                                    ?>
                                    <small class="label label-<?php echo $label;?>"><?php echo $text;?></small>
                                </td>
                                <td><?php echo $v['created_date'];?></td>
                                <td><?php echo $v['created_by_name'];?></td>
                                <td><?php echo $v['modified_date'];?></td>
                                <td><?php echo $v['modified_by_name'];?></td>
                                <td>
                                    <button onclick="show_modal('edit', this)" class="btn btn-xs btn-success"
                                            data-id_user="<?php echo $v['id_user'];?>"
                                            data-name="<?php echo $v['name'];?>"
                                            data-id_role="<?php echo $v['id_role'];?>"
                                            data-username="<?php echo $v['username'];?>"
                                            data-password="<?php echo $this->encryption->decrypt($v['password']);?>"
                                            data-status="<?php echo $v['status'];?>">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="form-user" role="form" method="POST" action="<?php echo base_url();?>user/save">
<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="m-t-none m-b title">Detail Data User</h3>
                    </div>
                    <input type="hidden" name="method" value="add">
                    <input type="hidden" name="id_user" value="">
                    <div class="col-md-12 m-b">
                        <div class="form-group"><label class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 m-b">
                        <div class="form-group"><label class="col-sm-2 control-label">Role</label>
                            <div class="col-sm-10">
                                <select class="form-control chosen-select" name="id_role" required> 
                                    <option value=""> -- Pilih Role -- </option>
                                    <?php foreach($role as $v) { ?>
                                    <option value="<?php echo $v['id_role'];?>"><?php echo $v['role'];?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 m-b">
                        <div class="form-group"><label class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" class="form-control"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 m-b">
                        <div class="form-group"><label class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" name="password" class="form-control"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 m-b">
                        <div class="form-group"><label class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status" required>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-xs btn-success"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>

<script>
    function show_modal(method, el=null) {
        let arr = [];
        $.each($(el).data(), (k, v) => {
            arr[k] = v;
        })

        if(method == 'add') {
            title = 'Tambah Data User'; 
            $('#form-user').trigger("reset");          
        } else {
            title = 'Edit Data User';
            $('#modal-form input[name="id_user"]').val(arr['id_user']);
            $('#modal-form input[name="name"]').val(arr['name']);
            $('#modal-form select[name="id_role"]').val(arr['id_role']);
            $('#modal-form input[name="username"]').val(arr['username']);
            $('#modal-form input[name="password"]').val(arr['password']);
            $('#modal-form select[name="status"]').val(arr['status']);

        }
        $('.chosen-select').trigger('chosen:updated');
        $('#modal-form input[name="method"]').val(method);
        $('#modal-form .title').text(title);
        $('#modal-form').modal('show');
    }

    $('.datatables-user').DataTable({
        pageLength: 10,
        responsive: true,
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
            {extend: 'excel', title: 'Data_User_'+'<?php echo date('Y-m-d');?>'}
        ]
    });
</script>