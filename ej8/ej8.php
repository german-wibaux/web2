

<?php

	if (isset($_POST["user"]) && isset($_POST["pass"])){
		$name=$_POST["user"];
		$pass=$_POST["pass"];
		echo "<h1>El nombre es: $name</h1>";
		echo "La contraseña es: $pass";
	}
		
 ?>

