<?php
include "db.inc.php";
$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$correo = $_POST['mail'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('$nombre', '$apellido', '$correo')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>

<!DOCTYPE html>
<html>
    <body>
        <br><a href="index.html">Registrar nuevo usuario</a><br>
        <a href="deber_json.php">Tablas</a>
    </body>
</html>

