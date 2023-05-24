<?php
include_once("controlador.php");
include_once("conexion.php");
$objeto = new Canciones();
$objeto->conectar(); //Realiza la conexión a la BD

$z = $_POST['id'];
$a = $_POST['nombre'];
$b = $_POST['interprete'];
$c = $_POST['year'];
$d = $_POST['compositor'];
$e = $_POST['genero'];
$objeto->sobreescribir($z, $a, $b, $c, $d, $e);

?>
<html>

<head>
    <script>
        function cerrarse() {
            opener.location.reload();
            window.close();
        }
    </script>
    <meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
    <title>Guardado con éxito</title>
</head>

<body onload="cerrarse()">
</body>

</html>