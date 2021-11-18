<!DOCTYPE html>
<html>
<head>
	<title>Oxxo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de empleados</h1>
    	<input type="text" name="name" placeholder="Nombre">
    	<input type="text" name="lastname" placeholder="Apellido">
		<input type="text" name="direccion" placeholder="Direccion">
		<input type="text" name="fechadenacimiento" placeholder="mm/dd/yyyy">
    	<input type="text" name="phonenumber" placeholder="Numero Teléfono">
		<input type="submit" name="empleados">
    </form>
        <?php 
        include("empleados.php");
        ?>
</body>
</html>