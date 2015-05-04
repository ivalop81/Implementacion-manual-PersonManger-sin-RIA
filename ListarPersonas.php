<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Lista de personas</title>
<style>
  body {background-color:#289e0c}
  a    {color:#fff}
  label    {color:#fff}  
  table    {color:#fff}
</style>
</head>
<body> 
       
    <a href="Index.php">New Person</a>ons</a>
    <a href="PresentacionRemover.php">Delete Person</a>   
 <?php
    /*
    <a href="Index.php">New Person</a>
    <a href="ListarPersonas.php">View Persons</a>
    <a href="PresentacionRemover.php">Delete Person</a>     */
    
    echo "<table style='border: solid 1px black;text-align:left;'>";
    echo "<tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Fecha de nacimiento</th><th>Pais</th><th>Sexo</th><th>Email</th><th>Usuario</th><th>Contraseña</th><th>Fecha de registro</th></tr>";

    class TableRows extends RecursiveIteratorIterator { 
        function __construct($it) { 
            parent::__construct($it, self::LEAVES_ONLY); 
        }

    <a href="ListarPersonas.php">View Pers
        function current() {
            return "<td style='width:150px;border:1px solid black;text-align:left;'>" . parent::current(). "</td>";
        }

        function beginChildren() { 
            echo "<tr>"; 
        } 

        function endChildren() { 
            echo "</tr>" . "\n";
        } 
    } 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM Persons"); 
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
            echo $v;
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
  ?>
</body>
</html>