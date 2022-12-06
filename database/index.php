<?php
include("consultar.php");
$con = conectar();

$sql = "select * from comentario";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-1.3.2.min.js" type="text/javascript"></script>   
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Foro de discusion</title>
</head>
<body>
    <div>
    <div class="container">
        <div class="row">
            <h1 style="text-align:center">Foro de discusion</h1>
        </div>
    </div>
    <form action="hola.php" method="post" class="form-register">
        <table>
            <tr>
                <h2 colspan="2" font-size="80%">
                    Escribe tus comentarios aqui
                </h2>
                <img src="ima/dis2.jpg" alt="" width="400" height="200" align="right">
            </tr>
            <td class="centrado" colspan="2">
                <textarea cols="50" rows="5" name="marca" style="background-color: aquamarine"></textarea>
            </td>
            </td>
            <tr>
            </tr>
        </table>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-outline-info">Guardar</button>
                <button type="submit" class="btn btn-info">Guardar</button>
            </div>
        </div>
    </form>
    </div>

    <div class="col-md-3">
        <table>
            <H1>Comentarios de la gente</H1>
            <tbody align=>
            <?php
            while($row=mysqli_fetch_array($query)) {
            ?>
            <tr>
                <th><?php echo $row['id_comentario']?></th>
                <th><?php echo $row['marca']?></th>
                <th><?php echo $row['fecha']?></th>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
    </div>
    
</body>
</html>