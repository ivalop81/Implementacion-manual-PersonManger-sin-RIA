<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Home</title>
<style>
  body {background-color:#289e0c}
  a    {color:#fff}
  label    {color:#fff}   
</style>
</head>
<body>

    <a href="Index.php">New Person</a>
    <a href="ListarPersonas.php">View Persons</a>
    <a href="PresentacionRemover.php">Delete Person</a>
 
    <form id = "signupForm" action="Agregar.php" method="POST">
    <fieldset>     
    <legend>Por favor ingrese sus datos personales</legend>         
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
			<input type="radio" id="gender_male" value="masculino" name="gender" required>Masculino
		</label>
		<label for="gender_female">
			<input type="radio" id="gender_female" value="femenino" name="gender">Femenino
		</label>
		<label for="gender" class="error">Please select your gender</label> 
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
		<label for="pass">Contraseña:</label><br>
		<input id="pass" name="pass" type="password" title="La contraseña debe contar con al menos 8 caracteres, Se recomienda ingresar caracteres alfanumericos combinados">
	</p> 
	<p>
		<label for="confirm_pass">Confirmacion de contraseña:</label><br>
		<input id="confirm_pass" name="confirm_pass" type="password">
	</p> 
	<p>
		<label for="agree">Confirms that all entries are correct?</label>
		<input type="checkbox" class="checkbox" id="agree" name="agree">
	</p>
	<p>
		<input class="submit" type="submit" value="Submit">
	</p>
    </fieldset>
    </form> 
    
</body>
</html>