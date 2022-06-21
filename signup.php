<?php 
session_start();

	include("connection.php");
	include("funciones.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$username = $_POST['username'];
		$password = $_POST['password']; 
        $nombre = $_POST['nombre']; 
        $apellido = $_POST['apellido'];

		if(!empty($username) && !empty($password))
		{

			
			
			$query = "insert into empleados (nombre,apellido,username,password) values ('$nombre','$apellido','$username','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Porfavor ingrese informacion valida";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Registro</div>

            <label>Nombre</label><br>
			<input id="text" type="text" name="nombre"><br><br> 
            <label>Apellido</label><br>
			<input id="text" type="text" name="apellido"><br><br> 
            <label>Username</label><br>
            <input id="text" type="text" name="username"><br><br>  
            <label>Contrasena</label><br>
            <input id="text" type="password" name="password"><br><br>  

			<input id="button" type="submit" value="Registrar"><br><br>

			<a href="login.php">Ingresa aqui para iniciar sesion</a><br><br>
		</form>
	</div>
</body>
</html>
