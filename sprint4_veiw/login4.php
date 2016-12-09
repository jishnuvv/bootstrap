<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<table width="100%" cellspacing="0" >
		<tr bgcolor="blue">
		<td width="40%">
			<font size="55%" face="verdana" color="white"><b>facebook</b></font>
		</td>
		<form name="gjkh" method="POST" action="login.php">
		<td>
			
				<input type="text" name="txtloginuser"><input type="password" name="txtloginpassword"><input type="submit" name="" value="Log In">
			
		</td>
		</form>
		</tr>
		<tr>
			<td><ul><font size="4" color="blue" face="verdana"><br><br>Facebook helps you connect and share<br> with the people in your life.</font></ul></td>
			<td>
				<form name="myform" method="POST" action="signupinsert.php">
				<table>
					
					<tr> 
						<td>
							<font size="3" color="" face="verdana"><b>Create an account</font><br>It's free and always will be
						</td>
					</tr>
					<tr>
						<td><input type="text" name="txtfname" placeholder="First name" size="18" style="height:30px"><input type="text" name="txtlname" placeholder="Last name" size="18" style="height:30px">	
						</td>
					</tr>
					<tr>
						<td><input type="text" name="txtmobilenumber" placeholder="Mobile number or email address" size="40" style="height:30px"></td>
					</tr>
					<tr>
						<td><input type="text" name="txtemailaddress" placeholder="Re-enter mobile number or email address" size="40" style="height:30px"></td>
					</tr>
					<tr>
						<td><input type="text" name="txtpassword" placeholder="New password" size="40" style="height:30px"></td>
					</tr>
					<tr>
						<td><b>Birthday</br>
						<select size="" style="height:30px" name="ddlday">
							<option>day</option>
							<?php
							for ($i=0; $i <31 ; $i++) { 
								echo "<option>$i</option>";# code...
							}
							?>
						</select>
						<select size="" style="height:30px" name="ddlmonth">
							<option>month</option>
							<?php
								for ($i=0; $i <12 ; $i++) {
									echo "<option>$i</option>";
								}

							?>

						</select>
						<select size="" style="height:30px" name="ddlyear">
							<option>year</option>
							<?php
								for ($i=1880; $i <2050;$i++) {
									echo "<option>$i</option>";
								}
							?>
						</select>
					</tr>
					<tr>
						<td><input type="radio" name="gender" value="female">female
							<input type="radio" name="gender" value="male">male</td>
					</tr>
					<tr>
					<td><font size="2" color="black"> clicking Create an account, you agree to our Terms and that<br> 
											you have read our Data Policy, including our Cookie Use.</td>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="" value="Create an account" size="18" style="height:25px;background-color:green"></td>
				</tr>
			
			</table>
			</form>
			</td>
		</tr>
</table>
</body>
</html>