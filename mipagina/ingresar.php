


<?php
	$error;  
	if (!empty($_POST['usuario']) && !empty($_POST['contra'])) {
		$usuario = $_POST['usuario'];
		$contra = $_POST['contra'];
		if ($usuario == "crazylove" && $contra == "nuestroamor") {
			$error = "Ok";
			header("Location: https://abelpc110.wixsite.com/ayk-crazylove");
		}else{
			$error = "Incorrecto";
			header("Location: index.php?error=$error");
		}
	}else{
		$error = "Vacio";
		header("Location: index.php?error=$error");
	}
?>