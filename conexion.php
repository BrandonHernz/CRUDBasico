<?php 

    include_once("configuracion.php");

    class Canciones{
        private $conn; // Variable de conexión a la BD
        function __construct() {
            $this->conn = new mysqli(HOST,USER,PASS,DBNAME); // Inicializa la llave a la BD
        }

        // Función para hacer nuestra conexion a la BD
        function conectar(){
            if ($this->conn->connect_error) {
                die ("Connection failed: ".$conn->connect_error);
                echo "No se pudo conectar a la BD con exito <br>";
            }else {
                //echo "Se ha realizado la conexión a la base de datos exitosamente";
            }
        }

        // Función para hacer nuestro registro en la BD
        function alta($a,$b,$c,$d,$e){
            $consulta = "INSERT INTO canciones(nombre, interprete, year, compositor, genero)
             VALUES ('".$a."', '".$b."', '".$c."', '".$d."','".$e."')";
            
            if($this->conn->query($consulta)) {
                echo "Datos insertados correctamente";
                }else{
                echo $this->conn->connect_error;
                }
                /* $this->conn->close(); */
        }

        // Función para mostrar nuestros registros de la BD en pantalla
        function mostrar(){
                $consulta = "SELECT * FROM canciones";
                $resultado = $this->conn->query($consulta);
                    return $resultado;
            }
        
        // Función para eliminar registros de la BD
        function eliminar($id){
                $consulta = "DELETE FROM canciones WHERE id =".$id;
                if ($this->conn->query($consulta)) {
                    echo " Datos eliminados";
                }else{
                    echo $this->connect_error;
                }
            }

        // Función para quitar repeticiones de un registro
        function quitarRepeticion($t,$i){
                $bandera=false;
                $consulta = "SELECT id FROM canciones WHERE nombre like'".$t."' and interprete like '".$i."'";
                $res = $this->conn->query($consulta);
                $num = mysqli_num_rows($res);
                if($num > 0) {
                    $bandera = false;
                }else{
                    $bandera = true;
                }
                return $bandera;
            }

        // Función para modificar un registro de la BD
        function modificar($id){
            $consulta = "SELECT * FROM canciones WHERE id =".$id;
            $res = $this->conn->query($consulta);
            return $res;
        }

        // Función para sobreescribir la información de un registro
        function sobreescribir($z,$a,$b,$c,$d,$e){
            $consulta = "UPDATE canciones SET nombre='".$a."',interprete='".$b."',year='".$c."',compositor='".$d."',genero='".$e."' WHERE id =".$z;
            
            if($this->conn->query($consulta)) {
                echo "Datos modificados correctamente";
                }else{
                echo $this->conn->connect_error;
                }
                /* $this->conn->close(); */
        }

    } // Cierre de la llave de clase
?>
