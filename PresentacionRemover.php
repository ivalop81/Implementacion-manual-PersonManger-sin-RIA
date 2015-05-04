<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Remover persona</title>
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
    <form id="formRemove" action="Remover.php" method ="post">
    <fieldset>
        <label for="id">Ingrese el Id de la persona que desea eliminar:</label><br>
        <input class="left" id="id" name="id">        
        <input type="submit" value="Eliminar">
    </fieldset>
    </form> 

</body>
</html>