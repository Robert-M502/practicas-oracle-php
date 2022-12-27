<?php
require_once('ConexionOracle.php');
$conn = new Conexion();
$getConn = $conn->Conectar();

$sql = "SELECT * FROM empleados";
$stmt = $getConn->prepare($sql);
$stmt->execute();


while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row["IDEMP"];
    echo $row["NOMBRES"];
    echo $row["APELLIDOS"];
    echo $row["EDAD"];
    echo "<br>";
}


########################## SELECT ##########################
$idEmp = 1;
$sql = "SELECT * FROM empleados WHERE idEmp = $idEmp";
$stmt = $getConn->prepare($sql);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
$var = $result['NOMBRES'];
echo $var;



########################## INSERT ##########################
/* $nombre = "Juan";
$apellido = "Morales";
$edad = 33;
$sql = "INSERT INTO empleados (nombres, apellidos, edad) VALUES ('$nombre', '$apellido', $edad)";
$query = $getConn->prepare($sql);
$query->execute();

if (!$query) {
    echo "Hubo un error al registrar los datos";
} else {
    echo "Datos registrados correctamente";
} */


########################## UPDATE ##########################
/* $nombre = "Lucas";
$apellido = "Mendez";
$edad = 33;
$idEmp = 21;
$sql = "UPDATE empleados SET nombres = '$nombre', apellidos = '$apellido', edad = $edad WHERE idEmp = $idEmp";
$stmt = $getConn->prepare($sql);
$stmt->execute();
if ($stmt) {
    echo "Dataos actulizados";
} else {
    echo "Hubo un error al actualizar los datos";
} */

########################## DELETE ##########################
/* $idEmp = 22;
$sql = "DELETE empleados WHERE idEmp = $idEmp";
$query = $getConn->prepare($sql);
$query->execute();
if ($query) {
    echo "Registro eliminado";
} else {
    echo "Hubo un error";
} */
