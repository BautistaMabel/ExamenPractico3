<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empleados</title>
</head>
<body>
    <h1>Lista de Empleados</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Salario Base</th>
                <th>Comisión (%)</th>
                <th>Salario Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empleados as $empleado): ?>
            <tr>
                <td><?= htmlspecialchars($empleado['nombre']) ?></td>
                <td><?= htmlspecialchars($empleado['salario_base']) ?></td>
                <td><?= htmlspecialchars($empleado['comision_pct']) ?>%</td>
                <td><?= number_format($empleado['salario_total'], 2) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="register.php">Registrar Nuevo Empleado</a>
</body>
</html>
