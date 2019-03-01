<?php 
	$this->load->view('head');
	$this->load->view('nav');
?>

<body id="top">
	<div id="wrapper">
		<div id="page-wrapper" class="gray-bg">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
					</div>
					<ul class="nav navbar-top-links navbar-right">
						<li>
							<span class="m-r-sm text-muted welcome-message">Production Controlling System</span>
						</li>
						<li>
							<a href="login.html">
								<i class="fa fa-sign-out"></i> Log out
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<?php 
					// DUMMY
					if ($page == 'beranda') {
						$this->load->view('page/beranda');
					}
					elseif ($page == 'module_1') {
						$this->load->view('page/module_1');
					}
					elseif ($page == 'module_2') {
						$this->load->view('page/module_2');
					}
					elseif ($page == 'module_3') {
						$this->load->view('page/module_3');
					}
					elseif ($page == 'hak_akses') {
						$this->load->view('page/hak_akses');
					}
					elseif ($page == 'hak_akses') {
						$this->load->view('page/hak_akses');
					}
					elseif ($page == 'user_bo') {
						$this->load->view('page/user_bo');
					}
					elseif ($page == 'menu_bo') {
						$this->load->view('page/menu_bo');
					}
					elseif ($page == 'jabatan') {
						$this->load->view('page/jabatan');
					}
					
					// REAL
					elseif($page == 'production_list_data') {
						$this->load->view('production/list_data');
					}

				?>
			<?php $this->load->view('copyright'); ?>
			<?php $this->load->view('footer'); ?>
		</div>
	</div>
</body>

</html>