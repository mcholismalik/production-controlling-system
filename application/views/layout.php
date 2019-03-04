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
							<a href="<?php echo base_url();?>auth/logout">
								<i class="fa fa-sign-out"></i> Log out
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<?php 
				if ($page == 'beranda') {
					$this->load->view('page/beranda');
				}
				elseif($page == 'production_list_data') {
					$this->load->view('production/list_data');
				} 
				elseif($page == 'user_list_data') {
					$this->load->view('user/list_data');
				}
			?>
			<?php $this->load->view('copyright'); ?>
			<?php $this->load->view('footer'); ?>
		</div>
	</div>
</body>

</html>