<?php
    $id = $_POST["id"];      
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

    try 
    {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "DELETE FROM Persons WHERE id=$id";

        // use exec() because no results are returned
        $conn->exec($sql);
        echo "La persona con el Id = $id  se ha removido del sistema <br> <a href=\"\Index.php\"\>Volver</a>"; 

    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?> 
