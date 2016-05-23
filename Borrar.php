<?php
	if($c=mysqli_connect("localhost","root","","cursos")){
		$sentencia="DELETE FROM profesores WHERE id=".$_GET['id'];
		//echo $sentencia;
		if($res=mysqli_query($c,$sentencia)){
			echo "Registro eliminado";
		}else{
			print "Error al borrar";
		}
		mysqli_close($c);
	}else{
		print "Error al conectar";
	}
	echo '<br><a href="EjPunt.php">Regresar</td>';
?>