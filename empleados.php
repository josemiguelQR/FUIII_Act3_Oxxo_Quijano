<?php 

include("con_db.php");

if (isset($_POST['empleados'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1) {
		$name = trim($_POST['name']);
	    $lastname = trim($_POST['lastname']);
	    $direccion = trim($_POST['direccion']);
		$phonenumber = trim($_POST['phonenumber']);
	    $fechadenacimiento= trim($_POST['fechadenacimiento']);
	    $consulta = "INSERT INTO `empleados`(`Nombre`, `Apellidos`, `Direccion`, `Fecha de nacimiento`, `Numero de telefono`) VALUES ('$name','$lastname','$direccion','$fechadenacimiento','$phonenumber')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
