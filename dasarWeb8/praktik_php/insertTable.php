<?php 
$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "web_db";

	$connect = mysqli_connect($hostname, $username, $password, $database);

	if($connect) {
		echo "Koneksi ke MYSQL berhasil <br>";
	 }
	 else {
	 	echo "Koneksi ke MYSQL gagal" . mysqli_connect_error();	
	}

	$query = "INSERT into student(nama, address)
				VALUES('Anisatul Latifah','Magetan'),
				('Anisna Hilwa','Banyuwangi'),
				('Annisa Nabila','Lumajang')";

	if (mysqli_query($connect, $query)){
		echo "Tabel student berhasil ditambahkan";
	}
	else {
		echo "Tabel student gagal ditambahkan <br>" . mysqli_error($connect); 
	}

	mysqli_close($connect);
 ?>

