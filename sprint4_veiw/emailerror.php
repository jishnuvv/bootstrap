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
		<div  class="row head">
			<div class=" col-md-offset-1 col-md-2 col-xs-offset-1 col-xs-3">
				<img src="<?php echo base_url().'image/fb_head.png'; ?>">
			</div>
			<div class="col-md-2 col-xs-5 signup">
				<input type="submit" name="signup" value="sign up" class="btn btn-success">
			</div>
		</div>
		<div class="row footer">
		<div class="col-md-offset-3 col-md-6 col-xs-offset-3 col-xs-7 login">
			<label class="fb_login">Facebook Login</label><hr>
					<div class="col-md-offset-1 col-md-3 col-xs-offset-1 col-xs-3">
							<label>Email or Phone</label>
					</div>
					<div class="col-md-6 col-xs-6">	
							<input type="email" name="email" class="form-control">
					</div>
					<div class="col-md-offset-1 col-md-3 col-xs-offset-1 col-xs-3 bt1_padding">
							<label>Password</label>
					</div>
					<div class="col-md-6  col-xs-6 bt1_padding">	
							<input type="password" name="password" class="form-control">
					</div>
					<div class="col-md-offset-4 col-md-6 col-xs-offset-4 col-xs-6">
							<input type="checkbox">&nbsp;Keep me logged in
						
					</div>
					<div class="col-md-offset-4 col-md-6 col-xs-offset-4 col-xs-6 bt1_padding">
							<input type="submit" name="login" value="Login" class="head white">&nbsp;&nbsp;<a href=""> or sign up for facebook</a>
						
					</div>
					<div class="col-md-offset-4 col-md-6 col-xs-offset-4 col-xs-6"><a href=""> forgotten password?</a>
					</div>

					
			</div>
			
			</div>
				<div class="col-md-offset-2 col-md-10 col-xs-offset-2 col-xs-10 bootom_footer english"> 
						<ul class="list-inline">
							<li>
								English(uk)
							</li>
							<li class="list">
								<a href="">Malayalam</a>
							</li>
							<li>
								<a href="">Hindi </a>
							</li>

							<li>
								<a href="">Tamil</a>
							</li>
							<li class="list">
								<a href="">Kannada</a>
							</li>
							<li>
								<a href="">Arabi</a>
							</li>
							<li>
								<a href="">France</a>
							</li>
							<li>
							<input type="submit" name="mm" value="+">
							</ul>
							<hr>
					</div>
					<div class="col-md-offset-2 col-md-7 col-xs-offset-2 col-xs-7">

						<ul class="list-inline">
							<li>
								<a href=""> Sign up </a>
							</li>
							<li class="list">
								<a href="">Log in </a>
							</li>
							<li>
								<a href=""> Messenger </a>
							</li>
							<li>
								<a href="">Facebook lite</a>
							</li>
							<li>
								<a href="">Mobile</a>
							</li>
							<li>
								<a href="">Find friends</a>
							</li>
							<li>
								<a href="">Badges </a>
							</li>
							<li>
								<a href="">People</a>
							</li>
							<li>
								<a href="">Pages</a>
							</li>
							<li>
								<a href="">Places</a>
							</li>
							<li>
								<a href=""> Games </a>
							</li><li>
								<a href=""> Location </a>
							</li>
							<li class="list">
								<a href="">Celebrities </a>
							</li>
							<li>
								<a href=""> Groups </a>
							</li>
							<li>
								<a href="">Moment</a>
							</li>
							<li>
								<a href="">About</a>
							</li>
							<li>
								<a href="">Create advert</a>
							</li>
							<li>
								<a href="">Create page </a>
							</li>
							<li>
								<a href="">Devolopers</a>
							</li>
							<li>
								<a href="">Career</a>
							</li>
							<li>
								<a href="">Privacy</a>
							</li>
							<li>
								<a href=""> Cookies </a>
							</li>
							<li>
								<a href="">Add choice</a>
							</li>
							<li>
								<a href="">Terms</a>
							</li>
							<li>
								<a href="">Help</a>
							</li>
							
							
							
						</ul>
						
					</div>
					<div  class="col-md-offset-2 col-md-7 col-xs-offset-2 col-xs-7">facebook@2016</div>

		</div> 
	
		

		

		


	</div>
</body>
</html>