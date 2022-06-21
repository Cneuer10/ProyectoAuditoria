<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$radio_opcion=$_POST['licencias'];
		switch ($radio_opcion) { 
		case 'software':
		$nombre = $_POST['nombre']; 
		$duracion_licencia = $_POST['duracion_licencia'];  
		$tipo_licencia = $_POST['tipo_licencia']; 
		$sistema_operativo = $_POST['sistema_operativo'];  
		$precio_licencia = $_POST['precio_licencia']; 
		$id_software=random_num(5); 
		$id_empresa='1'; 
			
			$query = "insert into software (id_software,id_empresa,nombre,duracion_licencia,tipo_licencia,sistema_operativo,precio_licencia) values ('$id_software','$id_empresa', '$nombre','$duracion_licencia','$tipo_licencia','$sistema_operativo','$precio_licencia')";
			$result = mysqli_query($con, $query);
			break; 


		case 'hardware': 
			$cpu = $_POST['cpu']; 
			$pantalla =  $_POST['pantalla']; 
			$teclado = $_POST['teclado']; 
			$altavoz = $_POST['altavoz']; 
			$mouse = $_POST['mouse']; 
			$estado = $_POST['estado']; 
			$departamento = $_POST['departamento']; 
			$id_maquina=random_num(5); 
			$id_empresa='1';  
			$query = "insert into hardware (id_maquina,id_empresa,cpu,pantalla,teclado,altavoz,mouse,estado,departamento) values ('$id_maquina','$id_empresa', '$cpu','$pantalla','$teclado','$altavoz','$mouse','$estado','$departamento')";
			$result = mysqli_query($con, $query);
			break;  

		case 'bases_de_datos': 
			$id_bd=random_num(5); 
			$id_empresa='1';  
			$nombrebd = $_POST['nombrebd'];  
			$tipobd = $_POST['tipobd'];  
			$departamentobd = $_POST['departamentobd'];  
			$query = "insert into base_de_datos (id_bd,id_empresa,nombre,tipo,departamento) values ('$id_bd','$id_empresa', '$nombrebd','$tipobd','$departamentobd')";
			$result = mysqli_query($con, $query);
			break;  

		case 'mantenimiento':  
			$id_proceso=random_num(5); 
			$id_empresa='1';   
			$nombre_mant = $_POST['nombre_mant'];  
			$departamento_mant = $_POST['departamento_mant'];  
			$uso_mant = $_POST['uso_mant'];   
			$tiempo_uso_mant = $_POST['tiempo_uso_mant'];  
			$asignado_mant = $_POST['asignado_mant'];  
			$query = "insert into mantenimiento_respaldos (id_proceso,id_empresa,nombre,departamento,uso,tiempo_uso,asignado) values ('$id_proceso','$id_empresa', '$nombre_mant','$departamento_mant','$uso_mant','$tiempo_uso_mant','$asignado_mant')";
			$result = mysqli_query($con, $query);
			break;   

		case 'mobiliarios':  
			$id_equipo=random_num(5); 
			$id_empresa='1';   
			$nombre_mob =  $_POST['nombre_mob'];  
			$precio_mob =   $_POST['precio_mob'];  
			$departamento_mob =  $_POST['departamento_mob'];  
			$asignado_mob =  $_POST['asignado_mob'];  
			$depreciacion_mob =  $_POST['depreciacion_mob'];  
			$query = "insert into mobiliario_equipo (id_equipo,id_empresa,nombre,precio,departamento,asignado,depreciacion) values ('$id_equipo','$id_empresa', '$nombre_mob','$precio_mob','$departamento_mob','$asignado_mob','$depreciacion_mob')";
			$result = mysqli_query($con, $query);
			break;   

		case 'proyectos': 
			$id_proyecto=random_num(5); 
			$id_empresa='1';    
			$nombre_proy = $_POST['nombre_proy'];   
			$tipo_proy = $_POST['tipo_proy']; 
			$encargado_proy = $_POST['encargado_proy']; 
			$departamento_proy = $_POST['departamento_proy']; 
			$costo_proy = $_POST['costo_proy']; 
			$duracion_proy = $_POST['duracion_proy']; 
			$query = "insert into proyectos (id_proyecto,id_empresa,nombre_proyecto,tipo_proyecto,encargado,departamento,costo,duracion) values ('$id_proyecto','$id_empresa', '$nombre_proy','$tipo_proy','$encargado_proy','$departamento_proy','$costo_proy', '$duracion_proy')";
			$result = mysqli_query($con, $query);
			break; 

		case 'puestos': 
			$id_puesto=random_num(5); 
			$id_empresa='1';  
			$nombre_puestos = $_POST['nombre_puestos']; 
			$apellido_puestos = $_POST['apellido_puestos']; 
			$edad_puestos = $_POST['edad_puestos']; 
			$puesto_puestos = $_POST['puesto_puestos']; 
			$departamento_puestos = $_POST['departamento_puestos']; 
			$salario_puestos = $_POST['salario_puestos']; 
			$nivel_puestos = $_POST['nivel_puestos']; 
			$query = "insert into puesto_de_trabajo (id_puesto,id_empresa,nombre,apellido,edad,puesto,departamento,salario,nivel_academico) values ('$id_puesto','$id_empresa', '$nombre_puestos','$apellido_puestos','$edad_puestos','$puesto_puestos','$departamento_puestos', '$salario_puestos', '$nivel_puestos')";
			$result = mysqli_query($con, $query);
			break; 
		
		case 'redes': 
			$id_equipoR=random_num(5); 
			$id_empresa='1'; 
			$nombre_redes = $_POST['nombre_redes'];  
			$precio_redes = $_POST['precio_redes'];  
			$cantidad_redes = $_POST['cantidad_redes'];  
			$capacidad_redes = $_POST['capacidad_redes'];  
			$responsable_redes = $_POST['responsable_redes'];  
			$ubicacion_redes = $_POST['ubicacion_redes'];  
			$query = "insert into redes (id_equipoR,id_empresa,nombre,precio,cantidad,capacidad,responsable,ubicacion) values ('$id_equipoR','$id_empresa', '$nombre_redes','$precio_redes','$cantidad_redes','$capacidad_redes','$responsable_redes', '$ubicacion_redes')";
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
    <div id="div1">
	
			
			<label>Nombre de licencia</label><br>
			<input id="text" type="text" name="nombre"><br><br> 
			<label>Duracion (en aÃ±os)</label><br>
			<input id="text" type="text" name="duracion_licencia"><br><br> 
			<label>Tipo de licencia</label><br>
            <input id="text" type="text" name="tipo_licencia"><br><br>  
			<label>OS</label><br>
			<select id = "text2" name="sistema_operativo">
   			<option value="small">Windows</option>
    		<option value="MacOS">MacOS</option>
    		<option value="Linux">Linux</option>
  			</select>  <br><br> 
			<label>Precio de licencia (en $)</label><br>
            <input id="text" type="text" name="precio_licencia"><br><br>  

	</div>
    </br>
    <input type="radio" name="licencias" value="hardware" />Hardware
    <div id="div1"> 
			<label>CPU</label><br>
			<input id="text" type="text" name="cpu"><br><br> 
			<label>Pantalla</label><br>
			<input id="text" type="text" name="pantalla"><br><br> 
			<label>Teclado</label><br>
            <input id="text" type="text" name="teclado"><br><br>   
			<label>Altavoz</label><br>
			<input id="text" type="text" name="altavoz"><br><br> 
			<label>Mouse</label><br>
            <input id="text" type="text" name="mouse"><br><br>   
			<label>Estado</label><br>
			<input id="text" type="text" name="estado"><br><br> 
			<label>Departamento</label><br>
            <input id="text" type="text" name="departamento"><br><br>  
	</div> 
	</br>
    <input type="radio" name="licencias" value="bases_de_datos" />Bases de datos
    <div id="div1"> 
			<label>Nombre</label><br>
			<input id="text" type="text" name="nombrebd"><br><br> 
			<label>Tipo</label><br>
			<input id="text" type="text" name="tipobd"><br><br> 
			<label>Departamento</label><br>
            <input id="text" type="text" name="departamentobd"><br><br>   
			
		  
	</div>   

	</br>
    <input type="radio" name="licencias" value="mantenimiento" />Mantenimiento y Respaldos
    <div id="div1"> 
			<label>Nombre</label><br>
			<input id="text" type="text" name="nombre_mant"><br><br> 
			<label>Departamento</label><br>
			<input id="text" type="text" name="departamento_mant"><br><br> 
			<label>Uso</label><br>
            <input id="text" type="text" name="uso_mant"><br><br>    
			<label>Tiempo uso</label><br>
			<input id="text" type="text" name="tiempo_uso_mant"><br><br> 
			<label>Asignado</label><br>
            <input id="text" type="text" name="asignado_mant"><br><br>   
	</div>   
	</br>
    <input type="radio" name="licencias" value="mobiliarios" />Mobiliarios y Equipos
    <div id="div1"> 
			<label>Nombre</label><br>
			<input id="text" type="text" name="nombre_mob"><br><br> 
			<label>Precio</label><br>
			<input id="text" type="text" name="precio_mob"><br><br> 
			<label>Departamento</label><br>
            <input id="text" type="text" name="departamento_mob"><br><br>    
			<label>Asignado</label><br>
			<input id="text" type="text" name="asignado_mob"><br><br> 
			<label>Depreciacion</label><br>
            <input id="text" type="text" name="depreciacion_mob"><br><br>   
	</div>   
	</br>
    <input type="radio" name="licencias" value="proyectos" />Proyectos
    <div id="div1"> 
			<label>Nombre</label><br>
			<input id="text" type="text" name="nombre_proy"><br><br> 
			<label>Tipo</label><br>
			<input id="text" type="text" name="tipo_proy"><br><br> 
			<label>Encargado</label><br>
            <input id="text" type="text" name="encargado_proy"><br><br>    
			<label>Departamento</label><br>
			<input id="text" type="text" name="departamento_proy"><br><br> 
			<label>Costo</label><br>
            <input id="text" type="text" name="costo_proy"><br><br>    
			<label>Duracion</label><br>
            <input id="text" type="text" name="duracion_proy"><br><br>   
	</div>   

	</br>
    <input type="radio" name="licencias" value="puestos" />Puestos de Trabajo
    <div id="div1"> 
			<label>Nombre</label><br>
			<input id="text" type="text" name="nombre_puestos"><br><br> 
			<label>Apellido</label><br>
			<input id="text" type="text" name="apellido_puestos"><br><br> 
			<label>Edad</label><br>
            <input id="text" type="text" name="edad_puestos"><br><br>    
			<label>Puesto</label><br>
			<input id="text" type="text" name="puesto_puestos"><br><br> 
			<label>Departamento</label><br>
            <input id="text" type="text" name="departamento_puestos"><br><br>    
			<label>Salario</label><br>
            <input id="text" type="text" name="salario_puestos"><br><br>   
			<label>Nivel academico</label><br>
            <input id="text" type="text" name="nivel_puestos"><br><br>   
	</div>  

	</br>
    <input type="radio" name="licencias" value="redes" />Redes
    <div id="div1"> 
			<label>Nombre</label><br>
			<input id="text" type="text" name="nombre_redes"><br><br> 
			<label>Precio</label><br>
			<input id="text" type="text" name="precio_redes"><br><br> 
			<label>Cantidad</label><br>
            <input id="text" type="text" name="cantidad_redes"><br><br>    
			<label>Capacidad</label><br>
			<input id="text" type="text" name="capacidad_redes"><br><br> 
			<label>Responsable</label><br>
            <input id="text" type="text" name="responsable_redes"><br><br>    
			<label>Ubicacion</label><br>
            <input id="text" type="text" name="ubicacion_redes"><br><br>   
			
	</div>  
			
			

			
			
<br><br><input id="button" type="submit" value="Registrar"><br><br>
		</form>
	</div>
</body>
</html>
