<?php
	session_start();
	
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>LabTask-6(Login)</title>
</head>
<body>
	<form method="post" >
		<table>
			
			<tr>
				<td><b>Email :</b></td>
				<td><input type="Email" name="Email"/></td>
				
			</tr>
			
			<tr>
				<td><b>Password :</b></td>
				<td><input type="password" name="Password"/></td>
				
			</tr>
			

			<tr>
				<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
			</tr>
			
		</table>

		
	</form>
	
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "UserDB";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
		   
		  
		  $sql = "SELECT * FROM users WHERE email = '".$_POST["Email"]."' and password = '".$_POST["Password"]."'";
		  $result = $conn->query($sql);
		  if ($result->num_rows > 0)
		  {
			  $_SESSION["Email"]=$_POST["Email"];
			  header("location: home.php");
		  }
			  
		  else
			  echo "wrong Email or Password";
   }
	?>
</body>