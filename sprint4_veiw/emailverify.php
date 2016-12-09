<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/facebook.css';?>">
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.min.js'?>"></script>
</head>
<body>
	<div class="container-fluid">
	 

		<br><div class=" col-md-offset-2 col-md-10 col-xs-offset-2 col-xs-10 pictureverify">
			<center><img src="<?php echo base_url().'image/facebook_2015_logo_detail.png'; ?> " class="pictureverify"></center>
		</div>
		</div>
	</div>
	<div>
		<center><br><br><br><br><br><font size="6"> Verify email</font></center>
	</div>
	<br><br><br><div class="col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 ">
	<font size="5">we  sent  an  email  to <?php  echo $this->session->userdata('email'); ?> to  make  sure that you own it.<br> please check your inbox, then follow the instructions to finish setting up<br> your </font>
	</div>

<br><br><br><br><br><br><br><div class="col-md-offset-2 col-md-8 col-xs-offset-2 col-xs-8 ">
<br><br><input type="submit" name="resend email" value="Resend email" class="form-control buttonverify">
</div>
<div class="col-md-offset-3 col-md-8 col-xs-offset-3 col-xs-8">
<div class="col-md-3 col-xs-3">
<a href=""><br><br>Terms of use</a>
</div>
<div class=" col-md-4 col-xs-4">
<a href=""><br><br>Privacy & Cookies</a>
</div>
<div class=" col-md-5 col-xs-5">
<a href=""><br><br>Signout</a>
</div>
</div>
</body>
</html>
