<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";
	$room="";
	$err_room="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$shift="";
	$err_shift="";
	
	
	
	$err=false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$err=true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$err = true;
		}
		else if(strlen($_POST["username"])<=6){
			$err_uname="Must be greater than 6";
			$err = true;
		}
		else if(strpos($_POST["username"]," ")){
				$err_uname=" White space is not allowed in Username";
		}
		else{
			$uname=$_POST["username"];
		}
		
		if(!strpos($_POST["room"],"@")){
			if(!strpos($_POST["room"],"."))
			$err_room="room no should be mentioned";
			}
		else {
			$room=$_POST["room"];
		}
		
		if(empty($_POST["shift"])){
			$err_shift="Shift Required";
			$err = true;
		}
		else{
			$shift = $_POST["shift"];
		}
		
		if(!$err){
			echo "Name: ".htmlspecialchars($_POST["name"])."<br>";
			echo "Staff User Id: ".htmlspecialchars($_POST["username"])."<br>";
			echo "Room: ".htmlspecialchars($_POST["room"])."<br>";
			echo "Code: ".htmlspecialchars($_POST["code"])."<br>";
			echo "Number: ".htmlspecialchars($_POST["number"])."<br>";
			echo "Shift: ".htmlspecialchars($_POST["shift"])."<br>";
			
		}
	}
?>

<html>
	<head></head>
	<body>
	<h1>Assign Staff Duty</h1>
		<fieldset>
			<form action="" method="post">
			 <table border ="1">
				<tr>
					<td align="right">Staff Name: </td>
					<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name">
					<span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td align="right">Staff User Id: </td>
					<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username">
					<span><?php echo $err_uname;?></span></td>
				</tr>
				
				<tr>
					<td align="right">Room no: </td>
					<td>
						<input type="text" name="room" value="<?php echo $room;?>" placeholder="Room">
						<span><?php echo $err_room;?></span></td>
				</tr>
				<tr>
					<td align="right">Phone: </td>
					<td><input type="tel" name="code" value="<?php echo $code;?>" placeholder="code"> -
						<input type="number" name="number" value="<?php echo $number;?>" placeholder="number">
					
					<span><?php echo $err_code;?> - <?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td align="right">Shift: </td>
					<td>
						<input type="text" name="shift" value="<?php echo $shift;?>" placeholder="Shift "><br>
						<span><?php echo $err_shift;?></span>
					</td>
				</tr>
				
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit"value="ASSIGN"></td>
				</tr>
			</form>	
		</fieldset>		
	</body>
</html>