<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >=1 && strlen($_POST['last']) >= 1 && strlen($_POST['age']) >=1) {
	    $name = trim($_POST['name']);
	    $apell = trim($_POST['last']);
		$ed = trim($_POST['age']);
		$direcc = trim($_POST['direct']);
		$consulta = "INSERT INTO personal2 (Nombre, Apellido, Edad, Direccion) VALUES ('$name','$apell','$ed','$direcc')";
	   
		$resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
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