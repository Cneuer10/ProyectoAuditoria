<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Consola de Manejo de Inventario</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<br> 
	<div id="box">
	
	Bienvenido, <?php echo $user_data['nombre']; ?> <br> <br> 
    <a href="proyectoai.php">Anadir a inventario</a><br><br> 
    <a href="auditor.php">Revisar inventario (Auditor)</a><br><br> 
 
</div>
</body>
</html>
