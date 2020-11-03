<!DOCTYPE html>
<html>
<head>
	<title>Mi primera Pagina</title>
</head>
<body style="margin-top: 150px; margin-left: 550px;" background="img/71613.jpg">
	<div>
	<center>
		<table width="450" border="5">
		<td><center><h1>LOGIN</h1></center>
		<br>
		<form action="ingresar.php" method="POST">
				<center><h3 style="padding-right: 2px">Usuario:<input type="text" name="usuario"></h3></center>
				<center><h3 style="padding-right: 32px">Contraseña:<input type="password" name="contra"></h3></center>
				<?php 
		if (isset($_GET['error'])) {
			$error = $_GET['error'];
			if ($error == 'Incorrecto') {
				echo "<h2>El usuario o Contraseña no son correctos</h2>";
			}
		}

	?>
				<center><h2><input type="submit" value="INGRESAR"><br><br></center></td><br></h2>
		</form>
		</table>
	</center>
	</div>	
</body>
</html>
<?php 

?>