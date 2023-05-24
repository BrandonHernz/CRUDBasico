<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Ligas del CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- php Conexión -->
    <?php
    include_once("conexion.php");
    $objeto = new Canciones();
    ?>

    <!-- Script JS -->
    <script>
        function abrir(id) {
            window.open('modificar.php?id=' + id, '', 'top=300,left=300,width=350,height=350,scrollbar=no,resizable=no');
        }
    </script>
    
    <title>Document</title>

</head>

<body>
    <div class="container">
        <h4>Canciones</h4>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Interprete</th>
                    <th>Compositor</th>
                    <th>Año</th>
                    <th>Género</th>
                    <th>Eliminar</th>
                    <th>Modificar</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $res = $objeto->mostrar();
                while ($fila = $res->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['id'] . "</td>";
                    echo "<td>" . $fila['nombre'] . "</td>";
                    echo "<td>" . $fila['interprete'] . "</td>";
                    echo "<td>" . $fila['compositor'] . "</td>";
                    echo "<td>" . $fila['year'] . "</td>";
                    echo "<td>" . $fila['genero'] . "</td>";
                    echo "<td style='color:grey;text-align:center;'><a href='eliminar.php?id=" . $fila['id'] . "'><i class='fas fa-trash'></i></a></td>"; ?>

                    <td style='color:grey;text-align:center;'><a href="javascript:abrir('<?php echo $fila['id']; ?>')"><i class='fa fa-pencil'></i></a></td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
</body>

</html>