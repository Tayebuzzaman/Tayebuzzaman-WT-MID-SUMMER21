<?php
	$sname="";
	$err_sname="";
	$suname="";
	$err_suname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";
	
	$shift=[];
	$err_shift="";
	
	
	$err=false;
	

	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["sname"])){
			$err_sname="Staff Name Required";
			$err=true;
		}
		else{
			$sname=$_POST["sname"];
		}
		if(empty($_POST["susername"])){
			$err_suname="Staff User Id Required";
			$err = true;
		}
		else if(strlen($_POST["susername"])<=6){
			$err_suname="Must be greater than 6";
			$err = true;
		}
		else if(strpos($_POST["susername"]," ")){
				$err_suname=" White space is not allowed in Username";
		}
		else{
			$suname=$_POST["susername"];
		}
		if(empty($_POST["password"])){
			$err_pass="Password Required";
			$err = true;
		}
		else if(strlen($_POST["password"])<8){
			$err_pass="Password should have minimum 8 character";
		}
		else if ((!strpos($_POST["password"],"#"))||(!strpos($_POST["password"],"?")))	{
			$err_pass="Password should have minimum 1 character '?'or'#'";
		}
		else{
			$pass = $_POST["password"];
		}
		
		
		
		if(!$err){
			echo "Name: ".htmlspecialchars($_POST["sname"])."<br>";
			echo "Staff User Id: ".htmlspecialchars($_POST["Staff User Id"])."<br>";
		}
	}
?>

<html>
	<head></head>
	<body>
	<h1>Delete Staff</h1>
		<fieldset>
			<form action="" method="post">
			 <table border = "1">
				<tr>
					<td align="right">Staff Name: </td>
					<td>
						<input type="text" name="sname" value="<?php echo $sname;?>" placeholder="Name">
						<span><?php echo $err_sname;?></span>
						
					</td>
				</tr>
				<tr>
					<td align="right">Staff User Id: </td>
					<td>
						<input type="text" name="susername" value="<?php echo $suname;?>" placeholder="Staff User Id">
						<span><?php echo $err_suname;?></span>
					</td>
				</tr>
				
				<tr>
					<td align="right">Enter Your Password: </td>
					<td><input type="password" name="password" value="<?php echo $pass;?>" placeholder="Enter Your Password">
					<span><?php echo $err_pass;?></span></td>
				</tr>
				
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit"value="DELETE"></td>
				</tr>
			</form>	
		</fieldset>		
	</body>
</html>