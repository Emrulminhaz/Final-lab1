<?php
	session_start();
	
	$_SESSION["Email"]=$_POST["Email"];
	$_SESSION["Password"]=$_POST["Password"];
	
?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Product</title>
</head>
<body>
	
	<form method="post" action="confirm.php">
		<table>
                        <tr>
				<td><b>Product id :</b></td>
				<td><input type="text" name="ProductId"/></td>
				
			</tr>
			<tr>
				<td><b>ProductName :</b></td>
				<td><input type="text" name="ProductName"/></td>
				
			</tr>

                        <tr>
				<td><b>Description :</b></td>
				<td><input type="text" name="Description"/></td>
				
			</tr>
                        
                        <tr>
				<td><b>Quantity :</b></td>
				<td><input type="text" name="Quantity"/></td>
				
			</tr>

			<tr>
				<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
			</tr>
                           
                    
			
		</table>
		
		
		
		
		
		
		
		
		
		
		
		
	</form>
	<br><br>
	
	
</body>
</html>