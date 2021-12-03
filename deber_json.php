<?php
include "db.inc.php";

$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password );
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$que = "SELECT * FROM myguests";
$resultado = $conn->prepare($que);
$resultado->execute();

//variable tipo array
$json = array();

while ($row = $resultado->fetch(PDO::FETCH_ASSOC)){
    $json ['USUARIOS'][] = $row;
}
echo json_encode($json);
?>
<!DOCTYPE html>
<html>
    <body>
        <br><a href="index.html">Registrar nuevo usuario</a>
    </body>
</html>

