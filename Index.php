<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="Paneles de la aplicacion.css">
</head>
<body>
    <h1 id="h101">Person Manager</h1>
    <a href="Index.php">Formulario de ingreso</a>
    <a href="ListarPersonas.php">Mostrar datos personales</a>
    <a href="PresentacionRemover.php">Formulario de eliminacion</a>
 
    <form id = "signupForm" action="Agregar.php" method="POST">
    <fieldset>     
         
	<p>
		<label for="firstname">Nombre:</label><br>
		<input id="firstname" name="firstname" type="text" title="Ingresar nombre completo">
	</p>   
	<p>
		<label for="lastname">Apellido:</label><br>
		<input id="lastname" name="lastname" type="text" title="Ingresar apellido completo">
	</p>           
	<p>
		<label for="date">Fecha de nacimiento:</label><br>
		<input id="date" name="date" type="text">
	</p>    
	<p>
		<label for="country">Pais de origen:</label><br>
		<input id="country" name="country" type="text">
	</p> 
	<fieldset>
		<legend>Sexo</legend>
		<label for="gender_male">
			<input type="radio" id="gender_male" value="masculino" name="gender" >Masculino
		</label>
		<label for="gender_female">
			<input type="radio" id="gender_female" value="femenino" name="gender">Femenino
		</label>
		
	</fieldset>
	<p>
		<label for="email">Email:</label><br>
		<input id="email" name="email" type="text">
	</p> 
	<p>
		<label for="user">Usuario:</label><br>
		<input id="user" name="user" type="text">
	</p> 
	<p>
		<label for="pass">Clave:</label><br>
		<input id="pass" name="pass" type="password" title="La contraseña debe contar con al menos 8 caracteres, Se recomienda ingresar caracteres alfanumericos combinados">
	</p> 
	<p>
		<input class="submit" type="submit" value="Agregar">
	</p>
    </fieldset>
    </form> 
    <p id="p01">Universidad Católica - 2015</p>        

</body>
</html>