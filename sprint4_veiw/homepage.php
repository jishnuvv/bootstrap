<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url');?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/facebook.css';?>">
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js'?>"></script>
	
	<script>
	

$(document).ready(function(){

	function fullscreen(pid,img)
	{
		$("#"+pid).click(function(){
			alert('haiii');
		});
	}

		var r=$("#id").val()
		//console.log(r);
		$.ajax({
	    type: "POST",
	    url: 'http://localhost/service3/index.php/Newsfeed/veiw_status',
	    data:  {stid:r},
	    dataType: "json",
	    success: function(data)
    	{
    		console.log(data);
    		var txt="";
	      	for (var i = 0; i < data.length; i++)
	     	{
	     		pid=data[i].photo_id;
	     		img=data[i].photo;
	      	txt +="<div class='col-md-12 col-xs-12'style='background-color:white'><div class='col-md-12 col-xs-12' style=margin:2%;><div class='col-md-2 col-xs-2'><img src='http://localhost/facebook1/image/"+data[i].file+"'style='width:50px;height:50px;'></div><div class='col-md-1 col-xs-1'>"+data[i].firstname+"</div><div class='col-md-1 col-xs-1'>"+data[i].lastname+"</div></div><br><div class='col-md-3 col-xs-2'><img id='"+data[i].photo_id+"' onclick='fullscreen("+pid+","+img+")' src='http://localhost/facebook1/image/"+data[i].photo+"'style='width:520px;height:300px; padding-bottom:20px;' ><div class='col-md-3 col-xs-4' style='padding-bottom:10px; margin-left:400px;'><Button   id='"+data[i].photo_id+"'>open"+data[i].photo_id+"</button></div></div></div><div class='col-md-12 col-xs-12' style='background-color:#D4D9E8;height:10px;width:100%';></div>"

	      		
	      	}

	      	//console.log(pid);
	      	$("#veiwupdation").append(txt).removeClass("hidden");
	      	fullscreen(pid,img);
    	},
    });
	
	//////upload photo\\\\\
	$("#newsupdate").click(function(){
		var r=$("#id").val();
		var f=$("#fname").val();
		var m=$("#profile").val();
		var l=$("#lname").val();
		var pic=$("#photo").val();
		$("#news").hide();
    		$("#view").hide();
    		 $("#approve").hide();
    		  $("#friends").hide();
    	$("#photo").show();
		//$("#photo").show();
		//console.log(r);
		$("#photo").removeClass("hidden");

			$("#picupd").click(function(){

				var a=$("#pic1").text();
				console.log(a);
			});
	
		
 	});

 	var r=$("#id").val()
		console.log(r);
		$.ajax({
	    type: "POST",
	    url: 'http://localhost/service3/index.php/Newsfeed/status_veiw',
	    data:  {stid:r},
	    dataType: "json",
	    success: function(data)
    	{
    		console.log(data);
    		var txt="";
	      	for (var i = 0; i < data.length; i++)
	     	{

	      	txt +="<div class='col-md-12 col-xs-12'style='background-color:white'><div class='col-md-12 col-xs-12' style=margin:2%;><div class='col-md-2 col-xs-2'><img src='http://localhost/facebook1/image/"+data[i].file+"'style='width:50px;height:50px;'></div><div class='col-md-1 col-xs-1'>"+data[i].firstname+"</div><div class='col-md-1 col-xs-1'>"+data[i].lastname+"</div></div><br><div class='col-md-3 col-xs-2'style='margin-left:100px; margin-bottom:50px;'><br>"+data[i].status+"</div></div>"

	      		
	      	}
	      	//console.log(data);
	      	$("#veiwupdation").append(txt).removeClass("hidden");
	      	
    	},
    });
	

	

/////////status update\\\\\\\
$("#post").click(function(){
	var r=$("#id").val();
	var f=$("#fname").val();
	var m=$("#profile").val();
	var l=$("#lname").val();
	var status=$('#newsfeed').val();
	console.log(status);
		//$("#news").hide();
	//alert(status.length);
	if (status.length<140) 
    {

		$.ajax({
	    type: "POST",
	    url: 'http://localhost/service3/index.php/Newsfeed/status',
	    data:  {id:r,status:status,firstname:f,file:m,lastname:l},
	    dataType: "json",
	     success: function(data)
    	{
    		
	   	}


 		});
 			//console.log(status);
    }
    else
    {
    	document.getElementById("status").innerHTML = "the maximum character is 140";

    }

	//alert("r");
	console.log(r);
	console.log(status);
	

 	 });

	function unfriend(fid)
	{
		//console.log(rid);
		var r=$("#id").val();


		//console.log(r);
		////////unfriend\\\\\\\\
		$("#"+fid).click(function(){
			$("#"+fid).hide();
		//alert(rid);
		//alert(fid);
		//console.log(fid);
		$.ajax({
    	type: "POST",
	 	url: 'http://localhost/service3/index.php/Search/unfriend_control',
  	 	data:  {uid:r,fid:fid},
	    dataType: "json",
		 });
 	 	});

	}

$("#searchfriends").click(function(){
		var r=$("#id").val();
		$("#news").hide();
    		$("#view").hide();
    		 $("#approve").hide();
    		  $("#friends").show();
    	$("#photo").hide();

		//console.log(r);

		//alert(r);
		$.ajax({
	    type: "POST",
	    url: 'http://localhost/service3/index.php/Search/veiwfriends',
	    data:  {uid:r},
	    dataType: "json",
	    success: function(data)
    	{
	 		// console.log(data);
	 		var txt="";
	      	for (var i = 0; i < data.length; i++)
	     	{
	     		fid=data[i].id;
	      		txt +="<div class='col-md-12 col-xs-12' style=margin:2%; id='"+data[i].id+"'><div class='col-md-2 col-xs-2'><img src='http://localhost/facebook1/image/"+data[i].file+"'style='width:50px;height:50px;'></div><div class='col-md-1 col-xs-1'>"+data[i].firstname+"</div><div class='col-md-1 col-xs-1'>"+data[i].lastname+"</div><div class='col-md-3 col-xs-4'><Button type='Submit' id='"+data[i].id+"'>unfriend </button></div></div>"
	      		//alert(data[i].id);
	      //console.log(data[i].id);
	      //console.log(fid);

	  	 	}
	  	 	$("#friends").append(txt).removeClass("hidden");
	  	 	 unfriend(fid);
	  	 	 //console.log(fid);
	  	 },
	  	 	 });
 	 	});
 			



	function conformrequest(rid,email)
	{
		//console.log(rid);
		var r=$("#id").val();

		//console.log(r);
		////////conform request\\\\\\\\
		$("#"+rid).click(function(){
			$("#"+rid).hide();
		//alert(rid);
		$.ajax({
    	type: "POST",
	 	url: 'http://localhost/service3/index.php/Search/approvefriend',
  	 	data:  {sender:rid,receiver:r,mobileno
  	 		:email},
	    dataType: "json",
		 });
 	 	});

	}



	//////////// view approve friend\\\\\\\\\\\

	$("#conform").click(function(){
		var r=$("#id").val();
		$("#news").hide();
    		$("#view").hide();
    		 $("#approve").show();
    		  $("#friends").hide();
    	$("#photo").hide();
		

		//alert("abc");
		$.ajax({
	    type: "POST",
	    url: 'http://localhost/service3/index.php/Search/veiwrequest',
	    data:  {receiver:r},
	    dataType: "json",
	    success: function(data)
    	{
	 		 console.log(data);
	 		var txt="";
	      	for (var i = 0; i < data.length; i++)
	     	{
	     		rid=data[i].id;
	     		email=data[i].mobileno;
	      		txt +="<div class='col-md-12 col-xs-12' style=margin:2%; id='"+data[i].id+"'><div class='col-md-2 col-xs-2'><img src='http://localhost/facebook1/image/"+data[i].file+"'style='width:50px;height:50px;'></div><div class='col-md-1 col-xs-1'>"+data[i].firstname+"</div><div class='col-md-1 col-xs-1'>"+data[i].lastname+"</div><div class='col-md-3 col-xs-4'><Button type='Submit' id='"+data[i].id+"'>CONFORM </button></div><div class='col-md-3 col-xs-4'><Button type='Submit'>delete</div>";
	      		//alert(data[i].id);
	      //console.log(data[i].id);
	  	 	}
	  	 		 $("#approve").append(txt).removeClass("hidden");
	  	 		 conformrequest(rid,email);
	  	 		 //console.log(rid);
	  	},
		error: function(jqXHR, textStatus, errorThrown)
		{
		    alert('error: ' + textStatus + ': ' + errorThrown);
		}


	 	});
	});
		function sendrequest(uid)
	{
		//console.log(uid);
		////////send request\\\\\\\\
		$("#"+uid).click(function(){
			var r=$("#id").val();
				//alert(uid);
			 $.ajax({
	    type: "POST",
	    url: 'http://localhost/service3/index.php/Search/feriendrequest',
	    data:  {sender:r,receiver:uid},
	    dataType: "json",
	});
	});

	}
	

	//////////seach\\\\\\\\
    $("#search").click(function(){
    	var v=$("#test").val();
    	$("#news").hide();
    		$("#view").show();
    		 $("#approve").hide();
    		  $("#friends").hide();
    	$("#photo").hide();
    		

        // alert("hai");
        $.ajax({
	    type: "POST",
	    url: 'http://localhost/service3/index.php/Search/request',
	    data:  {fname:v},
	    dataType: "json",
	     success: function (data)
	     {
	     	//console.log(data);
	     	var txt="";
	     	for (var i = 0; i < data.length; i++)
	     	{
	     		uid=data[i].id;
	     		txt +="<div class='col-md-12 col-xs-12' style=margin:2%; ><div class='col-md-2 col-xs-2'><img src='http://localhost/facebook1/image/"+data[i].file+"'style='width:50px;height:50px;'></div><div class='col-md-1 col-xs-1'>"+data[i].firstname+"</div><div class='col-md-1 col-xs-1'>"+data[i].lastname+"</div><div class='col-md-3 col-xs-4'><Button type='Submit' id='"+data[i].id+"' onclick='sendrequest("+uid+")'>Add friend"+data[i].id+"</Button></div></div>";
	     		
	     		// console.log(uid);
	     	}
	     	
	 			$("#view").append(txt).removeClass("hidden");
	 			
	 			sendrequest(uid);
	 				// $("#approve").append(txt).removeClass("hidden");

		},
		error: function(jqXHR, textStatus, errorThrown)
		{
		    alert('error: ' + textStatus + ': ' + errorThrown);
		}
	});
    });
});


</script>
</head>
<body>
<?php
	$this->load->library('session');
	//echo $this->session->userdata('id');
	//print_r($user);
?>
<div class="container-fluid">
	<!-- SESSION VARIABVLE -->
	<div >
		<input type="text" id="id" value="<?php echo $this->session->userdata('id'); ?>" style="display:none" >
		<input type="text" id="fname" value="<?php echo $this->session->userdata('fname'); ?>" style="display:none">
		<input type="text" id="profile" value="<?php echo $this->session->userdata('profile'); ?> " style="display:none">
		<input type="text" id="lname" value="<?php echo $this->session->userdata('lname'); ?>" style="display:none">
	</div>
	<div class="row head">
	<div class="col-md-offset-1 col-md-4 col-xs-offset-1 col-xs-3 pad_1">
		<input type="text" name="search" placeholder="Facebook search" class="form-control " id="test">
	</div>
	<div class="col-md-1 col-xs-2 pad_1">
		<input type="submit" name="fbsearch" value="search" class="form-control " id="search">
	</div>
	<div class="col-md-offset-2 col-md-2 col-xs-offset-2 col-xs-2 pro_pad_2">
			<img src="<?php echo base_url().'image/'; ?><?php echo $profile; ?>" class=" pro_img_2">
			<!-- <img src="<?php echo base_url().'image/'; ?><?php echo $profile;?>"> -->
			<label class="white"><?php echo $fname;  ?></label>
	</div>
	<div class="col-md-1 col-xs-1 pad_1">
		<input type="submit" name="logout" value="logout" id="logout">
		</div>
	</div>
	
	<div class="row" id="fullscreen">
	</div>
	<div class="row footer" id="footer">
		<div class="col-md-3 col-xs-3">
			<div class="col-md-12 col-xs-12 pad_3">
				<img src="<?php echo base_url().'image/'; ?><?php echo $profile ?>" class="pro_img_2 pad_3" >
				<label><?php echo $fname;  ?></label>
			</div>
			<div class="col-md-12 col-xs-12 pad_3">
				<img src="<?php echo base_url().'image/edit.png'; ?>" class="pro_img_2 pad_3" >
				<label>Edit Profile</label>

			</div>
			<div class="col-md-12 col-xs-12 pad_3 ">
				<img src="<?php echo base_url().'image/edit.png'; ?>" class="pro_img_2 pad_3 " >
				<button id="conform" style="background-color:#D4D9E8;border:0px;"><b>Approve friend</b></button>

			</div>
			<div class="col-md-12 col-xs-12 pad_3 ">
				<img src="<?php echo base_url().'image/edit.png'; ?>" class="pro_img_2 pad_3 " >
				<button id="searchfriends" style="background-color:#D4D9E8;border:0px;"><b>Search Friends</b></button>

			</div>
				<div class="col-md-12 col-xs-12 pad_3 ">
				<img src="<?php echo base_url().'image/photo.png'; ?>" class="pro_img_2 pad_3 " >
				<button id="newsupdate" style="background-color:#D4D9E8;border:0px;"><b>photo upload</b></button>

			</div>
				<div class="col-md-12 col-xs-12 pad_3 ">
				<img src="<?php echo base_url().'image/write.png'; ?>" class="pro_img_2 pad_3 " >
				<button id="statusupdate" style="background-color:#D4D9E8;border:0px;" ><b>status update</b></button>

			</div>
			<div class="col-md-12 col-xs-12 pad_3 ">
				<img src="<?php echo base_url().'image/edit.png'; ?>" class="pro_img_2 pad_3 " >
				<button id="veiwstatus" style="background-color:#D4D9E8;border:0px;" ><b>news feed</b></button>
				</div>
		</div>
		<div class="col-md-6 col-xs-6 bootom_footer pro_name_pad pad_3 hidden" id="view">
		
		</div>
		<div class="col-md-6 col-xs-6 bootom_footer pro_name_pad pad_3 hidden" id="approve">
		
		</div>	
		<div class="col-md-6 col-xs-6 bootom_footer pro_name_pad pad_3 hidden" id="friends">
		
		</div>
		<form action="<?php echo base_url().'index.php/Newsfeed/picture' ?>" method="POST" enctype="multipart/form-data">
		<div class="col-md-6 col-xs-6 bootom_footer pro_name_pad pad_3 hidden" id="photo">
		<br><input type="file" name="a" id="pic1">
		<br><input type="file" name="b" id="pic2">
		<br><input type="file" name="c" id="pic3">
		<br><input type="file" name="d" id="pic4">
		<br><input type="file" name="e" id="pic5">
		<br><input type="submit" name="btn" value="post" id="picupd" style="margin-bottom:10px; margin-left:400px; background-color:#3b5998; color:white;">
		
		</div>
</form>
		<div class="col-md-6 col-xs-6 bootom_footer pro_name_pad" id="news">

			<div class="col-md-4 col-xs-4 pad_3">
				<img src="<?php echo base_url().'image/edit.png'; ?>" class="pro_img_2 pad_3" >
				<label>Update Status</label>
			</div>
			<div class="col-md-4 col-xs-4 pad_3">
				<img src="<?php echo base_url().'image/photo.png'; ?>" class="pro_img_2 pad_3" >
				<label><a href=""> Add photos/Video</a></label>
			</div>
				<div class="col-md-3 col-xs-3 pad_3">
				<img src="<?php echo base_url().'image/write.png'; ?>" class="pro_img_2 pad_3" >
				<label><a href=""> Write Notes </a></label>
			</div>
			<div class="col-md-12 col-xs-12">
			<hr>
			</div>
			<div class="col-md-6 col-xs-6 bootom_footer">
				<div class="col-md-2 col-xs-2 pad1_bottom">
					<img src="<?php echo base_url().'image/'; ?><?php echo $profile; ?>" class="pro_img_2" >
					
				</div>
				<div class="col-md-10 col-xs-10">
					<textarea rows="5" cols="50" placeholder="What is your mind?" id="newsfeed"> 
					</textarea>
					<div id="status">
						
					</div>
				</div>
				</div>
				<div class="col-md-12 col-xs-12">
				<hr>
				</div>
				<div class="col-md-3 col-md-offset-9  col-xs-3 col-xs-offset-9 ">
					<input type="submit" name="post" value="post" id="post" style="margin-bottom:10px;
	background-color:#3b5998; color:white; ">
				
			
			</div>
		</div>
		<div class=" col-md-2 col-xs-2 pad_3">
			<select class="form-control pad_left"><option >Your Ads</option></select>
		</div>
		<div class=" col-md-12 col-xs-12">
			
		</div>

		<div class=" col-md-offset-3 col-md-6  col-xs-offset-3 col-xs-6 footer pro_name_pad pad2_bottom" id="veiwupdation">

			
		</div>
		
		
	</div>


</div>

</body>
</html>