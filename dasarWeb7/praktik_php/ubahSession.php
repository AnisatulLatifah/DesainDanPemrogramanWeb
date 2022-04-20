<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<body>
	<?php 
		$_SESSION["makananfav"] = "Salad Buah";

		echo "Session makananfav telah diubah";
?>
</body>
</html>