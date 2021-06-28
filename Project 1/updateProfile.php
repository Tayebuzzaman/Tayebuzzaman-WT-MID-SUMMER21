<?php
	$updatename="";
	$err_updatename="";
	$updateuname="";
	$err_updateuname="";
	$updatepass="";
	$err_updatepass="";
	
	$updateemail="";
	$err_updateemail="";
	$updatecode="";
	$err_updatecode="";
	$updatenumber="";
	$err_updatenumber="";
	$updatestreet="";
	$err_updatestreet="";
	$updatecity="";
	$err_updatecity="";
	$updatestate="";
	$err_updatestate="";
	$updatezip="";
	$err_updatezip="";
	
	
	
	$err=false;
	

	
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["updatename"])){
			$err_updatename="Name Required";
			$err=true;
		}
		else{
			$updatename=$_POST["updatename"];
		}
		if(empty($_POST["updateuname"])){
			$err_updateuname="Username Required";
			$err = true;
		}
		else if(strlen($_POST["updateuname"])<=6){
			$err_updateuname="Must be greater than 6";
			$err = true;
		}
		
		else{
			$updateuname=$_POST["updateuname"];
		}
		if(empty($_POST["updatepass"])){
			$err_updatepass="Password Required";
			$err = true;
		}
		else if(strlen($_POST["updatepass"])<8){
			$err_updatepass="Password should have minimum 8 character";
		}
		else if ((!strpos($_POST["updatepass"],"#"))||(!strpos($_POST["updatepass"],"?")))	{
			$err_updatepass="Password should have minimum 1 character '?'or'#'";
		}
		else{
			$updatepass = $_POST["updatepass"];
		}
		if(!strpos($_POST["updateemail"],"@")){
			if(!strpos($_POST["updateemail"],"."))
			$err_updateemail="Email should contain '@' and '.' sequentially";
			}
		else {
			$updateemail=$_POST["updateemail"];
		}
		if(empty($_POST["updatecode"])){
			$err_updatecode="Code Required";
			$err = true;
		}
		else{
			$updatecode = $_POST["updatecode"];
		}
		if(empty($_POST["updatenumber"])){
			$err_updatenumber="Number Required";
			$err = true;
		}
		else{
			$updatenumber = $_POST["updatenumber"];
		}
		if(empty($_POST["updatestreet"])){
			$err_updatestreet="Street Number Required";
			$err = true;
		}
		else{
			$updatestreet = $_POST["updatestreet"];
		}
		if(empty($_POST["updatecity"])){
			$err_updatecity="City Required";
			$err = true;
		}
		else{
			$updatecity = $_POST["updatecity"];
		}
		if(empty($_POST["updatestate"])){
			$err_updatestate="State Required";
			$err = true;
		}
		else{
			$updatestate = $_POST["updatestate"];
		}
		if(empty($_POST["updatezip"])){
			$err_updatezip="Postal/Zip Required";
			$err = true;
		}
		else{
			$updatezip = $_POST["updatezip"];
		}
		
		if(!$err){
			echo "updateName: ".htmlspecialchars($_POST["updatename"])."<br>";
			echo "updateUserName: ".htmlspecialchars($_POST["updateuname"])."<br>";
			echo "updatePass: ".htmlspecialchars($_POST["updatepass"])."<br>";
			echo "updateEmail: ".htmlspecialchars($_POST["updateemail"])."<br>";
			echo "updateCode: ".htmlspecialchars($_POST["updatecode"])."<br>";
			echo "updateNumber: ".htmlspecialchars($_POST["updatenumber"])."<br>";
			echo "updateStreet: ".htmlspecialchars($_POST["updatestreet"])."<br>";
			echo "updateCity: ".htmlspecialchars($_POST["updatecity"])."<br>";
			echo "updateState: ".htmlspecialchars($_POST["updatestate"])."<br>";
			echo "updateZip: ".htmlspecialchars($_POST["updatezip"])."<br>";
			
		}
	}
?>

<html>
	<head></head>
	<body>
	<h1>Update profile</h1>
		<fieldset>
			<form action="" method="post">
			 <table border = "1">
				<tr>
					<td align="right">Update Name: </td>
					<td><input type="text" name="updatename" value="<?php echo $updatename;?>" placeholder="Update Name">
					<span><?php echo $err_updatename;?></span></td>
				</tr>
				<tr>
					<td align="right">Update User Name </td>
					<td><input type="text" name="updateuname" value="<?php echo $updateuname;?>" placeholder="Update Username">
					<span><?php echo $err_updateuname;?></span></td>
				</tr>
				
				<tr>
					<td align="right">update Email: </td>
					<td><input type="text" name="updateemail" value="<?php echo $updateemail;?>" placeholder="Update Email">
					<span><?php echo $err_updateemail;?></span></td>
				</tr>
				<tr>
					<td align="right">Update Password: </td>
					<td><input type="password" name="updatepass" value="<?php echo $updatepass;?>" placeholder="Update Password">
					<span><?php echo $err_updatepass;?></span></td>
				</tr>
				<tr>
				<tr>
					<td align="right">Update Phone: </td>
					<td><input type="tel" name="updatecode" value="<?php echo $updatecode;?>" placeholder="Update code"> -
						<input type="number" name="updatenumber" value="<?php echo $updatenumber;?>" placeholder="Update number">
					
					<span><?php echo $err_updatecode;?> - <?php echo $err_updatenumber;?></span></td>
				</tr>
				<tr>
					<td align="right">Update Address: </td>
					<td>
						<input type="text" name="updatestreet" value="<?php echo $updatestreet;?>" placeholder="Update Street Number"><br>
						<input type="text" name="updatecity" value="<?php echo $updatecity;?>" placeholder="Update City"> -
						<input type="text" name="updatestate" value="<?php echo $updatestate;?>" placeholder="Update State"><br>
						<input type="text" name="updatezip" value="<?php echo $updatezip;?>" placeholder="Update Postal/Zip code">
						
					<span><?php echo $err_updatestreet;?></span><span><?php echo $err_updatecity;?></span><span><?php echo $err_updatestate;?></span><span><?php echo $err_updatezip;?></span></td>
				</tr>
			
					
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit"value="UPDATE"></td>
				</tr>
			</form>	
		</fieldset>		
	</body>
</html>