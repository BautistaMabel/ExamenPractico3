<?php

class EmpleadoController {
    private $empleadoModel;

    public function __construct() {
        $this->empleadoModel = new Empleado();  
    }

    public function registrarEmpleado() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
            $nombre = $_POST['nombre'];
            $salario_base = $_POST['salario_base'];
            $comision_pct = $_POST['comision_pct'];
            $this->empleadoModel->registrar($nombre, $salario_base, $comision_pct);
            header("Location: /");  
        }
    }
    public function listarEmpleados() {
        $empleados = $this->empleadoModel->listar();  
        include 'views/list.php';  
    }
}
?>
