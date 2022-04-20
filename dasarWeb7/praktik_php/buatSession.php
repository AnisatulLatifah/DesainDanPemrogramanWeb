<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<body>
	<?php 
		$_SESSION["makananfav"] = "Rujak";
		$_SESSION["minumanfav"] = "Es Teler";
		echo "Session telah diset";
		 ?>
</body>
</html>