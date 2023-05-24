<?php
include_once("conexion.php");
$objeto = new Canciones();
$objeto->conectar(); //Realiza la conexión a la BD

$elementorecuperado = $_GET['id'];
$row = $objeto->modificar($elementorecuperado);
$fila = $row->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <form action="modi.php" method="post">
        <label>ID</label>
        <input type="text" value="<?php echo $fila['id']; ?>" disabled><br>
        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
        <label>Título</label>
        <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"><br>
        <label>Interprete</label>
        <input type="text" name="interprete" value="<?php echo $fila['interprete']; ?>"><br>
        <label>Año</label>
        <input type="text" name="year" value="<?php echo $fila['year']; ?>"><br>
        <label>Compositor</label>
        <input type="text" name="compositor" value="<?php echo $fila['compositor']; ?>"><br>
        <label>Genero</label>
        <input type="text" name="genero" value="<?php echo $fila['genero']; ?>"><br>
        <input type="submit" value="Guardar">
    </form>
</body>

</html>