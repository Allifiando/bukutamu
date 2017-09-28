<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempatlahir"></td>
			</tr>
			<tr> 
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tanggallahir"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>No Telepon</td>
				<td><input type="text" name="notelepon"></td>
			</tr>
			<tr> 
				<td>Kesan / Noted </td>
				<td><input type="text" name="noted"></td>
			</tr>

			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into bukutamu table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$email = $_POST['email'];
		$notelepon = $_POST['notelepon'];
		$noted = $_POST['noted'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO bukutamu(nama,tempatlahir,tanggallahir,email,notelepon,noted) VALUES('$nama','$tempatlahir','$tanggallahir','$email','$notelepon','$noted')");
		
		// Show message when user added
		echo "sukses menambahkan tamu <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>