<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Empleado</title>
</head>
<body>
    <h1>Registrar Nuevo Empleado</h1>
    <form action="index.php?action=register" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="salario_base">Salario Base:</label>
        <input type="number" id="salario_base" name="salario_base" step="0.01" required><br><br>

        <label for="comision_pct">Comisión (%):</label>
        <input type="number" id="comision_pct" name="comision_pct" step="0.01" required><br><br>

        <button type="submit">Registrar</button>
    </form>
    <a href="index.php">Ver Lista de Empleados</a>
</body>
</html>
