<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include_once("conexion.php");
        $objeto = new Canciones();
        $objeto->conectar();

        echo $elementorecuperado=$_GET['id'];
        $objeto->eliminar($elementorecuperado);
        header("Location: index.php");
    ?>

</body>
</html>