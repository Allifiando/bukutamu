<?php
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM bukutamu ORDER BY id ASC");
?>
 
<html>
<head>    
    <title>Aplikasi Buku Tamu</title>
</head>
 
<body>
<center bold>Daftar Buku Tamu</center>
<center><a href="add.php">Tambah Buku Tamu</a></center><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nomor</th> <th>Nama</th> <th>Tempat Lahir</th> <th>Tanggal Lahir</th> <th>Email</th> <th>No Telepon</th> <th>Kesan</th> <th>Aksi</th>
    </tr>

    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['tempatlahir']."</td>";
        echo "<td>".$user_data['tanggallahir']."</td>";
        echo "<td>".$user_data['email']."</td>";    
	   echo "<td>".$user_data['notelepon']."</td>";
        echo "<td>".$user_data['noted']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>