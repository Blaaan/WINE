<?php
 //Coneccion a la base de datos
 $conex = mysqli_connect("localhost","root","","winee");
 
if(!empty($_POST['register'])){
	if(!empty($_POST['name']) && !empty($_POST['correo']) && !empty($_POST['password'])){
		$nombre = $_POST['name'];
		$correo = $_POST['correo'];
		$contrasena = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$consulta = "INSERT INTO registrarse(nombre, email, contrasena) VALUES ('$nombre','$correo','$contrasena')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado){
			?>
			<h3 class="pun">Se ha resgistrado correctamente</h3>
			<a href="iniciarsesioncliente.php">Iniciar sesion</a>
			<?php
		} else{
			?>
			<h3>ups ha ocurrido un error vuelve a intenetarlo</h3>
			<?php
		}
	}else {
		?>
		<h3>Please complete todos los campos</h3>
		<?php
	}
}

?>