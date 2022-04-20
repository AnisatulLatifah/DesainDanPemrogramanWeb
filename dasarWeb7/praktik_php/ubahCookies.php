<?php 
	$name = "mahasiswa";
	$value = "Anisatul Latifah";
	setcookie($name, $value, time()+600);
	setcookie("kelas","MI-IF", time()+3600);
?>
<html>
<body>
<?php 
	echo "Cookies telah diubah";
?>
</body>
</html>

