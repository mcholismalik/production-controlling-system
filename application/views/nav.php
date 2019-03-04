<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="<?php echo base_url(); ?>berkas/img/profile_small.jpg" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $this->session->userdata('name');?></strong>
                     </span> <span class="text-muted text-xs block"><?php echo $this->session->userdata('role');?></span> </span> </a>
                </div>
                <div class="logo-element">
                    PCS
                </div>
            </li>
            <li class="active">
                <a href="<?php echo base_url();?>beranda"><i class="fa fa-th-large"></i><span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="<?php echo base_url();?>production"><i class="fa fa-dropbox"></i> <span class="nav-label">Produksi</span></a>
            </li>
            <li>
                <a href="<?php echo base_url();?>user"><i class="fa fa-user"></i> <span class="nav-label">User</span></a>
            </li>
        </ul>

    </div>
</nav>

