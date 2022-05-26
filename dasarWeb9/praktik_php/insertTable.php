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

	$query = "INSERT into user(username, password)
				VALUES('admin','123')";


	if (mysqli_query($connect, $query)){
		echo "Tabel user berhasil ditambahkan";
	}
	else {
		echo "Tabel user gagal ditambahkan <br>" . mysqli_error($connect); 
	}

	mysqli_close($connect);
 ?>

