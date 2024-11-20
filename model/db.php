<?php
class DataBase {
    public static function connect() {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "registro";
        $port = 3307;

        $conn = new mysqli($servername, $username, $password, $database, $port);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $conn->set_charset("utf8");
        return $conn;
    }
}

$conexion = DataBase::connect();
?>
