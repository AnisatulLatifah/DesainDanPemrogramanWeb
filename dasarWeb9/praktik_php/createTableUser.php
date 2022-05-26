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

	$query = "CREATE TABLE user (
				id INT PRIMARY KEY AUTO_INCREMENT,
				username VARCHAR(20) NOT NULL,
				address VARCHAR(50))";

	if (mysqli_query($connect, $query)){
		echo "Tabel user berhasil dibuat";
	}
	else {
		echo "Tabel user gagal dibuat <br>" . mysqli_error($connect); 
	}

	mysqli_close($connect);

?>

