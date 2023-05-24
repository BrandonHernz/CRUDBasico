<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".css">
</head>
<body>

    <?php 
        include_once("conexion.php");
        $objeto = new Canciones();
        $objeto->conectar();
    ?>

<hr>
    <form action="alta.php" method="post">
        <label for="">Nombre de la canción</label>
        <input type="text" name="nombre" required><br>

        <label for="">Interprete de la canción</label>
        <input type="text" name="interprete" required><br>

        <label for="">Año de la canción</label>
        <input type="text" name="year" required><br>

        <label for="">Compositor de la canción</label>
        <input type="text" name="compositor" required><br>

        <label for="">Genero de la canción</label>
        <input type="text" name="genero" required><br>

        <input type="submit" value="Guardar">
    </form>

    <?php 
    if ($_POST) {
        $a = $_POST['nombre'];
        $b = $_POST['interprete'];
        $c = $_POST['year'];
        $d = $_POST['compositor'];
        $e = $_POST['genero'];
        $var = $objeto->quitarRepeticion($a, $b);

        if ($var == true) 
            $objeto->alta($a,$b,$c,$d,$e);
        else
            echo "Ya existe una canción con el nombre:  <strong>$a</strong>  e interprete: <strong>$b</strong>";
            header("Location: index.php");
        
    }
    ?>
</body>
</html>