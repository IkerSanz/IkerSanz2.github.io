<?php
$conexion = mysqli_connect("localhost", "root", "", "foro");
if (!$conexion) {
    echo 'Error al conectar a la base de datos';
}
else {
    echo 'Conectado a la base de datos';
}

$sql = "INSERT INTO `comentario`(`id_comentario`, `marca`, `fecha`) VALUES ('[value-1]','[value-2]','[value-3]')";
if (mysqli_query($conexion, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error" . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion)
?>