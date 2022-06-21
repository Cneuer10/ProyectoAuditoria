<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$radio_opcion=$_POST['licencias'];
		switch ($radio_opcion) { 
		case 'software':
            $query = "SELECT id_software, nombre, duracion_licencia, tipo_licencia, sistema_operativo,precio_licencia FROM software"; 
            $result = mysqli_query($con, $query); 

            echo "<table>";
        echo "<tr><th>ID Software</th><th>Nombre</th><th>duracion</th><th>tipo</th><th>OS</th><th>Precio</th></tr>" ;
       
while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_software"]."</td><td >".$row["nombre"]."</td><td>".$row["duracion_licencia"]."</td><td> ".$row["tipo_licencia"]."</td><td>".$row["sistema_operativo"]."</td><td>".$row["precio_licencia"]."</td></tr>";
      }
       
        echo "</table> ";
			break; 


		case 'hardware': 
			
			$query = "SELECT id_maquina,cpu,pantalla,teclado,altavoz,mouse,estado,departamento FROM hardware";
			$result = mysqli_query($con, $query); 
            echo "<table>";
            echo "<tr><th>ID Maquina</th><th>CPU</th><th>Pantalla</th><th>Teclado</th><th>Altavoz</th><th>Mouse</th><th>Estado</th><th>Departamento</th></tr>" ;
           
    while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id_maquina"]."</td><td >".$row["cpu"]."</td><td>".$row["pantalla"]."</td><td> ".$row["teclado"]."</td><td>".$row["altavoz"]."</td><td>".$row["mouse"]."</td><td>".$row["estado"]."</td><td>".$row["departamento"]."</td></tr>";
          }
           
            echo "</table> ";
			break;  

		case 'bases_de_datos': 
			 
			$query = "SELECT id_bd,nombre,tipo,departamento FROM base_de_datos";
			$result = mysqli_query($con, $query); 

            echo "<table>";
            echo "<tr><th>ID BD</th><th>Nombre</th><th>Tipo</th><th>Departamento</th></tr>" ;
           
    while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id_bd"]."</td><td >".$row["nombre"]."</td><td>".$row["tipo"]."</td><td> ".$row["departamento"]."</td></tr>";
          }
           
            echo "</table> ";
			break;  

		case 'mantenimiento':  
			
			$query = "SELECT id_proceso,nombre,departamento,uso,tiempo_uso,asignado FROM mantenimiento_respaldos";
			$result = mysqli_query($con, $query); 
            echo "<table>";
            echo "<tr><th>ID Proceso</th><th>Nombre</th><th>Departamento</th><th>Uso</th><th>Tiempo Uso</th><th>Asignado</th></tr>" ;
           
    while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id_proceso"]."</td><td >".$row["nombre"]."</td><td>".$row["departamento"]."</td><td> ".$row["uso"]."</td><td>".$row["tiempo_uso"]."</td><td>".$row["asignado"]."</td></tr>";
          }
           
            echo "</table> ";
			break;   

		case 'mobiliarios':  
			
			$query = "SELECT id_equipo,nombre,precio,departamento,asignado,depreciacion FROM mobiliario_equipo";
			$result = mysqli_query($con, $query);
			break;   

		case 'proyectos': 
			
			$query = "SELECT id_proyecto,id_empresa,nombre_proyecto,tipo_proyecto,encargado,departamento,costo,duracion FROM proyectos";
			$result = mysqli_query($con, $query);
			break; 

		case 'puestos': 
			
			$query = "SELECT id_puesto,id_empresa,nombre,apellido,edad,puesto,departamento,salario,nivel_academico FROM puesto_de_trabajo";
			$result = mysqli_query($con, $query);
			break; 
		
		case 'redes': 
			
			$query = "SELECT id_equipoR,id_empresa,nombre,precio,cantidad,capacidad,responsable,ubicacion FROM redes";
			$result = mysqli_query($con, $query);
			break; 

		} 

       
		
	
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Software</title>
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

	#text2{

height: 35px;
border-radius: 5px;
padding: 4px;
border: solid thin #aaa;
width: 104%;
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
	#div1 {
    display:none;
    border:solid 1px gray;
    text-align:center;
}
input:checked + #div1 {
    display:block;
}
	</style>

	<div id="box">
		
		<form method="post"> 
		<input type="radio" name="licencias" value="software" checked/>Software
   
    </br>
    <input type="radio" name="licencias" value="hardware" />Hardware
    
	</br>
    <input type="radio" name="licencias" value="bases_de_datos" />Bases de datos
    

	</br>
    <input type="radio" name="licencias" value="mantenimiento" />Mantenimiento y Respaldos
    
	</br>
    <input type="radio" name="licencias" value="mobiliarios" />Mobiliarios y Equipos
    
	</br>
    <input type="radio" name="licencias" value="proyectos" />Proyectos
    

	</br>
    <input type="radio" name="licencias" value="puestos" />Puestos de Trabajo
    

	</br>
    <input type="radio" name="licencias" value="redes" />Redes

			
			

			
			
<br><br><input id="button" type="submit" value="Buscar"><br><br>
		</form> 
	</div> 

</body>
</html>
