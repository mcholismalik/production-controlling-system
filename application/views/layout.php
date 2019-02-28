
<?php 
	$this->load->view('head');
	$this->load->view('nav');
?>
  	<body id="top">
		<div id="wrapper">
			<div id="page-wrapper" class="gray-bg">
				<?php 
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
						$this->load->view('page/module_4');
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
				?>
				<?php $this->load->view('copyright'); ?>
				<?php $this->load->view('footer'); ?>
			</div>
		</div>
  	</body>
</html>