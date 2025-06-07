<?php
class Empleado {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();  
    }

    public function registrar($nombre, $salario_base, $comision_pct) {
        $sql = "INSERT INTO empleados (nombre, salario_base, comision_pct) VALUES (:nombre, :salario_base, :comision_pct)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':salario_base', $salario_base);
        $stmt->bindParam(':comision_pct', $comision_pct);
        return $stmt->execute();
    }

    public function listar() {
        $sql = "SELECT *, (salario_base + (salario_base * comision_pct / 100)) AS salario_total FROM empleados";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);  
    }
}
?>
