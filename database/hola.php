<?php
include("consultar.php");
$con = conectar();

$id_comentario = $_POST['id_comentario'];
$marca = $_POST['marca'];
$fecha = $_POST['fecha'];

$sql = "Insert Into comentario values('$id_comentario','$marca','$fecha')";
$query = mysqli_query($con, $sql);

if($query) {
    header("Location: comentario.php");

}else{
}
?>