<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('layouts/sections/head',array('title'=>$title)); ?>
<body>
<?php $this->load->view('layouts/sections/header'); ?>
<?php $this->load->view('layouts/sections/topnav'); ?>
<?php $this->load->view('layouts/sections/slider'); ?>
<div class="main-waper">
	<div class="main">
		<?php echo $action_content; ?>
		<?php $this->load->view('layouts/sections/rightbar'); ?>	
	</div>
</div>
<?php $this->load->view('layouts/sections/footer');?>
</body>
</html>