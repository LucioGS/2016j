<?php include "cabecera.htm"; ?>

<div class="container">
	</br>
  	<table class="table table-striped">
	<?php
		$xml = simplexml_load_file("usuarios.xml");
		$json = json_encode($xml);
		$un_array = json_decode($json,TRUE);

		echo "<tr><th>Nombre</th><th>Apellidos</th><th>Teléfono</th><th>Email</th><th>Dirección</th><th>Localidad</th><th>Acciones</th></tr>";

		foreach($un_array["usuario"] as $usuario){
			echo "<tr>";
			echo "<td>" . $usuario["nombre"] . "</td>";
			echo "<td>" . $usuario["apellidos"] . "</td>";
			echo "<td>" . $usuario["telefono"] . "</td>";
			echo "<td>" . $usuario["email"] . "</td>";
			echo "<td>" . $usuario["direccion"] . "</td>";
			echo "<td>" . $usuario["localidad"] . "</td>";
			echo "<td><a href='preferidos.php?id_usuario=" . $usuario["id"] . "'>" . "<button class='btn btn-outline-success btn-sm'>Preferidos</button>" . "</a></td>";
			echo "</tr>";
		}
	?>
	</table>	
</div>

<?php include "pie.htm"; ?>
	
	
	


	
	
