<?php
// memasukkan file untuk koneksi database
include_once("config.php");
 
// melakukan check jika di klik update buku tamu, kemudian ditampilkan lagi ke home setelah update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$nama = $_POST['nama'];
		$tempatlahir = $_POST['tempatlahir'];
		$tanggallahir = $_POST['tanggallahir'];
		$email = $_POST['email'];
		$notelepon = $_POST['notelepon'];
		$noted = $_POST['noted'];

		
	// update data buku tamu
	$result = mysqli_query($mysqli, "UPDATE bukutamu SET nama='$nama',tempatlahir='$tempatlahir',tanggallahir='$tanggallahir',email='$email',notelepon='$notelepon', noted='$noted'  WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM bukutamu WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['nama'];
	$tempatlahir = $user_data['tempatlahir'];
	$tanggallahir = $user_data['tanggallahir'];
	$email = $user_data['email'];
	$notelepon = $user_data['notelepon'];
	$noted = $user_data['noted'];
}
?>
<html>
<head>	
	<title>Edit Data Buku Tamu</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Tempat Lahir</td>
				<td><input type="text" name="alamat" value=<?php echo $tempatlahir;?>></td>
			</tr>
			<tr> 
				<td>Tanggal Lahir</td>
				<td><input type="text" name="alamat" value=<?php echo $tanggallahir;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>

			<td>No Telepon</td>
				<td><input type="text" name="notelepon" value=<?php echo $notelepon;?>></td>
			</tr>
			<tr> 
				<td>Kesan / Noted</td>
				<td><input type="text" name="noted" value=<?php echo $noted;?>></td>
			</tr>

			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>