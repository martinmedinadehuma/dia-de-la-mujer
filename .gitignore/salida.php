<html>

	<head>
		<title>
			Salida de datos
		</title>
	</head>
	
		<?php
	  

			$nombre = $_GET["txtnombre"];
			$mensaje = $_GET["txtmensaje"];
			$sexo = $_GET["txtsexo"];
			

			$conexion = mysqli_connect("localhost","root","","mujeer");
			$consulta = mysqli_query($conexion,"insert into mujeres values (\"$nombre\",\"$sexo\",$mensaje);");

			if ($sexo=="femenino") {
			
			echo "<td><strong style='color: pink;'>".$nombre."</strong></td>";
			

				echo "<td><strong style='color: pink;'>".$mensaje."</strong></td>";
				
			}
			else{
				echo "".$nombre;
				echo "<td><strong style='color: blue;'>".$mensaje."</strong></td>";
			}

			
			
			
			 
			
			
		
		?>	
		<p>El dato fue guardado fue guardado</p>	
	</body>
</html>
