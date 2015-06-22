<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Remover persona</title>
  <link rel="stylesheet" type="text/css"  href="Estructura.css">
</head>
<body>
    <div id = "h101"><h1>Person Manager</h1></div>
    <a href="Index.php">New Person</a>
    <a href="ListarPersonas.php">View Persons</a>
    <a href="PresentacionRemover.php">Delete Person</a>
    <form id="formRemove" action="Remover.php" method ="post">
    <fieldset>
        <label for="id">Ingrese el Id de la persona que desea eliminar:</label><br>
        <input class="left" id="id" name="id">        
        <input type="submit" value="Eliminar">
    </fieldset>
    </form> 
 <div><p id ="p01">Copyright 2015 Universidad Catolica Nuestra Señora de la Asunbcion</p></div>
</body>
</html>