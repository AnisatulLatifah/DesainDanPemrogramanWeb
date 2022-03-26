<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php 
		$numberedString = "123456789123456789123456789";
		$fivePos = strpos ($numberedString, "5");
		echo "Posisi angka 5 di dalam string adalah $fivePos";
		$fivePos2 = strpos($numberedString, "5", $fivePos + 1);
		echo "<br> Posisi angka 5 yang kedua di dalam string adalah
		$fivePos2";
		 ?>

</body>
</html>

