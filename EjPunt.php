<?php
	if($c=mysqli_connect("localhost","root","","cursos")){
		$sentencia="SELECT * FROM profesores";
		if($res=mysqli_query($c,$sentencia)){
			echo "<table border=1>";
			foreach ($res as $key => $value) {
				echo "<tr><td>".$value['id']."</td><td>".$value['nombre']."</td><td>".$value['apellidos']."</td><td>".$value['edad']."</td><td>".$value['materia']."</td>";
				echo '<td> <a href="Borrar.php?id='.$value['id'].'">Borrar</a></td>';
				echo '<td> <a href="Modificar.php?id='.$value['id'].'">Modificar</td>';
				//var_dump($value);
				echo "</tr>";
			}
			echo "</table>";
		}
		mysqli_close($c);
	}
?>