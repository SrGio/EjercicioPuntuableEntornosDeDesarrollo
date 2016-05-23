<?php
	if(sizeof($_POST)>0){
		if($c=mysqli_connect("localhost","root","","cursos")){
			$sentencia1="UPDATE profesores SET nombre = '".$_POST['nombre']."', apellidos = '".$_POST['apellidos']. "', edad = ".$_POST['edad'].", materia = '".$_POST['materia']."' WHERE id = ".$_GET['id'];
			//echo $sentencia1;
			if($res=mysqli_query($c,$sentencia1)){
				echo "Registro actualizado";
			}else{
				echo "Error al modificar";
			}
			mysqli_close($c);
		}else{
			echo "Aún no se ha actualizado ningún campo";
		}
	}

	if($c=mysqli_connect("localhost","root","","cursos")){
		$sentencia="SELECT * FROM profesores WHERE id=".$_GET['id'];
		//echo "<br>".$sentencia."<br>";
		if($consulta=mysqli_query($c,$sentencia)){
			//var_dump($consulta);
			$objeto=mysqli_fetch_array($consulta);
			//var_dump($objeto);
		}else{
			echo "Error al actualizar";
		}
		mysqli_close($c);
	}
	echo '<form action="Modificar.php?id='.$objeto['id'].'" method="post">';
	echo '<fieldset><legend>Modificar registro profesor</legend>';
	echo 'Nombre: <input type="text" name="nombre" value="'.$objeto['nombre'].'"/><br>';
	echo 'Apellidos: <input type="text" name="apellidos" value="'.$objeto['apellidos'].'"/><br>';
	echo 'Edad: <input type="text" name="edad" value="'.$objeto['edad'].'"/><br>';
	echo 'Materia: <input type="text" name="materia" value="'.$objeto['materia'].'"/><br>';
	echo '<button>Guardar cambios</button></fieldset></form>';
	echo '<br><a href="EjPunt.php">Regresar</td>';

	
?>