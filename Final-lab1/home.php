<?php
	session_start();
	
?>
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

	$sql = "SELECT id, name, email, gender, password, mobile, address, picture FROM users WHERE email='".$_SESSION["email"]."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		?>
		<table>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Password</th>
				<th>Mobile</th>
				<th>Address</th>
				<th>Picture</th>
			</tr>
		<?php
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["password"]."</td>";
			echo "<td>".$row["mobile"]."</td>";
			echo "<td>".$row["address"]."</td>";
			
			?>
			<td><img src="<?php echo $row["picture"]; ?>" height="100px"/></td>
			<?php
			echo "</tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}

	$conn->close();
	
	
 ?>
 <button></button>