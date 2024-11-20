<?php
require_once 'db.php';

class usuario {
    private $id;
    private $nombre;
    private $correo;
    private $message;
    private $db;
    
    public function __construct() {
        $this->db = DataBase::connect();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $this->db->real_escape_string($id);
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $this->db->real_escape_string($correo);
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $this->db->real_escape_string($message);
    }

    public function guardarRegistro() {
        $sql = "INSERT INTO usuario VALUES (null, '{$this->getNombre()}', '{$this->getCorreo()}', '{$this->getMessage()}')";
        if (mysqli_query($this->db, $sql)) {
            echo "Nuevo usuario registrado";
        } else {
            echo "Error: " . mysqli_error($this->db);
        }
    }

    public function cerrarConexion() {
        mysqli_close($this->db);
    }
}

$obj = new usuario();
// $obj->guardarRegistro();
$obj->cerrarConexion();
?>
