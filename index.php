<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>ALTA DE JOVENES PARA FUTBOL</h1>
		<input type="iden" name="id" placeholder="idJoven(no hay necesidad de escribirlo)">
    	<input type="nomb" name="name" placeholder="Nombre completo">
    	<input type="apell" name="last" placeholder="Apellido">
		<input type="ed" name="age" placeholder="Edad">
		<input type="direcc" name="direct" placeholder="Direccion">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("personal.php");
        ?>
</body>
</html>