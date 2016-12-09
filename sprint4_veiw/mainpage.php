<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/facebook.css';?>">
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.min.js'?>"></script>


<script type="">
	$(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
$(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});
</script>


</head>
<body>
	<div class="container-fluid">
		<div class="row head">


			<div class=" col-md-offset-1 col-md-3 col-xs-offset-1 col-xs-3">
				<img src="<?php echo base_url().'image/fb_head.png'; ?>">
			</div>
			<div class="">
			<form action="<?php echo base_url().'index.php/Login/login1' ?>" method="POST">
				<div class="col-md-offset-2 col-md-2 col-xs-offset-2 col-xs-2 white">
					<label>Email or Phone</label> 
					<input type="text" name="email" class="form-control" value="9526356589">
				</div>
				<div class="col-md-2  col-xs-2 white">
					<label>Password</label> 
					<input type="password" name="password" class="form-control" value="manu1235">
					<a href="">forgotten password?</a>
				</div>
				<div class="col-md-1 col-xs-1 fb_login">
					<input type="submit" value="Login" class="loginbutton white ">
				</div>
			</form>
			</div>

		</div>
		<div class="row footer">
			<div class="col-md-offset-1 col-md-4 col-xs-offset-1 col-xs-4 footer_text">
				<label><b>Facebook helps you connect and share with the people in your life.</b></label>
					<img src="<?php echo base_url().'image/map.png'; ?> " class="img-responsive">
					
				</div>
				<div class=" col-md-offset-1 col-md-5 col-xs-offset-1 col-xs-5">
				<div class="footer_text1">
					<b>Create an account</b>
					</div>
					<h4>It's free and always will be.</h4>
					<form action="<?php echo base_url().'index.php/Signup1/signupfcn' ?>" method="POST" enctype="multipart/form-data">
					<div class="col-md-6 col-xs-6 pdding">
						<input type="text" name="firstname" placeholder="First name" class="form-control">
					</div>
					<div class="col-md-6 col-xs-6 pdding">
						<input type="text" name="surname" placeholder="Surname" class="form-control">
					</div>
					<div class="col-md-12 col-xs-12 pdding">
						<input type="text" name="email" placeholder="Mobile number or Email address" class="form-control ">	
					</div>
					<div class="col-md-12 col-xs-12 pdding">
						<input type="text" name="re-enter" placeholder="Re-enter Mobile number or Email address" class="form-control ">
					</div>
					<div class="col-md-12 col-xs-12 pdding">
						<input type="password" name="password" placeholder="New Password" class="form-control ">
					</div>
					<div class="col-md-12 col-xs-12 pdding">
						<div class="form-group">
	    				<input type="file" name="profile" class="file" style="display:none;">
	    		<div class="input-group col-md-12 col-xs-12">
	    		  <span class="input-group-addon"><i   class="glyphicon glyphicon-picture"></i></span>
	   		   <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
	   		   <span class="input-group-btn">
	   		     <button class="browse btn btn-success input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
	   		   </span>
	    		</div>

	  		</div>
					</div>
					<div class="col-md-12 col-xs-12">
						<h3 class="birthday">Birthday</h3>
					</div>
					<div class="col-md-3 col-xs-3">
						<select class="form-control" name="day">day
						<option>day
							<?php
							for($i=1;$i<=31;$i++)
							{
								echo "<option>$i</option>";
							}
							?>
						</option></select>
					</div>
					<div class="col-md-3 col-xs-3">
						<select class="form-control" name="month">month
						<option>month
						<?php
							for($i=1;$i<=12;$i++)
							{
								echo "<option>$i</option>";
							}
							?>
							</option></select>
					</div>
					<div class="col-md-3 col-xs-3">
						<select class="form-control" name="year">year
							<option>year
								<?php
									for($i=2015;$i>=1;$i--)
									{
										echo "<option>$i</option>";
									}
								?>
									
							</option>
						</select>
					</div>
					<div class="col-md-3 col-xs-3 birth_text">
						<a href=""> why do i need to provide my date of birth?</a>
					</div>
					<div class=" col-md-12 col-xs-12 gender_padding">
						<div  class="col-md-2 col-xs-3">
							<input type="radio"  name="gender" value="male">male
						</div>
						<div class="col-md-3 col-xs-3">
							<input type="radio" name="gender"  class="col-md-3" value="female">female
						</div>
					</div>
					<div class="col-md-9 col-xs-11 byclicking">
						by clicking an account,you agree to our <a href="" >Terms</a> and that you have read our <a href="">Data Policy,</a>  including our <a href="">Cookie Use.</a> 
					</div>
					<div class="col-md-5 col-xs-5 bt_padding">
						<input type="submit" name="account" value="Create an account" class="form-control  btn btn-success">
					</div>
					</form>
					
					<div class="col-md-12 col-xs-12 bt1_padding">
						<a href=""> Create a page </a> for celebirty,band or bussinus
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
	</div>
	
</body>
</html>